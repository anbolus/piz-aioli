<body class="main-bg">
        <div class="login-container text-c">
                    
                <div class="container-content">
                    <form class="margin-t inscription">
                        <h3 class="text-whitesmoke">S'inscrire</h3><br>
                        <div class="form-group">
                    
                             <?php echo form_input('Id_Pizza', '', array('id='=>'Id_Pizza', 'class' => 'form-control' , 'placeholder' => 'Id_Pizza', 'required')); echo('<br>'); ?>
                         </div>    

                         <div class="form-group">
                             <?php echo form_input('Taille', '', array('id='=>'Taille', 'class' => 'form-control','placeholder' => 'Taille', 'required'));echo('<br>'); ?>
                         </div>  

                         <div class="form-group">
                            <?php echo form_input('Nom', '', array('id='=>'Nom', 'class' => 'form-control' , 'placeholder' => 'Nom', 'required'));echo('<br>'); ?>
                         </div>  
                    
                         <div class="form-group">
                             <?php echo form_textarea('Ingredients', '', array('id='=>'Ingredients', 'class' => 'form-control' , 'placeholder' => 'Ingredients', 'required'));echo('<br>'); ?>
                         </div>  
                    
                         <div class="form-group">
                         <?php echo form_input('Prix', '', array('id='=>'Prix', 'class' => 'form-control' ,'placeholder' => 'Adresse e-mail', 'required'));echo('<br>'); ?>
                         </div>

                        
                   
                        <button type="submit" class="form-button button-l margin-b">S'inscrire</button>
        
                    </form>
                    
                </div>
            </div>
</body>