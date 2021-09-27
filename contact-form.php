<?php
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_company = $_POST['customer_company'];
    $customer_phone = $_POST['customer_phone'];
    $customer_message = $_POST['customer_message'];

    $email_centicon = 'services@centicon.com.au';
    $email_subject = "New Customer Message"

    $email_body = "Customer name: $customer_name.\n".
                    "Customer email: $customer_email.\n".
                        "Company: $customer_company.\n".
                            "Customer phone: $customer_phone.\n\n".
                                "Message: $customer_message.\n";

    $to = "roah.egl@gmail.com";
    $headers = "From: $email_centicon \r\n";
    $headers .= "Reply-To: $customer_email \r\n";
    mail($to, $email_subject, $email_body, $headers);
    headers("Location: index.html");
?>