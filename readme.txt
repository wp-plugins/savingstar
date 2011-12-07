=== SavingStar Plugin ===
Contributors: savingstar
Donate link: 
Tags: affiliate, coupon, coupons, grocery coupons, online coupons, SavingStar
Requires at least: 2.8
Tested up to: 3.2.1
Stable tag: 1.0

== Description ==

<a href="https://savingstar.com">Grocery coupons</a> are incredibly popular. Make more money from your site by promoting SavingStar eCoupons to your readers. SavingStar is a paperless way of saving with eCoupons that link to your grocery and drug store loyalty cards. The SavingStar plugin enables you to easily display the most popular SavingStar eCoupons with links that take the user directly to that specific coupon. The plugin works with SavingStar's affiliate program enabling you to earn money when users register or redeem the eCoupons.

Features:

* Choose from 3 sizes: 300x250, 160x600, and 120x600 
* Easily post the banners into a blog post, template or sidebar widget
* Widget automatically updates with new eCoupons



== Installation ==

1. Upload SavingStar plugin  to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Click on the SavingStar Menu Link in the Admin area
4. Enter your affiliate ID and click save

For complete instructions, please visit: http://savingstar.com/blog/savingstar-widget-instructions/



== Remove plugin ==

1. Deactivate plugin through the 'Plugins' menu in WordPress
2. Delete plugin through the 'Plugins' menu in WordPress

It's best to use the build in delete function of wordpress. That way all the stored data will be removed and no orphaned data will stay.

== Screenshots ==

1. Example Banner from SavingStar
2. Example Banner from SavingStar (scrolled)
3. Example Banner from SavingStar (scrolled to bottom)

== Frequently Asked Questions ==



For any questions about SavingStar's affiliate program, please visit: http://savingstar.com/blog/join-savingstars-affiliate-program/



== Upgrade Notice ==

Just do a normal upgrade.

== Changelog ==

= 0.1 (21.11.2011) =
* initial release

= 1.0 (7.12.2011) =
* official launch

== Usage Guides ==
1. To display iframe in post:

Paste one of the following shortcodes in a post or page:

[ss_display_iframe type="Medium Rectangle(300w x 250h)"]

[ss_display_iframe type="Wide Skyscraper(160w x 600h)"]

[ss_display_iframe type="Skyscraper(120w x 600h)"]

if no attribute is passed then default iframe is Medium Rectangle(350w x 250h)

2. Use shortcode in a PHP file (outside the post editor).
Paste one of the following function calls in a template file:

`<?php echo do_shortcode('[ss_display_iframe type="Medium Rectangle(300w x 250h)"]'); ?>`

`<?php echo do_shortcode('[ss_display_iframe type="Wide Skyscraper(160w x 600h)"]'); ?>`

`<?php echo do_shortcode('[ss_display_iframe type="Skyscraper(120w x 600h)"]'); ?>`

3. Use widget to select banner size from dropdown and display in widget areas