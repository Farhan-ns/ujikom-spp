<nav id="sidebar">
    <div class="sidebar-header">
        {{ config('app.name') }}
    </div>

    <ul class="list-unstyled components">
        <p>
            {{ Auth::guard('admin')->user()->level }}
        </p>
        <li class="active">
            <a href="#homeSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-home"></i>
                Home
            </a>
            <ul class="collapse list-unstyled" id="homeSubMenu">
                <li>
                    <a href="#">home 1</a>
                </li>
                <li>
                    <a href="#">home 2</a>
                </li>
                <li>
                    <a href="#">home 3</a>
                </li>
            </ul>
        </li>                
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#pageSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
            <ul class="collapse list-unstyled" id="pageSubMenu">
                <li>
                    <a href="#">page 1</a>
                </li>
                <li>
                    <a href="#">page 2</a>
                </li>
                <li>
                    <a href="#">page 3</a>
                </li>
            </ul>
        </li>     
        <li>
            <a href="#">Portofolio</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>
</nav>