<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KasirQ | Login</title>

  <!-- Google Font: Poppins -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('') }}plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('') }}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('') }}dist/css/adminlte.min.css">
  <!-- Custom styles -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .btn:focus, .form-control:focus {
      box-shadow: none;
      outline: none;
    }
    .form-control::placeholder {
      color: #adb5bd;
      opacity: 0.8;
    }
    .login-page, .register-page {
      align-items: center;
      display: flex;
      height: 100vh;
      justify-content: center;
    }
    .social-auth-links .btn:hover {
      transform: translateY(-3px);
      transition: all 0.3s;
    }
    .card {
      transition: all 0.3s ease;
    }
    .btn {
      transition: all 0.3s ease;
    }
  </style>
</head>