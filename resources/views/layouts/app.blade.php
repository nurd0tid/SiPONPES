<!DOCTYPE html>
<html lang="en">

<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    @stack('css-summernote')
    @stack('css-toast')
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    @stack('css-datatables')
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/img/favicon.ico') }}" />
    @stack('button-datatables')
</head>

<body>
    <div class=" loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
          <div class="navbar-bg"></div>
          <nav class="navbar navbar-expand-lg main-navbar sticky">
              <div class="form-inline mr-auto">
                  <ul class="navbar-nav mr-3">
                      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                collapse-btn"> <i
                                  data-feather="align-justify"></i></a></li>
                      <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                              <i data-feather="maximize"></i>
                          </a></li>
                      <li>
                          <form class="form-inline mr-auto">
                              <div class="search-element">
                                  <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                      data-width="200">
                                  <button class="btn" type="submit">
                                      <i class="fas fa-search"></i>
                                  </button>
                              </div>
                          </form>
                      </li>
                  </ul>
              </div>
              <ul class="navbar-nav navbar-right">
                  <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                          class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
                          <span class="badge headerBadge1">
                              6 </span> </a>
                      <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                          <div class="dropdown-header">
                              Messages
                              <div class="float-right">
                                  <a href="#">Mark All As Read</a>
                              </div>
                          </div>
                          <div class="dropdown-list-content dropdown-list-message">
                              <a href="#" class="dropdown-item"> <span
                                      class="dropdown-item-avatar
                    text-white"> <img alt="image"
                                          src="{{ asset('assets/img/users/user-1.png') }}" class="rounded-circle">
                                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                                          Deo</span>
                                      <span class="time messege-text">Please check your mail !!</span>
                                      <span class="time">2 Min Ago</span>
                                  </span>
                              </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                      <img alt="image" src="{{ asset('assets/img/users/user-2.png') }}" class="rounded-circle">
                                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                          Smith</span> <span class="time messege-text">Request for leave
                                          application</span>
                                      <span class="time">5 Min Ago</span>
                                  </span>
                              </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                      <img alt="image" src="{{ asset('assets/img/users/user-5.png') }}" class="rounded-circle">
                                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                                          Ryan</span> <span class="time messege-text">Your payment invoice is
                                          generated.</span> <span class="time">12 Min Ago</span>
                                  </span>
                              </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                      <img alt="image" src="{{ asset('assets/img/users/user-4.png') }}" class="rounded-circle">
                                  </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                                          Smith</span> <span class="time messege-text">hii John, I have upload
                                          doc
                                          related to task.</span> <span class="time">30
                                          Min Ago</span>
                                  </span>
                              </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                      <img alt="image" src="{{ asset('assets/img/users/user-3.png') }}" class="rounded-circle">
                                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                                          Joshi</span> <span class="time messege-text">Please do as specify.
                                          Let me
                                          know if you have any query.</span> <span class="time">1
                                          Days Ago</span>
                                  </span>
                              </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                      <img alt="image" src="{{ asset('assets/img/users/user-2.png') }}" class="rounded-circle">
                                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                          Smith</span> <span class="time messege-text">Client Requirements</span>
                                      <span class="time">2 Days Ago</span>
                                  </span>
                              </a>
                          </div>
                          <div class="dropdown-footer text-center">
                              <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                          </div>
                      </div>
                  </li>
                  <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                          class="nav-link notification-toggle nav-link-lg"><i data-feather="bell"
                              class="bell"></i>
                      </a>
                      <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                          <div class="dropdown-header">
                              Notifications
                              <div class="float-right">
                                  <a href="#">Mark All As Read</a>
                              </div>
                          </div>
                          <div class="dropdown-list-content dropdown-list-icons">
                              <a href="#" class="dropdown-item dropdown-item-unread"> <span
                                      class="dropdown-item-icon bg-primary text-white"> <i
                                          class="fas
                      fa-code"></i>
                                  </span> <span class="dropdown-item-desc"> Template update is
                                      available now! <span class="time">2 Min
                                          Ago</span>
                                  </span>
                              </a> <a href="#" class="dropdown-item"> <span
                                      class="dropdown-item-icon bg-info text-white"> <i
                                          class="far
                      fa-user"></i>
                                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                                          Sugiharto</b> are now friends <span class="time">10 Hours
                                          Ago</span>
                                  </span>
                              </a> <a href="#" class="dropdown-item"> <span
                                      class="dropdown-item-icon bg-success text-white"> <i
                                          class="fas
                      fa-check"></i>
                                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                                      moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                                          Hours
                                          Ago</span>
                                  </span>
                              </a> <a href="#" class="dropdown-item"> <span
                                      class="dropdown-item-icon bg-danger text-white"> <i
                                          class="fas fa-exclamation-triangle"></i>
                                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                                      clean it! <span class="time">17 Hours Ago</span>
                                  </span>
                              </a> <a href="#" class="dropdown-item"> <span
                                      class="dropdown-item-icon bg-info text-white"> <i
                                          class="fas
                      fa-bell"></i>
                                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                                      template! <span class="time">Yesterday</span>
                                  </span>
                              </a>
                          </div>
                          <div class="dropdown-footer text-center">
                              <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                          </div>
                      </div>
                  </li>
                  <li class="dropdown"><a href="#" data-toggle="dropdown"
                          class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                              src="{{ asset('assets/img/user.png') }}" class="user-img-radious-style"> <span
                              class="d-sm-none d-lg-inline-block"></span></a>
                      <div class="dropdown-menu dropdown-menu-right pullDown">
                          <div class="dropdown-title">Hello Sarah Smith</div>
                          <a href="profile.html" class="dropdown-item has-icon"> <i
                                  class="far
                  fa-user"></i> Profile
                          </a> <a href="timeline.html" class="dropdown-item has-icon"> <i
                                  class="fas fa-bolt"></i>
                              Activities
                          </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                              Settings
                          </a>
                          <div class="dropdown-divider"></div>
                          <form action="/auth/logout" class="has-icon" method="post">
                              @csrf
                              <button type="submit" class="dropdown-item text-danger"> <i
                                      class="fas fa-sign-out-alt"></i>
                                  Logout
                              </button>
                          </form>
                      </div>
                  </li>
              </ul>
          </nav>
          <div class="main-sidebar sidebar-style-2">
              <aside id="sidebar-wrapper">
                  <div class="sidebar-brand">
                      <a href="index.html"> <img alt="image" src="{{ asset('assets/img/logo.png') }}"
                              class="header-logo" /> <span class="logo-name">Otika</span>
                      </a>
                  </div>
                  <ul class="sidebar-menu">
                      <li class="menu-header">Main</li>
                      <li class="{{ Request::is('main/dashboard') ? 'active' : '' }}">
                          <a href="/main/dashboard" class="nav-link"><i
                                  data-feather="monitor"></i><span>Dashboard</span></a>
                      </li>
                      <li class="">
                          <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                  data-feather="database"></i><span>Data Master</span></a>
                          <ul class="dropdown-menu">
                              <li class=""><a class="nav-link"
                                      href="#">Data Identitas Sekolah</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Kurikulum</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Tahun Akademik</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Gedung</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Ruangan</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Golongan</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Jenis PTK</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Jurusan</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Kelas</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Status Kepegawain</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Pelanggaran Siswa</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Juara Lomba</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Tingkat Lomba</a></li>
                          </ul>                                  
                      </li>
                      <li class="">
                          <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                  data-feather="users"></i><span>Data User</span></a>
                          <ul class="dropdown-menu">
                              <li class=""><a class="nav-link"
                                      href="#">Data Siswa</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Guru</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Kepala Sekolah</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Administrator</a></li>
                          </ul>                                  
                      </li>
                      <li class="">
                          <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                  data-feather="tag"></i><span>Data Akademik</span></a>
                          <ul class="dropdown-menu">
                              <li class=""><a class="nav-link"
                                      href="#">Data Kelompok Mapel</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Mata Pelajaran</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Jawal Pelajaran</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Bahan dan Tugas</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Kompetensi Dasar</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Penilain Diri</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Rentan Nilai</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Penilain Teman</a></li>
                          </ul>                                  
                      </li>
                      <li class="">
                          <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                  data-feather="calendar"></i><span>Data Absensi</span></a>
                          <ul class="dropdown-menu">
                              <li class=""><a class="nav-link"
                                      href="#">Absensi Guru</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Absensi Siswa</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Rekap Absensi Siswa</a></li>
                          </ul>                                  
                      </li>                                                                     
                      <li class="">
                          <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                  data-feather="file"></i><span>Laporan Nilai Siswa</span></a>
                          <ul class="dropdown-menu">
                              <li class=""><a class="nav-link"
                                      href="#">Data Nilai UTS</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Cetak Rapot UTS</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Capaian Belajar</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Data Nilai Rapot</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Cetak Rapot</a></li>
                          </ul>                                  
                      </li>
                      <li class="">
                          <a href="#" class="nav-link"><i
                                  data-feather="trello"></i><span>Journal KBM</span></a>
                      </li>                                                                                           
                      <li class="">
                          <a href="#" class="nav-link"><i
                                  data-feather="video-off"></i><span>Forum Diskusi</span></a>
                      </li>                                                                                           
                      <li class="">
                          <a href="#" class="nav-link"><i
                                  data-feather="video"></i><span>Forum Diskusi Online</span></a>
                      </li>                                                                                           
                      <li class="">
                          <a href="#" class="nav-link"><i
                                  data-feather="help-circle"></i><span>Quiz/Ujian Online</span></a>
                      </li>
                      <li class="">
                          <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                  data-feather="award"></i><span>Catatan Siswa</span></a>
                          <ul class="dropdown-menu">
                              <li class=""><a class="nav-link"
                                      href="#">Prestasi Siswa</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Ekstrakulikuler Siswa</a></li>
                              <li class=""><a
                                      class="nav-link" href="#">Siswa Berprestasi</a></li>
                          </ul>                                  
                      </li>
                      
                      <li class="menu-header">Extra Apps</li>                                                                                                                
                      <li class="{{ Request::is('extra/blog*') || Request::is('extra/category*') ? 'active' : '' }}">
                          <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                  data-feather="cast"></i><span>Blog</span></a>
                          <ul class="dropdown-menu">
                              <li class="{{ Request::is('extra/blog') ? 'active' : '' }}"><a class="nav-link"
                                      href="/extra/blog">Blog</a></li>
                              <li class="{{ Request::is('extra/blog/create') ? 'active' : '' }}"><a
                                      class="nav-link" href="/extra/blog/create">Add Article</a></li>
                              <li class="{{ Request::is('extra/category') ? 'active' : '' }}"><a
                                      class="nav-link" href="/extra/category">List Category</a></li>
                              <li class="{{ Request::is('extra/category/create') ? 'active' : '' }}"><a
                                      class="nav-link" href="/extra/category/create">New Category</a></li>
                          </ul>
                      </li>
                      <li class="{{ Request::is('extra/sms*') || Request::is('extra/whatsapp*') ? 'active' : ''}}">
                        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="message-square"></i>Message</a>
                            <ul class="dropdown-menu">
                              <li class="{{ Request::is('extra/sms') ? 'active' : '' }}"><a class="nav-link"
                                      href="/extra/sms">SMS Gateway</a></li>
                              <li class="{{ Request::is('extra/whatsapp') ? 'active' : '' }}"><a class="nav-link"
                                      href="/extra/whatsapp">Whatsapp Gateway</a></li>
                              <li class="{{ Request::is('extra/sms/create') ? 'active' : '' }}"><a
                                      class="nav-link" href="/extra/sms/create">API Key</a></li>
                            </ul>
                      </li>
                  </ul>
              </aside>
          </div>
          <!-- Main Content -->
          <div class="main-content">
              <section class="section">
                  <div class="section-body">
                      @yield('container')
                  </div>
              </section>
              <div class="settingSidebar">
                  <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                  </a>
                  <div class="settingSidebar-body ps-container ps-theme-default">
                      <div class=" fade show active">
                          <div class="setting-panel-header">Setting Panel
                          </div>
                          <div class="p-15 border-bottom">
                              <h6 class="font-medium m-b-10">Select Layout</h6>
                              <div class="selectgroup layout-color w-50">
                                  <label class="selectgroup-item">
                                      <input type="radio" name="value" value="1"
                                          class="selectgroup-input-radio select-layout" checked>
                                      <span class="selectgroup-button">Light</span>
                                  </label>
                                  <label class="selectgroup-item">
                                      <input type="radio" name="value" value="2"
                                          class="selectgroup-input-radio select-layout">
                                      <span class="selectgroup-button">Dark</span>
                                  </label>
                              </div>
                          </div>
                          <div class="p-15 border-bottom">
                              <h6 class="font-medium m-b-10">Sidebar Color</h6>
                              <div class="selectgroup selectgroup-pills sidebar-color">
                                  <label class="selectgroup-item">
                                      <input type="radio" name="icon-input" value="1"
                                          class="selectgroup-input select-sidebar">
                                      <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                          data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                  </label>
                                  <label class="selectgroup-item">
                                      <input type="radio" name="icon-input" value="2"
                                          class="selectgroup-input select-sidebar" checked>
                                      <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                          data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                  </label>
                              </div>
                          </div>
                          <div class="p-15 border-bottom">
                              <h6 class="font-medium m-b-10">Color Theme</h6>
                              <div class="theme-setting-options">
                                  <ul class="choose-theme list-unstyled mb-0">
                                      <li title="white" class="active">
                                          <div class="white"></div>
                                      </li>
                                      <li title="cyan">
                                          <div class="cyan"></div>
                                      </li>
                                      <li title="black">
                                          <div class="black"></div>
                                      </li>
                                      <li title="purple">
                                          <div class="purple"></div>
                                      </li>
                                      <li title="orange">
                                          <div class="orange"></div>
                                      </li>
                                      <li title="green">
                                          <div class="green"></div>
                                      </li>
                                      <li title="red">
                                          <div class="red"></div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="p-15 border-bottom">
                              <div class="theme-setting-options">
                                  <label class="m-b-0">
                                      <input type="checkbox" name="custom-switch-checkbox"
                                          class="custom-switch-input" id="mini_sidebar_setting">
                                      <span class="custom-switch-indicator"></span>
                                      <span class="control-label p-l-10">Mini Sidebar</span>
                                  </label>
                              </div>
                          </div>
                          <div class="p-15 border-bottom">
                              <div class="theme-setting-options">
                                  <label class="m-b-0">
                                      <input type="checkbox" name="custom-switch-checkbox"
                                          class="custom-switch-input" id="sticky_header_setting">
                                      <span class="custom-switch-indicator"></span>
                                      <span class="control-label p-l-10">Sticky Header</span>
                                  </label>
                              </div>
                          </div>
                          <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                              <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                  <i class="fas fa-undo"></i> Restore Default
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <footer class="main-footer">
              <div class="footer-left">
                  <a href="https://github.com/nurd0tid/SiPONPES">Powerd By nurd0tid Craft on Laravel 8</a></a>
              </div>
              <div class="footer-right">
              </div>
          </footer>
      </div>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    @stack('js-toast')
    @stack('js-summernote')
    <!-- Page Specific JS File -->
    @stack('js-datatables')
    @stack('js-page')
    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @stack('serverside')
    @stack('popup-toast')
</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

</html>
