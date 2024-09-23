<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="js/script.js"></script>
    <title>Portfolio of Angel Ladringan</title>
</head>
<body>
<style>
        /* Base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body,
        html {
            background: #081b29;
            color: #fff;
            width: 100%;
            height: 100%;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        footer {
            display: flex;
            align-items: center;
            flex-direction: column;
            row-gap: 1.4rem;
            padding: 30px 0;
        }

        footer p {
            font-size: 0.9rem;
        }

        .header {
            width: 100%;
            padding: 20px 10%;
            background: #081b29;
            color: #fff;
            position: fixed;
            top: 0;
            z-index: 10;
        }

        .header a {
            color: #fff;
        }

        .section {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 10%;
            min-height: 80vh;
        }

        .logo {
            position: relative;
            font-size: 25px;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            cursor: default;
            opacity: 0;
            animation: slideRight 1s ease forwards;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .navbar a {
            display: inline-block;
            font-size: 25px;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: .3s;
            opacity: 5;
            animation: slideTop .5s ease forwards;
            animation-delay: calc(.2s * var(--i));
        }

        .navbar a.active {
            color: #D247E2;
            border-bottom: 2px solid #D247E2;
        }

        .navbar a:hover {
            color: #D247E2;
        }

        /* About section */
        .about-content {
            display: flex;
            height: auto;
            width: 100%;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .about-content .top {
            text-align: center;
            box-sizing: border-box;
        }

        .about-content .me {
            margin-top: 5%;
            color: #D247E2;
        }

        .about-content h3 {
            padding: 20px;
            font-size: 25px;
            font-weight: 700;
            opacity: 0;
            animation: slideBottom 1s ease forwards;
            animation-delay: .7s;
        }

        .about-content h3:nth-of-type(2) {
            animation: slideTop 1s ease forwards;
            animation-delay: .7s;
        }

        .about-content h3 span {
            color: #D247E2;
        }

        h1 {
            font-size: 40px;
            font-weight: 700;
            margin: -3px 0;
            opacity: 0;
            animation: slideRight 1s ease forwards;
            animation-delay: 1s;
            padding: 0px 50px 0px 50px;
        }

        .about-content .main-about p {
            margin-top: 30px;
            font-size: 25px;
            opacity: 0;
            animation: slideLeft 1s ease forwards;
            animation-delay: 1s;
        }

        .btn-box {
            margin: 30px;
            display: inline-block;
            padding: 12px 20px;
            background: #D247E2;
            border-radius: 40px;
            font-size: 15px;
            color: #081b29;
            letter-spacing: 1px;
            text-decoration: none;
            font-weight: 600;
            opacity: 0;
            animation: slideTop .1s ease forwards;
            animation-delay: 2s;
            box-shadow: 0 0 5px #D247E2, 0 0 25px #D247E2;
        }

        .btn-box:hover {
            box-shadow: 0 0 50px #D247E2, 0 0 25px #D247E2, 0 0 50px #D247E2, 0 0 100px #D247E2, 0 0 200px #D247E2;
        }

        .main-about h2 {
            padding-top: 10%;
            padding-bottom: 5%;
        }

        .main-about,
        .skill {
            flex: 1 1 30%;
            margin-top: 10px;
            text-align: center;
        }

        .image img {
            width: 50%;
            text-align: center;
            background: none;
        }

        .main-about p:hover {
            color: #60DAE1;
        }

        .main-about h3:hover {
            color: #60DAE1;
        }

        .main-about h3 {
            font-size: 25px;
        }

        .main-about .skill {
            font-size: 40px;
            color: #D247E2;
        }

        /* Projects section */
        #projects {
            color: aliceblue;
            font-size: 20px;
            line-height: 1.4;
            margin-bottom: 4rem;
        }

        .project-content .proj {
            padding-top: 20px;
            text-align: center;
            color: #D247E2;
        }

        .project-content {
            padding: 70px;
        }

        .projects-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(259px, 1fr));
            grid-gap: 40px;
            margin-top: 50px;
        }

        .projects-list div {
            background-color: transparent;
            padding: 40px;
            font-size: 13px;
            font-weight: 13px;
            border-right: 10px;
            border-radius: 20px;
            transition: background 0.5s, transform 0.5s;
            box-shadow: 1px 1px 20px #a519b5, 1px 1px 40px #d720eb;
        }

        .projects-list div i {
            font-size: 50px;
            margin-bottom: 30px;
        }

        .projects-list div h2 {
            font-size: 30px;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .projects-list div a {
            text-decoration: none;
            color: #000000;
            font-size: 12px;
            margin-top: 20px;
            display: inline-block;
        }

        .read {
            display: inline-block;
            padding: 6px 16px;
            margin-top: 15px;
            background: #D247E2;
            border-radius: 40px;
            font-size: 12px;
            color: #081b29;
            letter-spacing: 1px;
            text-decoration: none;
            font-weight: 600;
            opacity: 0;
            animation: slideTop .1s ease forwards;
            animation-delay: 2s;
            box-shadow: 0 0 5px #D247E2, 0 0 25px #D247E2;
        }

        .read:hover {
            box-shadow: 0 0 30px #D247E2, 0 0 15px #D247E2, 0 0 40px #D247E2, 0 0 90px #D247E2, 0 0 190px #D247E2;
        }

        .projects-list div:hover {
            transform: translateY(-10px);
        }

        /* Contact section */
        .contact-content {
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 5%;
        }

        .contact-content .cont {
            padding-top: 20px;
            text-align: center;
            color: #D247E2;
        }

        .contact-content .form-container {
            width: 80%;
            max-width: 800px;
            margin: auto;
            background: #f3f3f3;
            padding: 0px 20px 5px 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            animation: slideUp 0.5s ease-in-out;
        }

        .contact-content .form-title {
            color: #333;
            text-align: center;
            padding-top: 20px;
            margin-bottom: 10px;
        }

        .form-row {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        textarea {
            height: 150px;
        }

        .submit-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }

        .reset-btn {
            background-color: #f44336;
            color: white;
        }

        .reset-btn:hover {
            background-color: #e31e1e;
        }

        .success-msg,
        .error-msg {
            color: #ffffff;
            background-color: green;
            border-radius: 8px;
            text-align: center;
        }

        .error-msg {
            background-color: red;
        }

        @keyframes slideTop {
            0% {
                transform: translateY(-20px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideBottom {
            0% {
                transform: translateY(20px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideRight {
            0% {
                transform: translateX(-20px);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideLeft {
            0% {
                transform: translateX(20px);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideUp {
            0% {
                transform: translateY(50px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* .home-sci Styles */
        .home-sci {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .home-sci a {
            color: #fff;
            font-size: 30px;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .home-sci a:hover {
            color: #D247E2;
        }

        .home-sci i {
            border: 0.5px solid transparent;
            box-shadow: 0 0 8px #D247E2;
            border-radius: 50px;
            padding: 5px;
            margin-bottom: 30px;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .navbar a {
                font-size: 18px;
            }

            .projects-list div h2 {
                font-size: 24px;
            }
        }

        @media (max-width: 992px) {
            .section {
                padding: 40px 5%;
            }

            .about-content .main-about,
            .about-content .skill {
                flex: 1 1 45%;
            }
        }

        @media (max-width: 768px) {
            .about-content {
                flex-direction: column;
            }

            .about-content .main-about,
            .about-content .skill {
                flex: 1 1 100%;
                margin-top: 20px;
            }

            .navbar a {
                font-size: 16px;
            }

            .home-sci {
                flex-direction: row;
                gap: 20px;
            }

            .home-sci a {
                font-size: 25px;
                margin: 5px 0;
            }

            .home-sci i {
                font-size: 25px;
                margin-bottom: 20px;
            }

            .g-recaptcha {
                
                margin: 20px auto;
            }
        }

        @media (max-width: 576px) {
            .header {
                padding: 10px 5%;
            }

            .about-content h3 {
                font-size: 20px;
            }

            .about-content .main-about p {
                font-size: 18px;
            }

            .projects-list {
                grid-template-columns: 1fr;
            }

            .projects-list div h2 {
                font-size: 20px;
            }

            .projects-list div {
                padding: 20px;
            }

            .project-content {
                padding: 40px;
            }

            .home-sci i {
                font-size: 20px;
                margin-bottom: 15px;
            }

            .g-recaptcha {
                width: 100%;
                margin: 15px auto;
            }
        }

        @media (max-width: 480px) {
            .header {
                gap:10px;
            }

            .about-content .top,
            .about-content .me {
                font-size: 20px;
            }

            h1 {
                font-size: 30px;
            }

            .project-content {
                padding: 20px;
            }

            .home-sci i {
                font-size: 15px;
                margin-bottom: 10px;
            }

            .g-recaptcha {
                width: 100%;
                margin: 10px auto;
            }
        }

        @media (max-width: 320px) {
            .g-recaptcha {
            display:flex;
            margin: 20px auto;
        }
        }

        /* .g-recaptcha Styles */
        .g-recaptcha {
            display:flex;
            margin: 20px auto;
        }
    </style>




    <header class="header">
        <nav class="navbar">
            <a href="#about" class="logo">{{$header->logo}}</a>
            <a href="#about">{{$header->about}}</a>
            <a href="#projects">{{$header->projects}}</a>
            <a href="#contact">{{$header->contact}}</a>
        </nav>
    </header>

    <section id="about" class="section">
        <div class="about-content">
        <div class="top">
        <h1 class="me">ABOUT ME</h1>

        <div class="image">
        <img src="{{Voyager::image($about->img)}}" alt="Angel Ladringan">
        </div>

        <h3>{{$about->greetings}}</h3>
        <h1>{{$about->introName}}</h1>
        <h3>{{$about->introGoal}}</h3>
    </div>
        
        <div class="main-about">
        <p class="p1">{{$about->text1}} 
            <br>{{$about->text2}} 
            <br>{{$about->text3}}</p>
        <a href="uploads/download cv.pdf" download="Angel_Ladringan_CV" class="btn-box">Download CV</a>

        <hr>
        
        <h2 class="skill">Skill</h2>
        <ul>
            <h3>{{$about->skill1}}</h3>
            <h3>{{$about->skill2}}</h3>
        </ul>
        </div>
</div>
    </section>

    
    <section id="projects" class="section">
    <div class="project-content">
        <hr>
        <h1 class="proj">MY PROJECTS</h1>
        <div class="projects-list">
            <div class="project-item">
                <i class='bx bx-cake' style='color:#D247E2'></i>
                <h2>Cake Topper Edits</h2>
                <p>Transform your celebration cakes into pleasing looks with my custom cake toppers.</p>
                <a href="assets/cake_projects.html" class="read">Explore</a>
            </div>
            <div class="project-item">
                <i class='bx bx-game' style='color:#D247E2'></i>
                <h2>Valorant Gameplay</h2>
                <p>Immerse yourself in the adrenaline-pumping world of Valorant, where strategy and skill converge in an electrifying battle for supremacy. </p>
                <a href="assets/valorant_projects.html" class="read">Explore</a>
            </div>
        </div>
    </div>
</section>



    <section id="contact" class="section">
        <div class="contact-content">
            <hr>
            <h1 class="cont">MY CONTACTS</h1>
            <div class="home-sci">
            @foreach ($social as $social)
            <a href='{{ $social->url }}' target="_blank"><i class='{{ $social->icon }}'></i></a>
            @endforeach
            </div>
            <div class="form-container">
                <h2 class="form-title">Contact Me</h2>
                <!-- Contact Form -->
        <form action="{{ route('contacts.store') }}" method="POST" class="contact-form" id="contact-form">
                @csrf
                <div class="form-row">
                    <input type="text" id="type" name="type" placeholder="Project Type" required autocomplete="off">
                </div>
                <div class="form-row">
                    <input type="text" id="name" name="name" placeholder="Name" required autocomplete="off">
                </div>
                <div class="form-row">
                    <input type="text" id="email" name="email" placeholder="Email"required>
                </div>
                <div class="form-row">
                    <textarea id="message" name="message" placeholder="Message" required></textarea>
                </div>
                <div class="g-recaptcha" 
                    data-sitekey="6Ld2nOUpAAAAACowdOMnbaK1CoKEgd6zYZVFTycE"
                    data-callback="recaptchaCallback"
                    data-expired-callback="recaptchaExpiredCallback">
                </div>

                <div class="form-row buttons">
                    <button type="submit" class="submit-btn">Send Message</button>
                </div>
                </form>
            </div>
        </div>
    </section>


    <footer>
        <p>© 2024 Angel Ladringan. All rights reserved.</p>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const submitButton = document.querySelector('.submit-btn');

    form.addEventListener('submit', function(event) {
        const recaptchaResponse = grecaptcha.getResponse();
        if (!recaptchaResponse) {
            event.preventDefault();
            alert('Please complete the reCAPTCHA.');
        }
    });

    window.recaptchaCallback = function() {
        submitButton.disabled = false;
    }

    window.recaptchaExpiredCallback = function() {
        submitButton.disabled = true;
    }

    // Initially disable the submit button
    submitButton.disabled = true;
});
    </script>
</body>
</html>







