<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@200;300;400;600;700&display=swap" rel="stylesheet">
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
                        <h2>Users</h2>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="table-filters">
                        <div class="left">
                            <div class="input-wrapper">
                                <input type="text" placeholder="Search record">
                                
                            </div>
                            <div class="applied-filters">
                            <span>Name X</span> <span>Email X</span>
                        </div>
                        </div>
                        <div class="right">
                            <button class="button button--green">Generate Excel</button>
                            <button class="button button--blue" id="add-user">Add User</button>
                        </div>
                       
                    </div>
                    <div class="table-wrapper">
                        <div class="table-header">
                            <div class="table-row">
                                <div class="cell">
                                    <span>Full Name</span>
                                    <div class="search-column-wrapper">
                                        <p>Seach by Name</p>
                                        <input type="text">
                                        <button class="search-btn"><i class='bx bx-search'></i></button>
                                    </div>
                                </div>
                                <div class="cell">
                                    <span>Email</span>
                                    <div class="search-column-wrapper">
                                        <p>Seach by email</p>
                                        <input type="text">
                                        <button class="search-btn"><i class='bx bx-search'></i></button>
                                    </div>
                                </div>
                                <div class="cell">
                                    <span>Role</span>
                                    <div class="search-column-wrapper">
                                        <p>Seach by role</p>
                                        <input type="text">
                                        <button class="search-btn"><i class='bx bx-search'></i></button>
                                    </div>
                                </div>
                                <div class="cell">
                                    <span>Registered at</span>
                                    <div class="search-column-wrapper">
                                        <p>Seach by date</p>
                                        <input type="text">
                                        <button class="search-btn"><i class='bx bx-search'></i></button>
                                    </div>
                                </div>
                                <div class="cell">
                                    <span>Posts</span>
                                    <div class="search-column-wrapper">
                                        <p>Seach by Posts</p>
                                        <input type="text">
                                        <button class="search-btn"><i class='bx bx-search'></i></button>
                                    </div>
                                </div>
                                <div class="cell">
                                    <span>Actions</span>
                                </div>
                            </div>
                        </div>
                        <div class="table-body">
                            <div class="table-row">
                                <div class="cell">
                                    <span>Delvin Krasniqi</span>
                                </div>
                                <div class="cell">
                                    <span>delvin@trokit.com</span>
                                </div>
                                <div class="cell">
                                    <span>User</span>
                                </div>
                                <div class="cell">
                                    <span>16 July 2022</span>
                                </div>
                                <div class="cell">
                                    <span>12</span>
                                </div>
                                <div class="cell">
                                    <span class="action-button action-button--orange">Edit</span>
                                    <span class="action-button action-button--red">Delete</span>
                                </div>
                            </div>
                            <div class="table-row table-row--odd">
                                <div class="cell">
                                    <span>Delvin Krasniqi</span>
                                </div>
                                <div class="cell">
                                    <span>delvin@trokit.com</span>
                                </div>
                                <div class="cell">
                                    <span>User</span>
                                </div>
                                <div class="cell">
                                    <span>16 July 2022</span>
                                </div>
                                <div class="cell">
                                    <span>12</span>
                                </div>
                                <div class="cell">
                                    <span class="action-button action-button--orange">Edit</span>
                                    <span class="action-button action-button--red">Delete</span>
                                </div>
                            </div>
                            <div class="table-row">
                                <div class="cell">
                                    <span>Delvin Krasniqi</span>
                                </div>
                                <div class="cell">
                                    <span>delvin@trokit.com</span>
                                </div>
                                <div class="cell">
                                    <span>User</span>
                                </div>
                                <div class="cell">
                                    <span>16 July 2022</span>
                                </div>
                                <div class="cell">
                                    <span>12</span>
                                </div>
                                <div class="cell">
                                    <span class="action-button action-button--orange">Edit</span>
                                    <span class="action-button action-button--red">Delete</span>
                                </div>
                            </div>
                        </div>
                        <div class="table-footer">
                            <div class="total-entries">
                                <p>Showing <span>1</span> to <span>10 </span>of <span>32 </span>entries</p>
                            </div>
                            <ul class="pagination">
                                <li>
                                    <span>1</span>
                                </li>
                                <li class="current">
                                    <span>2</span>
                                </li>
                                <li>
                                    <span>3</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="modal-wrapper">
                    <div class="modal-inner">
                        <div class="modal-top">
                            <div class="modal-title">Add a new user</div>
                            <span class="close-modal">X</span>
                        </div>
                        <div class="modal-body">
                            <div class="containerr">


                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-6 ">
                                        <div class="input-wrapper" style="margin-top:20px">
                                            <label for="#">Full Name</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-6">
                                        <div class="input-wrapper" style="margin-top:20px">
                                            <label for="#">Email</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-6">
                                        <div class="input-wrapper" style="margin-top:20px">
                                            <label for="#">Role</label>
                                            <select name="" id="">
                                                <option value="1">Administrator</option>
                                                <option value="2">User</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="button button--green">Submit</button>
                            <button class="button button--filled">Cancel</button>
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

    //openmodal
    openModal.addEventListener("click", () => {
        modal.classList.toggle("show");
    })

    closeModal.addEventListener("click", () => {
        modal.classList.remove("show");
    })

    //table script
    let headerCells = document.querySelectorAll(".table-header .cell");
    headerCells.forEach(cell => {
        cell.addEventListener("click", () => {
            headerCells.forEach(cell => {
                cell.classList.remove("input-active")
            })

            cell.classList.toggle("input-active")
        })
    })

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