<?php

?>
<label><?php echo ossn_print('group:name'); ?></label>
<input type="text" name="groupname"/>
<input type="submit" class="ossn-hidden" id="ossn-group-submit"/>

<div class="ossn-privacy">
    <table border="0">
        <tr>
            <td style="vertical-align:top;">
                <label><?php echo ossn_print('privacy'); ?></label>
            </td>
            <td>
                <input type="radio" name="privacy" value="2" checked="checked"/>
                <span><?php echo ossn_print('public'); ?></span>

                <p><?php echo ossn_print('privacy:group:public'); ?></p>

                <input type="radio" name="privacy" value="1"/>
                <span><?php echo ossn_print('close'); ?></span>

                <p> <?php echo ossn_print('privacy:group:close'); ?></p>
            </td>
        </tr>
    </table>
</div>
