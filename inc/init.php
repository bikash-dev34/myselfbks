<?php
/**
 * Load All required files
 */
$files_loader=array(
    '/inc/functions/assets.php',
    '/inc/functions/setup.php',
);
/**
 * Load The File
 */
foreach ($files_loader as $file)
{
    if(file_exists(get_template_directory().'/'.$file))
    {
        locate_template($file,true,true);
    }
}
unset($file);
