
<title>Connexion Recruteur</title>
	 <!-- Favicons -->
	<link rel="shortcut icon" href="../assets/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../assets/img/favicon/favicon.png" type="image/png">
	<link rel="icon" sizes="32x32" href="../assets/img/favicon/favicon-32.png" type="image/png">
	<link rel="icon" sizes="64x64" href="../assets/img/favicon/favicon-64.png" type="image/png">
	<link rel="icon" sizes="96x96" href="../assets/img/favicon/favicon-96.png" type="image/png">
	<link rel="icon" sizes="196x196" href="../assets/img/favicon/favicon-196.png" type="image/png">
	<link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../assets/img/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../assets/img/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../assets/img/favicon/apple-touch-icon-144x144.png">
	<meta name="msapplication-TileImage" content="../assets/img/favicon/favicon-144.png">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<!-- End of Favicons -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="../assets/css/login.css" rel="stylesheet">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php
//$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
		require ('discord.php');

if(session('access_token')) {
header('Location: ../index.php');
}
else {
?>
<style>



</style>
<div class="wrapper fadeInDown">
  
  <div id="formContent">
    <!-- Tabs Titles -->
	
    <!-- Icon -->
    <div class="fadeIn first">
	<br>
      <img src="../../assets/img/vlife.png" id="icon" alt="User Icon" />
	<h4> Connexion Staff</h4><br>
    </div>

    <!-- Login Form -->
	<?php echo'<a href="?action=login"><img src="../../assets/img/clients/client-2.png" alt="connexion-discord" width="150"/></a>';?>
	<br><br>
    <!-- Remind Passowrd -->
   
	<div id="formFooter">
    <a class="underlineHover" href="../../">Retour accueil</a>
    </div>

  </div>
</div>
   
<?php
 } 
?>