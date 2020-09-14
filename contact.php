<!DOCTYPE html>
<html lang="en">
<head>
  <!-- created by yazid matoug -->
  <meta name="description" content="a page contain a contact form .">
  <meta charset="UTF-8">
  <meta name="author" content="matoug yazid">
  <meta name="keywords" content="cv matoug yazid personnel ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- For favicon png -->
  <link rel="shortcut icon" type="image/icon" href="img/favicon.png"/>
  <title>Contact</title>
  <script src="js/contact.js"></script>
  <link rel="stylesheet" href="css/contact.css">
</head>
<body>
  <table>
    <tr>
      <td>
        <button class="back-btn" title="go to home" onclick="location.href='home.php'">Home</button>
        <form action="toSQL/contact_test.php" method="post">
          <div class="elem-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="visitor_name" placeholder="full name" pattern=[A-Z\sa-z]{3,20} required>
          </div>
          <div class="elem-group">
            <label for="email">Your E-mail</label>
            <input type="email" id="email" name="visitor_email" placeholder="example@gmail.com" required>
          </div>
          <div class="elem-group">
            <label for="title">Reason For Contacting Us</label>
            <input type="text" id="title" name="email_title" required placeholder="Unable to Reset my Password" pattern=[A-Za-z0-9\s]{8,60}>
          </div>
          <div class="elem-group">
            <label for="message">Write your message</label>
            <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
          </div>
          <button type="submit">Send Message</button>
        </form>
      </td>
    </tr>
  </table>
    
</body>
</html>