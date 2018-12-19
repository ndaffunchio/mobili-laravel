<!DOCTYPE html>
<html lang="en">
    @include('admin.partials.head')
<body>
    @include('admin.partials.header')
    <div id="wrapper">
        @include('admin.partials.sidebar')
        <div id="content-wrapper">
                <div class="container-fluid">
                    @yield('breadcrumb')
                    @yield('content')
                </div>
            @include('admin.partials.footer')
        </div>
    </div>
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('admin.partials.scripts')
</body>
</html>