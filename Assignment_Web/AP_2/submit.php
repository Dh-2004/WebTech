<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submitted</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h1>Form Submitted Successfully!</h1>
    <h2>Your Details:</h2>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
    <p><strong>Gender:</strong> <?php echo htmlspecialchars($_POST['gender']); ?></p>
    <p><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($_POST['message'])); ?></p>
  </div>
</body>
</html>
