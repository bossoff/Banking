

<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
                
        <title>Mybank - <?=$page_title;?></title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="<?=base_url();?>assets/back/css/app.css" />
        <!-- END: CSS Assets-->
    </head>

    <?php
        $user = $this->Crud->get_user($this->session->userdata('user_id'));

        $firstname = $user->firstname;
        $lastname = $user->lastname;

    ?>
<body class="app">
	<?php 

		require 'inc/meta.php';
		require 'inc/css.php';
		require 'inc/header.php';
		require 'aside.php';
		require $page_name.'.php';
		require 'inc/footer.php';
		require 'inc/js.php';
	?>

</body>
</html>