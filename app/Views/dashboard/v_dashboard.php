    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="index.php">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form" action="index.php" method="post">
              <div class="input-group no-border">
                <button type="submit" name="logout" value="ok" class="btn btn-danger btn-round">
                  <i class="material-icons">power_settings_new</i>
                  Logout
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">notifications</i>
                  </div>
                  <p class="card-category">new, info update, etc</p>
                  <h3 class="card-title">Information
                    <small></small>
                  </h3>
                </div>
                <div class="card-body table-responsive">
                  <div>
                    <h4>
                      Launching Membership System 1.0
                    </h4>
                    <p>
                      Bismillah, kami melaunching membership system untuk be fullstack developer dalam
                      rangka meningkatkan pelayanan kami pada Anda semua. Mohon masukan dan sarannya.
                    </p>
                    <p>
                      <small>
                        2018-11-11 17:44:36</small>
                    </p>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-warning">info</i>
                    <a href="index.php?page=information">Get More Info...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_paste</i>
                  </div>
                  <p class="card-category">link & download</p>
                  <h3 class="card-title">Product List</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-warning">info</i>
                    <a href="index.php?page=product">Get More Info...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">update & view</p>
                  <h3 class="card-title">User Profile</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-warning">info</i>
                    <a href="index.php?page=profile">Get More Info...</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      
