<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
          crossorigin="anonymous">
    <style>


        .navbar-brand {
            display: inline-block;
            padding-top: 0.32421875rem;
            padding-bottom: 0.32421875rem;
            margin-right: 1rem;
            font-size: 1.171875rem;
            line-height: inherit;
            white-space: nowrap;
        }

        a {
            text-decoration: none;
        }

        .navbar bg-body {
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .nav-item.dropdown {
            list-style: none;
        }

        .nav-item.dropdown {
            margin-right: 10px;
            margin-left: 10px;
        }

        .navbar {
            margin-bottom: 30px;
        }


        .sidebar {
            height: 100vh;
            width: 240px;
            padding: 20px;
            background-color: #f8f9fa;
            border: 1px solid rgba(0, 0, 0, 0.125);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .main-content {
            padding: 60px;
            height: 100vh;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.125);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar-item {
            margin-bottom: 10px;
        }

        .sidebar-item .sidebar-submenu {
            display: none;
            padding-left: 20px;
        }

        .sidebar-item.active .sidebar-submenu {
            display: block;
        }

        .sidebar-submenu-item {
            margin-bottom: 5px;
        }

        .file-icon:before {
            content: "\f15b"; /* Font Awesome file icon */
            color: #808080; /* Grey color */
            margin-right: 5px;
        }

    </style>
</head>
<body>

@section('navbar')
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/index">
            <img
                src="https://courses.finki.ukim.mk/pluginfile.php/1/core_admin/logocompact/300x300/1672136478/moodle-io.png"
                alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            <span class="site-name d-none d-md-inline">COURSES</span>
        </a>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
                Student
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/add/student">Add student</a></li>
                <li><a class="dropdown-item" href="/students">List student</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
                Professor
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/add/professor">Add professor</a></li>
                <li><a class="dropdown-item" href="/professors">List professor</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
                Semester
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/semester/add">Add semester</a></li>
                <li><a class="dropdown-item" href="/semester">List semester</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
                Subject
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/add/subject">Add subject</a></li>
                <li><a class="dropdown-item" href="/subjects">List subject</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
                Search Student
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/search/student/index">Search - Index</a></li>
                <li><a class="dropdown-item" href="/search/student/name">Search - Name/Surname</a></li>
            </ul>
        </li>


        <div class="ms-auto">
            @if(!auth()->check())
                <span>You are not logged in. ( <a href="/login"> Log in</a> )</span>
            @else
                <span><a href="/logout"> Log out </a> </span>
            @endif
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>

</nav>
@show
</body>
</html>
