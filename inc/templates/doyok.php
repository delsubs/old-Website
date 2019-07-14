<div class="wrap">
<form method="post" action="options.php">
<div class='wrap-swap'><h2><img src="<?php echo get_template_directory_uri(); ?>/static/favicon.png">Configuration</h2><?php submit_button(); ?><div class="clear"></div></div>
    <?php settings_fields( 'cebong-config' ); ?>
    <?php do_settings_sections( 'cebong-config' ); ?>
    <div class="main-config">
    <h3>doyok Setting</h3>
    <table class="form-table">
        <tr valign="top">
            <th scope="row">Info Web</th>
            <td rowspan="1"><textarea name="config_infoweb" rows="3" cols="78"><?php echo get_option('config_infoweb'); ?></textarea></td>
        </tr>
        <tr valign="top">
            <th scope="row">About Web</th>
            <td><textarea name="config_aboutweb" rows="3" cols="78"><?php echo get_option('config_aboutweb'); ?></textarea></td>
        </tr>
    </table>
    </div>
    <div class="main-config">
    <h3>Download Link Setting</h3>
    <table class="form-table">
        <tr valign="top">
            <th scope="row">Set Link</th>
            <td class="_multi">
            <input type="text" name="config_mp4_name1" size="15" placeholder="Google Drive" value="<?php echo get_option('config_mp4_name1'); ?>">
            <input type="text" name="config_mp4_name2" size="15" placeholder="Zippyshare" value="<?php echo get_option('config_mp4_name2'); ?>">
            <input type="text" name="config_mp4_name3" size="15" placeholder="Solidfiles" value="<?php echo get_option('config_mp4_name3'); ?>">
            <input type="text" name="config_mp4_name4" size="15" placeholder="Savefile" value="<?php echo get_option('config_mp4_name4'); ?>">
            </td>
        </tr>
    </table>
    
    </div>
    <?php submit_button(); ?>
</form>
<style type='text/css'>.main-config{background:#FFF;padding:0 25px 5px;margin-bottom:30px;border:1px solid #ddd}.main-config>h3{background:#7DC168;padding:15px;margin:-10px -25px 0;color:#FFF;text-transform:uppercase}.wrap-swap{margin:20px auto 30px}.wrap-swap>h2{float:left;margin:0;text-transform:uppercase;font-size:20px;padding-top:5px}.wrap-swap p.submit{margin:0;display:inline-block;margin-left:15px;padding:0}._multi>input{margin-right:15px}.wrap-swap>h2 img{max-width:22px;float:left;margin-right:10px}</style>
</div>
