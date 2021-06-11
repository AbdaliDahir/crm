<?php defined('BASEPATH') or exit('No direct script access allowed');
if($info) {
    echo '<a href="'.admin_url('wealth_management/add?patrimoine_id='.$patrimoine->id).'" class="mbot20 btn btn-info">'._l('update_patrimonial').'</a>'; 
?>
    <div class="clearfix"></div>
    <div class="patrimoine_contracts mtop20">
        <?php $this->load->view('wealth_management/patrimonial/show/information'); ?>
    </div>
<?php
} else {
    ?>
    <div class="panel bg-light-gray padding">
        you need to add ur information
    </div>
<?php
}
?>
