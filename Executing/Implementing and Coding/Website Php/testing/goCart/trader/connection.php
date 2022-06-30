
<?php $connection = oci_connect('77227208', 'Az@12345?', '//localhost/xe');
if (!$connection) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}