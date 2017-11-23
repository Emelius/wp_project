<body>
  <form method="post" action="">

    <label>Name</label>
    <input name="name" placeholder="Type Here">

    <label>Email</label>
    <input name="email" type="email" placeholder="Type Here">

    <label>Message</label>
    <textarea name="message" placeholder="Type Here"></textarea>

    <label>*What is 2+2? (Anti-spam)</label>
    <input name="human" placeholder="Type Here">
    <input id="submit" name="submit" type="submit" value="Submit">
  <?php
  if ($_POST['submit']) {
      if ($name != '' && $email != '') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: eacademy website';
    $to = 'granlund.johannes@gmail.com';
    $subject = 'Hello';
    $human = $_POST['human'];

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

            if ($human == '4') {
                if (mail ($to, $subject, $body, $from)) {
    	        echo '<p class="status">Your message has been sent!</p>';
    	    } else {
    	        echo '<p class="status">Something went wrong, go back and try again!</p>';
    	    }
    	} else if ($_POST['submit'] && $human != '4') {
    	    echo '<p class="status">You answered the anti-spam question incorrectly!</p>';
    	}
        } else {
            echo '<p class="status">You need to fill in all required fields!!</p>';
        }
    }
?>
</form>
</body>
