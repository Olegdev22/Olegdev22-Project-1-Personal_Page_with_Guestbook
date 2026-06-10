<section>
  <h2>Leave a Public Note/Question</h2>
  <form method="post">
    <!-- CSRF -->
    <input type="hidden" name="csrfToken" value="<?= $data['csrfToken'] ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    
    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br><br>
    
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" cols="30"></textarea><br><br>
    
    <button type="submit" value="Submit">Send Message</button>
  </form>
</section>