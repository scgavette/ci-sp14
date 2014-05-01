<?php
//view_mailing_list_detail
if($query->num_rows() > 0):
?>

<?php foreach($query->result() as $row):?>
    <p>
        <?=$row->userid?>
        <?=$row->first_name?>
        <?=$row->last_name?>
    </p>
<?php endforeach; ?>
<?php endif;?>