=== Plugin Name ===
Contributors: jlisnic
Tags: GINGER, remove, find and replace
Requires at least: 3.0
Tested up to: 3.6
Stable tag: 0.0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Ginger tag remover strips tags that Ginger browser plugin inserts into the code.

== Description ==

Ginger tag remover strips tags that Ginger browser plugin inserts into the code.

This HTML tags will be removed:

<code>
<span class="GINGER_SOFATWARE_noSuggestion GINGER_SOFATWARE_correct">***CLEAN TEXT***</span>
<span class="GINGER_SOFATWARE_noSuggestion GINGER_SOFATWARE_SpellingCorrect">***CLEAN TEXT***</span>
<span class="GINGER_SOFATWARE_correct">***CLEAN TEXT***</span>
<span class="GINGER_SOFATWARE_spelling">***CLEAN TEXT***</span>
<span class="GINGER_SOFATWARE_mark" id="HEX-NUMBER">***CLEAN TEXT***</span>
<span id="HEX-NUMBER" class="GINGER_SOFATWARE_mark">***CLEAN TEXT***</span>
</code>

Every time you save post those HTML tags will be filtered out. 

To remove tags from already published posts you will need to go into "All posts" page and search for "GINGER_" then open each listed post and click "Update" or "Save Draft" button. 

== Installation ==

Upload the Ginger tag remover plugin to your blog, Activate it

You're done!

== Changelog ==

= 0.0.3 =
* Added support for GINGER_SOFTWARE and GINGER_SOFATWARE tags

= 0.0.2 =
* Added support for new "GINGER tags"

= 0.0.1 =
* Initial release
