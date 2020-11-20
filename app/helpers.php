<?php

/**
 * @param $http_path string The http path to the asset, as required by the browser
 * @return string Timestamp to be appended to the asset url so browser does not cache it
 */
function get_asset_version($http_path)
{
    try {
        $file_version = '?ver=' . filemtime(public_path($http_path));
    } catch (\Exception $e) {
        $file_version = '';
        log_error_to_file('not_found_stylesheets', $e->getMessage() . '. Continuing to load page anyways.');
    }
    return $file_version;
}

/**
 * Get the url to a stylesheet
 *
 * @param $stylesheet string The stylesheet name, without file extension
 * @return string HTTP path to stylesheet, with last modified timestamp to prevent browser caching
 */
function get_stylesheet($stylesheet)
{
    $stylesheet_path = "/css/$stylesheet.css";
    return trim($stylesheet_path . get_asset_version($stylesheet_path));
}

/**
 * @url https://laravel-mix.com/docs/4.0/hot-module-replacement#hot-module-replacement
 * Get the url to a javascript file, with hot module replacement using mix helper
 *
 * @param $file string The javascript file name, without file extension
 * @return string HTTP path to the javascript file, with last modified timestamp to prevent browser caching
 */
/**
 * Get the url to a javascript file
 *
 * @param $file string The javascript file name, without file extension
 * @return string HTTP path to the javascript file, with last modified timestamp to prevent browser caching
 */
function get_javascript_file($file)
{
    $file_path = "/js/$file.js";
    return trim($file_path . get_asset_version("{$file_path}"));
}

/**
 * Log an error to the specified file
 *
 * @param $directory string The name of the directory where the file must be stored (not the fully qualified path, just the folder name)
 * @param $stream string The name of the file error will be logged on. No file extention required, it will default to .log
 * @param $message string The message to be logged. Be as descriptve as possible
 */
function log_error_to_file($stream, $message)
{
    if (count(func_get_args()) > 2) {
        $message = collect(func_get_args())->toJson();
    }

    $destination = storage_path('logs/' . $stream . '-' . date('Y-m-d', time()) . '.log');
    $date = Illuminate\Support\Carbon::now()->toDateTimeString();
    $message = "[$date]" . PHP_EOL . $message . PHP_EOL;
    file_put_contents($destination, $message, FILE_APPEND);
}

/**
 * Determine whether a destructive operation such as running migrations or seeders can be performed. Disable risky operations in production by using this function
 * @return bool
 */
function stop_risky_action_if_in_production($called_from_file, $called_from_line)
{
    if (!machine_has_local_hostname() || app()->environment() == 'production') {
        throw new \App\Exceptions\DisabledRiskyActionException("Unable to run action called from {$called_from_file}:{$called_from_line} due to hostname is not in the REGISTERED_DEVELOPER_MACHINE_HOSTNAMES environment variable or the environment is production. This prevents you from running risky operations in live server!", 403);
    }
}

/**
 * Determine if the current hostname is in the registered developer machines in order to prevent exceptions from showing in live server in dev forgets to change environment to production and to set APP_DEBUG to false. Wrap artisan commands that should run only locally with this function, such as migrations and seeders
 */
function machine_has_local_hostname()
{
    $current_hostname = gethostname();

    $registered_developer_machine_hostnames = explode('|', config('app.REGISTERED_DEVELOPER_MACHINE_HOSTNAMES'));

    if (empty($registered_developer_machine_hostnames) || !is_array($registered_developer_machine_hostnames) || !in_array($current_hostname, $registered_developer_machine_hostnames)) {
        return false;
    }

    return true;
}

/**
 * @param $message
 * @param $alert_type
 *
 * Create a message and use the type of bootsrap warning, just the representative name: warning, info, success, etc
 */
function flash_message($message, $alert_type)
{
    session()->flash('message', $message);
    session()->flash('message_class', "is-{$alert_type}");
}

/**
 * Determine whether a validation error exists in session
 * @param $field
 */
function session_has_error($field)
{
    return session()->has('errors') && !empty(session('errors')->get($field));
}

/**
 * Determine if a validation error exists in session and return string to add class in form builders so feedback shows up
 */
function css_error_class($field)
{
    return session_has_error($field) ? ' is-danger' : null;
}

function html_error($field)
{
    if (session_has_error($field)) {
        return Html::tag('p', session('errors')->first($field), ['class' => 'has-text-danger is-size-8']);
    }
}

function enable_live_reload()
{
    return config('app.env') == 'local' && config('app.debug');
}

function d($data)
{
    $backtrace = debug_backtrace();
    echo 'Dumping from ', $backtrace[0]['file'] . ':' . $backtrace[0]['line'];
    dd($data);
}

/**
 * Remove time from a mysql timestap
 *
 * @param $mysql_timestamp
 * @return string
 */
function remove_time_from_date($mysql_timestamp)
{
    return substr($mysql_timestamp, 0, 10);
}

function get_last_url_segment($turn_dashes_into_underscores = true)
{
    $segment_count = count(request()->segments());
    if ($turn_dashes_into_underscores) {
        return str_replace('-', '_', request()->segment($segment_count));
    }
    return request()->segment($segment_count);
}
