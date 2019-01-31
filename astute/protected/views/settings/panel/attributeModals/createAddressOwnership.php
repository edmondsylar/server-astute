<div id="createAddressOwnership" class="modal" style="width: 350px;">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'add-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <div class="modal-content white">
        <span class="grey-text text-darken-4">New Ownership Type</span> </br>
        <!--<span class="grey-text ultra-small">Field Marked with <span class="red-text">*</span> is required</span>-->
          <div class="row">
            <div class="input-field col s12">
                <input placeholder="....." id="displayname" name="new-addressOwnership" type="text" required="required">
                <label for="displayname" class="active">Address Ownership Name<span class="red-text">*</span></label>
            </div>  
          </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="modal-action waves-effect waves-blue btn blue ">Save</button>
        <a href="#" class="modal-action modal-close waves-effect waves-blue btn-flat ">Cancel</a>
    </div>
<?php $this->endWidget(); ?>
</div> 