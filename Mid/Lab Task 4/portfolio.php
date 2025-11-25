<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Metadata -->
    <title>Nur Farhana | Portfolio</title>
    <meta name="author" content="John Doe">
    <meta name="description" content="Personal portfolio webpage showcasing biography, education, and contact form.">
    <meta name="keywords" content="portfolio, computer science and engineering student, web development, resume">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: rgb(245, 245, 245); /* Light gray */
        }
        header {
            background: rgb(51, 51, 51); /* Dark gray */
            color: rgb(255, 255, 255);   /* White */
            padding: 20px;
        }
        nav a {
            color: rgb(255, 255, 255); /* White */
            margin-right: 15px;
            text-decoration: none;
        }
        main {
            padding: 20px;
        }
        section {
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid rgb(51, 51, 51); /* Dark border */
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        footer {
            background: rgb(51, 51, 51); /* Dark gray */
            color: rgb(255, 255, 255);   /* White */
            padding: 15px;
            text-align: center;
        }
        form input, form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid rgb(180, 180, 180); /* Light border */
        }
        form button {
            margin-top: 10px;
            padding: 10px 20px;
            background: rgb(51, 51, 51); /* Dark gray */
            color: rgb(255, 255, 255);   /* White */
            border: none;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header>
        <h1>Nur Farhana</h1>
        <nav>
            <a href="#bio">Biography</a>
            <a href="#education">Education</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <main>

        <!-- Biography Section -->
        <section id="bio">
            <h2>About Me</h2>
            <p>
                I am a Computer Science and Engineering student passionate about web development, artificial intelligence and solving real-world problems through technology. I am seeking an internship opportunity where I can apply my skills and gain professional experience.
            </p>
        </section>

        <!-- Education Table -->
        <section id="education">
            <h2>Educational Qualifications</h2>
            <table>
                <tr>
                    <th>Degree</th>
                    <th>Institution</th>
                    <th>Year</th>
                    <th>Grade</th>
                </tr>
                <tr>
                    <td>Bachelor of Computer Science And Engineering</td>
                    <td>American International University Of Bangladesh</td>
                    <td>2022 - Present</td>
                    <td>3.73 CGPA</td>
                </tr>
                <tr>
                    <td>Intermediate</td>
                    <td>Brahmanbaria Govt College </td>
                    <td>2018 - 2020</td>
                    <td>A+</td>
                </tr>
                <tr>
                    <td>Matriculation</td>
                    <td>Bangladesh Gas Fields School And College </td>
                    <td>2016 - 2018</td>
                    <td>A+</td>
                </tr>
            </table>
        </section>

        <!-- Contact Form -->
        <section id="contact">
            <h2>Contact Me</h2>
            <form action="#">
                <label>Your Name:</label>
                <input type="text" name="name" required>

                <label>Your Email:</label>
                <input type="email" name="email" required>

                <label>Message:</label>
                <textarea name="message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </section>

    </main>

    <footer>
        <p>© 2025 Nur Farhana- All Rights Reserved</p>
    </footer>

</body>
</html>
