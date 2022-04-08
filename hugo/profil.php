<?php include 'profilMenu.php'; ?>
    <div class="col-lg-7 col-9-md col-9-sm col-8-xl">
        <div class="border p-5 mb-3 container">
            <div class="pb-4 pt-5">

            <?php
            session_start();
            $profil = $_SESSION['profil'];
            echo '<img src="'.$profil.'" class="col-lg-5 col-md-7 col-sm-12 rounded-circle" alt="profil">'
            ?>
            </div>      
    </div>

    <div class="pt-2 text-center"> 
       <a class="btn btn-primary" href="../tenimba/parametre.php">Edit Profil</a>

   </div>
    <div class="pt-5">  
        <h3>"Name"</h3>
        <p>"@"</p>

        <div class="col-lg-12">
            <div class="border col-lg-4">
                <p><a href="page_following.php">Following : int</a></p>
            </div>
            <div class="border col-lg-4">
                <p><a href="page_follower.php">Follower : int</a></p>
            </div>
        </div>
    </div>
</div>
<?php include('pageSearch.php') ?>
</div>
<?php include 'include/footer.php';?>