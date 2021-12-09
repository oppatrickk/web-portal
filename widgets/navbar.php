<!-- PHP -->
<?php

$id = htmlspecialchars($_SESSION["id"]);

// Get image from the database
$query = $link->query("SELECT * FROM images where `username` = '$id'");

if($query->num_rows > 0){
    if($row = $query->fetch_assoc()){
        $imageURL = '../../assets/img/avatars/'.$row["file_name"];
    }
}
else{

    $imageURL = '../../assets/img/avatars/default_avatar.png';
 } ?>


<!-- Top Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm bg-white" id="mainNav">
    <div class="container px-5">
        <a class="navbar-brand fw-bold" href="<?php echo $navbar_path; ?>"><img src="<?php echo $logo_path; ?>" style = "width: 5rem; height: 2rem;"/></a>

        <div class="nav-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto me-4 my-lg-1">
                <li class="nav-item"><a class="nav-link me-lg-3" href="<?php echo $tutorials_path?>">Tutorials</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Challenges</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="<?php echo $forums_path?>">Forums</a></li>
            </ul>
        </div>

        <div class="d-none d-sm-block topbar-divider"></div>

        <div class="nav-item dropdown no-arrow">
            <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                <span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo htmlspecialchars($_SESSION["username"]); ?></span>
                <img class="border rounded-circle img-profile" src="<?php echo $imageURL; ?>" style="width:32px; height:32px;">
            </a>
            <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                <a class="dropdown-item" href="<?php echo $profile_path; ?>">
                    <i class="bi-person-fill me-2 text-gray-400" style="color: grey; font-size: 14px"></i>&nbsp;Profile
                </a>
                <a class="dropdown-item" href="<?php echo $settings_path; ?>">
                    <i class="bi-gear-fill me-2 text-gray-400" style="color: grey; font-size: 14px"></i>&nbsp;Settings
                </a>
                <a class="dropdown-item" href="<?php echo $activity_path; ?>">
                    <i class="bi-list-ul me-2 text-gray-400" style="color: grey; font-size: 14px"></i>&nbsp;Activity log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo $logout_path; ?>">
                    <i class="bi-box-arrow-right me-2 text-gray-400" style="color: grey; font-size: 14px"></i>&nbsp;Logout
                </a>
            </div>
        </div>
    </div>
</nav>