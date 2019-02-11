<section>
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{ asset('images/user.png') }}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                <div class="email">{{ Auth::user()->email }}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="{{ route('logout') }}" class="dropdown-item"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="material-icons">input</i><span>Sign Out</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="{{ route('homeadmin') }}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.class') }}">
                        <i class="material-icons">desktop_windows</i>
                        <span>Class</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.info') }}">
                        <i class="material-icons">info</i>
                        <span>Information</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.book') }}">
                        <i class="material-icons">book</i>
                        <span>Book</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.member') }}">
                        <i class="material-icons">assignment_ind</i>
                        <span>Member</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.gallery') }}">
                        <i class="material-icons">add_a_photo</i>
                        <span>Gallery</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.testimony') }}">
                        <i class="material-icons">face</i>
                        <span>Testimony</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}">
                        <i class="material-icons">contacts</i>
                        <span>Admin</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2019 <a href="javascript:void(0);">Ziporatwo</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1
            </div>
        </div>
    </aside>
</section>