genesis-social-menu
===================

This code is essentially a fork of that written by Justin Tadlock using attribute selectors to display social icons using WordPress custom menus.  In this instance I'm using Font Awesome icons as there's a different range of icons available than the Genericons that Justin used. Also, in this instance I'm  the menu in a Genesis Theme. So the code's been adjusted accordingly

This code is being placed on the genesis_header hook and as I was using it in the sixteen nine theme which places the footer text in the fixed vertical header I used the hierarchy to place it just before the footer. You could of course place this code where you wish on any of the other genesis (or WordPress) hooks.


Instructions
===================

1. Copy the content of the attached files to your theme's style.css and functions.php (exclude the opening and closing <?php tags)
2. Create a Custom Menu and call it Social (not Social Menu, just 'Social' - or if you wish to call it something else, do so and adjust the Menu ID selectors accordingly)
3. Add your social links to the menu - this code picks up on the default urls and attached the relevant icons according to the url the menu items are linking to. Nifty!
