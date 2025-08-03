<!DOCTYPE html>
<html lang="en">
<head>
    <title>ianhosten.be</title>

    <link rel="stylesheet" type="text/css" href="../stylesheet.css">
    <link rel="icon" type="image/x-icon" href="/images/logo_ih_coaching.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        /* Flex container for profile and text */
        #about_container {
            display: flex;
            align-items: flex-start;
            gap: 2em;
            padding: 20px;
            margin-top: 3em; /* replace your <br> spacing */
        }

        /* Profile picture styling */
        #profile_pic img {
            width: 250px;
            border-radius: 10%;
            /* Remove float and position */
            float: none;
            position: static;
            margin: 0;
        }

        /* About text styling */
        #about_text {
            flex: 1; /* fill remaining space */
            /* Remove absolute position */
            position: static;
            left: auto;
            padding: 1em;
            border-left: solid gray 1px;
        }

        /* Responsive: stack vertically on small screens */
        @media (max-width: 768px) {
            #about_container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            #profile_pic img {
                width: 20em; /* smaller on mobile */
                margin-bottom: 1em;
            }

            #about_text {
                padding: 0 1em;
                border-left: none;               /* remove left border */
                border-top: solid gray 1px;     /* add top border */
                padding-top: 1.5em;               /* spacing below the border */
            }
        }
    </style>
</head>
<body>
    <?php require '../components/navbar.html';?>

    <div id="about_container">
        <div id="profile_pic">
            <img src="/images/profile_pic.jpg" alt="Profile picture">
        </div>
        <div id="about_text">
            Hi, I'm Ian Hosten <br><br>

            A sport scientist who is passionate about coaching and the implementation of science and technology in coaching.<br><br>

            I studied physical education at Ghent University where I specialized in training and coaching.        
            During these 5 years I deepened myself into both endurance and strength training.
            I expanded my knowledge about endurance training by getting an additional degree as cycling trainer.
            During my <a href="https://lib.ugent.be/nl/catalog/rug01:003202849?faculty=GE-PP&i=0&lang=und&q=ian+hosten&sticky=type-faculty-lang&type=master" target="_blank">master's thesis</a> I focused on the quantification of training load in strength training.<br><br>

            After I completed my years at Ghent University I followed an additional education at Howest University of Applied Sciences.
            By following the Advanced bachelor of bioinformatics I increased my skills in data analytics, data base management and the development of web applications.<br><br>

            Now I am active as a strength and endurance trainer, coaching a wide range of athletes,
            from professional cyclists to regular people who simply want to improve their health.<br><br>

            I deeply believe in a science-based approach to training. For this I try to develop web tools that ease the life of coaches.<br><br>

            If you are interested in one of my tools, looking for a coach or want to collaborate, 
            feel free to drop me a message!         
        </div>
    </div>
</body>
</html>