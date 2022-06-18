<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@200;300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/styles/main.css">
</head>

<body>


    <!-- Dashboard -->
    <main class="dashboard-wrapper sidebar-active">
        <aside class="sidebar">
            <img src="./assets/images/logo.png" alt="" id="sidebar-logo">
            <ul>
                <li class="current">
                    <a href="./dashboard.php"><i class='bx bxs-dashboard'></i> Dashboard</a>
                </li>
                <li>
                    <a href="./profile.php"><i class='bx bxs-group'></i> Users</a>
                </li>
            </ul>
        </aside>
        <div class="content-wrapper">
            <div class="topbar">
                <div class="toggler">
                    <span class="line"></span>
                </div>
                <div class="logout">
                    <a href="#"><i class='bx bx-power-off'></i>Logout</a>
                </div>
            </div>
            <div class="inner-content">
                <div class="container-fluid">
                    <div class="page-intro">
                        <h2>Your profile</h2>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="card-wrapper">
                        <div class="group">
                            <h3>Edit Information</h3>
                            <div class="image-upload">
                                <div class="avatar">
                                    <img src="https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg?auto=compress&cs=tinysrgb&w=600"
                                        alt="">
                                </div>
                                <div class="upload">
                                    <input type="file">
                                    <span>Allowed formats: .jpg, .png</span>
                                    <span>Max file size is 500kb</span>
                                </div>
                            </div>
                        </div>
                        <div class="group">
                            <h3>Account Information</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="input-wrapper">
                                        <label for="username">Full Name: </label>
                                        <input type="text" name="username">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="input-wrapper">
                                        <label for="username">Email: </label>
                                        <input type="text" name="username">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="input-wrapper">
                                        <label for="username">Position: </label>
                                        <input type="text" name="username">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="input-wrapper">
                                        <label for="username">Role: </label>
                                        <select name="" id="">
                                            <option value="1">Administrator</option>
                                            <option value="2">User</option>

                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                <button class="button button--blue" style="margin-top:30px" >Save Changes</button>

                                </div>
                            </div>
                        </div>
                        <div class="group">
                            <h3>Change Password</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="input-wrapper" style="margin-top:20px">
                                        <label for="username">Current Password: </label>
                                        <input type="text" name="username">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="input-wrapper" style="margin-top:20px">
                                        <label for="username">New Password: </label>
                                        <input type="text" name="username">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="input-wrapper" style="margin-top:20px">
                                        <label for="username">Confirm Password: </label>
                                        <input type="text" name="username">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                <button class="button button--blue" style="margin-top:30px" >Save Changes</button>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </main>

    <!-- End of Dashboard -->

    <script>
    let toggler = document.querySelector(".toggler");
    let dashboardWrapper = document.querySelector(".dashboard-wrapper");
    let closeModal = document.querySelector(".close-modal");
    let openModal = document.querySelector("#add-user")
    let modal = document.querySelector(".modal-wrapper");



    //table script
    toggler.addEventListener("click", () => {
        dashboardWrapper.classList.toggle("sidebar-active");
    })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
</body>

</html>