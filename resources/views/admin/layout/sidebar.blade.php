<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name" align="center">Rental</p>
        </div>
    </div>

    @if (session('forbidden'))
    <div class="alert alert-danger">
        {{ session('forbidden') }}
    </div>
    @endif

    <ul class="app-menu">
        <!-- Menu Dashboard -->
        <li class="{{ Request::routeIs('home') ? 'active' : '' }}">
            <a class="app-menu__item" href="{{ route('home') }}">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>

        <!-- Menu Data Barang -->
        <li class="{{ Request::routeIs('barang.*') ? 'active' : '' }}">
            <a class="app-menu__item" href="{{ route('barang.index') }}">
                <i class="app-menu__icon fa fa-female"></i>
                <span class="app-menu__label">Data Barang</span>
            </a>
        </li>

        <!-- Menu Data Type -->
        <li class="{{ Request::routeIs('type.*') ? 'active' : '' }}">
            <a class="app-menu__item" href="{{ route('type.index') }}">
                <i class="app-menu__icon fa fa-edit"></i>
                <span class="app-menu__label">Data Type</span>
            </a>
        </li>
    </ul>
</aside>


<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script>
    $(document).ready(function () {
        // Highlight active menu item based on current URL
        var url = window.location;
        $('ul.app-menu a').filter(function () {
            return this.href == url;
        }).addClass('active');
    });
</script>
<!-- Google analytics script-->
<script type="text/javascript">
    if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
</script>

