<nav class="side-nav">
        <a href="#" class="intro-x flex items-center pl-5 pt-4">
          <img
            alt="Nassa Funaab"
            class="w-6"
            src="{{ asset('dist/images/logo.jpg') }}"
          />
          <span class="hidden xl:block text-white text-lg ml-3">
            Sunagad<span class="font-medium">Admin</span>
          </span>
        </a>
        <div class="side-nav__devider my-6"></div>
        <ul>
          
          @role('student')
          {{-- <li>
            <a href="{{ route('user.dashboard') }}" class="side-menu side-menu--@yield('active-user.dashboard')">
              <div class="side-menu__icon"><i data-feather="home"></i></div>
              <div class="side-menu__title">Dashboard</div>
            </a>
          </li> --}}

          {{-- <li>
            <a href="{{ route('user.profile') }}" class="side-menu side-menu--@yield('active-user.profile')">
              <div class="side-menu__icon"><i data-feather="user"></i></div>
              <div class="side-menu__title">Profile</div>
            </a>
          </li> --}}

          {{-- <li>
            <a href="{{ route('user.vote') }}" class="side-menu side-menu--@yield('active-user.vote')">
              <div class="side-menu__icon"><i data-feather="box"></i></div>
              <div class="side-menu__title">Vote</div>
            </a>
          </li> --}}
          @endrole


          @role('admin')
          <li>
            <a href="{{ route('admin.dashboard') }}" class="side-menu side-menu--@yield('active-admin.dashboard')">
              <div class="side-menu__icon"><i data-feather="home"></i></div>
              <div class="side-menu__title">Dashboard</div>
            </a>
          </li>

          <li>
            <a href="{{ route('admin.category.all') }}" class="side-menu side-menu--@yield('active-admin.category')">
              <div class="side-menu__icon">
                <i data-feather="activity"></i>
              </div>
              <div class="side-menu__title">Categories</div>
            </a>
          </li>

          <li>
            <a href="{{ route('admin.product.all') }}" class="side-menu side-menu--@yield('active-admin.product')">
              <div class="side-menu__icon">
                <i data-feather="activity"></i>
              </div>
              <div class="side-menu__title">Products</div>
            </a>
          </li>

          <li>
            <a href="#" class="side-menu side-menu--@yield('active-admin.users')">
              <div class="side-menu__icon"><i data-feather="users"></i></div>
              <div class="side-menu__title">Customers</div>
            </a>
          </li>
          @endrole
          
          <li class="side-nav__devider my-6"></li>
        </ul>
      </nav>