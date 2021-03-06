=== BNS Add Style ===
Contributors: cais
Donate link: http://buynowshop.com
Tags: retired, styles, custom-styles, admin, editor, appearance, plugin-only, adopt-me
Requires at least: 2.5
Tested up to: 3.6
Stable tag: 0.6
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

Adds an enqueued custom stylesheet to the active theme (retired plugin).

== Description ==

This plugin is considered retired and may not be actively supported going forward. If all you need to do is change a Theme's existing CSS this plugin will provide you an enqueued stylesheet that will not be over-written when a Theme is update; saving you the work of creating and maintaining a Child-Theme.

== Installation ==
* Under Plugins | Add New via Search or Upload.
* Activate.
* Read this article for further assistance with installation: http://wpfirstaid.com/2009/12/plugin-installation/
* Add appropriate style elements and properties to "bns-add-custom-style.css" as needed.
* Enjoy!

== Frequently Asked Questions ==
= Can I specify the name of this custom stylesheet? =
No, the stylesheet file name is: bns-add-custom-style.css

= How can I edit the "bns-add-custom-style.css" stylesheet? =
You are able to edit the stylesheet with either your preferred IDE/method of editing theme template files; or, you can simply use the editor found under Appearance | Editor and locate the "bns-add-custom-style.css" file.

== Screenshots ==
* There are no screenshots, yet.

== Other Notes ==
* Copyright 2012-2013  Edward Caissie  (email : edward.caissie@gmail.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 2,
  as published by the Free Software Foundation.

  You may NOT assume that you can use any other version of the GPL.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

  The license for this software can also likely be found here:
  http://www.gnu.org/licenses/gpl-2.0.html

* Please note, support may be available on the WordPress Support forums; but, it may be faster to visit http://buynowshop.com/plugins/bns-add-styles and leave a comment with the issue you are experiencing.

== Upgrade Notice ==
Please stay current with your WordPress installation, your active theme, and your plugins.

== Changelog ==
= 0.6 =
* Release February 2013
* Removed LESS support and relevant files, simplify to just being a CSS adder
* Documentation clean up
* Version number correction

= 0.5.4 =
* Released December 2012
* Correct style bleed through into Administration Panels

= 0.5.3 =
* Released December 2012
* Fix typos and add complete URL link
* Refactor to only add LESS file; end-user will need to FTP / manually edit file contents

= 0.5.2 =
* Released December 2012
* Refactored to correct headers being resent and added LESS stylesheet version

= 0.5 =
* Release December 2012
* Added LESS support with additional stylesheet `bns-add-less-style.css` (beta)

= 0.4 =
* Release November 2012
* Add i18n support to introductory text of stylesheet

= 0.3 =
* Implement OOP style class and code

= 0.2 =
* Set stylesheet version to dynamically match plugin version
* Minor 'readme.txt' updates

= 0.1 =
* Initial release