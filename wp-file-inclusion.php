<?php

/**
 * Function to include all the theme/plugin files.
 */
if (!function_exists('maverick_files')) {
    /**
     * Function to include all the theme/plugin files.
     *
     * @since 1.0.0
     * @param string $glob_path Path to pass in glob() function
     * @param string $file_root Skip root file if any
     * @return void 
     */
    function maverick_files($glob_path, $file_root = '')
    {
        // load in all the required inc files.
        $include_files = glob($glob_path);

        // if we have any include files.
        if (!empty($include_files)) {

            // loop through each file.
            foreach ($include_files as $include_file) {

                if ('' !== $file_root) {
                    // if this file in the loop is this file we are now in
                    if (strpos($include_file, $file_root) !== false) {
                        continue;
                    }
                }

                // required this file in the theme
                require_once($include_file);
            }
        }
    }
}

/**
 * Function to include all the theme/plugin files.
 */
if (!function_exists('maverick_files_v2')) {
    /**
     * Function to include all the theme/plugin files.
     *
     * @since 1.0.0
     * @param string $glob_path Path to pass in glob() function
     * @param string $file_root Skip root file if any
     * @return void 
     */
    function maverick_files_v2($glob_path, $exclude_files = array())
    {
        // load in all the required inc files.
        $include_files = glob($glob_path);

        // if we have any include files.
        if (!empty($include_files)) {

            // loop through each file.
            foreach ($include_files as $include_file) {

                // if we have any include files.
                if (!empty($exclude_files)) {

                    // loop through each file.
                    foreach ($exclude_files as $exclude_file) {

                        if (strpos($include_file, $exclude_file) !== false) {
                            continue;
                        }
                    }
                }

                // required this file in the theme
                require_once($include_file);
            }
        }
    }
}
