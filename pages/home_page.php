<!DOCTYPE html>
<html lang="en">
<head>
    <title>ianhosten.be</title>

    <link rel="stylesheet" type="text/css" href="../stylesheet.css">
    <link rel="icon" type="image/x-icon" href="/images/logo_ih_coaching.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        .background-image {
            background-image: url('../images/homepage_background.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            position: relative;
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            padding: 0 1rem;
        }

        .hero-text h1 {
            font-size: 2.5rem;
            margin: 0.5rem 0;
        }

        .hero-text h2 {
            font-size: 1.25rem;
            font-weight: 300;
        }

        /* Responsive styles for smaller screens */
        @media (max-width: 768px) {
            .hero-text h1 {
            font-size: 1.75rem;
            }

            .hero-text h2 {
            font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .hero-text h1 {
            font-size: 1.4rem;
            }

            .hero-text h2 {
            font-size: 0.9rem;
            }
        }
        </style>
</head>
<body>
  <?php require '../components/navbar.html';?>

  <div class="background-image">
    <div class="hero-text">
      <h1>Welcome to Ian Hosten Coaching</h1>
      <h2>The place for the competitive endurance athlete looking for guidance in strength or endurance training</h2>
    </div>
  </div>
</body>
</html>