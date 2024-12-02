<?php

/**
 * Ensures a folder path ends with a slash.
 * 
 * @param string $path The folder path
 * @return string The normalized folder path
 */
function ensureTrailingSlash($path)
{
    return rtrim($path, '/') . '/';
}

/**
 * Load the requested page along with the header and footer.
 * 
 * - Checks for the existence of .html and .php files for the requested page.
 * - If both files exist, includes '403.html' to indicate a conflict.
 * - If only one file exists, includes the respective file.
 * - If no files exist, includes '404.html' to indicate the page is not found.
 * - Automatically includes the header and footer.
 * 
 * @param string $template_root Folder where header/footer files are stored
 * @param string $folder_root Folder where the page files are stored
 * @param string|null $page Optional page name from query string (defaults to 'index')
 */
function loadPage($template_root = 'template/', $folder_root = 'pages', $page = null)
{
    // Normalize folder paths
    $template_root = ensureTrailingSlash($template_root);
    $folder_root = ensureTrailingSlash($folder_root);

    // Determine the requested page (default to 'index')
    $page = $page ?? $_GET['page'] ?? 'index';

    // Define the full file paths for both .html and .php versions of the page
    $html_file = $folder_root . $page . '.html';
    $php_file = $folder_root . $page . '.php';

    // Check if the .html and .php files exist
    $html_exists = file_exists($html_file);
    $php_exists = file_exists($php_file);

    // Determine the appropriate file to include
    if ($html_exists && $php_exists) {
        // If both .html and .php files exist, use '403.html'
        $include_page = $folder_root . '403.html';
    } elseif ($html_exists) {
        // If only .html exists, include it
        $include_page = $html_file;
    } elseif ($php_exists) {
        // If only .php exists, include it
        $include_page = $php_file;
    } else {
        // If neither file exists, include '404.html'
        $include_page = $folder_root . '404.html'; // No file found, include 404 page
    }

    // Load header, the determined page, and footer
    // loadHeader($template_root);
    // require_once $include_page; // Include the resolved page
    // loadFooter($template_root);
    return $include_page; // Include the resolved page
}
