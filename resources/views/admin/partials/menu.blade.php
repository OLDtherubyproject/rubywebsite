
      <li class="nav-item mT-30 active">
        <a class='sidebar-link' href="{{ route(ADMIN . '.dash') }}" default>
          <span class="icon-holder">
            <i class="c-blue-500 icon-home"></i>
          </span>
          <span class="title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class='sidebar-link' href="{{ route(ADMIN . '.accounts.index') }}">
          <span class="icon-holder">
            <i class="c-green-500 icon-key"></i>
          </span>
          <span class="title">{{ trans('account.name.plural') }}</span>
        </a>
      </li>
      <li class="nav-item">
        <a class='sidebar-link' href="{{ route(ADMIN . '.characters.index') }}">
          <span class="icon-holder">
            <i class="c-red-500 icon-user"></i>
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
            <i class="c-deep-purple-500 icon-people"></i>
          </span>
          <span class="title">{{ trans('group.name.plural') }}</span>
        </a>
      </li>
      <li class="nav-item">
        <a class='sidebar-link' href="{{ route(ADMIN . '.guilds.index') }}">
          <span class="icon-holder">
            <i class="c-green-500 icon-organization"></i>
          </span>
          <span class="title">{{ trans('guild.name.plural') }}</span>
        </a>
      </li>
      <li class="nav-item">
        <a class='sidebar-link' href="">
          <span class="icon-holder">
            <i class="c-red-500 icon-ban"></i>
          </span>
          <span class="title">{{ trans('ban.name.plural') }}</span>
        </a>
      </li>
      <li class="nav-item dropdown">
          <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
              <i class="c-teal-500 icon-settings"></i>
            </span>
            <span class="title">{{ trans('setting.name.plural') }}</span>
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