<form method="POST">
    <?php
        if (isset($_POST['submit'])) {
            $nameInput = $_POST["nameInput"];
            $emailInput = $_POST["emailInput"];
            $subject = $_POST["subject"];
            $messageInput = $_POST["messageInput"];
        } else {
            $nameInput = "";
            $emailInput = "";
            $subject = "";
            $messageInput = "";
        }

        $number1 = rand(1, 10);
        $number2 = rand(1, 10);
    ?>

    <label>Name</label>
    <input name="nameInput" placeholder="Enter your name here." value=<?php echo $nameInput ?>>

    <label>Email</label>
    <input name="emailInput" type="email" placeholder="Enter your email here." value=<?php echo $emailInput ?>>

    <label>Message title</label>
    <input name="subject" placeholder="Enter the topic of your message here." value=<?php echo $subject ?>>

    <label>Message</label>
    <textarea name="messageInput" placeholder="Enter your message here."><?php echo $messageInput ?></textarea>

    <input type="hidden" name="number1" value="<?php echo $number1 ?>">
    <input type="hidden" name="number2" value="<?php echo $number2 ?>">

    <label>What is <?php echo $number1 ?>+<?php echo $number2 ?>? (Anti-spam)</label>
    <input name="human" placeholder="Enter the answer to the question here.">
    <input id="submit" name="submit" type="submit" value="Submit">

    <?php
        if (isset($_POST['submit'])) {
            if ($_POST['nameInput'] != '' && $_POST['emailInput']!= '' && $_POST['subject']!= '' && $_POST['messageInput']!= '' && $_POST['human']!= '') {
                $name = $_POST['nameInput'];
                $email = $_POST['emailInput'];
                $message = $_POST['messageInput'];
                $from = "From: contact@entrepreneurshipacademy.se";
                $to = 'contact@entrepreneurshipacademy.se';
                $subject = "Contact from {$name}: {$_POST['subject']}";
                $human = $_POST['human'];

                $body = "From: $name\n Email: $email\n\n $message";

                if ($human == $_POST["number1"] + $_POST["number2"]) {
                    if (mail ($to, $subject, $body, $from)) {
                        echo '<p class="status">Your message has been sent.</p>';
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
