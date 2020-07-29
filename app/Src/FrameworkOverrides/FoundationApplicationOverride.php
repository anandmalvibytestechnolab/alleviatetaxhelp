<?php
namespace App\Src\FrameworkOverrides;

use Illuminate\Foundation\Application;

class FoundationApplicationOverride extends Application
{
    /**
     * @var string Override illuminate's dotenv file to to have .php extension to prevent server from parsing any text in file. .env.php files get parsed by browsers. .php, do not, unless they have echo statements
     */
    protected $environmentFile = '.env.php';

    public function __construct($basePath = null)
    {
        parent::__construct($basePath);
    }
}
