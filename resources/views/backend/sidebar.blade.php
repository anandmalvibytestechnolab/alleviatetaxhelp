<ul class="navbar-nav sidebar sidebar-dark accordion bg-gray-900" id="accordionSidebar" :class="{'toggled' : sidebarStatus === 'closed'}">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{!! route('BE_DASHBOARD_SHOW') !!}">
        <div class="sidebar-brand-icon bg-white d-flex">
            <img src="/img/logo.png" alt="Alleviate Tax" class="img-fluid">
            {{--<i class="fas fa-money-bill"></i>--}}
        </div>
        {{--<div class="sidebar-brand-text mx-3">Tax Benefits</div>--}}
    </a>

    <!-- Divider -->

    <!-- Nav Item - Dashboard -->
{{--<li class="nav-item active">--}}
{{--<a class="nav-link" href="index.html">--}}
{{--<i class="fas fa-fw fa-tachometer-alt"></i>--}}
{{--<span>Dashboard</span></a>--}}
{{--</li>--}}

<!-- Heading -->


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Leads
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#commercial-leads" aria-expanded="true" aria-controls="commercial-leads">
            <i class="fas fa-fw fa-cog"></i>
            <span>Leads</span>
        </a>
        <div id="commercial-leads" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                {{--<a class="collapse-item" href="buttons.html">Buttons</a>--}}
                {{--<a class="collapse-item" href="cards.html">Cards</a>--}}
                @can('index', \App\Models\Lead::class)
                    {!!link_to_route('BE_LEADS_DISPLAY_RESULTS_INDEX' , 'Leads' , ['leads'], ['class' => 'collapse-item'])!!}
                @endcan

                @can('index', \App\Models\BrokerLead::class)
                    {!!link_to_route('BE_LEADS_DISPLAY_RESULTS_INDEX' , 'Broker Leads' , ['broker-leads'], ['class' => 'collapse-item'])!!}
                @endcan()

                @can('index', \App\Models\FTD::class)
                    {!!link_to_route('BE_LEADS_DISPLAY_RESULTS_INDEX' , 'FTDs' , ['ftds'], ['class' => 'collapse-item'])!!}
                @endcan()

                @can('index', \App\Models\Broker::class)
                    {!!link_to_route('BE_LEADS_DISPLAY_RESULTS_INDEX' , 'Brokers' , ['brokers'], ['class' => 'collapse-item'])!!}
                @endcan()

                @can('index', \App\Models\Aff::class)
                    {!!link_to_route('BE_LEADS_DISPLAY_RESULTS_INDEX' , 'Affs' , ['affs'], ['class' => 'collapse-item'])!!}
                @endcan()
            </div>
        </div>
    </li>


    <hr class="sidebar-divider">

    @can('index', \App\Models\Campaign::class)
        <div class="sidebar-heading text-uppercase">
            Clickjack
        </div>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#campaigns" aria-expanded="true" aria-controls="campaigns">
                <i class="fas fa-fw fa-cog"></i>
                <span>Campaigns</span>
            </a>
            <div id="campaigns" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    {!!link_to_route('BE_CAMPAIGN_FILTERED_RESULTS_INDEX' , 'Campaigns' , [], ['class' => 'collapse-item'])!!}
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#domains" aria-expanded="true" aria-controls="domains">
                <i class="fas fa-fw fa-cog"></i>
                <span>Domains</span>
            </a>
            <div id="domains" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                    {{--<a class="collapse-item" href="buttons.html">Buttons</a>--}}
                    {{--<a class="collapse-item" href="cards.html">Cards</a>--}}
                    {!!link_to_route('BE_DOMAIN_FILTERED_RESULTS_INDEX' , 'Domains' , [], ['class' => 'collapse-item'])!!}

                    {!!link_to_route('BE_PROTECTED_DOMAIN_FILTER_INDEX' , 'Protected Domains' , [], ['class' => 'collapse-item'])!!}
                </div>
            </div>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#clickjacks" aria-expanded="true" aria-controls="clickjacks">
                <i class="fas fa-fw fa-cog"></i>
                <span>Clickjack Urls</span>
            </a>
            <div id="clickjacks" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    {!!link_to_route('BE_CLICKJACK_URL_INDEX' , 'Clickjack Urls' , [], ['class' => 'collapse-item'])!!}
                </div>
            </div>
        </li>
    @endcan

    <hr class="sidebar-divider">

    <!-- Heading -->

    @can('store', \App\Models\Permission::class)
        <div class="sidebar-heading">
            Sistema
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#permissions" aria-expanded="true" aria-controls="permissions">
                <i class="fas fa-fw fa-cog"></i>
                <span>Permissions</span>
            </a>
            <div id="permissions" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                    {{--<a class="collapse-item" href="buttons.html">Buttons</a>--}}
                    {{--<a class="collapse-item" href="cards.html">Cards</a>--}}
                    {!!link_to_route('BE_PERMISSION_INDEX' , 'Permission List', [], ['class' => 'collapse-item'])!!}
                    {!!link_to_route('BE_PERMISSION_CREATE' , 'Add Permission', [], ['class' => 'collapse-item'])!!}
                </div>
            </div>
        </li>

    @endcan

    @can('store', new \App\User())
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="users">
                <i class="fas fa-fw fa-cog"></i>
                <span>Users</span>
            </a>
            <div id="users" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                    {{--<a class="collapse-item" href="buttons.html">Buttons</a>--}}
                    {{--<a class="collapse-item" href="cards.html">Cards</a>--}}
                    {!!link_to_route('BE_USER_INDEX' , 'User List', [], ['class' => 'collapse-item'])!!}
                    {!!link_to_route('BE_USER_CREATE' , 'Add User', [], ['class' => 'collapse-item'])!!}
                </div>
            </div>
        </li>

@endcan
<!-- Nav Item - Utilities Collapse Menu -->


    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle" @click="toggleSidebar"></button>
    </div>

</ul>
