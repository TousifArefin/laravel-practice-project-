<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="/index.html" title="Sleek Dashboard">
          <svg
            class="brand-icon"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid"
            width="30"
            height="33"
            viewBox="0 0 30 33">
            <g fill="none" fill-rule="evenodd">
              <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
              <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
            </g>
          </svg>

          <span class="brand-name text-truncate">My Work</span>
        </a>
      </div>

      <!-- begin sidebar scrollbar -->
      <div class="" data-simplebar style="height: 100%;">
        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
          <li class="has-sub active expand">
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
              aria-expanded="false" aria-controls="dashboard">
              <i class="mdi mdi-view-dashboard-outline"></i>
              <span class="nav-text">Dashboard</span> <b class="caret"></b>
            </a>

            <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
              <div class="sub-menu">
                <li class="{{ Request::is('slider/all') ? 'active' : ''}}">
                  <a class="sidenav-item-link" href="{{ route('all.slider')}}">
                    <span class="nav-text">Slider</span>
                  </a>
                </li>
                <li class="{{ Request::is('category/all') ? 'active' : ''}}">
                    <a class="sidenav-item-link" href="{{ route('all.category')}}">
                      <span class="nav-text">Category</span>
                    </a>
                  </li>

                <li class="{{ Request::is('brand/all') ? 'active' : ''}}">
                  <a class="sidenav-item-link" href="{{ route('all.brand')}}">
                    <span class="nav-text">Brand</span>
                  </a>
                </li>
                <li class="{{ Request::is('protfolio/all') ? 'active' : ''}}">
                    <a class="sidenav-item-link" href="{{ route('all.protfolio')}}">
                      <span class="nav-text">Protfolio</span>
                    </a>
                </li>
                <li class="{{ Request::is('multi/image') ? 'active' : ''}}">
                    <a class="sidenav-item-link" href="{{ route('multi.image')}}">
                      <span class="nav-text">Multi Picture</span>
                    </a>
                </li>
              </div>
            </ul>
          </li>
          <!-- <li class="section-title">
            Documentation
          </li> -->
        </ul>
      </div>

      <div class="sidebar-footer">
        <hr class="separator mb-0" />
        <div class="sidebar-footer-content">
          <h6 class="text-uppercase">
            Cpu Uses <span class="float-right">40%</span>
          </h6>

          <div class="progress progress-xs">
            <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
          </div>

          <h6 class="text-uppercase">
            Memory Uses <span class="float-right">65%</span>
          </h6>

          <div class="progress progress-xs">
            <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar"></div>
          </div>
        </div>
      </div>
    </div>
  </aside>
