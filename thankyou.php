<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <meta http-equiv="refresh" content="5;url=index.php">
  <style>
    body {
      background: linear-gradient(135deg, #e3f2fd, #f8f9fa);
    }
    .thankyou-card {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      padding: 40px;
      max-width: 500px;
      width: 100%;
      animation: fadeInUp 0.6s ease-out;
    }
    .thankyou-icon {
      font-size: 4.5rem;
      color: #3e9dd7;
      margin-bottom: 20px;
      animation: pop 0.5s ease-in-out;
    }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
    @keyframes pop {
      0% { transform: scale(0.5); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
  <div class="thankyou-card text-center">
    <i class="bi bi-check-circle-fill thankyou-icon"></i>
    <h1 class="text-primary mb-3">Thank You!</h1>
    <p class="lead mb-3">🎉 Your message has been successfully sent.<br>We’ll get back to you soon.</p>
    <p class="text-muted mb-4">Redirecting you to the homepage in 5 seconds...</p>
    <a href="index.php" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
      <i class="bi bi-house-door-fill me-2"></i>Go Back to Home
    </a>
  </div>
</body>
</html>
