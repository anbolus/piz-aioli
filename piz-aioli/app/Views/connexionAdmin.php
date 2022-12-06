<?php include 'templates/header.php';?>

<img class="logo" src="assets/images/LogoPizz.png" alt="logo">


<body class="main-bg">
        <div class="login-container text-c">
                
                <div class="container-content">

                <?php helper('form');

                echo form_open('', '');?>

                    <form class="margin-t">
                        <h3 class="text-whitesmoke">Connexion admin</h3>
                        <div class="form-group">
                            
                           <?php echo form_input('email', '', array('id='=>'email', 'class='=>'form-control', 'placeholder' => 'Adresse e-mail' ));echo('<br>'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_password('mdp', '', array('id='=>'mdp', 'class='=>'form-control', 'placeholder' => 'Mot de passe'));echo('<br>');?>
                        </div>
                       
                        <button type="submit" class="form-button"><a href="\indexAdmin">Connexion</a></button>
                    </form>
                     <?php echo form_close(); ?>
                </div>
            </div>
</body>
<?php include 'templates/footer.php';