<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

function display_product_custom_fields_upload($group_id)
{
    $field_group = acf_get_fields($group_id);




    if ($field_group) {
        foreach ($field_group as $field_key => $field_data) {
            $field_choices = $field_data['choices'];
            $field_label = $field_data['label'];
            $field_name = $field_data['name'];
            $field_value = get_field($field_key);
            switch ($field_data['type']) {
                case 'checkbox':
?>
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-bold"><?php echo esc_html($field_label) ?></label>
                        <div class="dropdown-checkbox-wrapper">
                            <div class="dropdown-checkbox w-100">
                                <span class="dropdown-checkbox-toggle form-control">Select Options</span>
                                <div class="dropdown-checkbox-menu w-100">
                                    <?php
                                    foreach ($field_choices as $field) {
                                    ?>
                                        <label><input type="checkbox" name="<?php echo esc_html($field_name) ?>[]" value="<?php echo esc_html($field) ?>"><?php echo esc_html($field) ?></label>
                                    <?php
                                    }
                                    ?>


                                </div>
                            </div>
                            <div id="selected-options-checkbox" class="selected-options-checkbox"></div>
                        </div>
                    </div>

                <?php
                    break;

                case 'select':
                ?>
                    <div class="col-md-6 mb-4">
                        <label class="form-label fw-bold"><?php echo esc_html($field_label) ?></label>
                        <select class="form-control">
                            <?php
                            foreach ($field_choices as $field) {
                            ?>
                                <option><?php echo esc_html($field) ?></option>

                            <?php
                            }
                            ?>

                        </select>
                    </div>
<?php
                    break;
            }
        }
    } else {

        echo 'No fields found in the group.';
    }
}
