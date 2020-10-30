<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials.layout.head')

<body>
    <!-- ============================================================== -->
    <!--                        Topbar Start                            -->
    <!-- ============================================================== -->
    @include('layouts.partials.layout.top-bar')
    <!-- ============================================================== -->
    <!--                        Topbar End                              -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!--                        Right Side Start                        -->
    <!-- ============================================================== -->
    @include('layouts.partials.layout.right-sidebar-toggle')
    <!-- ============================================================== -->
    <!--                        Right Side End                          -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!--                        Navigation Start                        -->
    <!-- ============================================================== -->
    @include('layouts.partials.layout.main-sidebar-nav')
    <!-- ============================================================== -->
    <!--                        Navigation End                          -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!--                    breadcrumb Start                            -->
    <!-- ============================================================== -->
    @include('layouts.partials.layout.breadcrumb')
    <!-- ============================================================== -->
    <!--                        breadcrumb end                          -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!--                        Content Start                           -->
    <!-- ============================================================== -->
    <section class="main-content">
        @yield('content')
        @include('layouts.partials.layout.footer')
    </section>
    <!-- ============================================================== -->
    <!--                        Content end                         -->
    <!-- ============================================================== -->
    @include('layouts.partials.layout.scripts')
</body>

</html>