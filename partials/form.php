<body>
  <form method="POST">

    <label>Name</label>
    <input name="name" placeholder="Enter your name here.">

    <label>Email</label>
    <input name="email" type="email" placeholder="Enter your email here.">

    <label>Message title</label>
    <input name="subject" placeholder="Enter the topic of your message here.">

    <label>Message</label>
    <textarea name="message" placeholder="Enter your message here."></textarea>

    <?php
        $number1 = rand(1, 10);
        $number2 = rand(1, 10);
    ?>

    <label>What is <?php echo $number1 ?>+<?php echo $number2 ?>? (Anti-spam)</label>
    <input name="human" placeholder="Enter the answer to the question here.">
    <input id="submit" name="submit" type="submit" value="Submit">

  <?php
      if (isset($_POST['submit'])) {
          if ($_POST['name'] != '' && $_POST['email']!= '' && $_POST['subject']!= '' && $_POST['message']!= '' && $_POST['human']!= '') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = $name;
        //$to = 'granlund.johannes@gmail.com';
        $to = 'Fractive@live.com';
        $subject = $_POST['subject'];
        $human = $_POST['human'];

        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

            if ($human == $number1 + $number2) {
                if (mail ($to, $subject, $body, $from)) {
                    echo '<p class="status">Your message has been sent.</p>';
                    unset($_POST);
                } else {
                    echo '<p class="status">Something went wrong, try again.</p>';
                }
            } else {
                echo '<p class="status">You answered the anti-spam question incorrectly.</p>';
            }
        } else {
            echo '<p class="status">You need to enter information in all fields.</p>';
        }
    }
?>
</form>
</body>
