   <?php
   $pinned_patrimoines = get_user_pinned_patrimoines();
   if(count($pinned_patrimoines) > 0){ ?>
      <li class="pinned-separator"></li>
      <?php foreach($pinned_patrimoines as $patrimoine_pin){ ?>
         <li class="pinned_patrimoine">
            <a href="<?php echo admin_url('wealth_management/view/'.$patrimoine_pin['id']); ?>" data-toggle="tooltip" data-title="<?php echo _l('pinned_patrimoine'); ?>"><?php echo $patrimoine_pin['name']; ?><br><small><?php echo $patrimoine_pin["company"]; ?></small></a>
            <div class="col-md-12">
               <div class="progress progress-bar-mini">
                  <div class="progress-bar no-percent-text not-dynamic" role="progressbar" data-percent="<?php echo $patrimoine_pin['progress']; ?>" style="width: <?php echo $patrimoine_pin['progress']; ?>%;">
                  </div>
               </div>
            </div>
         </li>
      <?php } ?>
      <?php } ?>
