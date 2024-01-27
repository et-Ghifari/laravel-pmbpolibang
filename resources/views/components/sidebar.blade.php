<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('images/profile.jpg') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ auth()->user()->name }}</div>
            <div class="email">{{ auth()->user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="{{ url ('profile') }}"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a onclick="event.preventDefault(); document.getElementById('logout').submit()"><i
                                class="material-icons">input</i>Log Out</a>
                        <form id="logout" method="POST" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a href="{{ url('home') }}">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li class="header"></li>
            <li class="{{ Request::is('user') ? 'active' : ''}} || {{ Request::is('add-user') ? 'active' : ''}}">
                <a href="{{ url('user') }}">
                    <i class="material-icons">person</i>
                    <span>Akun Pengguna</span>
                </a>
            </li>
            <li class="{{ Request::is('registrant') ? 'active' : '' }}">
                <a href="{{ url('registrant') }}">
                    <i class="material-icons">people</i>
                    <span>Data Pendaftar</span>
                </a>
            </li>
            <li class="{{ Request::is('previous') ? 'active' : '' }}">
                <a href="{{ url('previous') }}">
                    <i class="material-icons">folder_shared</i>
                    <span>Pendaftar Terdahulu</span>
                </a>
            </li>
            <li class="{{ Request::is('confirmation') ? 'active' : '' }}">
                <a href="{{ url('confirmation') }}">
                    <i class="material-icons">confirmation_number</i>
                    <span>Konfirmasi Pembayaran</span>
                </a>
            </li>
            <li class="{{ Request::is('registration') ? 'active' : '' }}">
                <a href="{{ url('registration') }}">
                    <i class="material-icons">assignment</i>
                    <span>Formulir Pendaftaran</span>
                </a>
            </li>
            <li class="{{ Request::is('payment') ? 'active' : '' }}">
                <a href="{{ url('payment') }}">
                    <i class="material-icons">monetization_on</i>
                    <span>Bukti Pembayaran</span>
                </a>
            </li>
            <li class="header"></li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">view_compact</i>
                    <span>Manajemen Tampilan</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="">Sliding Image</a>
                    </li>
                    <li>
                        <a href="">Visi Misi</a>
                    </li>
                    <li>
                        <a href="">Panduan</a>
                    </li>
                    <li>
                        <a href="">Beasiswa</a>
                    </li>
                    <li>
                        <a href="">Prodi</a>
                    </li>
                    <li>
                        <a href="">Fasilitas</a>
                    </li>
                    <li>
                        <a href="">Testimoni</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('assignment') ? 'active' : '' }}">
                <a href="{{ url('assignment') }}">
                    <i class="material-icons">check_circle</i>
                    <span>Status Pendaftaran</span>
                </a>
            </li>
            <li class="header"></li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2023 <a href="{{ url('') }}">Admin Laravel - Flutter</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.0
        </div>
    </div>
    <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
