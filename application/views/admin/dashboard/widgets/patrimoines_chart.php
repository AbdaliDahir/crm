<?php 
  defined('BASEPATH') or exit('No direct script access allowed'); 
  $ci = &get_instance();
  $modules = $ci->app_modules->get(); 
  if($modules[6]['activated'] !== 0) { ?>
  <div class="widget" id="widget-<?php echo create_widget_id(); ?>" data-name="<?php echo _l('patrimoines_chart'); ?>">
  <div class="row">
    <div class="col-md-12">
      <div class="panel_s">
        <div class="panel-body padding-10">
          <div class="widget-dragger"></div>
          <p class="padding-5"><?php echo _l('home_stats_by_patrimoine_status'); ?></p>
          <hr class="hr-panel-heading-dashboard">
          <div class="relative" style="height:250px">
            <canvas class="chart" height="250" id="patrimoines_status_stats"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
} 
?>
