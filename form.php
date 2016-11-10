<?php
    header('Access-Control-Allow-Origin: *');  
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $tel = trim($_POST["tel"]);
        $dotaz = trim($_POST["dotaz"]);

      

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "nishitani@tldvision.com";

        // Set the email subject.
        $subject = "Autoškola: $name";

        // Build the email content.
        $email_content = "Jméno: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Tel: $tel\n";
        $email_content .= "Dotaz: \n$dotaz\n";

        // Build the email headers.
        $email_headers = "Od: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
           // http_response_code(200);
            echo "Děkujeme, Váš dotaz je úspěšně odeslán.";
        } else {
            // Set a 500 (internal server error) response code.
            //http_response_code(500);
            echo "Omlouváme se, Váš dotaz se nepodařilo odeslat.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
       // http_response_code(403);
        echo "Nastal problém. Prosím zkuste to znovu.";
    }

?>
