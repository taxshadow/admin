<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
        <li class="active treeview">
          <a href="{{action('AdminController@home')}}">
            <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li> 

        <li class="treeview">
          <a href="{{action('AdminController@kategori')}}">
            <i class="fa fa-files-o"></i> <span>Kategori</span>
          </a>
          
        </li>
        <li>
          <a href="{{action('AdminController@artikel')}}">
            <i class="fa fa-th"></i> <span>Artikel</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ action('AdminController@user')}}">
            <i class="fa fa-pie-chart"></i>
            <span>User</span>
          </a>
        </li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>