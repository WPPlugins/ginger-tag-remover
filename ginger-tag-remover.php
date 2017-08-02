<?php
/**
* Plugin Name: Ginger tag remover
* Description: Removes HTML span tags (GINGER_SOFATWARE_correct, GINGER_SOFATWARE_noSuggestion,...) that  <strong>GINGER spelling</strong>  plugin inserts into posts.
* Version: 0.0.3
* Author: Jerko Lisnić
* License: GPLv2 or later
**/
/*  Copyright 2013  Jerko Lisnić  (email : jerko.lisnic@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Leave me alone. I don\'t want trouble.';
	exit;
}

function gtr_strip_ginger_tags($content){

	$gtr_patern_array=array();

	array_push($gtr_patern_array,array('pattern'=>'#\<span class\=\\\"GINGER_SOF[A]{0,1}TWARE_.*\\\"\>(.*?)\<\/span\>#m','replace'=>'$1'));
	array_push($gtr_patern_array,array('pattern'=>'#\<span id\=\\\".*\\\" class\=\\\"GINGER_SOF[A]{0,1}TWARE_.*\"\>(.*?)\<\/span\>#m','replace'=>'$1'));
	array_push($gtr_patern_array,array('pattern'=>'#\<span class\=\\\"GINGER_SOF[A]{0,1}TWARE_.*\\\" id\=\\\".*\\\"\>(.*?)\<\/span\>#m','replace'=>'$1'));
	
	foreach($gtr_patern_array as $pat){
		$content=preg_replace($pat['pattern'],$pat['replace'],$content);
	}
	
	//$content.='<!-- GINGER CLEANED -->';
	
	return $content;
}
add_filter('content_save_pre','gtr_strip_ginger_tags');

?>