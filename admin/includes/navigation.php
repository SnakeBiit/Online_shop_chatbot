 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-ex1-collapse"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../../index.php">Shop</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
              ><i class="fa fa-user"></i> <?php echo $_SESSION['username'] ?> <b class="caret"></b
            ></a>
            <ul class="dropdown-menu">
              <li>
                <a href="./profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
              </li>
              
              <li class="divider"></li>
              <li>
                <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li>
              <a href="./index.php"
                ><i class="fa fa-fw fa-dashboard"></i> Dashboard</a
              >
            </li>
           
            <li>
              <a href="javascript:;" data-toggle="collapse" data-target="#assets"
                ><i class="fa fa-fw fa-arrows-v"></i> Assets
                <i class="fa fa-fw fa-caret-down"></i
              ></a>
              <ul id="assets" class="collapse">
                <li>
                  <a href="./assets.php">View All Assets</a>
                </li>
                <li>
                  <a href="./assets.php?source=add_assets">Add Assets</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="javascript:;" data-toggle="collapse" data-target="#tools"
                ><i class="fa fa-fw fa-arrows-v"></i> Tools
                <i class="fa fa-fw fa-caret-down"></i
              ></a>
              <ul id="tools" class="collapse">
                <li>
                  <a href="./tools.php">View All Tools</a>
                </li>
                <li>
                  <a href="./tools.php?source=add_tools">Add Tools</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="javascript:;" data-toggle="collapse" data-target="#users"
                ><i class="fa fa-fw fa-arrows-v"></i> Users
                <i class="fa fa-fw fa-caret-down"></i
              ></a>
              <ul id="users" class="collapse">
                <li>
                  <a href="./users.php">View All Users</a>
                </li>
                <li>
                  <a href="./users.php?source=add_users">Add Users</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="./profile.php"
                ><i class="fa fa-fw fa-dashboard"></i> Profile</a
              >
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>