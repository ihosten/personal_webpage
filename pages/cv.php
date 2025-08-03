<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ian Hosten CV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/logo_ih_coaching.png">
    <link rel="stylesheet" type="text/css" href="../stylesheet.css">

    <style>
        body, html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .content-wrapper {
            padding: 1em;
        }

        h2 {
            text-align: center;
            font-size: 2em;
            margin-top: 1em;
            margin-bottom: 1em;
        }

        .pdf-container {
            width: 100%;
            height: 80vh;
            max-height: 800px;
        }

        .pdf-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        @media (max-width: 768px) {
            h2 {
                font-size: 1.5em;
            }

            .pdf-container {
                height: 70vh;
                max-height: none;
            }
        }
    </style>
</head>
<body>
    <?php require '../components/navbar.html'; ?>

    <div class="content-wrapper">
        <h2>My CV</h2>
        <div class="pdf-container">
            <iframe
                src="/documents/CV_Ian_Hosten.pdf"
                title="Embedded PDF Viewer"
            ></iframe>
            <p style="text-align:center;">
                <a href="/documents/CV_Ian_Hosten.pdf" download>Download CV (PDF)</a>
            </p>
        </div>
    </div>
    <script>
    window.addEventListener('DOMContentLoaded', () => {
        const pdfFrame = document.querySelector('iframe');
        if (pdfFrame) {
        pdfFrame.src = pdfFrame.src; // Force reload on nav
        }
    });
    </script>
</body>
</html>
