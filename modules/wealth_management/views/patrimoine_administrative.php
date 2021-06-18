<?php defined('BASEPATH') or exit('No direct script access allowed'); ?> <div class="panel_s">
  <div class="panel-heading">
    <div class="row mbot15">
      <div class="col-xs-6">
        <div class="info-title text-left mtop5"> Situation administrative </div>
      </div>
      <div class="col-xs-6">
        <div class="info-option text-right">
        </div>
      </div>
    </div>
  </div>
  <div class="panel-body">
    <?php echo form_open(admin_url('wealth_management/updateSituation')); ?>
      <?php echo form_hidden('patrimoineid',  isset($situation) ? $situation->patrimoineid : $patrimoine->id) ?>
      <?php echo form_hidden('id', $situation ? $situation->id : '') ?> 
    
      <div class="row mbot15">
        <!-- first coolumn -->
        <div class="col-md-6">
          <div class="text mbot15 border-right">
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_cfe') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_cfe" id="patr_situation_cfe_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_cfe == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_cfe_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_cfe" id="patr_situation_cfe_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_cfe == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_cfe_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_cotisation_plus') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_cotisation_plus" id="patr_situation_cotisation_plus_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_cotisation_plus == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_cotisation_plus_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_cotisation_plus" id="patr_situation_cotisation_plus_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_cotisation_plus == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_cotisation_plus_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_cotisation_minus') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_cotisation_minus" id="patr_situation_cotisation_minus_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_cotisation_minus == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_cotisation_minus_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_cotisation_minus" id="patr_situation_cotisation_minus_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_cotisation_minus == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_cotisation_minus_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_cnss') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_cnss" id="patr_situation_cnss_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_cnss == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_cnss_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_cnss" id="patr_situation_cnss_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_cnss == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_cnss_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_cnarefe') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_cnarefe" id="patr_situation_cnarefe_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_cnarefe == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_cnarefe_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_cnarefe" id="patr_situation_cnarefe_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_cnarefe == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_cnarefe_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_capitone') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_capitone" id="patr_situation_capitone_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_capitone == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_capitone_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_capitone" id="patr_situation_capitone_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_capitone == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_capitone_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_rapatriement') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_rapatriement" id="patr_situation_rapatriement_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_rapatriement == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_rapatriement_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_rapatriement" id="patr_situation_rapatriement_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_rapatriement == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_rapatriement_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_mutuelle') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_francaise" id="patr_situation_francaise_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_francaise == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_francaise_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_francaise" id="patr_situation_francaise_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_francaise == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_francaise_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
          </div>
        </div>
        <!-- second coolumn -->
        <div class="col-md-6">
          <div class="text mbot15">
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_passport') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_passeport" id="patr_situation_passeport_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_passeport == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_passeport_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_passeport" id="patr_situation_passeport_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_passeport == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_passeport_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_sejour') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_carte_sejour" id="patr_situation_carte_sejour_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_carte_sejour == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_carte_sejour_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_carte_sejour" id="patr_situation_carte_sejour_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_carte_sejour == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_carte_sejour_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_permis') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_permis" id="patr_situation_permis_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_permis == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_permis_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_permis" id="patr_situation_permis_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_permis == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_permis_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_assurance_auto') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_assurance_auto" id="patr_situation_assurance_auto_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_assurance_auto == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_assurance_auto_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_assurance_auto" id="patr_situation_assurance_auto_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_assurance_auto == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_assurance_auto_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_assurance_habitation') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_assurance_habitation"
                      id="patr_situation_assurance_habitation_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_assurance_habitation == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_assurance_habitation_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_assurance_habitation"
                      id="patr_situation_assurance_habitation_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_assurance_habitation == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_assurance_habitation_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_consulat') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_inscription" id="patr_situation_inscription_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_inscription == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_inscription_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_inscription" id="patr_situation_inscription_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_inscription == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_inscription_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_ufe') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_ufe_carte" id="patr_situation_ufe_carte_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_ufe_carte == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_ufe_carte_no"><?php echo _l('settings_no'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_ufe_carte" id="patr_situation_ufe_carte_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_ufe_carte == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_ufe_carte_yes"><?php echo _l('settings_yes'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
            <div class="row mbot15">
              <div class="col-xs-8">
                <strong><?php echo _l('patrimoine_situation_csg') ?></strong>
              </div>
              <div class="col-xs-4">
                <!-- column -->
                <div class="form-inline d-flex">
                  <div class="radio">
                    <input type="radio" name="patr_situation_csg_crds" id="patr_situation_csg_crds_no"
                      value="0"
                      <?php if (isset($situation)) { echo $situation->patr_situation_csg_crds == 0 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_csg_crds_no"><?php echo _l('patrimoine_situation_Prlvt'); ?></label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="patr_situation_csg_crds" id="patr_situation_csg_crds_yes"
                      value="1"
                      <?php if (isset($situation)) { echo $situation->patr_situation_csg_crds == 1 ? 'checked' : ''; } ?> />
                    <label for="patr_situation_csg_crds_yes"><?php echo _l('patrimoine_situation_cexonéré'); ?></label>
                  </div>
                </div>
                <!-- ./END::column -->
              </div>
            </div>
            <!-- ./END ROW -->
          </div>
        </div> 

        <div class="col-xs-12 text-right mtop30">
          <button type="submit" class="btn btn-info"><?php echo _l('submit'); ?></button>
        </div>
      </div>
    <?php echo form_close(); ?>
  </div>
</div>
