<?php
$name = "Dimas Ibnu Parikesit";
$university = "Universitas Mercu Buana";
$title = "Software Engineer | UI/UX Designer";
$bio = "A 6th-semester Informatics Engineering student specializing in Data Science, including data cleaning, machine learning, and data visualization. Proficient in Python programming and experienced in using tools such as Pandas, Matplotlib, Seaborn, and Scikit-learn. Additionally skilled in Web Development and Mobile Programming, with experience in building dynamic web applications and mobile apps. Passionate about applying data-driven solutions and software development to real-world problems to create positive impacts.";

$projects = [
    ["title" => "Medical Records Management System", "description" => "A modern and secure medical records management system built with Laravel and Jetstream, designed for efficient patient data handling and streamlined healthcare workflows 🚑📊.", "image" => "images/Screenshot (187).png"],
    ["title" => "Mobile Aqua", "description" => "Mobile Aqua is a Java-based application designed to simplify the ordering and delivery of gallon drinking water. It provides features such as order management, real-time tracking, and subscription services to ensure a seamless user experience 💧📱.", "image" => "images\Image_Editor.png"],
    ["title" => "Campus Task Management", "description" => "Campus Task Management is a web and mobile app built with PHP and HTML to help students manage tasks, deadlines, and team projects efficiently 📚✅.", "image" => "images/Screenshot (109).png"],
    ["title" => "Cosmetic Animation", "description" => "Cosmetic Animation with UPBGE is a 3D animation project for realistic cosmetic product visualization. It features smooth animations, real-time rendering, and interactive effects for marketing, tutorials, and virtual try-ons 🎥💫.", "image" => "images\image.png"],
    ["title" => "Math Game", "description" => "🧮 Math Game 🎮 is an interactive educational game built using **ZeroBrane Studio**. It enhances math skills through quick calculation challenges, featuring an engaging interface and fun gameplay. Perfect for all ages to improve arithmetic skills in an enjoyable way! 🔢✨.", "image" => "images\Screenshot 2025-03-03 120343.png"],
    ["title" => "Materials Store", "description" => "🏗️ Building Materials Store 📱 is a mobile-based platform for buying and selling construction materials easily and efficiently. It offers a user-friendly interface, real-time stock updates, and secure transactions, making construction shopping more convenient! 🏠🛒.", "image" => "images\Image_Editor (1).png"]
];

$skills = [
    "PHP & Laravel",
    "JavaScript & React.js",
    "HTML, CSS, Bootstrap",
    "MySQL & PostgreSQL",
    "Node.js & Express",
    "Machine Learning & AI"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - <?php echo $name; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: white;
            font-family: 'Poppins', sans-serif;
        }
        .card {
            background: #fff;
            color: #333;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 8px;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .section { padding: 60px 0; }
        .footer { background: #111; color: white; padding: 20px 0; }
    </style>
</head>
<body>
    <div class="container text-center section">
        <h1 class="display-4 fw-bold">👋 Hi, I'm <?php echo $name; ?></h1>
        <p class="lead text-muted"> <?php echo $title; ?></p>
        <p class="text-light"> 🎓 <?php echo $university; ?></p>
    </div>

    <div class="container text-center section">
        <h2 class="mb-3 text-light">About Me</h2>
        <p class="text-white-50"> <?php echo $bio; ?></p>
    </div>

    <div class="container section">
        <h2 class="text-center mb-4 text-light">🚀 Projects</h2>
        <div class="row">
            <?php foreach ($projects as $project) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card p-4 text-center">
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                        <h3 class="text-primary">🔹 <?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container section">
        <h2 class="text-center mb-4 text-light">💡 Skills</h2>
        <ul class="list-group list-group-flush text-dark mx-auto" style="max-width: 400px;">
            <?php foreach ($skills as $skill) : ?>
                <li class="list-group-item">⚡ <?php echo $skill; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="container text-center section">
        <h2 class="text-light">📢 Let's Connect</h2>
        <a href="https://github.com/" class="btn btn-custom px-4 py-2 me-3">GitHub</a>
        <a href="https://www.linkedin.com/in/dimas-ibnu-parikesit-290077221/" class="btn btn-custom px-4 py-2">LinkedIn</a>
    </div>

    <footer class="footer text-center">
        <p>&copy; <?php echo date('Y'); ?> <?php echo $name; ?>. All rights reserved.</p>
    </footer>
</body>
</html>
