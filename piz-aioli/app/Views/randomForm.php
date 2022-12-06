<?php

helper('form');

echo form_open('', '');

     echo form_label('Nom :', 'nom');
     echo form_input('nom', '', array('id='=>'nom')); echo('<br>');

     echo form_label('Prénom :', 'prenom');
     echo form_input('prenom', '', array('id='=>'prenom'));echo('<br>');

     echo form_label('Adresse :', 'adresse');
     echo form_input('adresse', '', array('id='=>'adresse'));echo('<br>');

     echo form_label('Adresse e-mail :', 'email');
     echo form_input('email', '', array('id='=>'email'));echo('<br>');

     echo form_label('Pseudo :', 'login');
     echo form_input('login', '', array('id='=>'login'));echo('<br>');

     echo form_label('Mot de passe :', 'mdp');
     echo form_password('mdp', '', array('id='=>'mdp'));echo('<br>');

     echo form_label('Numéro de téléphone', 'telephone');
     echo form_input('telephone', '', array('id='=>'telephone'));echo('<br>');

     echo form_submit('submit', 'S\'inscrire');

echo form_close();

?>