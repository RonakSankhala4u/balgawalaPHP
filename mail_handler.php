<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $dish = $_POST['dish'];
    $msg = $_POST['msg'];

    // Create an HTML table
    $table = "<table border='1'>

                <tr>
                    <th>Name</th> <th>$name</th>
                </tr>
                <tr>
                    <th>Phone</th> <th>$phone</th>
                </tr>
                <tr>
                    <td>Email</td> <td>$email</td>
                </tr>
                <tr>
                    <th>Dish</th> <th>$dish</th>                    
                </tr>
                <tr>
                    <td>Date</td> <td>$date</td>
                </tr>
                <tr>
                    <td>Message</td> <td>$msg</td>
                </tr>
              </table>";

    $to = 'info@balgawala.com';
    $subject = 'Form Submission';

    // Set content type to HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email";

    $message = "$table";

    if(mail($to, $subject, $message, $headers)){
        echo "<h1>Sent Successfully! Thank you $name, We will contact you shortly!</h1>";
    } else {
        echo "Something went wrong!";
    }
}
?>