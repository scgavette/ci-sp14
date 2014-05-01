<?php

if($query->num_rows() > 0):
?>

<?php foreach($query->result() as $row):?>
    
    <h1><?=$row->first_name . $row->last_name?></h1>
    
        <p>Userid: <b><?=$row->userid?></b></p>
        <p>First Name: <b><?=$row->first_name?></b></p>
        <p>Last Name: <b><?=$row->last_name?></b></p>
        <p>Email: <b><?=$row->email?></b></p>
        <p>Address: <b><?=$row->address?></b></p>
        <p>State Code: <b><?=$row->state_code?></b></p>
        <p>Zip Code: <b><?=$row->zip_postal?></b></p>
        <p>Username: <b><?=$row->username?></b></p>
        <p>Password: <b><?=$row->password?></b></p>
        <p>Bio: <b><?=$row->bio?></b></p>
        <p>Interests: <b><?=$row->interests?></b></p>
        <p>Number of Tours: <b><?=$row->num_tours?></b></p>
        
        
        <?=$row->userid?>
        <?=$row->first_name?>
        <?=$row->last_name?>
        <?php 
            echo anchor('mailing_list/view/' . $row->userid, "View user" );
        ?>
    </p>
<?php endforeach; ?>
<?php endif;?>