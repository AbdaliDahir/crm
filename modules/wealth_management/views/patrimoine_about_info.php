<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="panel_s">
		<div class="panel-heading"> 
        <div class="row">
            <div class="col-xs-6">
                <div class="info-title text-left mtop5">
                    about information
                </div>
            </div>
            <div class="col-xs-6">
                <div class="info-option text-right">
                <?php 
                    echo '<a href="'.admin_url('wealth_management/add?patrimoine_id='.$patrimoine->id).'" class="btn btn-info">'. 
                        ($info ? _l('update_patrimoine') : _l('new_patrimoine'))
                    .'</a>'; 
                ?>
                </div> 
            </div>
        </div>
    </div>
    <div class="panel-body"> 
        <?php if($info) { ?>
            <div class="patrimoine_contracts mtop20">
                <?php $this->load->view('wealth_management/patrimoine/show/information'); ?>
            </div>
        <?php } else { ?>
            <div class="bg-stripe padding">
                you need to add ur information
            </div>
        <?php } ?>
    </div>
</div>
