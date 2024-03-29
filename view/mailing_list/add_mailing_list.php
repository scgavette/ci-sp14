<?php
//view/mailing_list/add_mailing_list.php
//an add form to add an item to the table
echo '<p></p>';
echo validation_errors();
?>

<h1>Add to Mailing List</h1>
<?=form_open('mailing_list/insert');?>
<?php
    $first_name = array('name' => 'first_name', 'id' => 'first_name');
    echo form_label('First Name', 'first_name') . ':&nbsp';
    echo form_input($first_name) . '<br>';
    
    $last_name = array('name' => 'last_name', 'id' => 'last_name');
    echo form_label('Last Name', 'last_name') . ':&nbsp';
    echo form_input($last_name) . '<br>';
    
    $email = array('name' => 'email', 'id' => 'email');
    echo form_label('Email', 'email') . ':&nbsp';
    echo form_input($email) . '<br>';
    
    $address = array('name' => 'address', 'id' => 'address');
    echo form_label('Address', 'address') . ':&nbsp';
    echo form_input($address) . '<br>';
    
    $zip_postal = $arrayName = array('name' => 'zip_postal', 'id' => 'zip_postal');
    echo form_label('Zip', 'zip_postal') . ':&nbsp';
    echo form_input($zip_postal) . '<br>';
    
    $state_code = $arrayName = array('name' => 'state_code', 'id' => 'v');
    echo form_label('State', 'state_code') . ':&nbsp';
    echo form_input($state_code) . '<br>';
    
    $username = array('name' => 'username', 'id' => 'username');
    echo form_label('Username', 'username') . ':&nbsp';
    echo form_input($username) . '<br>';
    
    $password = array('name' => 'password', 'id' => 'password');
    echo form_label('Password', 'password') . ':&nbsp';
    echo form_input($password) . '<br>';
    
    $bio = array('name' => 'bio', 'id' => 'bio');
    echo form_label('Biography', 'bio') . ':&nbsp';
    echo form_textarea($bio) . '<br>';
    
   // $interest = array('name' => 'interest', 'id' => 'interest');
   $interests = array('backpak_cal' => 'backpack california', 'cycle_cal' => 'Cycle California', 'nature_watch' => 'Nature Watch');
    echo form_label('Interests', 'interests') . ':&nbsp';
    echo form_multiselect('interests',$interests) . '<br>';
    
    $num_tours1 = $arrayName = array(
        'name' => 'num_tours', 
        'id' => 'num_tours', 
        'value' => '0',
        'checked' => TRUE
    );
    $num_tours2 = $arrayName = array(
        'name' => 'num_tours', 
        'id' => 'num_tours2', 
        'value' => '1-3',
    );
    $num_tours3 = $arrayName = array(
        'name' => 'num_tours', 
        'id' => 'num_tours', 
        'value' => '4-6'
    );
    echo '<fieldset>';
    echo '<legend><p>Indicate number of tours</p></legend>';
    echo form_label(' None', 'num_tours') . ':&nbsp';
    echo form_radio($num_tours1);
    echo form_label(' 1-3', 'num_tours') . ':&nbsp';
    echo form_radio($num_tours2);
    echo form_label(' 4-6', 'num_tours') . ':&nbsp';
    echo form_radio($num_tours3);
    echo '</fieldset>';
    
   
?>
<?=form_submit('submit', 'add to mailing list')?>
<?=form_close();?>
&nbsp;