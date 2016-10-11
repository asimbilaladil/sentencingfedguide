<body>
<div id="main-wrapper"> 
  
  <!-- Top Toolbar -->

  <!-- end toolbar -->
  
  <div class="box-shadow-for-ui">
    <div class="uou-block-2b">
      <div class="container"> <a href="index.html#" class="logo"><img src="<?php echo base_url("assets/images/logo.jpg") ?>" alt=""></a> <a href="index.html#" class="mobile-sidebar-button mobile-sidebar-toggle"><span></span></a>
        <nav class="nav">
          <ul class="sf-menu">
           
            <li>
              <i class="fa  fa-phone "> <strong>+1 (406)-208-0484</strong></i>
              <br>
              <span>
              <i class="fa fa-envelope"> info@sentencingfedguide.com </i>
              </span>
            </li>
            <li>
              <i class="fa  fa-map-marker "> <strong>1333 N 27th St </strong></i>
              <br>
              <span>Billings, MT 59101.</span>

      
            </li>



    
          </ul>
        </nav>
      </div>
    </div>
    <!-- end .uou-block-2b --> 
  </div>
  
  <!-- HOME PRO-->
  <div class="home-pro"> 
    
    <!-- PRO BANNER HEAD -->
    <div class="banr-head">
      <div class="container">
        <div class="row"> 
          
          <!-- CONTENT -->
          <div class="col-sm-7">
            <div class="text-area">
            
            </div>
          </div>
          
          <!-- FORM SECTION -->
          <div class="col-sm-5">

            <div class="login-sec"> <br>
               <h2 style="text-align: center; color: beige;">Login To Your Account </h2>
              <!-- TABS -->
              <div class="uou-tabs">

                
                <!-- REGISTER -->
                <div class="content">

                  <div id="register">

                    <form>
                      <input type="text" placeholder="Full Name">
                      <input type="email" placeholder="Email Address">
                      <input type="text" placeholder="Phone">
                      <input type="password" placeholder="Password">
                      <button type="submit">Register</button>
                      <div class="login-with"> <span>Or login with:</span> <a href="index.html#."><i class="fa fa-facebook"></i></a> <a href="<?php echo $login_url ?>"><i class="fa fa-google"></i></a> <a href="<?php echo $login_url ?>"><i class="fa fa-linkedin"></i></a> </div>
                    </form>
                  </div>
                  
                  <!-- LOGIN -->
                  <div id="log-in" class="active">
                    <form action="<?php echo site_url('Login/simpleLogin') ?>" method="POST" >
                      <input type="email" placeholder="Email Address" name="email">
                      <input type="password" placeholder="Password" name="password">
                      <button style="width: 100%;" type="submit">Login</button>
                      <br><br>
                        </form>
                        <form>
                      <div style="margin-top: 12px; margin-bottom: -20px;" >Don't have an account? <a data-toggle="modal" data-target="#myModal">Sign up</a></div>

                      <div class="forget">
                        <a href="<?php echo $login_url ?>">
                          <img class="mc-btn col-md-12" style="padding: 0px 0px;  height: 44px; border-radius: 40px; " src="http://royalrealtybillings.com/assets/images/facebookButton.png">
                          </a>
                      </div>
                    </form>
                  </div>
        
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog " style="width: 40%">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Signup</h4>
      </div>
      <form action="<?php echo site_url('Login/register') ?>" method="POST">
      <div class="modal-body">
                      <input style="color:black;" type="text" name="fullname" placeholder="Full Name">
                      <input style="color:black;" type="email"  name="email" placeholder="Email Address">
                      <input style="color:black;" type="password" name="password" placeholder="Password">
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary"  style="border-radius: 20px; width: 22%;" value="Save">
      </div>
      </form>
    </div>

  </div>
</div> 