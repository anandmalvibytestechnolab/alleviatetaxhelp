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
                    {!!link_to_route('BE_LEADS_INDEX' , 'Leads' , ['leads'], ['class' => 'collapse-item'])!!}
                    {!!link_to_route('BE_LEADS_INDEX' , 'CCPA' , ['ccpa'], ['class' => 'collapse-item'])!!}

                    {{--{!!link_to_route('BE_LEADS_DISPLAY_RESULTS_INDEX' , 'Broker Leads' , ['broker-leads'], ['class' => 'collapse-item'])!!}--}}

                    {{--{!!link_to_route('BE_LEADS_DISPLAY_RESULTS_INDEX' , 'FTDs' , ['ftds'], ['class' => 'collapse-item'])!!}--}}

                    {{--{!!link_to_route('BE_LEADS_DISPLAY_RESULTS_INDEX' , 'Brokers' , ['brokers'], ['class' => 'collapse-item'])!!}--}}

                    {{--{!!link_to_route('BE_LEADS_DISPLAY_RESULTS_INDEX' , 'Affs' , ['affs'], ['class' => 'collapse-item'])!!}--}}
            </div>
        </div>
    </li>



<!-- Nav Item - Utilities Collapse Menu -->



    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle" @click="toggleSidebar"></button>
    </div>

</ul>
