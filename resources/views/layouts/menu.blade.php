<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
    <a href="{{ route('diplomes.index') }}"
       class="nav-link {{ Request::is('diplomes*') ? 'active' : '' }}">
        <p>Diplomes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('postes.index') }}"
       class="nav-link {{ Request::is('postes*') ? 'active' : '' }}">
        <p>Postes</p>
    </a>
</li>
            </ul>
          </li>




