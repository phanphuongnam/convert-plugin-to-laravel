<?php
function wp_upload_dir($time = null, $create_dir = true, $refresh_cache = false){
    return array(
        'path'=>  base_path() . "/public/uploads",
        'url' => url("/").'/public/uploads'
        
    );
    
}