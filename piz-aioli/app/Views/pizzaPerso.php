<?php

helper('form');
     echo form_open('', '');

     echo form_label('Base de la pizza: ', 'basePizza');
     echo form_input('basePizza', '', array('id='=>'basePizza')); echo('<br>');

     echo form_label('Fromage : ', 'fromage');
     echo form_input('fromage', '', array('id='=>'fromage'));echo('<br>');
 
     echo form_label('Adresse :', 'adresse');
     echo form_input('adresse', '', array('id='=>'adresse'));echo('<br>');

     echo form_label('Adresse e-mail : ', 'email');
     echo form_input('email', '', array('id='=>'email'));echo('<br>');

     echo form_label('Pseudo : ', 'login');
     echo form_input('login', '', array('id='=>'login'));echo('<br>');

     echo form_label('Mot de passe : ', 'mdp');
     echo form_password('mdp', '', array('id='=>'mdp'));echo('<br>');

     echo form_label('Numéro de téléphone : ', 'telephone');
     echo form_input('telephone', '', array('id='=>'telephone'));echo('<br>');

     echo form_submit('submit', 'S\'inscrire');
echo form_close();

?>