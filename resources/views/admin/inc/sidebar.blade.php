  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('admin_style/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>
            </div>
          </div>
          <!-- search form -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{route('admin.index')}}"><i class="fa fa-book"></i> <span>Accueil</span></a></li>
          <li><a href="{{route('admin.offres')}}"><i class="fa fa-book"></i> <span>Offres </span></a></li>
          <li><a href="{{route('admin.reservations')}}"><i class="fa fa-book"></i> <span>Réservations</span></a></li>
          <li><a href="{{route('admin.hotels')}}"><i class="fa fa-book"></i> <span>Hotels </span></a></li>
          <li><a href="{{route('admin.users')}}"><i class="fa fa-book"></i> <span>Clients </span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
    