<header>
      <div class="container container-nav">
        <div class="site-title">
          <h1>Pixel Store</h1>
          <p class="subtitle">The island of the best 3D content</p>
        </div>
        <nav>
          <ul class="nav-list">
            <li>
              <a class="nav-list-item" href="./LogIn/login.php"
                ><i class="fas fa-sign-in-alt fa-2x"></i
              ></a>
            </li>
            <li>
              <a href="../Register/register.php"><i class="fas fa-key fa-2x"></i></a>
            </li>
            <li>
              <a  class="nav-list-item" href="./logout.php"
                ><button onclick="window.localStorage.clear();" class="fas fa-sign-out-alt" style ="background-color: Transparent; border:none;   color: white; cursor:pointer;" ></button>
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="container container-nav doi">
        <nav>
          <ul class="nav-list bottom">
            <li><a class="nav-list-item" href="index.php">HOME</a></li>
            <li><a href="assets.php">Assets</a></li>
            <li><a href="tools.php">Tools</a></li>
            <li><a href="about.php#bottom2">Contact us</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="#bottom" class="fas fa-robot fa-2x "></a></li>
          </ul>
        </nav>
        <nav >
          

            
            <form action="search.php" method = "post">
              <ul class="nav-list bottom foldable">
                      <input 
                      class = "text-search"
                        type="text"
                        name="search"
                        id=""
                        placeholder="Search for products..."
                      />
                    
                    <li >
                      <button style ="background-color: Transparent; border:none;   color: white; cursor:pointer; " class="text-search2" name="submit" type="submit"><i class="fas fa-search fa-2x input2" ></i></button>
                    </li>
                    </ul>
            </form>
         

          <a href="cos.php" style="margin-top:-2.5rem" >
                <button class="fas fa-shopping-basket fa-2x bsk"  style ="background-color: Transparent; border:none; color: white; cursor:pointer; "></button>
          </a>

        </nav>  
      </div>
    </header>