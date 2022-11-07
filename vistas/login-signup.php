<div class="container-form">
  <section id="formHolder">

    <div class="row">

      <div class="col-sm-6 form">
    
        <div class="login form-peice switched">
          <form class="login-form" action="index.php?s=login-post" method="post">
            <div class="form-group">
              <label for="name">Username</label>
              <input type="text" name="username" id="name" required>
            </div>

            <div class="form-group">
              <label for="loginPassword">Password</label>
              <input type="password" name="loginPassword" id="loginPassword" required>
            </div>

            <div class="CTA">
              <input type="submit" value="Login">
              <a href="#" class="switch">I'm New</a>
            </div>
          </form>
        </div>
        <div class="signup form-peice">
      <form action="index.php?s=signup-post" class="signup-form" action="#" method="post">

            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" name="username" id="name" class="name">
              <span class="error"></span>
            </div>

            <div class="form-group">
              <label for="email">Email Adderss</label>
              <input type="email" name="emailAdress" id="email" class="email">
              <span class="error"></span>
            </div>

            <div class="form-group">
              <label for="phone">Phone Number - <small>Optional</small></label>
              <input type="text" name="phone" id="phone">
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="pass">
              <span class="error"></span>
            </div>

            <div class="form-group">
              <label for="passwordCon">Confirm Password</label>
              <input type="password" name="passwordCon" id="passwordCon" class="passConfirm">
              <span class="error"></span>
            </div>

            <div class="CTA">
              <input type="submit" value="Signup Now" id="submit">
              <a href="#" class="switch">I have an account</a>
            </div>
          </form>
        </div>
      </div>
    
    </div>
  </section>
 