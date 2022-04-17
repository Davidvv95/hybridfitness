<?php
  include_once 'header.php';
?>
    <section class="signup-login-bg-image">
      <div class="signup-login-image-overlay">
        <h2 class="mx-3">Sign Up</h2>
        <h4 class="mx-3">Join us and gain access to more than 40hrs of exclusive lesson material.</h4>
      </div>
    </section>

    <main>
      <section class="container mt-3 mb-3">
        <form class="row g-3" action="includes/signup.inc.php" method="post">
          <div class="col-md-6">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" name="name" placeholder="John Doe" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" name="email" placeholder="youremail@email.com" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="uid" placeholder="Johndoe95" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="pwd" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="password" class="form-label">Repeat Password</label>
            <input type="password" name="pwdrepeat" class="form-control">
          </div>
          <div class="col-md-12">
            <button type="submit" name="submit" class="btn btn-outline-dark">Sign Up</button>
          </div>
        </form>
      </section>

      <?php //Error Messages
        //Check if certain URL exists
        if (isset($_GET["error"])) {
          //Check what the error message could be
          if ($_GET["error"] == "emptyinput") {
            echo "<p class='signup-message'>Fill in all fields.</p>";
          }
          elseif ($_GET["error"] == "invaliduid") {
            echo "<p class='signup-message'>Choose a proper username.</p>";
          }
          elseif ($_GET["error"] == "invalidemail") {
            echo "<p class='signup-message'>Choose a proper email.</p>";
          }
          elseif ($_GET["error"] == "passwordmatch") {
            echo "<p class='signup-message'>Passwords don't match.</p>";
          }
          elseif ($_GET["error"] == "stmtfailed") {
            echo "<p class='signup-message'>Something went wrong.</p>";
          }
          elseif ($_GET["error"] == "usernametaken") {
            echo "<p class='signup-message'>This username has already been taken.</p>";
          }
          elseif ($_GET["error"] == "none") {
            echo "<p class='signup-message green-msg'>You have successfully signed up.</p>";
          }
        }
      ?>
    </main>

<?php
  include_once 'footer.php';
?>
