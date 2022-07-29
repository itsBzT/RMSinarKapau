<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo"><img src="{{ URL::to('/img/logoSK.png') }}" alt="" width=40px> RM Sinar Kapau</a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="" type="button" class="btn btn-outline-success" onclick="$('#logout-form').submit()">Keluar</a>  
                </li>
            </ul>
        </div>
    </nav>
</header>

<form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
    @csrf
</form>