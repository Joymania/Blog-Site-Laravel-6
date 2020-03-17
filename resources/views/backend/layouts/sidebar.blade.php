<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('User/img/Joy.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Joymania</a>
        </div>
      </div>


      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item has-treeview menu-open">

            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Article
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fa fa-edit"></i>
                  <p>Article list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="fa fa-edit"></i>
                  <p>Pending Posst</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link ">
                  <i class="fa fa-edit"></i>
                  <p>Categoty list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="fa fa-edit"></i>
                  <p>Tag list</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item has-treeview menu-open">

            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-user"></i>
              <p>User</p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fa fa-user"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="fa fa-lock"></i>
                  <p>Change Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="fa fa-user"></i>
                  <p>Add user</p>
                </a>
              </li>

            </ul>
          </li>

        </ul>
      </nav>
    </div>
  </aside>
