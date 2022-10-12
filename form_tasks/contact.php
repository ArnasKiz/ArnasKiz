<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Form</title>
</head>

<body>

    <?php
    if (isset($_POST['contact_form'])) {
        require_once('./helpers/write.php');


        $email = '';
        $errors = [];
        if (isset($_POST['email'])) {
            if ($_POST['email']) {
                $email = $_POST['email'];
            } else {
                $errors['email'][] = 'Emails are required';
            }
        }
        if (count($errors) == 0) {
            //<!--By submitting form use write() form helpers/write.php to write into file-->
            // ./emails/
            $filename = date('Y-m-d_H-i-s') . '.txt';
            $content = 'Email' . $email . "\n";
            $content .= 'Phone number' . $_POST['phone_number'] . "\n";
            $content .= 'Question' . $_POST['question'] . "\n";
            $content .= 'Contact_form' . $_POST['contact_form'] . "\n";
            $result = write('./contacts', $filename, $content);
            if ($result) {
                echo '<strong>Contact form submitted succesfully.';
            } else {
                echo '<strong>Oops.. Something went wrong';
            }
        } else {
            echo '<ul>';
            foreach ($errors as $field => $messages) {
                foreach ($messages as $message) {
                    echo '<li>' . $message . '</li>';
                }
            }
            echo '</ul>';
        }
    }



    ?>

    <!--Create form -->
    <form action="./contact.php" method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" require="True" name="email" />
        </div>
        <div>
            <label for="phone_number">Phone number</label>
            <input type="phone_number" type="number" name="phone_number" />
        </div>
        <div>
            <label for="question">Question</label>
            <textarea name="question" id="question" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="hidden" name="contact_form" value="1" />
            <button name="contact_form" type="submit">Submit</button>
        </div>


    </form>
    <!-- Allow to submit into contacts.php use POST method -->



    <!--By submitting form use write() form helpers/write.php to write into file-->


</body>

</html>