<?php
  include_once 'header.php';
?>

      <div class="contact-container">
        <form action="includes/contactform.inc.php" method="post">

          <h3>GET IN TOUCH</h3>
          <input type="text" name="name" placeholder="Full Name" required>
          <input type="text" name="email" placeholder="Your E-mail" required>
          <input type="text" name="subject" placeholder="Subject">
          <textarea name="message" rows="1" placeholder="Leave your message here."></textarea>
          <button type="submit" name="submit">Submit</button>

        </form>
      </div>

<?php
  include_once 'footer.php';
?>
