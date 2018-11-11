<nav id="sidebar" class="col-sm-2  bg-white sidebar">
    <div id="brand" class="text-center bg-primary py-2 ">
      <a class="text-white" href="#">Monolith</a>
    </div>    
        <div class="sidebar-sticky">
          <ul class="nav flex-column mt-5">
          
            <li class="nav-item mt-4">
                <a class="nav-link {{ stristr(Route::current()->uri,'rooms') ? 'active' : '' }}" href='{{ url("/rooms") }}'>
                  <i class="fas fa-globe"></i>
                     Explore Rooms
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ stristr(Route::current()->uri,'activity/') ? 'active' : '' }}" href='{{ url("activity/posts/recent") }}'>
                    <i class="fas fa-chart-line"></i> Activity Feed
                  </a>
                </li>
            <li class="nav-item">
              <a class='nav-link {{ request()->is("room/" . auth()->user()->room_id) ? "active": "" }}' href='{{ url("/room/" . Auth::user()->room_id)}}'>
                <i class="fas fa-couch"></i>
                
                 My Room
              </a>
            </li>
            <li class="nav-item">
              <a class='nav-link {{ request()->is("profile/" . auth()->id()) ? "active" : "" }}' href='{{ url("/profile/" . Auth::id()) }}'>
                <i class="fas fa-user-circle"></i> My Profile                
              </a>
            </li>
            
            <div><hr></div>
            <li class="nav-item">
                <a class="nav-link {{ stristr(Route::current()->uri,'account') ? 'active' : '' }}" href='{{ url("/account") }}'>
                  <i class="fas fa-cog"></i> Account                
                </a>
              </li>
            <li class="nav-item">
                <a class="nav-link " href='{{ url("logout") }}'>
                  <i class="fas fa-sign-out-alt"></i> Logout 
                </a>
              </li>
          </ul>

          
           
        </div>
      </nav>
