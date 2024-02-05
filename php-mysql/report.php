<html>
    <head>
        <title>Aliens</title>
    </head>
    <body>
        <h2>Report an abduction</h2>
        <?php
        //var_dump($_POST);
        // phpinfo();
            $when_it_happened = $_POST['whenithappened'];
            $how_long = $_POST['howlong'];
            $how_many = $_POST['howmany'];
            $alien_description = $_POST['aliendescription'];
            $what_they_did = $_POST['whattheydid'];
            $fang_spotted = $_POST['fangspotted'];
            $other = $_POST['other'];
            $email = $_POST['email'];

            //confirmation text

            echo 'Thanks for submitting the form.<br/>';
            echo 'You were abducted ' . $when_it_happened;
            echo ' and were gone for ' . $how_long . '<br/>';
            echo 'Number of aliens: ' . $how_many . '<br/>';
            echo 'Describe them: ' . $alien_description . '<br/>';
            echo 'The aliens did this: ' . $what_they_did . '<br/>';
            echo 'Was Fang there? ' . $fang_spotted . '<br/>';
            echo 'Other comments: ' . $other . '<br/>';
            echo 'Your email address is: ' .  $email;

            //email message

            $msg = "$name was abducted $when_it_happened and was gone for $how_long . \n" . 
            "Number of aliens: $how_many \n" .
            "What they did: $what_they_did \n" .
            "Fang_spotted: $fang_spotted \n" . 
            "Other comments: $other";

        ?>
    </body>
</html>