<?php
include 'conn.php';

$profile = mysqli_query($conn, "SELECT * FROM profile LIMIT 1");
$data = mysqli_fetch_assoc($profile);

$experiences = mysqli_query($conn, "SELECT * FROM experiences");
$skills = mysqli_query($conn, "SELECT * FROM skills");
$certificates = mysqli_query($conn, "SELECT * FROM certificates");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio | <?php echo $data['name']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <div class="profile-wrapper d-flex align-items-center">
            <div class="profile-nav">
                <img src="<?php echo $data['profile_image']; ?>" class="nav-profile-img">
                
                <div class="profile-info">
                    <h6 class="mb-1"><?php echo $data['name']; ?></h6>
                    <small><?php echo $data['major']; ?></small><br>
                    <small><?php echo $data['university']; ?></small>
                </div>
            </div>
            <span class="ms-2 text-white fw-bold"><?php echo $data['name']; ?></span>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                <li class="nav-item"><a class="nav-link" href="#certificates">Certificate</a></li>
            </ul>
        </div>
    </div>
</nav>

<section id="home" class="hero d-flex align-items-center text-center">
    <div class="container text-white">
        <h1 class="display-4 fw-bold">Hello, Welcome 👋</h1>
        <p class="lead mt-3">
            I'm <?php echo $data['name']; ?>, passionate about web development,
            UI/UX design, and data analytics.
        </p>
        <a href="#about" class="btn btn-light btn-lg mt-4">
            Get Started
        </a>
    </div>
</section>

<section id="about" class="section-full bg-light d-flex align-items-center">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">About Me</h2>
            <p class="text-muted">Get to know me better</p>
        </div>

        <div class="row g-5">

            <div class="col-lg-6">
                <div class="about-box p-4">
                    <p><?php echo $data['description1']; ?></p>
                    <p><?php echo $data['description2']; ?></p>

                    <h5 class="mt-4 fw-bold">Experience</h5>
                    <ul class="experience-list mt-3">
                        <?php while($exp = mysqli_fetch_assoc($experiences)) { ?>
                            <li>
                                <i class="bi bi-check-circle-fill me-2 text-success"></i>
                                <?php echo $exp['experience']; ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-box p-4">
                    <h5 class="fw-bold mb-4">Skills</h5>
                    <?php while($skill = mysqli_fetch_assoc($skills)) { ?>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between">
                                <span class="fw-semibold"><?php echo $skill['name']; ?></span>
                                <span><?php echo $skill['level']; ?>%</span>
                            </div>

                            <div class="progress mt-2">
                                <div class="progress-bar bg-primary"
                                    role="progressbar"
                                    style="width: <?php echo $skill['level']; ?>%">
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>

        </div>
    </div>
</section>

<section id="certificates" class="section-full d-flex align-items-center">
    <div class="container">
        <h2 class="text-center mb-5">Certificates</h2>

        <div class="row">
            <?php while($cert = mysqli_fetch_assoc($certificates)) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo $cert['image']; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $cert['title']; ?></h5>
                            <p class="card-text"><?php echo $cert['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>

<footer class="footer bg-dark text-white py-4">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-6 text-md-start text-center">
                <h5 class="mb-3">Contact Me</h5>
                <p class="mb-2">
                    <i class="bi bi-envelope-fill me-2"></i>
                    <a href="mailto:nadilaputrinory@email.com" class="text-white text-decoration-none">
                        nadilaputrinory@email.com
                    </a>
                </p>
                <p class="mb-0">
                    Open for collaboration & project discussion.
                </p>
            </div>

            <div class="col-md-6 text-md-end text-center mt-4 mt-md-0">
                <h5 class="mb-3">Follow Me</h5>
                <div class="fs-4">
                    <a href="https://instagram.com/jo2god27111" target="_blank" class="text-white me-3">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://linkedin.com/in/nadila-putri-4762882a5" target="_blank" class="text-white me-3">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="https://github.com/NadilaPutri11" target="_blank" class="text-white">
                        <i class="bi bi-github"></i>
                    </a>
                </div>
            </div>
        </div>

        <hr class="border-light my-4">
        <p class="text-center mb-0">© 2026 <?php echo $data['name']; ?></p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>