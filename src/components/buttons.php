<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Joko Admin</title>
  <!-- plugins:css -->
  <?php require_once __DIR__ . '/../config/paths.php'; ?>
  <link rel="stylesheet" href="<?php echo asset('vendors/mdi/css/materialdesignicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo asset('vendors/css/vendor.bundle.base.css'); ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo asset('css/vertical-layout-light/style.css'); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo asset('images/favicon.ico'); ?>" />
  <?php
  $gmaps_key = '';
  $autoload = __DIR__ . '/../vendor/autoload.php';
  if (file_exists($autoload)) {
    require_once $autoload;
    try {
      $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
      $dotenv->safeLoad();
    } catch (Exception $e) {
    }
    $gmaps_key = getenv('GMAPS_API_KEY') ?: '';
  } else {
    $gmaps_key = getenv('GMAPS_API_KEY') ?: '';
  }
  ?>
  <script>
    window.GMAPS_API_KEY = '<?php echo htmlspecialchars($gmaps_key, ENT_QUOTES); ?>';
  </script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="#"><img src="" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src=""
            alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav me-auto">
          <li class="nav-item nav-search d-none d-md-flex" id="navbarSearch">
            <a class="nav-link d-flex justify-content-center align-items-center" id="navbarSearchButton" href="#">
              <i class="mdi mdi-magnify mx-0"></i>
            </a>
            <input type="text" class="form-control" placeholder="Search..." id="navbarSearchInput">
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown me-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
              id="messageDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-email mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <p class="mb-0 fw-normal float-start dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="https://placehold.co/36x36" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis fw-normal">David Grey
                  </h6>
                  <p class="fw-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="https://placehold.co/36x36" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis fw-normal">Tim Cook
                  </h6>
                  <p class="fw-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="https://placehold.co/36x36" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis fw-normal"> Johnson
                  </h6>
                  <p class="fw-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown me-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
              id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
              aria-labelledby="notificationDropdown">
              <p class="mb-0 fw-normal float-start dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal">Application Error</h6>
                  <p class="fw-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal">Settings</h6>
                  <p class="fw-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal">New user registration</h6>
                  <p class="fw-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown me-0 me-sm-2">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="https://placehold.co/36x36" alt="profile" />
              <span class="nav-profile-name">Don Richards</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="mdi mdi-dots-vertical"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border me-3"></div>Light
          </div>
          <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close mdi mdi-close"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab"
              aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
              aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
            aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="mdi mdi-circle-outline text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 fw-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="mdi mdi-circle-outline text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 fw-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 ps-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pe-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="https://placehold.co/36x36" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="https://placehold.co/36x36" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="https://placehold.co/36x36" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="https://placehold.co/36x36" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="https://placehold.co/36x36" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="https://placehold.co/36x36" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/dev/buttons">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Buttons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dev/tables">
              <i class="mdi mdi-puzzle menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dev/icons">
              <i class="mdi mdi-puzzle menu-icon"></i>
              <span class="menu-title">MDI Icons</span>
            </a>
          </li>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card-body">
                      <h4 class="card-title">Single color buttons</h4>
                      <p class="card-description">Add class <code>.btn-{color}</code> for buttons in theme colors</p>
                      <div class="template-demo">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-light">Light</button>
                        <button type="button" class="btn btn-dark">Dark</button>
                        <button type="button" class="btn btn-link">Link</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h4 class="card-title">Rounded buttons</h4>
                      <p class="card-description">Add class <code>.btn-rounded</code></p>
                      <div class="template-demo">
                        <button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button>
                        <button type="button" class="btn btn-secondary btn-rounded btn-fw">Secondary</button>
                        <button type="button" class="btn btn-success btn-rounded btn-fw">Success</button>
                        <button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button>
                        <button type="button" class="btn btn-warning btn-rounded btn-fw">Warning</button>
                        <button type="button" class="btn btn-info btn-rounded btn-fw">Info</button>
                        <button type="button" class="btn btn-light btn-rounded btn-fw">Light</button>
                        <button type="button" class="btn btn-dark btn-rounded btn-fw">Dark</button>
                        <button type="button" class="btn btn-link btn-rounded btn-fw">Link</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card-body">
                      <h4 class="card-title">Outlined buttons</h4>
                      <p class="card-description">Add class <code>.btn-outline-{color}</code> for outline buttons</p>
                      <div class="template-demo">
                        <button type="button" class="btn btn-outline-primary btn-fw">Primary</button>
                        <button type="button" class="btn btn-outline-secondary btn-fw">Secondary</button>
                        <button type="button" class="btn btn-outline-success btn-fw">Success</button>
                        <button type="button" class="btn btn-outline-danger btn-fw">Danger</button>
                        <button type="button" class="btn btn-outline-warning btn-fw">Warning</button>
                        <button type="button" class="btn btn-outline-info btn-fw">Info</button>
                        <button type="button" class="btn btn-outline-light btn-fw">Light</button>
                        <button type="button" class="btn btn-outline-dark btn-fw">Dark</button>
                        <button type="button" class="btn btn-link btn-fw">Link</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h4 class="card-title">Inverse buttons</h4>
                      <p class="card-description">Add class <code>.btn-inverse-{color} for inverse buttons</code></p>
                      <div class="template-demo">
                        <button type="button" class="btn btn-inverse-primary btn-fw">Primary</button>
                        <button type="button" class="btn btn-inverse-secondary btn-fw">Secondary</button>
                        <button type="button" class="btn btn-inverse-success btn-fw">Success</button>
                        <button type="button" class="btn btn-inverse-danger btn-fw">Danger</button>
                        <button type="button" class="btn btn-inverse-warning btn-fw">Warning</button>
                        <button type="button" class="btn btn-inverse-info btn-fw">Info</button>
                        <button type="button" class="btn btn-inverse-light btn-fw">Light</button>
                        <button type="button" class="btn btn-inverse-dark btn-fw">Dark</button>
                        <button type="button" class="btn btn-link btn-fw">Link</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-7">
                    <div class="card-body">
                      <h4 class="card-title">Icon Buttons</h4>
                      <p class="card-description">Add class <code>.btn-icon</code> for buttons with only icons</p>
                      <div class="template-demo d-flex justify-content-between flex-nowrap">
                        <button type="button" class="btn btn-primary btn-rounded btn-icon">
                          <i class="mdi mdi-home-outline"></i>
                        </button>
                        <button type="button" class="btn btn-dark btn-rounded btn-icon">
                          <i class="mdi mdi-internet-explorer"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-rounded btn-icon">
                          <i class="mdi mdi-email-open"></i>
                        </button>
                        <button type="button" class="btn btn-info btn-rounded btn-icon">
                          <i class="mdi mdi-star"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-rounded btn-icon">
                          <i class="mdi mdi-map-marker"></i>
                        </button>
                      </div>
                      <div class="template-demo d-flex justify-content-between flex-nowrap">
                        <button type="button" class="btn btn-inverse-primary btn-icon">
                          <i class="mdi mdi-home-outline"></i>
                        </button>
                        <button type="button" class="btn btn-inverse-dark btn-icon">
                          <i class="mdi mdi-internet-explorer"></i>
                        </button>
                        <button type="button" class="btn btn-inverse-danger btn-icon">
                          <i class="mdi mdi-email-open"></i>
                        </button>
                        <button type="button" class="btn btn-inverse-info btn-icon">
                          <i class="mdi mdi-star"></i>
                        </button>
                        <button type="button" class="btn btn-inverse-success btn-icon">
                          <i class="mdi mdi-map-marker"></i>
                        </button>
                      </div>
                      <div class="template-demo d-flex justify-content-between flex-nowrap mt-4">
                        <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                          <i class="mdi mdi-heart-outline text-danger"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                          <i class="mdi mdi-music text-dark"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                          <i class="mdi mdi-star text-primary"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                          <i class="mdi mdi-signal text-info"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                          <i class="mdi mdi-trending-up text-success"></i>
                        </button>
                      </div>
                      <div class="template-demo d-flex justify-content-between flex-nowrap">
                        <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                          <i class="mdi mdi-heart-outline"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                          <i class="mdi mdi-music"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                          <i class="mdi mdi-star"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                          <i class="mdi mdi-signal"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-rounded btn-icon">
                          <i class="mdi mdi-trending-up"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="card-body">
                      <h4 class="card-title">Button Size</h4>
                      <p class="card-description">Use class <code>.btn-{size}</code></p>
                      <div class="template-demo">
                        <button type="button" class="btn btn-outline-secondary btn-lg">btn-lg</button>
                        <button type="button" class="btn btn-outline-secondary btn-md">btn-md</button>
                        <button type="button" class="btn btn-outline-secondary btn-sm">btn-sm</button>
                      </div>
                      <div class="template-demo mt-4">
                        <button type="button" class="btn btn-danger btn-lg">btn-lg</button>
                        <button type="button" class="btn btn-success btn-md">btn-md</button>
                        <button type="button" class="btn btn-primary btn-sm">btn-sm</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Block buttons</h4>
                  <p class="card-description">Add class <code>.d-grid .gap-2</code></p>
                  <div class="template-demo d-grid gap-2">
                    <button type="button" class="btn btn-info btn-lg">Block buttons
                      <i class="mdi mdi-menu float-end"></i>
                    </button>
                    <button type="button" class="btn btn-dark btn-lg">Block buttons</button>
                    <button type="button" class="btn btn-primary btn-lg">
                      <i class="mdi mdi-account"></i>
                      Block buttons
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-lg">Block buttons</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card-body">
                      <h4 class="card-title">Button groups</h4>
                      <p class="card-description">Wrap a series of buttons with <code>.btn</code>
                        in <code>.btn-group</code></p>
                      <div class="template-demo">
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-secondary">1</button>
                          <button type="button" class="btn btn-outline-secondary">2</button>
                          <button type="button" class="btn btn-outline-secondary">3</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-secondary">
                            <i class="mdi mdi-heart-outline"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary">
                            <i class="mdi mdi-calendar"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary">
                            <i class="mdi mdi-clock"></i>
                          </button>
                        </div>
                      </div>
                      <div class="template-demo">
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-primary">1</button>
                          <button type="button" class="btn btn-primary">2</button>
                          <button type="button" class="btn btn-primary">3</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-primary">
                            <i class="mdi mdi-heart-outline"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="mdi mdi-calendar"></i>
                          </button>
                          <button type="button" class="btn btn-primary">
                            <i class="mdi mdi-clock"></i>
                          </button>
                        </div>
                      </div>
                      <div class="template-demo mt-4">
                        <div class="btn-group-vertical" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-secondary">
                            <i class="mdi mdi-format-vertical-align-top"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary">
                            <i class="mdi mdi-format-vertical-align-center"></i>
                          </button>
                          <button type="button" class="btn btn-outline-secondary">
                            <i class="mdi mdi-format-vertical-align-bottom"></i>
                          </button>
                        </div>
                        <div class="btn-group-vertical" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-secondary">Default</button>
                          <div class="btn-group">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle"
                              data-bs-toggle="dropdown">Dropdown</button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item">Go back</a>
                              <a class="dropdown-item">Delete</a>
                              <a class="dropdown-item">Swap</a>
                            </div>
                          </div>
                          <button type="button" class="btn btn-outline-secondary">Default</button>
                        </div>
                        <div class="btn-group-vertical" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-outline-secondary">Top</button>
                          <button type="button" class="btn btn-outline-secondary">Middle</button>
                          <button type="button" class="btn btn-outline-secondary">Bottom</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h4 class="card-title">Button with text and icon</h4>
                      <p class="card-description">Wrap icon and text inside <code>.btn-icon-text</code> and use
                        <code>.btn-icon-prepend</code>
                        or <code>.btn-icon-append</code> for icon tags
                      </p>
                      <div class="template-demo">
                        <button type="button" class="btn btn-primary btn-icon-text">
                          <i class="mdi mdi-file-check btn-icon-prepend"></i>
                          Submit
                        </button>
                        <button type="button" class="btn btn-dark btn-icon-text">
                          Edit
                          <i class="mdi mdi-file-check btn-icon-append"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-icon-text">
                          <i class="mdi mdi-alert btn-icon-prepend"></i>
                          Warning
                        </button>
                      </div>
                      <div class="template-demo">
                        <button type="button" class="btn btn-danger btn-icon-text">
                          <i class="mdi mdi-upload btn-icon-prepend"></i>
                          Upload
                        </button>
                        <button type="button" class="btn btn-info btn-icon-text">
                          Print
                          <i class="mdi mdi-printer btn-icon-append"></i>
                        </button>
                        <button type="button" class="btn btn-warning btn-icon-text">
                          <i class="mdi mdi-reload btn-icon-prepend"></i>
                          Reset
                        </button>
                      </div>
                      <div class="template-demo mt-2">
                        <button type="button" class="btn btn-outline-primary btn-icon-text">
                          <i class="mdi mdi-file-check btn-icon-prepend"></i>
                          Submit
                        </button>
                        <button type="button" class="btn btn-outline-secondary btn-icon-text">
                          Edit
                          <i class="mdi mdi-file-check btn-icon-append"></i>
                        </button>
                        <button type="button" class="btn btn-outline-success btn-icon-text">
                          <i class="mdi mdi-alert btn-icon-prepend"></i>
                          Warning
                        </button>
                      </div>
                      <div class="template-demo">
                        <button type="button" class="btn btn-outline-danger btn-icon-text">
                          <i class="mdi mdi-upload btn-icon-prepend"></i>
                          Upload
                        </button>
                        <button type="button" class="btn btn-outline-info btn-icon-text">
                          Print
                          <i class="mdi mdi-printer btn-icon-append"></i>
                        </button>
                        <button type="button" class="btn btn-outline-warning btn-icon-text">
                          <i class="mdi mdi-reload btn-icon-prepend"></i>
                          Reset
                        </button>
                      </div>
                      <div class="template-demo mt-2">
                        <button class="btn btn-outline-dark btn-icon-text">
                          <i class="mdi mdi-apple btn-icon-prepend mdi-36px"></i>
                          <span class="d-inline-block text-left">
                            <small class="fw-light d-block">Available on the</small>
                            App Store
                          </span>
                        </button>
                        <button class="btn btn-outline-dark btn-icon-text">
                          <i class="mdi mdi-android-debug-bridge btn-icon-prepend mdi-36px"></i>
                          <span class="d-inline-block text-left">
                            <small class="fw-light d-block">Get it on the</small>
                            Google Play
                          </span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Social Icon Buttons</h4>
                  <p class="card-description">Add class <code>.btn-social-icon</code></p>
                  <div class="template-demo">
                    <button type="button" class="btn btn-social-icon btn-outline-facebook"><i
                        class="mdi mdi-facebook"></i></button>
                    <button type="button" class="btn btn-social-icon btn-outline-youtube"><i
                        class="mdi mdi-youtube"></i></button>
                    <button type="button" class="btn btn-social-icon btn-outline-twitter"><i
                        class="mdi mdi-twitter"></i></button>
                    <button type="button" class="btn btn-social-icon btn-outline-dribbble"><i
                        class="mdi mdi-dribbble"></i></button>
                    <button type="button" class="btn btn-social-icon btn-outline-linkedin"><i
                        class="mdi mdi-linkedin"></i></button>
                    <button type="button" class="btn btn-social-icon btn-outline-google"><i
                        class="mdi mdi-google-plus"></i></button>
                  </div>
                  <div class="template-demo">
                    <button type="button" class="btn btn-social-icon btn-facebook"><i
                        class="mdi mdi-facebook"></i></button>
                    <button type="button" class="btn btn-social-icon btn-youtube"><i
                        class="mdi mdi-youtube"></i></button>
                    <button type="button" class="btn btn-social-icon btn-twitter"><i
                        class="mdi mdi-twitter"></i></button>
                    <button type="button" class="btn btn-social-icon btn-dribbble"><i
                        class="mdi mdi-dribbble"></i></button>
                    <button type="button" class="btn btn-social-icon btn-linkedin"><i
                        class="mdi mdi-linkedin"></i></button>
                    <button type="button" class="btn btn-social-icon btn-google"><i
                        class="mdi mdi-google-plus"></i></button>
                  </div>
                  <div class="template-demo">
                    <button type="button" class="btn btn-social-icon btn-facebook btn-rounded"><i
                        class="mdi mdi-facebook"></i></button>
                    <button type="button" class="btn btn-social-icon btn-youtube btn-rounded"><i
                        class="mdi mdi-youtube"></i></button>
                    <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"><i
                        class="mdi mdi-twitter"></i></button>
                    <button type="button" class="btn btn-social-icon btn-dribbble btn-rounded"><i
                        class="mdi mdi-dribbble"></i></button>
                    <button type="button" class="btn btn-social-icon btn-linkedin btn-rounded"><i
                        class="mdi mdi-linkedin"></i></button>
                    <button type="button" class="btn btn-social-icon btn-google btn-rounded"><i
                        class="mdi mdi-google-plus"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Social button with text</h4>
                  <p class="card-description">Add class <code>.btn-social-icon-text</code></p>
                  <div class="template-demo">
                    <button type="button" class="btn btn-social-icon-text btn-facebook"><i
                        class="mdi mdi-facebook"></i>Facebook</button>
                    <button type="button" class="btn btn-social-icon-text btn-youtube"><i
                        class="mdi mdi-youtube"></i>Youtube</button>
                    <button type="button" class="btn btn-social-icon-text btn-twitter"><i
                        class="mdi mdi-twitter"></i>Twitter</button>
                    <button type="button" class="btn btn-social-icon-text btn-dribbble"><i
                        class="mdi mdi-dribbble"></i>Dribbble</button>
                    <button type="button" class="btn btn-social-icon-text btn-linkedin"><i
                        class="mdi mdi-linkedin"></i>Linkedin</button>
                    <button type="button" class="btn btn-social-icon-text btn-google"><i
                        class="mdi mdi-google-plus"></i>Google</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>