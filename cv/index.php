<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Your Name</h1>
        <p>Web Developer | IoT Enthusiast</p>
        <nav>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#experience">Experience</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section id="about">
        <h2>About Me</h2>
        <img src="your-photo.jpg" alt="Your Photo" class="profile-photo">
        <p>Hello! I'm a passionate web developer and IoT enthusiast. I love building projects that bridge the gap between software and hardware.</p>
    </section>

    <section id="skills">
        <h2>Skills</h2>
        <ul>
            <li>HTML, CSS, JavaScript</li>
            <li>PHP & MySQL</li>
            <li>IoT Development</li>
        </ul>
    </section>

    <section id="experience">
        <h2>Experience</h2>
        <div class="job">
            <h3>Job Title</h3>
            <p>Company Name | Dates</p>
            <p>Contributed to web development and IoT projects, focusing on creating interactive solutions.</p>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form action="process.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message"></textarea>
            <button type="submit">Send</button>
        </form>
    </section>

    <script src="scripts.js"></script>
</body>
</html>
