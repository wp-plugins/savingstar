=== SavingStar Plugin ===
Contributors: savingstar.com
Donate link: 
Tags: SavingStar, Banner Ads, Banner Display, Ad Management
Requires at least: 2.8
Tested up to: 3.2.1
Stable tag: "0.1.1.4"

== Description ==

<b>SavingStar</b> is a paperless way of saving with eCoupons that link to your existing grocery and drug store loyalty cards. Here&#8217;s how it works: after a one-time registration of your store cards, saving is quick and easy. Simply click the eCoupons you want on <a href="http://savingstar.com"><b>savingstar.com</b></a> or our iPhone&#174; or Android&#174; apps and we&#8217;ll link your eCoupons to all of your registered store cards. When you use your card at checkout like you normally do, your savings are automatically added to your <b>SavingStar</b> account. (Note: your grocery bill will stay the same.) Once your savings reach $5, you can pick your payout from a deposit into your bank or PayPal account, an Amazon gift card, or a donation to American Forests.

= Features: =
1. Display 3 banner sizes in post with shortcodes from SavingStar.com
2. Allows for affiliate id to be used with banners
3. Display 3 banner sizes from dropdown in widget from SavingStar.com


== Installation ==

1. Upload SavingStar plugin  to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Click on the SavingStar Menu Link in the Admin area
4. Enter your affiliate ID and click save

== Remove plugin ==

1. Deactivate plugin through the 'Plugins' menu in WordPress
2. Delete plugin through the 'Plugins' menu in WordPress

It's best to use the build in delete function of wordpress. That way all the stored data will be removed and no orphaned data will stay.

== Screenshots ==

= coming soon =

== Frequently Asked Questions ==



= How can I support you? =



= What is the plugin page?  =



= Do you have other plugins?  =



= Where do I post my feedback? =


== Upgrade Notice ==

Just do a normal upgrade.

== Changelog ==

= 0.1.1.3 (21.11.2011) =
* initial release

== Usage Guides ==
1. To display iframe in post:

Paste one of the following shortcodes in a post or page:
[ss_display_iframe type="Medium Rectangle(300w x 250h)"]
[ss_display_iframe type="Wide Skyscraper(160w x 600h)"]
[ss_display_iframe type="Skyscraper(120w x 600h)"]

if no attribute is passed then default iframe is Medium Rectangle(350w x 250h)

2. Use shortcode in a PHP file (outside the post editor).
Paste one of the following function calls in a template file:
echo do_shortcode('[ss_display_iframe type="Medium Rectangle(300w x 250h)"]');
echo do_shortcode('[ss_display_iframe type="Wide Skyscraper(160w x 600h)"]');
echo do_shortcode('[ss_display_iframe type="Skyscraper(120w x 600h)"]');

3. Use widget to select banner size from dropdown and display in widget areas