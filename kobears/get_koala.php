<?php

global $wpdb;
$result = $wpdb->get_results( "SELECT meta_value FROM kobe_frmt_form_entry_meta WHERE meta_key='upload-1'");
$habitat = $wpdb->get_results( "SELECT meta_value FROM kobe_frmt_form_entry_meta WHERE meta_key='select-1'");
$tag = $wpdb->get_results( "SELECT meta_value FROM kobe_frmt_form_entry_meta WHERE meta_key='text-1'");
$habitatObj=array();
$tagObj=array();

foreach($habitat as $row){  $habitatObj[] = $row->meta_value; }
foreach($tag as $row){  $tagObj[] = $row->meta_value; }
return $tagObj

?>