<?php

if (ossn_isLoggedIn()) {
    ?>
    <div class="ossn-photo-menu">
        <li><a class="btn btn-danger" href="<?php echo ossn_site_url("action/photo/delete?id={$params->guid}", true); ?>"> <?php echo ossn_print('delete:photo'); ?> </a></li>
    </div>
<?php } ?>
