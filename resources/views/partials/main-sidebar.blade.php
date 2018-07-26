<nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{ stristr(Route::current()->uri,'activity/') ? 'active' : '' }}" href='{{ url("activity/posts/recent") }}'>
                <i class="fas fa-chart-line"></i> Activity Feed
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ stristr(Route::current()->uri,'rooms') ? 'active' : '' }}" href='{{ url("/rooms") }}'>
                  <i class="fas fa-globe"></i>
                     Explore Rooms
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link {{ stristr(Route::current()->uri,'room/{room}') ? 'active' : '' }}" href='{{ url("/room/" . Auth::user()->room_id)}}'>
                <i class="fas fa-couch"></i>
                
                 My Room
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ stristr(Route::current()->uri,'profile/{user}') ? 'active' : '' }}" href='{{ url("/profile/" . Auth::id()) }}'>
                <i class="fas fa-user-circle"></i> My Profile                
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ stristr(Route::current()->uri,'account') ? 'active' : '' }}" href='{{ url("/account") }}'>
                  <i class="fas fa-cog"></i> Account                
                </a>
              </li>
            <div><hr></div>
            <li class="nav-item">
                <a class="nav-link " href='{{ url("logout") }}'>
                  <i class="fas fa-sign-out-alt"></i> Logout 
                </a>
              </li>
          </ul>

          
           
        </div>
      </nav>
