<!DOCTYPE html>
<html lang="en" dir="ltr">
@yield('css')
@include('admin.includes.head')
<body class="layout-fixed">
{{--
    @include('includes.partials.read-only')
    @include('includes.partials.logged-in-as')
    @include('includes.partials.announcements') --}}


    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
        <div class="mdk-drawer-layout__content">

            <!-- Header Layout -->
            <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>

                <!-- Header -->

                @include('admin.includes.partials.header')

                <!-- // END Header -->

                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">





                    <div class="page__heading">
                        <div class="container-fluid page__container">
                            <h1 class="mb-0">Dashboard</h1>
                        </div>
                    </div>
                    <div class="bg-white border-bottom mb-3">
                        <div class="container-fluid" >
                            <a href="#activity_all">Overview</a>
                        </div>
                    </div>
                    @section('breadcrumb-links')
                        @include('backend.auth.user.includes.breadcrumb-links')
                    @endsection
                    <div class="container-fluid page__container">
                        <div class="tab-content">
                            @yield('content')
                        </div>
                    </div>


                </div>
                <!-- // END header-layout__content -->

            </div>
            <!-- // END header-layout -->

        </div>
        <!-- // END drawer-layout__content -->

        {{-- beginning of sidebar --}}
        @include('admin.includes.partials.sidebar')
        {{-- end of sidebar --}}
    </div>
    <!-- // END drawer-layout -->


    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-index.html',
      'fluid': 'fluid-index.html',
      'mini': 'mini-index.html'
    }"></app-settings>
    </div>

    @include('admin.includes.scripts')
@yield('js')
</body>

</html>
