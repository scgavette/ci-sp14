<?
//view/mailing_list/add_mailing_list.php
//an add form to add an item to the table
echo '<p></p>';
echo validation_errors();
?>

<?=form_open('mailing_list/insert');?>
<?php

    $firstname = $arrayName = array(
    'name' => 'first_name', 
    'id' => 'first_name', 
    );
    
    echo form_input($firstname);
    echo form_label('First Name', 'first_name');
?>

<?=form_close();?>
