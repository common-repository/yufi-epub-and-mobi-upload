<?php
/*
Plugin Name: Yufi ePub and mobi file uploads.
Version: 1.1
Plugin URI: https://yufi.co
Author: Yufi Ltd
Author URI: https://yufi.co
Description: Allow ePUB and MOBI file uploads.
License: GNU General Public License (Version 2 - GPLv2)
*/

/*
© Copyright 2015  Yufi LTD  ( http://yufi.co )

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License (Version 2 - GPLv2) as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function yufi_custom_mime_types($mime_types){

   $mime_types['mobi'] = 'application/octet-stream';
   $mime_types['epub'] = 'application/epub+zip';

   return $mime_types;
}

add_filter('upload_mimes','yufi_custom_mime_types', 1, 1);

?>
