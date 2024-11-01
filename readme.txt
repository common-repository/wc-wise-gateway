=== Gateway for Wise on WooCommerce ===

Contributors: alx359
Donate link: https://www.paypal.com/donate/?hosted_button_id=Z44PBY7ARUPRY
Tags: bank transfer, gateway, wise, transferwise, payment, wire, commerce, checkout, woocommerce
Tested up to: 6.4.2
Requires at least: 5.0
Requires PHP: 7.0
Stable tag: 2.2
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

A simple WooCommerce payment gateway for Wise (formerly TransferWise)

== Description ==

*Gateway for Wise on WooCommerce* is a simple payment gateway that doesn't rely on API's. Upon placing an order with such method of payment, the bank account details of the seller become available in the thank-you page and emails, so the customer can refer to that data to perform the payment manually using their own online banking, for example.

= Main features =

* Can support an unlimited number of Wise balances/accounts/currencies. The only limitation is they all must have the same person as beneficiary
* Each bank account from Wise configured in the backend gets displayed to the customer only when relevant criteria are met: (a) matches the same currency as an order, or (b) has a scope of usage that includes the billing country itself, or the continent it's located  
* i18n friendly

== Installation ==

Installing *Gateway for Wise on WooCommerce* is similar to any other WP plugin. The installation can be done either by searching the WP plugin repository or via the "Plugins > Add New" screen in your WP Dashboard.

Upon install and activation, go to "WooCommerce > Settings > Payments", and to the newly added "Wise bank transfer" gateway hit the "Set-up" (or "Manage") button to configure it as per your needs. 

== Screenshots ==

1. Detail view of the backend for enabling/disabling the Wise method in WooCommerce > Settings > Payments.
2. Backend view of a fully configured Wise Settings page.
3. Checkout page detail displayed in the frontend, when the Wise payment method has been enabled in the backend.
4. Sample thank-you page of an order with the relevant Wise bank details.
5. Sample email received by the customer with relevant Wise bank details.

== Frequently Asked Questions ==

= What is this plugin and for whom is it for? =

*Gateway for Wise on WooCommerce* is a simple Payment Gateway for Wise (formerly TransferWise) that doesn't rely on any API's. For customers that had chosen "bank transfer" as their preferred method of payment, it provides the bank details of the seller that best fits the given transaction. Bank payments via Wise would be preferred by some customers for their lower overall fees, or because they don't fancy other methods like credit cards, paypal or similar services. Also in some countries, like Germany, it's become customary to pay for stuff online via bank transfers.

= Does everything work? Is it there a 'Pro' version? =

There's no 'Pro' version. Everything works with no limitations.

= Is this plugin supported? =

Yes, it's supported in the WP forums, when time permits

= Acknowledgements =

The plugin is based on the BACS gateway that's already part of WooCommerce.

== Changelog ==

= 2.2 - 2024-01-27 =
* NEW: Added compatibility with HPOS
* Tested compatibility with latest WP/WC

= 2.1.5 - 2022-08-13 =
* TWEAK: The Wise logo is now taken from URL, for better compatibility with other plugins & themes
* Tested compatibility with latest WP/WC

= 2.1.4 - 2022-05-04 =
* FIX: A line was left commented during the 2.1.3 cleanup. This has affected the ability to save changes of some of the fields (thanks Uberchilli)

= 2.1.3 - 2022-04-22 =
* Disabled the code that would allow this plugin to work as a single file included in functions.php instead, as that code appears to create undesirable entries in the logs in some configurations
* Some unused code cleanup

= 2.1.2 - 2022-02-24 =
* Revised code to adhere to the latest gateway template guidelines shipped with Woocommerce (6.2.1)
* Tested compatibility with latest WP/WC

= 2.1.1 - 2021-09-02 =
* FIX: better adherence to WP plugin coding standards, guidelines, and best practices

= 2.1 - 2021-09-01 =
* NEW: Now site operators can preview the 'Payment Details' pages (aka order-received/thank-you pages) from inside the plugin settings, for those orders placed with Wise as the payment method
* DEV: Added filter 'ew_wise_limit_orders', to change in functions.php how many orders at once can be fetched for preview (default: 25)
* FIX: i18n files
* Tested compatibility with latest WP/WC

= 2.0.1 - 2021-04-03 =
* FIX: syntax incompatibility with PHP < 7.4

= 2.0 - 2021-03-29 =
* Major improvements and usability fine-tuning in both, backend and frontend 

= 1.0 - 2019-04-11 =
* Initial version (internal)

== Upgrade Notice ==

= 2.0.0 =
First actual release in the WP repository, with major improvements

= 1.0.0 =
Internal release
