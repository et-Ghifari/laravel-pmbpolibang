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
                <a href="{{ route ('home') }}">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li class="header"></li>
            @if (auth()->user()->role=='admin' || auth()->user()->role=='superuser')
                <li class="{{ Request::is('user') ? 'active' : ''}} || {{ Request::is('add-user') ? 'active' : ''}}">
                    <a href="{{ route ('user.index') }}">
                        <i class="material-icons">person</i>
                        <span>Akun Pengguna</span>
                    </a>
                </li>
                <li class="{{ Request::is('registrant') ? 'active' : '' }}">
                    <a href="{{ route ('registrant') }}">
                        <i class="material-icons">people</i>
                        <span>Data Pendaftar</span>
                    </a>
                </li>
                <li class="{{ Request::is('previous') ? 'active' : '' }}">
                    <a href="{{ route ('previous') }}">
                        <i class="material-icons">folder_shared</i>
                        <span>Pendaftar Terdahulu</span>
                    </a>
                </li>
                <li class="{{ Request::is('confirmation') ? 'active' : '' }}">
                    <a href="{{ route ('confirmation') }}">
                        <i class="material-icons">confirmation_number</i>
                        <span>Konfirmasi Pembayaran</span>
                    </a>
                </li>
            @endif
            @if (auth()->user()->role=='user')
                <li class="{{ Request::is('registration') ? 'active' : '' }} || {{ Request::is('independent') ? 'active' : ''}} || {{ Request::is('scholarship') ? 'active' : ''}} || {{ Request::is('edit-registration') ? 'active' : ''}} || {{ Request::is('ass-registration') ? 'active' : ''}}">
                    <a href="{{ route ('registration') }}">
                        <i class="material-icons">assignment</i>
                        <span>Formulir Pendaftaran</span>
                    </a>
                </li>
                <li class="{{ Request::is('payment') ? 'active' : '' }}">
                    <a href="{{ route ('payment') }}">
                        <i class="material-icons">monetization_on</i>
                        <span>Bukti Pembayaran</span>
                    </a>
                </li>
            @endif
            <li class="header"></li>
            @if (auth()->user()->role=='admin' || auth()->user()->role=='superuser')
                <li class="">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_compact</i>
                        <span>Manajemen Tampilan</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ Request::is('sliding') ? 'active' : '' }}">
                            <a href="{{ route ('sliding') }}">Sliding Image</a>
                        </li>
                        <li class="{{ Request::is('visi') ? 'active' : '' }}">
                            <a href="{{ route ('visi') }}">Visi Misi</a>
                        </li>
                        <li class="{{ Request::is('panduan') ? 'active' : '' }}">
                            <a href="{{ route ('panduan') }}">Panduan</a>
                        </li>
                        <li class="{{ Request::is('beasiswa') ? 'active' : '' }}">
                            <a href="{{ route ('beasiswa') }}">Beasiswa</a>
                        </li>
                        <li class="{{ Request::is('prodi') ? 'active' : '' }}">
                            <a href="{{ route ('prodi') }}">Prodi</a>
                        </li>
                        <li class="{{ Request::is('fasilitas') ? 'active' : '' }}">
                            <a href="{{ route ('fasilitas') }}">Fasilitas</a>
                        </li>
                        <li class="{{ Request::is('testimoni') ? 'active' : '' }}">
                            <a href="{{ route ('testimoni') }}">Testimoni</a>
                        </li>
                    </ul>
                </li>
            @endif
            @if (auth()->user()->role=='user')
                <li class="{{ Request::is('assignment') ? 'active' : '' }}">
                    <a href="{{ url('assignment') }}">
                        <i class="material-icons">check_circle</i>
                        <span>Status Pendaftaran</span>
                    </a>
                </li>
            @endif
            <li class="header"></li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2023 <a href="{{ url ('') }}">Admin Laravel - Flutter</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.0
        </div>
    </div>
    <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
