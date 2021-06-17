<div class="row">
  <!-- START::You Info -->
  <div class="col-md-6">
    <h4 class="mbot30 bold"><?php echo _l('patrimoine_me'); ?></h4> 
    
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_me_firstname') ?></strong>
      <span><?php echo $info->patr_me_firstname ? $info->patr_me_firstname : '................' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_me_lastname') ?></strong>
      <span><?php echo $info->patr_me_lastname ? $info->patr_me_lastname : '................' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_me_date_birth') ?></strong>
      <span><?php echo $info->patr_me_birthday ? $info->patr_me_birthday : '.../.../........' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_profession') ?></strong>
      <span><?php echo $info->patr_me_profession ? $info->patr_me_profession : '................' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_date_depart') ?></strong>
      <span><?php echo $info->patr_me_depart ? $info->patr_me_depart : '.../.../........' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_NSS') ?></strong>
      <span><?php echo $info->patr_me_nss ? $info->patr_me_nss : '................' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_adresse') ?></strong>
      <span><?php echo $info->patr_me_address ? $info->patr_me_address : '...............' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_tel_perso') ?></strong>
      <span><?php echo $info->patr_me_tele_perso ? $info->patr_me_tele_perso : '...............' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_tel_mobile_m') ?></strong>
      <span><?php echo $info->patr_me_tele_m ? $info->patr_me_tele_m : '+...............' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_tel_mobile_mme') ?></strong>
      <span><?php echo $info->patr_me_tele_mme ? $info->patr_me_tele_mme : '+...............' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_email_one') ?></strong>
      <span><?php echo $info->patr_me_email_one ? $info->patr_me_email_one : '.......@.......' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_email_two') ?></strong>
      <span><?php echo $info->patr_me_email_two ? $info->patr_me_email_two : '......@........' ?></span>
    </div>
  </div>
  <!-- END::You Info -->
  <div class="col-md-6">
    <h4 class="mbot30 bold"><?php echo _l('patrimoine_conjoint'); ?></h4> 
    
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_me_firstname') ?></strong>
      <span><?php echo $info->patr_partner_firstname ? $info->patr_partner_firstname : '......@........' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_me_lastname') ?></strong>
      <span><?php echo $info->patr_partner_lastname ? $info->patr_partner_lastname : '......@........' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_me_date_birth') ?></strong>
      <span><?php echo $info->patr_partner_birthday ? $info->patr_partner_birthday : '..../.../........' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_profession') ?></strong>
      <span><?php echo $info->patr_partner_profession ? $info->patr_partner_profession : '...............' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_date_depart') ?></strong>
      <span><?php echo $info->patr_partner_depart ? $info->patr_partner_depart : '...............' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_NSS') ?></strong>
      <span><?php echo $info->patr_partner_nss ? $info->patr_partner_nss : '...............' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_date_mariage') ?></strong>
      <span><?php echo $info->patr_partner_precedent_marriage_date ? $info->patr_partner_precedent_marriage_date : '...............' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_regime') ?></strong>
      <span><?php echo $info->patr_partner_regime ? $info->patr_partner_regime : '...............' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_donation') ?></strong>
      <span><?php echo $info->patr_partner_donation ? 'yes' : 'No' ?></span>
    </div>
    <h6 class="font-weight-bold mbot15"><?php echo _l('patrimoine_conjoint_more_question'); ?> </h6>
    <div class="mleft10">
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_more_question_mariage_date') ?></strong>
      <span><?php echo $info->patr_partner_marriage_date ? $info->patr_partner_marriage_date : '...../...../...........' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_more_question_mariage_durée') ?></strong>
      <span><?php echo $info->patr_partner_marriage_duration ? $info->patr_partner_marriage_duration : '...............' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_more_question_situation') ?></strong>
      <span><?php echo $info->patr_partner_situtation ? $info->patr_partner_situtation : '....................' ?></span>
    </div>
    <div class="text mbot15">
      <strong><?php echo _l('patrimoine_conjoint_more_question_finance') ?></strong>
      <span><?php echo $info->patr_partner_finance ? $info->patr_partner_finance : '.....................' ?></span>
    </div>
    </div>
  </div> 
</div> 
