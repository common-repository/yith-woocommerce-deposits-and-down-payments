=== YITH WooCommerce Deposits and Down Payments ===

Contributors: yithemes
Tags:  deposits, deposits and down payments, down payments, down payment, deposit, woocommerce deposits, woocommerce down payments, rate, amount, full payment, balance, backorder, sales, woocommerce, wp e-commerce
Requires at least: 4.0.0
Tested up to: 4.9.8
Stable tag: 1.2.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

It allows your customers to leave a deposit for a product and complete the purchase later by paying the balance

== Description ==

YITH WooCommerce Deposits and Down Payments is a plugin that makes you set your e-commerce site so that you can allow customers to pay an advance now and complete their purchase later. Most of the times, especially if you sell high-cost products, a customer might be interested in purchasing but he/she has not the financial liquidity to make a one-off payment. And, in the meanwhile, some other person might purchase the only one left. Then, in order to meet your customers' needs you might offer them the possibility to leave a deposit and make the full payment only later. Now, this is possible with YITH WooCommerce Deposits and Down Payments and it is easy to use and free! What are you waiting for? Offer this additional service to your customers and they love to purchase and come back to your shop!

= Free Features =
* Admin can enable payment of deposits
* Admin can set a specific amount as deposit for a product he/she wants to purchase
* Admin can enable deposit payment from single product page
* Admin can force payment of a deposit for a single product
* Admin can choose how to handle shippings for products purchased leaving a deposit
* Users can book a reserve a product by leaving a deposit or a down payment
* If enabled by the admin and after payment of the balance, users can choose shipping method for the product they have purchased
* The order associated to the balance is automatically created when the deposit for the product is left
* Orders for down and full payments are handled using parent-child structure
* Update "My account" page to better show orders with deposit

== Installation ==

1. Unzip the downloaded zip file.
2. Upload the plugin folder into the `wp-content/plugins/` directory of your WordPress site.
3. Activate `YITH WooCommerce Deposits and Down Payments` from Plugins page

YITH WooCommerce Deposits and Down Payments will add a new submenu called "Deposits and Down Payments" in "YIT Plugins" menu. From this page you can configure plugin settings.

== Screenshots ==

1. [user] Loop - Add deposit to cart
2. [user] Single - Add deposit to cart & shipping selection
3. [user] Cart - Deposit added to cart
4. [user] Checkout - Order with deposit
5. [user] My Account - Recent orders with deposits
6. [user] My Account - Order with deposit details
7. [admin] Order list
8. [admin] Edit deposit order
9. [admin] Edit full payment order

== Changelog ==

= 1.2.2 - Released: Oct, 24 - 2018 =

* New: updated plugin framework
* Fix: plugin do not create suborders when only shipping is added to balance

= 1.2.1 - Released: Oct, 15 - 2018 =

* New: support to WooCommerce 3.5.x
* New: support to WordPress 4.9.8
* Tweak: improved YITH WooCommerce Product Add-ons compatibility
* Tweak: improved totals, tax and coupon calculation, when deposit is applied to cart
* Update: Italian language
* Update: Spanish language
* Fix: payment complete status for orders that contains only deposits
* Fix: avoid WooCommerce increasing sales counter twice for a product purchased with deposit
* Dev: new action yith_wcdp_after_add_deposit_to_cart
* Dev: new filter yith_wcdp_show_cart_total_html to filter cart total html
* Dev: new filter yith_wcdp_is_deposit_mandatory  to let third party dedvelopers set deposit as mandatory on product level via code

= 1.2.0 - Released: Jan, 31 - 2018 =

* New: WooCommerce 3.3.0 support
* New: Updated plugin-fw
* New: added nl_NL translation
* New: added label with order total including balance in the cart
* Tweak: filter order status on My Account page only
* Tweak: fixed Sold Individually behaviour when Deposit gets added to cart
* Fix: preventing Fatal Error: Called method get_order_id on a non-object for WC < 3.0
* Fix: issue with Added to Cart message not appearing
* Fix: added an additional check to avoid js errors on single product page

= 1.1.2 - Released: Nov, 06 - 2017 =

* New: added WC 3.2.1 compatibility
* Tweak: recalculate totals after restoring original cart (avoid checkout skipping the payment)
* Tweak: plugin now shows prices including taxes when required
* Tweak: added checks over product before adding it to temporary cart
* Fix: customer can now pay balance orders even if products are out of stock (stock handling is processed during deposit)
* Dev: added yith_wcdp_is_deposit_enabled_on_product filter, to let third party plugin filter is_deposit_enabled_on_product() return value
* Dev: added yith_wcdp_skip_support_cart filter, to let third party plugin avoid support cart processing
* Dev: added yith_wcdp_suborder_add_cart_item_data filter, to let third party plugin add cart item data during cart processing for suborders creation

= 1.1.1 - Released: Apr, 21 - 2017 =

* Tweak: update plugin-fw
* Tweak: optimized meta saving
* Tweak: avoid double "Deposit" or "Full Payment" label before order item name
* Fix: problem with duplicated meta
* Dev: added yith_wcdp_disable_email_notification filter, to let disable balance email notifications

= 1.1.0 - Released: Apr, 03 - 2017 =

* New: WordPress 4.7.3 compatibility
* New: WooCommerce 3.0-RC2 compatibility
* New: "Reset Data" handling for variation form on single product page
* Tweak: new text-domain
* Tweak: fixed downloads not appearing for "partially-paid" orders
* Tweak: fixed plugin when product has more then 30 variations
* Tweak: added check over product when filtering get_product_from_item
* Tweak: added balance total to "Suborder" column in order page
* Fix: js error that was repeating #yith-wcdp-add-deposit-to-cart at each found_variation
* Fix: preventing warning on setting panel, when no shipping method is set
* Fix: possible notice due to undefined global $post
* Fix: possible notice when global $post is not an object
* Fix: WooCommerce decreasing stock both on Deposit and Balance orders
* Fix: problem with get_cart_from_session when using YITH Stripe and YITH Subscription
* Fix: js handling for "Shipping Calculator" on variable products
* Fix: Wrong deposits amount in admin email
* Dev: added yith_wcdp_not_downloadable_on_deposit filter to make deposit downloadable, when needed
* Dev: fixed yith_wcdp_deposit_value and yith_wcdp_deposit_balance filters (now they send variation_id and product_id as additional parameters to filter)

= 1.0.4 - Released: Oct, 10 - 2016 =

* Added: variation Handling
* Added: compatibility for shipping zones
* Tweak: make plugin work with [product_page] woocommerce shortcode
* Tweak: changed plugin text domain to yith-woocommerce-deposits-and-down-payments

= 1.0.3 - Released: Jun, 13 - 2016 =

* Added: WooCommerce 2.6-RC1 compatibility
* Added: yith_wcdp_deposit_label filter to change deposit label
* Added: yith_wcdp_full_payment_label filter to change full amount label
* Added: yith_wcdp_process_deposit to let third party plugin to prevent plugin from processing deposits for some products
* Added: yith_wcdp_propagate_coupons to let coupons be applied to suborders
* Added: yith_wcdp_virtual_on_deposit to let third party plugin make deposits product not virtual
* Added: function yith_wcdp_get_order_subtotal

= 1.0.2 - Released: May, 02 - 2016 =

* Added: support for WordPress 4.5.1
* Added: support for WooCommerce 2.5.5
* Added: capability for the user to regenerate shipping methods basing on shipping address in single product page
* Added: Quick / Bulk deposit options edit for products
* Tweak: Passed product variable to templates, avoiding global variable usage
* Tweak: added qty calculation on "Full Amount" / "Down payment"
* Fixed: plugin changing internal pointer of item array in backend order page
* Fixed: YITH Plugins view id (preventing assets to load on admin plugin settings page)

= 1.0.1 - Released: Dec, 01 - 2015 =

* Added: filter yith_wcdp_pay_full_amount_label
* Added: filter yith_wcdp_pay_deposit_label
* Added: filter yith_wcdp_my_deposit_title
* Added: filter yith_wcdp_my_deposit_text
* Added: filter yith_wcdp_skip_suborder_creation
* Added: action yith_wcdp_before_my_deposits_table
* Added: action yith_wcdp_after_my_deposits_table
* Added: user can enable/disable deposit for all products from option panel
* Added: user can force deposit for all products from option panel
* Added: user can override general options from product panel
* Added: detailed price on my-deposits table (subtotal/discount)
* Added: check over deposit value (choose min between full price and calculated deposits)
* Updated: plugin-fw
* Updated: plugin-fw loading procedure
* Fixed: support cart cancelling previous applied coupons

= 1.0.0 - Released: Oct, 15 - 2015 =

* Initial release

== Suggestions ==

If you have suggestions about how to improve YITH WooCommerce Deposits and Down Payments, you can [write us](mailto:plugins@yithemes.com "Your Inspiration Themes") so we can bundle them into YITH WooCommerce Deposits and Down Payments.

== Translators ==

= Available Languages =
* English (Default)
* Spanish
* Italian
* Dutch

Need to translate this plugin into your own language? You can contribute to its translation from [this page](https://translate.wordpress.org/projects/wp-plugins/yith-woocommerce-deposits-and-down-payments "Translating WordPress").
Your help is precious! Thanks
