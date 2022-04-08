<?php include 'profilMenu.php';?>
<div class="col-lg-7 col-9-md col-9-sm col-8-xl">
        <div class="border-bottom">  
            <li class="nav-item  col-lg-12 col-6-md col-12-sm p-1 mt-5">
                <div class="flex name">
                    <h1>Name</h1>
                    <p>@Pseudo</p>
                </div>
            </li> 
        </div>
        <div class="pt-2 text-center col-12">
        <a href="page_following.php"><button class="border p-5 col-5">Following</button></a>
        <a href="page_follower.php"><button class="border p-5 col-5">Follower</button></a>
        </div>
        <div class="pt-5">  
            <div class="col-lg-12">
            <div id="liste_following">
            </div>
            </div>
        </div>
    </div>

<?php include('pageSearch.php') ?>
</div>
<?php include 'include/footer.php';?>