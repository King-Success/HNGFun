<<<<<<< HEAD

	
    <?php 
	
	
	// readfile('profiles/' . $profile_name. '.php');

   include_once("header.php");

   $profile_name = $_GET['id'];
    $secret_word = "sample_secret_word";

    require 'db.php';

	require('profiles/' . $profile_name. '.php');

=======
<!-- head here  -->
<?php
   include_once("header.php");

   $profile_name = $_GET['id'];
    $secret_word = "sample_secret_word";

    require 'db.php';
?>
<!-- Page Content -->
</div>
<body class = 'profile'>

<div class="container">
    
    <?php 
    
    
    // readfile('profiles/' . $profile_name. '.php');

    require('profiles/' .$profile_name. '.php');

>>>>>>> 79349ab158576c0c603d15d180c4484b10aad440

  try {
    $sql = "SELECT * FROM secret_word";
    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $data = $q->fetch();
} catch (PDOException $e) {

    throw $e;
}?>
<<<<<<< HEAD

=======
</div>
>>>>>>> 79349ab158576c0c603d15d180c4484b10aad440

<?php if(!isset($secret_word) || $secret_word != $data['secret_word']) { ?>
    <div style="
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
    position: fixed;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
    top: 50px;
    ">Secret key mismatch. Insert your secret key</div>
<?php } ?>
<!-- head here  -->

<!-- Page Content -->
</div>
<body class = 'profile'>



</body>


<!-- Footer -->
<?php
include_once('footer.php');
?>
