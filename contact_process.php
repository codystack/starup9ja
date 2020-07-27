<?php
$to = "info@starup9ja.com";
$subject = "New Contact";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
	$body .= \"<td style='border:none;'><strong>Name:</strong> $name</td>\";
	$body .= \"<td style='border:none;'><strong>Email:</strong> $email</td>\";
	$body .= \"<td style='border:none;'><strong>Email:</strong> $phone</td>\";
	$body .= \"</tr>\";
	$body .= \"<tr><td style='border:none;'><strong>Subject:</strong> $csubject</td></tr>\";
	$body .= \"<tr><td></td></tr>\";
	$body .= \"<tr><td colspan='2' style='border:none;'>$message</td></tr>\";
<th>Name: $name</th>
<th>Email: $email</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: " . $email . "\r\n";

mail($to,$subject,$message,$headers);
?>

