<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>codeX | C Lecture 1</title>
    <link rel="icon" type="image/x-icon" href="../../../assets/favicon.ico">

    <!-- Bootstrap CSS and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link href="css/styles_index.css" rel="stylesheet" />

    <!-- Icons -->

    <!-- Fonts -->


    <!-- Assets -->


</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm bg-white" id="mainNav">
    <div class="container px-5">
        <a class="navbar-brand fw-bold" href="../../dashboard/dashboard.php">codeX</a>
        <div class="d-none d-sm-block topbar-divider"></div>
        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">User</span><img class="border rounded-circle img-profile" src="../../../assets/img/avatars/default_avatar.png" style="width:32px; height:32px;"></a>
            <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
            </div>
        </div>
    </div>
</nav>

<!-- Sidebar -->


<!-- Row 1 -->
<header class="masthead">
    <div class="container h-100 mt-1 mb-1">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center mt-5">

            </div>
        </div>
    </div>
</header>

<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">HTML</h1>
                    <!-- Post meta content-->
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">HTML</a>
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Lecture 0</a>
                </header>
                <!-- Post content-->

                <section class="mb-5">
                    <h5 class="fw-bolder mb-4 mt-5">Objective</h5>
                    <p class="fs-5 mb-4">In this challenge, we will learn some basic concepts of C that will get you started with the language. You will need to use the same syntax to read input and write output in many C challenges. As you work through these problems, review the code stubs to learn about reading from stdin and writing to stdout.</p>

                    <h5 class="fw-bolder mb-4 mt-5">Task</h5>
                    <p class="fs-5 mb-4">This challenge requires you to print  on a single line, and then print the already provided input string to stdout. If you are not familiar with C, you may want to read about the printf() command.</p>

                    <h5 class="fw-bolder mb-4 mt-5">Example</h5>
                    <p class="fs-5 mb-4">s = <i>"Life is Beautiful"</i></p>
                    <p class="fs-5 mb-4">The required output is:</i></p>
                    <div class="card">
                        <div class="card-body bg-light">
                            <p>Hello, World!</p>
                            <p>Life is beautiful!</p>
                        </div>
                    </div>

                    <h5 class="fw-bolder mb-4 mt-5">Function Description</h5>
                    <p class="fs-5 mb-4">Complete the main() function below.</p>
                    <p class="fs-5 mb-4">The main() function has the following input:</p>
                    <li>string s: a string</li>

                    <h5 class="fw-bolder mb-4 mt-5">Prints</h5>
                    <li>*two strings: * "Hello, World!" on one line and the input string on the next line.</li>

                    <h5 class="fw-bolder mb-4 mt-5">Input Format</h5>
                    <p class="fs-5 mb-4">There is one line of text, <i>s</i></p>

                    <h5 class="fw-bolder mb-4 mt-5">Sample Input 0</h5>
                    <div class="card">
                        <div class="card-body bg-light">
                            <p>Welcome to C programming.</p>
                        </div>
                    </div>
                    
                </section>
            </article>

        </div>
        </div>
    </div>
</div>

<!-- Footer-->
<?php
    // Paths
    $about_path = "";
    $founders_path = "";
    $faqs_path = "";
    $contact_path = "";

    include "../../../widgets/footer.php"

?>

<!-- Bootstrap JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- External JavaScript-->
<script src="js/scripts_dashboard.js"></script>

<!-- Forms -->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
</html>