<?php
require_once("C:/xampp/htdocs/repositorios/School_Management_System/tools/connection.php");

session_start();
$Id_User = $_SESSION["ID_User"];
$Username = $_SESSION["Username"];
$Type = $_SESSION["Type"];


if (isset($_GET["id"])) {
    $id_student = $_GET["id"];


} else {
    echo "No se proporcionaron todos los datos necesarios.";
}



$sql = "SELECT `id_student`, `student_name`, `student_surname`, `users`.`username` AS `Uusername`
FROM `student`
INNER JOIN `users` ON `student`.`id_user` = `users`.`id_user`;";
$result = $conex->query($sql);
$students = $result->fetch_all(MYSQLI_ASSOC);

?>

<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../css/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../css/assets/img/favicon.png">
    <title>
        Grades Management System
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/Repositorios/School_Management_System/view/css/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/Repositorios/School_Management_System/view/css/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/Repositorios/School_Management_System/view/css/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/Repositorios/School_Management_System/view/css/assets/css/soft-ui-dashboard.css?v=1.0.7"
        rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html "
                target="_blank">
                <img src="/Repositorios/School_Management_System/view/css/assets/img/logo-ct-dark.png"
                    class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold"><?php
                                        echo $Username 
                                        ?></span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Options</h6>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="SManagement.php">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>customer-support</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(1.000000, 0.000000)">
                                                <path class="color-background opacity-6"
                                                    d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z">
                                                </path>
                                                <path class="color-background"
                                                    d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                                                </path>
                                                <path class="color-background"
                                                    d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Cancel</span>
                    </a>
                </li>


            </ul>
        </div>

    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <?php
                include_once("C:/xampp/htdocs/Repositorios/School_Management_System/view/header.php") ;
            ?>
        <!-- End Navbar -->

        <div class="container">

            <form action="C:\xampp\htdocs\Repositorios\School_Management_System\controller\teacherController.php"
                method="post">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Username</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $id_student ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $Username ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Surname</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="<?php echo $id_student ?>">
                </div>
                <button type="button" class="btn btn-success">Send</button>


            </form>

        </div>


    </main>
</body>

</html>