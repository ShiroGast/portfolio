<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Portfolio</title>
</head>
<body>
    <head>
        <div class="header" id="header">
            <nav>
                <div class="logo">
                    <img src="logo.png" alt="Logo">
                </div>
                <div class="links">
                    <a href="http://portfolio.test/#home">Home</a>
                    <a href="http://portfolio.test/#about">About</a>
                    <a href="http://portfolio.test/#projects">Projects</a>
                    <a href="http://portfolio.test/#contact">Contact</a>
                </div>
                <div class="login">
                    <a href="">Login</a>
                    <a href="">Register</a>
                </div>
            </nav>
        </div>
    </head>
    <main>
        <section id="home" class="portfolio">
            <div class="portfolio_text">
                <h1>Portfolio</h1>
                <p>Welcome to my portfolio website! Here you can explore my work and learn more about me. Feel free to browse through the sections and don't hesitate to reach out if you have any questions or inquiries. Enjoy your visit!</p>
            </div>
        </section>
        <section id="about" class="about">
            <div class="about_text">
                <h2>About me</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sit assumenda vitae quis blanditiis temporibus pariatur cum laboriosam corrupti unde officiis dolores odio cumque voluptatem quibusdam, aliquid, id minus iusto? Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dignissimos ut sit temporibus illum ad totam quasi, eveniet ex debitis esse harum quia accusantium eaque tempore earum corporis expedita deleniti. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto amet, maiores laborum, obcaecati aperiam quis sed magnam praesentium corrupti hic temporibus aliquam assumenda est laudantium fugiat tempore accusamus ex! Id! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum minima ratione velit ipsum illo at voluptates, aspernatur consequatur adipisci ut, officia vitae ex accusamus sit numquam eligendi cumque, necessitatibus veritatis?</p>
            </div>
            <div class="about_img">
                <img src="me.png" alt="Img placeholder">
            </div>
        </section>
        <section id="projects" class="projects_sections">
            <div class="projects_text">
                <h2>Projects</h2>
                <p>These are some of my projects:</p>
            </div>
            <div class="projects">
                <div class="project">
                    <img src="{{ asset('img/Cat03.jpg') }}" alt="Project img">
                    <p>Project</p>
                </div>
                <div class="project">
                    <img src="{{ asset('img/Cat03.jpg') }}" alt="Project img">
                    <p>Project</p>
                </div>
                <div class="project">
                    <img src="{{ asset('img/Cat03.jpg') }}" alt="Project img">
                    <p>Project</p>
                </div>
                <div class="project">
                    <img src="{{ asset('img/Cat03.jpg') }}" alt="Project img">
                    <p>Project</p>
                </div>
                <div class="project">
                    <img src="{{ asset('img/Cat03.jpg') }}" alt="Project img">
                    <p>Project</p>
                </div>
                <div class="project">
                    <img src="{{ asset('img/Cat03.jpg') }}" alt="Project img">
                    <p>Project</p>
                </div>
                <div class="project">
                    <img src="{{ asset('img/Cat03.jpg') }}" alt="Project img">
                    <p>Project</p>
                </div>
                <div class="project">
                    <img src="{{ asset('img/Cat03.jpg') }}" alt="Project img">
                    <p>Project</p>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="contact_text">
                <h2>Contact</h2>
                <p>You can contact me at: <a href="mailto:shiorgast@gmail.com">shirogast@gmail.com</a></p>
                <p>Or you can send me a message usig this form:</p>
            </div>
            <div class="contact_form">
                <form action="">
                    <input required class="text" type="text" placeholder="Name">
                    <input required class="email" type="email" placeholder="Email">
                    <textarea required name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                    <button>Send</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
    </footer>
</body>
</html>
