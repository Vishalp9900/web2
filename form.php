<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);
    echo "
    <html>
    <head>
      <title>Form Submission</title>
      <link rel='stylesheet' href='css/styles.css'>
    </head>
    <body>
      <header>
        <h1>Submitted Information</h1>
      </header>
      <section>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Date of Birth:</strong> $dob</p>
        <p><strong>Gender:</strong> $gender</p>
        <p><strong>Address:</strong> $address</p>
      </section>
      <footer>
        <a href='index.html'>Go Back</a>
      </footer>
    </body>
    </html>
    ";
} else {
    echo "Invalid access method.";
}
?>
