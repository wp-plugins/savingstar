<SCRIPT language="JavaScript" type="text/javascript">

var newwindow = ''
function popitup(url) {
if (newwindow.location && !newwindow.closed) {
    newwindow.location.href = url; 
    newwindow.focus(); } 
else { 
    newwindow=window.open(url,'htmlname','width=1182,height=160,resizable=1');} 
}
function tidy() {
if (newwindow.location && !newwindow.closed) { 
   newwindow.close(); } 
}
</SCRIPT>
<div class="wrap">
<?php print '<h2>
<a href="http://savingstar.com"><img src="'.plugins_url('/images/ss-plugin-header-icon.png', __FILE__).'" alt="image placeholder" /></a>
<a href="http://savingstar.com"><img src="'.plugins_url('/images/ss-plugin-header.png', __FILE__).'" alt="SavingStar" /></a></h2>'; ?>
<?php //print "<h3>".SSBP_PUGIN_NAME." ".SSBP_CURRENT_VERSION."<sub>(Build ".SSBP_CURRENT_BUILD.")</sub></h3>"; ?>

<div id="ss-affiliate">
    <div class="ss-affiliate-id-form">
    <form method="post" action="options.php">
        <?php settings_fields( 'ssbp-settings-group' ); ?>
        <table class="form-table">
            <tr valign="top">
              <td><b><label for="ss_mpid">Enter Your Media Partner ID:</label></b></td>
            </tr>
            <tr valign="top">
              <td><input type="text" name="ss_mpid" value="<?php echo get_option('ss_mpid'); ?>" /></td>
            </tr>
        </table>
        <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
    </form>
    </div>
    <div class="ss-affiliate-instructions">
    <p>Don't know your Media Partner ID? <a href="javascript:popitup('<?php echo plugins_url('/images/Impact-Radius-Account-ID.png', __FILE__); ?>')">Click Here</a> for an example.</p>  <p>If you aren't joined to the SavingStar Affiliate program <a href="http://member.impactradius.com/advertiser-applycampaign-info/SavingStar.brand?c=758" target="_blank">join here</a>!</p>
    </div>
</div>

<div class="ss-instructions">
<h2>SavingStar Usage Instructions:</h2>
<ul>
<li>
<table id="ss-shortcode-instructions" class="widefat">
<thead><p>To display the iframe in a post: Copy and Paste a shortcode from below into your post's content.</p></thead>
        <tr valign="top">
          <th><big><b>Description:</b></big></th>
          <th><big><b>Shortcode:</b></big></th>
        </tr>
        <tr valign="top">
          <td>For a <b>Medium Rectangle(300w x 250h)</b>:</td>
          <td><big>[ss_display_iframe type="Medium Rectangle(300w x 250h)"]</big></td>
        </tr>
        <tr valign="top">
          <td>For a <b>Wide Skyscraper(160w x 600h)</b>:</td>
          <td><big>[ss_display_iframe type="Wide Skyscraper(160w x 600h)"]</big></td>
        </tr>
        <tr valign="top">
          <td>For a <b>Skyscraper(120w x 600h)</b>:</td>
          <td><big>[ss_display_iframe type="Skyscraper(120w x 600h)"]</big></td>
        </tr>   
</table>
</li>
<li>
<table id="ss-function-instructions" class="widefat">
<thead><p>To display the iframe in a template: Copy and Paste a function call from below into your template code.</p></thead>
        <tr valign="top">
          <th><big><b>Description:</b></big></th>
          <th><big><b>Function:</b></big></th>
        </tr>
        <tr valign="top">
          <td>For a <b>Medium Rectangle(300w x 250h)</b>:</td>
          <td><big>echo do_shortcode('[ss_display_iframe type="Medium Rectangle(300w x 250h)"]');</big></td>
        </tr>
        <tr valign="top">
          <td>For a <b>Wide Skyscraper(160w x 600h)</b>:</td>
          <td><big>echo do_shortcode('[ss_display_iframe type="Wide Skyscraper(160w x 600h)"]');</big></td>
        </tr>
        <tr valign="top">
          <td>For a <b>Skyscraper(120w x 600h)</b>:</td>
          <td><big>echo do_shortcode('[ss_display_iframe type="Skyscraper(120w x 600h)"]');</big></td>
        </tr>   
</table>
</li>
<li>
<table id="ss-widget-instructions" class="widefat">
<thead><p>To display the iframe in a widgetized area: Click Appearance->Widgets and drag SavingStar to the desired widget area.</p></thead>
        <tr valign="top">
          <th><big><b>Description:</b></big></th>
          <th><big><b>Option:</b></big></th>
        </tr>
        <tr valign="top">
          <td>For a <b>Medium Rectangle(300w x 250h)</b>:</td>
          <td><big>Select "Medium Rectangle(300w x 250h)" from the widget's dropdown.</big></td>
        </tr>
        <tr valign="top">
          <td>For a <b>Wide Skyscraper(160w x 600h)</b>:</td>
          <td><big>Select "Wide Skyscraper(160w x 600h)" from the widget's dropdown.</big></td>
        </tr>
        <tr valign="top">
          <td>For a <b>Skyscraper(120w x 600h)</b>:</td>
          <td><big>Select "Skyscraper(120w x 600h)" from the widget's dropdown.</big></td>
        </tr>   
</table>
</li>
</ul>
<div class="madebysavingstar"> <a href="http://www.savingstar.com" target="_blank">Developed by SavingStar<br /></a>
</div>
</div>
</div>