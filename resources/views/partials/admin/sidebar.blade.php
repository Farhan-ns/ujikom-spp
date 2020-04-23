<nav id="sidebar">
    <div class="sidebar-header">
        {{ config('app.name') }}
    </div>

    <ul class="list-unstyled components">
        <p>
            {{ Auth::guard('admin')->user()->level }}
        </p>
        <li class="active">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fas fa-home"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="#petugasSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-users-cog"></i>
                Petugas
            </a>
            <ul class="collapse list-unstyled" id="petugasSubMenu">
                <li>
                    <a href="{{ route('admin.petugas.index') }}">
                        <i class="fas fa-eye"></i>
                        Show
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.petugas.create') }}">
                        <i class="fas fa-plus"></i>
                        Create
                    </a>
                </li>
            </ul>
        </li>     
        <li>
            <a href="#siswaSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-user-graduate"></i>
                Siswa
            </a>
            <ul class="collapse list-unstyled" id="siswaSubMenu">
                <li>
                    <a href="{{ route('admin.siswa.index') }}">
                        <i class="fas fa-eye"></i>
                        Show
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.siswa.create') }}">
                        <i class="fas fa-plus"></i>
                        Create
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#kelasSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-chalkboard"></i>
                Kelas
            </a>
            <ul class="collapse list-unstyled" id="kelasSubMenu">
                <li>
                    <a href="{{ route('admin.kelas.index') }}">
                        <i class="fas fa-eye"></i>
                        Show
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.kelas.create') }}">
                        <i class="fas fa-plus"></i>
                        Create
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#sppSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-money-bill-wave-alt"></i>
                SPP
            </a>
            <ul class="collapse list-unstyled" id="sppSubMenu">
                <li>
                    <a href="{{ route('admin.spp.index') }}">
                        <i class="fas fa-eye"></i>
                        Show
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.spp.create') }}">
                        <i class="fas fa-plus"></i>
                        Create
                    </a>
                </li>
            </ul>
        </li>       
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#">Portofolio</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>
</nav>