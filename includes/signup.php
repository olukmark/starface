
<?php

$host   = "localhost";
$dbname = "starface_db";
$user   = "root";
$pass   = "";
$email    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$datetime = date('Y-m-d H:i:s');

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    if (empty($email)) {
        $status = "error";
        $message = "The email address field must not be blank";
    } else if (!preg_match('/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email)) {
        $status = "error";
        $message = "You must fill the field with a valid email address";
    } else {
        $existingSignup = $db->prepare("SELECT COUNT(*) FROM newsletter_signups WHERE email='$email'");
        $existingSignup->execute();
        $data_exists = ($existingSignup->fetchColumn() > 0) ? true : false;

        if (!$data_exists) {
            $sql = "INSERT INTO newsletter_signups (email, signup_date) VALUES (:email, :datetime)";
            $q = $db->prepare($sql);
            $q->execute(
                array(
                    ':email' => $email,
                    ':datetime' => $datetime
            ));

            if ($q) {
                $status = "success";
                $message = "You have been successfully subscribed";
            } else {
                $status = "error";
                $message = "An error occurred, please try again";
            }
        } else {
            $status = "error";
            $message = "This email is already subscribed";
        }
    }

    $data = array(
        'status' => $status,
        'message' => $message
    );

    echo json_encode($data);

    $db = null;
}
    catch(PDOException $e) {
    echo $e->getMessage();
}


?>