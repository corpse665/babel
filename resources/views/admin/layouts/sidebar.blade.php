<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">BERANDA</li>
        <li><a href="{{ url('/') }}"><i class="fa fa-fw fa-home"></i> Home</span></a></li>

        @if(\Auth::user()->name == 'admin')
        <li class="header">Management</li>
        <li><a href="{{ url('admin/kategori') }}"><i class="fa fa-fw fa-tag"></i></i> Kategori</span></a></li>
        @endif
        <li><a href="{{ url('admin/kampung') }}"><i class="fa fa-fw fa-pencil"></i></i> Kampung</span></a></li>

        <li><a href="{{ url('admin/komentar') }}"><i class="fa fa-fw fa-comments"></i></i> Komentar</span></a></li>

        @if(\Auth::user()->name == 'admin')
        <li><a href="{{ url('admin/user') }}"><i class="fa fa-fw fa-user"></i></i> User</span></a></li>
        @endif

         <li class="header">OTHER</li>

        <li><a href="{{ url('/keluar') }}"><i class="fa fa-fw fa-sign-out"></i></i> Logout</span></a></li>


      </ul>
    </section>