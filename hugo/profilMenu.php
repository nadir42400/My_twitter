<?php include 'include/header.php';?>
<div class="change_mode p-3">
<button type="button" class="nav-link btn btn-light active" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Theme
</button>
</div>

<div class="btn-primary">
<div class="modal" id="exampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="text-dark">Theme</h5>
      </div>
    <div class="row">
        <div class="col">
        <div class="bg-light p-5 border" id="light"></div>
        </div>
        <div class="col">
            <div class="bg-dark p-5 border"  id="dark"></div>
        </div>
    </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="container">
    <div class="row ">
<nav class="navbar navbar-expand-lg navbar-light bg-light d-block d-md-none">




    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="col-lg-2 col-md-12  col-sm-12 sticky-top border-bottom bg-light">
            <ul class="nav sticky-top  ">
            <div class="text-center pb-5 pt-3 d-none d-lg-block d-sm-none">
                <a href="pageActu.php"><img src="asset/logo.png" class="col-lg-5 col-md-7 col-sm-12 rounded-circle"></a>
            </div>
                <li class="nav-item col-12-lg col-6-md col-12-sm p-1">
                    <a class="nav-link active btn btn-light" aria-current="page" href="pageActu.php">Home</a>
                </li>
                <li class="nav-item col-12-lg col-6-md col-12-sm p-1">
                    <a class="nav-link btn btn-light active" href="page_de_connexion.php">Sign up</a>
                </li>
          
                <li class="nav-item col-12-lg col-6-md col-12-sm p-1">
                    <a class="nav-link btn btn-light active" href="page_de_deconnexion.php">Sign ip</a>
                </li>
                <li class="nav-item col-12-lg col-6-md col-12-sm p-1">  
                        <a class="nav-link btn btn-light active" href="select.php">Profile</a>
                </li>
                <li class="nav-item  col-12-lg col-6-md col-12-sm p-1">
                    <div class="modal-dialog modal-fullscreen-sm-down">
                        <a class="nav-link btn btn-light active">affichage/mode</a>
                    </div>
                </li>
                <li class="nav-item  col-12-lg col-6-md col-12-sm p-1">
                    <a class="nav-link btn btn-light active" href="#">Tweeter</a>
                </li> 
                </ul>
            </ul>         
        </div>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

   <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown link
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" class="flex">
  <li class="nav-item col-lg-12 col-6-md col-12-sm p-1">
                        <a class="nav-link active btn btn-light" aria-current="page" href="pageActu.php">Home</a>
                    </li>
                    <li class="nav-item col-lg-12 col-6-md col-12-sm p-1">
                        <a class="nav-link btn btn-light active" href="page_de_connexion.php">Sign up</a>
                    </li>
                    <li class="nav-item col-lg-12 col-6-md col-12-sm p-1">
                        <a class="nav-link btn btn-light active" href="page_de_deconnexion.php">Sign in</a>
                    </li>
                    <li class="nav-item col-lg-12 col-6-md col-12-sm p-1">  
                            <a class="nav-link btn btn-light active" href="select.php">Profile</a>
                    </li>          
                    <li class="nav-item  col-lg-12 col-6-md col-12-sm p-1">
                        <a class="nav-link btn btn-light active" href="#">Tweeter</a>
                    </li>
  </ul>
</div>
</nav>
        <div class="col-lg-2 col-md-12  col-sm-12 sticky-top  ">
            <ul class="nav sticky-top   d-md-block d-none col-md-12">
                <div class="text-center pb-5 pt-3 d-none d-lg-block d-sm-none">
                    <a href="pageActu.php"><img src="asset/logo.png" class="col-lg-5 col-md-7 col-sm-12 rounded-circle"></a>
                </div>
                    <li class="nav-item col-lg-12 col-6-md col-12-sm p-1">
                        <a class="nav-link active btn btn-light" aria-current="page" href="pageActu.php">Home</a>
                    </li>
                    <li class="nav-item col-lg-12 col-6-md col-12-sm p-1">
                        <a class="nav-link btn btn-light active" href="page_de_deconnexion.php">Loging</a>
                    </li>
                    <li class="nav-item col-lg-12 col-6-md col-12-sm p-1">
                        <a class="nav-link btn btn-light active" href="page_de_deconnexion.php">Sign in</a>
                    </li>

                    <li class="nav-item col-lg-12 col-6-md col-12-sm p-1">  
                        <a class="nav-link btn btn-light active" href="select.php">Profile</a>
                    </li>          
                    <li class="nav-item  col-lg-12 col-6-md col-12-sm p-1">
                        <a class="nav-link btn btn-light active" href="pageActu.php">Tweeter</a>
                    </li>
                    <li class="nav-item  col-lg-12 col-6-md col-12-sm p-1 mt-5 follower_list">
                            <div>
                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="img-fluid rounded-start image-profil" alt="...">
                             </div>
                            <div class="flex">
                                <p>Name</p>
                                <p>@Pseudo</p>
                            </div>
                    </li> 
            </ul>             
        </div>