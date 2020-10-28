
 

    

      <div class="sl-slider-caro owl-carousel" style="padding-top: 10%;  padding-bottom: 20%">
        <div class="single-sl-slide">
          <!-- <img src="<?=base_url();?>assets/front/images/mac.png" alt=""> -->
          <div class="content-box">
            <h2>Welcome to <?=$system_name;?></h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sedo eiusmod tempor incididunt dolore.</p> -->
             <div class="col-sm w-100" style="text-align: left;">
                <p>
                    <!-- <a id="lnkForgotUserID" href="https://cibng.ibanking-services.com/Eam/Verification/Index">Forgot your user ID?</a> -->
                </p>
                <p><b>Need help?</b>
                    <br />Contact us at <?=$system_phone1;?></p> 
                <p><b>Not yet enrolled?</b>
                <p><b>We promise to keep your personal information private and secure.</b><br />To learn more, please see our <a href="https://www.mybank.com/pdfs/Privacy.pdf" target="_blank" style="color: black">privacy policy.</a></p>
                <p><a href="http://mybanking.com/" target="_blank" style="color: black">Visit our home page</a></p>
            </div>
          </div>


        </div>
       
      </div>


      <div class="sl-form-wrap">
        <header>
          <a href="<?=base_url();?>" class="logo">
            <img src="<?=base_url();?>assets/bank/images/logo.png" alt="">
          </a>
        </header>

        <div class="content-box">
          <h2>Login Account</h2>
        </div>

        <?php $this->load->view('auth/inc/alerts'); ?>

        <form action="<?=base_url();?>auth/checkin/validate" method="POST" class="sl-form">
          <div class="form-group">
            <label>User ID</label>
            <input type="text" name="userid" placeholder="User ID" required>
          </div>
          <div class="form-group">
            <label>Passcode</label>
            <input type="password" name="passcode" placeholder="Passcode" required>
          </div>

          <div class="form-check">
            <!-- <input type="checkbox" class="form-check-input">
            <label class="form-check-label">Remember Password</label> -->
          </div>
                    
          <button class="btn btn-filled btn-round"><span class="bh"></span> <span>Sigin up</span></button>
          <!-- <p class="notice">Don’t have an account? <a href="#">Signup Now</a></p> -->
        </form>
      </div>

  

  
