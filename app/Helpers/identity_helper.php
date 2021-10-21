<?php

/**
 * Helpher untuk menampilkan identitas aplikasi
 *
 * @package CodeIgniter 4
 * @category Helpers
 * @author Ardi Tri Heru (arditriheruh@gmail.com)
 * @link https://github.com/arditriheru
 */

if (!function_exists('getTabTitle')) {
	function getTabTitle()
	{
		$getTopTitle = "Multiple Login";
		return $getTopTitle;
	}
}

if (!function_exists('getCopyright')) {
	function getCopyright()
	{
		$getCopyright = "<footer class='main-footer'>
        <div class='float-right d-none d-sm-block'>
            <b>Dev.</b> Ardi Tri Heru
        </div>
        <strong>Copyright &#169;&nbsp;" . date('Y') . "</b> <a expr:href='data:blog.homepageUrl'><data:blog.title/></a> <a href='https://arditriheru.github.io' target='blank'> Fakultas Hukum UII</a></strong> - All rights reserved.
    </footer>";
		return $getCopyright;
	}
}
