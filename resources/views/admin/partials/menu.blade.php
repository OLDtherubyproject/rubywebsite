
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
        <a class='sidebar-link' href="{{ route(ADMIN . '.users.index') }}">
          <span class="icon-holder">
            <i class="c-red-500 ti-user"></i>
          </span>
          <span class="title">Characters</span>
        </a>
      </li>
      <li class="nav-item">
        <a class='sidebar-link' href="{{ route(ADMIN . '.towns.index') }}">
          <span class="icon-holder">
            <i class="c-yellow-500 ti-world"></i>
          </span>
          <span class="title">Towns</span>
        </a>
      </li>