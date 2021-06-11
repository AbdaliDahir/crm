<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
	<div class="content">
		<?php echo form_open($this->uri->uri_string(),array('id'=> 'patrimoine_information_from')); ?> 
			<div class="panel_s">
				<div class="panel-heading">
					patremoin information.
				</div>
				<div class="panel-body mbot30">
					<div class="btn-bottom-toolbar text-right">
						<button type="submit" autocomplete="off" data-loading-text="<?php echo _l('wait_text'); ?>" class="btn btn-info"><?php echo _l('add_info'); ?></button>
					</div>
					<div class="row">
						<!-- START::You Info -->
						<div class="col-md-6">
							<h4 class="mbot5 bold"><?php echo _l('patrimonial_me'); ?></h4> 
							<hr class="mtop5">
							<?php echo form_hidden('patrimoineid', $patrimoine_id) ?>
							<?php echo render_input('patr_me_firstname','patrimonial_me_firstname', $info ? $info->patr_me_firstname : '','text'); ?>
							<?php echo render_input('patr_me_lastname','patrimonial_me_lastname', $info ? $info->patr_me_lastname : '','text'); ?>
							<?php echo render_date_input('patr_me_birthday','patrimonial_me_date_birth',  $info ? $info->patr_me_birthday: ''); ?>

							<?php echo render_input('patr_me_profession','patrimonial_conjoint_profession',  $info ? $info->patr_me_profession: '','text'); ?>
							<?php echo render_date_input('patr_me_depart','patrimonial_conjoint_date_depart',  $info ? $info->patr_me_depart : ''); ?>
							<?php echo render_input('patr_me_nss','patrimonial_conjoint_NSS',  $info ? $info->patr_me_nss : '','text'); ?> 
							<?php echo render_textarea('patr_me_address','patrimonial_conjoint_adresse',  $info ? $info->patr_me_address : ''); ?> 

							<?php echo render_input('patr_me_tele_perso','patrimonial_conjoint_tel_perso',  $info ? $info->patr_me_tele_perso : '', 'text'); ?> 
							<?php echo render_input('patr_me_tele_m','patrimonial_conjoint_tel_mobile_m',  $info ? $info->patr_me_tele_m : '', 'text'); ?> 
							<?php echo render_input('patr_me_tele_mme','patrimonial_conjoint_tel_mobile_mme',  $info ? $info->patr_me_tele_mme : '', 'text'); ?> 
							<?php echo render_input('patr_me_email_one','patrimonial_conjoint_email_one',  $info ? $info->patr_me_email_one : '', 'email'); ?> 
							<?php echo render_input('patr_me_email_two','patrimonial_conjoint_email_two',  $info ? $info->patr_me_email_two : '', 'email'); ?> 
						</div>
						<!-- END::You Info -->
						<div class="col-md-6">
							<h4 class="mbot5 bold"><?php echo _l('patrimonial_conjoint'); ?></h4> 
							<hr class="mtop5">
							<?php echo render_input('patr_partner_firstname','patrimonial_me_firstname',  $info ? $info->patr_partner_firstname : '','text'); ?>
							<?php echo render_input('patr_partner_lastname','patrimonial_me_lastname',  $info ? $info->patr_partner_lastname : '','text'); ?>
							<?php echo render_date_input('patr_partner_birthday','patrimonial_me_date_birth',  $info ? $info->patr_partner_birthday : ''); ?> 

							<?php echo render_input('patr_partner_profession','patrimonial_conjoint_profession',  $info ? $info->patr_partner_profession : '','text'); ?>
							<?php echo render_date_input('patr_partner_depart','patrimonial_conjoint_date_depart',  $info ? $info->patr_partner_depart : ''); ?>
							<?php echo render_input('patr_partner_nss','patrimonial_conjoint_NSS',  $info ? $info->patr_partner_nss : '','text'); ?> 
							<?php echo render_date_input('patr_partner_precedent_marriage_date','patrimonial_conjoint_date_mariage',  $info ? $info->patr_partner_precedent_marriage_date : ''); ?> 
							<?php echo render_input('patr_partner_regime','patrimonial_conjoint_regime', $info ? $info->patr_partner_regime : '','text'); ?> 
							<?php echo render_yes_no_option('patr_partner_donation','patrimonial_conjoint_donation', '', '', '',  $info ? $info->patr_partner_donation : '',  $info ? $info->patr_partner_donation : ''); ?> 
							<div> 
								<h6 class="font-weight-bold mbot15"><?php echo _l('patrimonial_conjoint_more_question'); ?> </h6>
								<?php echo render_date_input('patr_partner_marriage_date','patrimonial_conjoint_more_question_mariage_date',  $info ? $info->patr_partner_marriage_date : ''); ?> 
								<?php echo render_input('patr_partner_marriage_duration','patrimonial_conjoint_more_question_mariage_durée',  $info ? $info->patr_partner_marriage_duration : '','number'); ?> 
								<?php echo render_input('patr_partner_situtation','patrimonial_conjoint_more_question_situation',  $info ? $info->patr_partner_situtation : '','text'); ?> 
								<?php echo render_input('patr_partner_finance','patrimonial_conjoint_more_question_finance',  $info ? $info->patr_partner_finance : '','text'); ?> 
							</div>  
						</div> 
					</div>
				</div><!-- ./panel Body -->
			</div><!-- ./panel S --> 
		<?php echo form_close(); ?>
	</div>
</div> 
<?php init_tail(); ?>
<script>
	
	
</script>
</body>
</html>
