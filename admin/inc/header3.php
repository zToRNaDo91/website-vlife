<html>
<head>
<style>
.dropdown-menu-right{right:0;left:auto}
</style>

</head>
<body>
	<div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="assets/img/sidebar.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper" >
                <div class="logo">
                    <a href="#" class="simple-text">
                        VlifeRP
                    </a>
                </div>
                <ul class="nav" id="navi">
                    <?php if ($admin) {?>
					<li class="nav-item active">
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Tableau de board</p>
                        </a>
                    </li>
					<?php } ?>
					<li class="nav-item">
                        <a class="nav-link" href="typography.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Présentation</p>
                        </a>
                    </li>
					 <?php if ($admin) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Effectif</p>
                        </a>
                    </li>
					<?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="table.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Candidatures</p>
                        </a>
                    </li>
                  
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
               
					 
                             <!--</li>
							<li class="nav-item">
                                <a class="nav-link" href="../index.php">
                                    <span class="no-icon">Accueil</span>
                                </a>
                            </li>
                           <li class="nav-item dropdown  mr-1">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" 
								aria-haspopup="true"  aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu " style="position: relative;" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                               <!-- <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>-->
						
                       
					 <div class="container-fluid">
				    <a class="navbar-brand" href="#"> Panel Staff </a>

                            <li class="nav nav-item dropdown order-2">
<?php
				$user = apiRequest($apiURLBase);
				echo '
				<a class="nav-link dropdown" id="navigation" data-toggle="dropdown"
				 aria-haspopup="true" aria-expanded="false" href = "#">
				<img class="rounded-circle" src=" https://cdn.discordapp.com/avatars/'. $user->id .'/'. $user->avatar .'.png?size=128" width ="50">
				</a>
				
				<div class="dropdown-menu dropdown-menu-right position-absolue" style ="text-align: center;" aria-labelledby="navigation">
					<span class="dropdown-item p-3 mb-2 bg-light  text-black">Bienvenue !</span>
					<a class="dropdown-item" href="../index.php" >Accueil</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="?action=logout">Déconnexion</a>
				</div>
				</li>';
				
?>

                    <button href="" class="navbar-toggler navbar-toggler-right order-3 order-md-last" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav 	navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="../index.php" class="nav-link">
                                    <span class="d-lg-none">Accueil</span>
                                </a>
                            </li>
                        </ul>
                    
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
			</body>
</html>
