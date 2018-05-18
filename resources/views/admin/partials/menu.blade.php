
      <li class="nav-item mT-30 active">
        <a class='sidebar-link' href="{{ route(ADMIN . '.dash') }}" default>
          <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
          </span>
          <span class="title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class='sidebar-link' href="{{ route(ADMIN . '.users.index') }}">
          <span class="icon-holder">
            <i class="c-green-500 ti-key"></i>
          </span>
          <span class="title">Accounts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class='sidebar-link' href="{{ route(ADMIN . '.characters.index') }}">
          <span class="icon-holder">
            <i class="c-red-500 ti-user"></i>
          </span>
          <span class="title">{{ trans('character.name.plural') }}</span>
        </a>
      </li>
      <li class="nav-item">
        <a class='sidebar-link' href="{{ route(ADMIN . '.towns.index') }}">
          <span class="icon-holder">
            <i class="c-deep-orange-500 ti-location-pin"></i>
          </span>
          <span class="title">{{ trans('town.name.plural') }}</span>
        </a>
      </li>
      <li class="nav-item">
        <a class='sidebar-link' href="{{ route(ADMIN . '.groups.index') }}">
          <span class="icon-holder">
            <i class="c-deep-purple-500 ti-notepad"></i>
          </span>
          <span class="title">Groups</span>
        </a>
      </li>
      <li class="nav-item dropdown">
          <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
              <i class="c-teal-500 ti-view-list-alt"></i>
            </span>
            <span class="title">Settings</span>
            <span class="arrow">
              <i class="ti-angle-right"></i>
            </span>
          </a>
          <ul class="dropdown-menu" style="display: none;">
          <li class="nav-item dropdown">
              <a href="{{ route(ADMIN . '.website_settings') }}">
                <span>Website</span>              
              </a>
            </li>
            <li class="nav-item dropdown active">
            <a href="{{ route(ADMIN . '.server_settings') }}">
                <span>Server</span>              
              </a>
            </li>
          </ul>
      </li>