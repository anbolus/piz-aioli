<?php include 'templates/header.php';?>

<img class="logo" src="assets/images/LogoPizz.png" alt="logo">

<body class="main-bg">
        <div class="login-container text-c">
                    
                <div class="container-content">
                    <form class="margin-t inscription">
                        <h3 class="text-whitesmoke">S'inscrire</h3><br>
                        <div class="form-group">
                    
                             <?php echo form_input('nom', '', array('id='=>'nom', 'class' => 'form-control' , 'placeholder' => 'Nom', 'required')); echo('<br>'); ?>
                         </div>    

                         <div class="form-group">
                             <?php echo form_input('prenom', '', array('id='=>'prenom', 'class' => 'form-control','placeholder' => 'Prénom', 'required'));echo('<br>'); ?>
                         </div>  

                         <div class="form-group">
                            <?php echo form_input('adresse', '', array('id='=>'adresse', 'class' => 'form-control' , 'placeholder' => 'Adresse', 'required'));echo('<br>'); ?>
                         </div>  
                    
                         <div class="form-group">
                             <?php echo form_input('login', '', array('id='=>'login', 'class' => 'form-control' , 'placeholder' => 'Pseudo', 'required'));echo('<br>'); ?>
                         </div>  
                    
                         <div class="form-group">
                         <?php echo form_input('email', '', array('id='=>'email', 'class' => 'form-control' ,'placeholder' => 'Adresse e-mail', 'required'));echo('<br>'); ?>
                         </div>

                        <div class="form-group">
                        <?php echo form_password('mdp', '', array('id='=>'mdp', 'class' => 'form-control' , 'placeholder' => 'Mot de passe', 'required'));echo('<br>'); ?>
                        </div>

                        <div class="form-group">
                        <?php echo form_input('telephone', '', array('id='=>'telephone', 'class' => 'form-control' , 'placeholder' => 'Téléphone', 'required'));echo('<br>'); ?>
                         </div>  
                   
                        <button type="submit" class="form-button button-l margin-b">S'inscrire</button>
        
                        
                        <p class="text-whitesmoke text-center"><small>Déjà un compte ?</small></p>
                        <a class="text" href="\connexion"><small>Se connecter</small></a>
                    </form>
                    
                </div>
            </div>
</body>