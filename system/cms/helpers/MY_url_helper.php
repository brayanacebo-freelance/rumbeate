<?php defined('BASEPATH') OR exit('No direct script access allowed.');

/**
 * PyroCMS URL Helpers
 *
 * This overrides Codeigniter's helpers/url_helper.php file.
 *
 * @package   PyroCMS\Core\Helpers
 * @author    PyroCMS Dev Team
 * @copyright Copyright (c) 2012, PyroCMS LLC
 */

if (!function_exists('url_title'))
{

	/**
	 * Create URL Title
	 *
	 * Takes a "title" string as input and creates a human-friendly URL string
	 * with either a dash or an underscore as the word separator.
	 * Cyrillic alphabet characters are supported.
	 *
	 * @param string  $str       The string
	 * @param string  $separator The separator, dash or underscore.
	 * @param boolean $lowercase Whether it should be converted to lowercase.
	 *
	 * @return string The URL slug
	 */
	function url_title($str, $separator = 'dash', $lowercase = false)
	{
		$replace = ($separator == 'dash') ? '-' : '_';

		$trans = array(
			'&\#\d+?;' => '',
			'&\S+?;' => '',
			'\s+' => $replace,
			'[^a-z0-9\-\._]' => '',
			$replace.'+' => $replace,
			$replace.'$' => $replace,
			'^'.$replace => $replace,
			'\.+$' => ''
			);

		$str = convert_accented_characters($str);
		$str = strip_tags($str);

		foreach ($trans as $key => $val)
		{
			$str = preg_replace("#".$key."#i", $val, $str);
		}

		if ($lowercase === true)
		{
			if (function_exists('mb_convert_case'))
			{
				$str = mb_convert_case($str, MB_CASE_LOWER, "UTF-8");
			}
			else
			{
				$str = strtolower($str);
			}
		}

		$CI = & get_instance();
		$str = preg_replace('#[^'.$CI->config->item('permitted_uri_chars').']#i', '', $str);

		return trim(stripslashes($str));
	}

}

if (!function_exists('shorten_url'))
{

	/**
	 * Shorten URL
	 *
	 * Takes a long url and uses the TinyURL API to return a shortened version.
	 * Supports Cyrillic characters.
	 *
	 * @param  string $url long url
	 *
	 * @return string Short url
	 */
	function shorten_url($url = '')
	{
		$CI = & get_instance();

		$CI->load->spark('curl/1.2.1');

		if (!$url)
		{
			$url = site_url($CI->uri->uri_string());
		}

		// If no a protocol in URL, assume its a CI link
		elseif ( ! preg_match('!^\w+://! i', $url))
		{
			$url = site_url($url);
		}

		return $CI->curl->simple_get('http://tinyurl.com/api-create.php?url='.$url);
	}

}


	/**
	 * URL uploads
	 *
	 * Esta URL nor permite cargar el directorio uploads general de la instalación
	 *
	 * @param  url de base de datos
	 * @return string con la url completa del archivo
	 */

	if (!function_exists('upload_url')) {

		function upload_url($uri = '') {
			$CI = & get_instance();
			return $CI->config->site_url('uploads/default/files/' . $uri);
		}

	}

		/**
	 * Admin Url
	 *
	 * Esta URL nor permite cargar por defecto nuestro dominio /admin
	 *
	 * @param  Consecutivo a dominio/admin/...
	 * @return url del admin
	 */

		if (!function_exists('backend_url')) {

			function backend_url($uri = '') {
				$CI = & get_instance();
				return $CI->config->site_url('admin/' . $uri);
			}

		}


// ---------------------------------------------------------------------------- THEME KUBOCMS


/**
* Kubo Url
*
* Esta URL permite cargar por defecto nuestro dominio /system/cms/themes/kubocms/
*
* @param  Consecutivo a dominio/system/cms/themes/kubocms/...
* @return url del tema kubocms
*/

if (!function_exists('kubo_url')) {
	function kubo_url($uri = '') {
		$CI = & get_instance();
		return $CI->config->site_url('system/cms/themes/kubocms/' . $uri);
	}
}

if (!function_exists('kubo_js')) {
	function kubo_js($uri = '') {
		$CI = & get_instance();
		$src = $CI->config->site_url('system/cms/themes/kubocms/js/' . $uri);
		$scrip = "<script src='".$src."'></script>";
		return $scrip;
	}
}

if (!function_exists('kubo_css')) {
	function kubo_css($uri = '') {
		$CI = & get_instance();
		$src = $CI->config->site_url('system/cms/themes/kubocms/css/' . $uri);
		$scrip = "<link rel='stylesheet' href='".$src."'/>";
		return $scrip;
	}
}

if (!function_exists('assets_url')) {
	function assets_url($uri = '') {
		$CI = & get_instance();
		$src = $CI->config->site_url('addons/shared_addons/themes/rumbeate/' . $uri);
		return $src;
	}
}
