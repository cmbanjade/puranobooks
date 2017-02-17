 <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="#">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Users</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{route('admin.users.index')}}">All Users</a></li>                          
                          
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Posts</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{route('admin.posts.index')}}">All Posts</a></li>
                          <li><a class="" href="{{route('admin.posts.create')}}">Create Post</a></li>
                          
                      </ul>
                  </li>
                  <li>
                      <a class="" href="{{route('admin.categories.index')}}">
                          <i class="icon_genius"></i>
                          <span>Categories</span>
                      </a>
                  </li>                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>