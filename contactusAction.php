<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Database connection and insertion
    $conn = new mysqli('localhost', 'root', '', 'WebProject');
    $stmt = $conn->prepare("INSERT INTO contact (fname, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Message Received</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .thank-you-section {
            text-align: center;
            padding: 50px 20px;
        }

        .thank-you-section h1 {
            color: #ff6b6b;
            margin-bottom: 30px;
        }

        .message-box {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            max-width: 600px;
            margin: 0 auto;
        }

        .message-box h2 {
            color: #155724;
            margin-bottom: 20px;
        }

        .submitted-info {
            text-align: left;
            margin-top: 30px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .submitted-info h3 {
            color: #ff6b6b;
            margin-bottom: 15px;
            font-size: 1.2em;
        }

        .submitted-info p {
            color: #333;
            margin: 10px 0;
        }

        .submitted-info strong {
            color: #ff6b6b;
        }

        .back-link {
            margin-top: 30px;
        }

        .back-link a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff6b6b;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="layout">
        <main class="main-content">
            <section class="thank-you-section">
                <h1>
                    <i class="fas fa-check-circle"></i> Thank You!
                </h1>
                <div class="message-box">
                    <h2>Your Message Has Been Submitted!</h2>
                    
                    <div class="submitted-info">
                        <h3>Submitted Information:</h3>
                        <p><strong>Name:</strong> <?php echo $name; ?></p>
                        <p><strong>Email:</strong> <?php echo $email; ?></p>
                        <p><strong>Subject:</strong> <?php echo $subject; ?></p>
                        <p><strong>Message:</strong> <?php echo nl2br($message); ?></p>
                    </div>

                    <div class="back-link">
                        <a href="contact.html">
                            <i class="fas fa-arrow-left"></i> Back to Contact Form
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>