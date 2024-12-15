<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="{{url('redirect')}}"><img src="https://www.nirapadcourier.com/images/nirapad-logo2.png" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="{{url('redirect')}}"><img src="" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Admin Dashboard</h5>
              <span>Nirapad Courier PVT.</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Configuration</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Company Info</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Expense Type</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Income Type</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Business Type</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Reason Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Order Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Area Management</a></li>
                <li class="nav-item"> <a class="nav-link" href="">District Management</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Branch Management</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Charge Management</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Status Change for Rider</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Notice Management</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Pickup Time Management</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Slider Management</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Scheduler for Merchant</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Auto Assign for Rider</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#team-menu" aria-expanded="false" aria-controls="team-menu">
            <span class="menu-icon">
                <i class="mdi mdi-account"></i>
            </span>
            <span class="menu-title">Team</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="team-menu">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">User Password Manage</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Merchant Information</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Branch Information</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Rider Information</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Executive Information</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#parcel-menu" aria-expanded="false" aria-controls="parcel-menu">
            <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">Parcel</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="parcel-menu">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Pickup Request List</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Parcel Request List</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">All Parcel List</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Add Parcel</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Order Export</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Bulk Import</a></li>
            </ul>
        </div>
    </li>

    <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#parcel-menu" aria-expanded="false" aria-controls="parcel-menu">
            <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">Operation</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="parcel-menu">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Parcel Fulfillment</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Transfer To Hub</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Return To Hub</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Delivery Processing for Bran</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Delivery transfer</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#parcel-menu" aria-expanded="false" aria-controls="parcel-menu">
            <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">3PL Operation</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="parcel-menu">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Transfer To Redx</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Transfer To Pathao</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Third Party Transfer List</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Third Party Delivery and Can</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#parcel-menu" aria-expanded="false" aria-controls="parcel-menu">
            <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">HR & PAYROLL</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="parcel-menu">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Rider Attendance</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Employee Attendance</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Daily Attendance</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Monthly Attendance</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Employee Wise Attendance</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Branch Wise Attendance</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Branch Wise Monthly Attend</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#parcel-menu" aria-expanded="false" aria-controls="parcel-menu">
            <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">Accounts</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="parcel-menu">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Branch Collection</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Invoice Processing</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Advance Payment</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Merchant Payment</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Rider Payment Processing</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Branch Payment Processing</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Branch Payment</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Rider Payment</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Expense Management</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Income Management</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Merchant Payment Update</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#parcel-menu" aria-expanded="false" aria-controls="parcel-menu">
            <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">Report</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="parcel-menu">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Merchant Payment History</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Merchant Revenue Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Revenue Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Hub Transaction History</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Rider History</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Tickets Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Expense Report</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Income & Expense Summar</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Rider Collect History</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Transfer History</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Merchant History</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Hub History</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Merchant Adjustment</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Advance Payment</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Return History</a></li>
            </ul>
        </div>
    </li>


      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('redirect')}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Products</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('view_product')}}">Add Product</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('show_product')}}">Show Product</a></li>

          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('view_category')}}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Category</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('order')}}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Orders</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="#">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Profile</span>
        </a>
    </li>
    </ul>
  </nav>
