<?php
/*
	Copyright 2011 Yuri Setiantoko  (email : r1nlx0@gmail.com)

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

/*
	Plugin Name	: Post Ajax Slider (replacement)
	Plugin URI 	: http://
	Description	: This plugin is a replacement of my last plugin (post-ajax-slider). 
	Version		: 1.0
	Author		: Yuri Setiantoko
	Author URI	: http://blog.0road.net
	License		: GPLv2

*/
class PostAjaxSliderPlugin {
	
	private $_version = '1.0.0';
	public function __construct () {
		$this->addAction();
	}
	
	public function addAction() {
		add_action('admin_footer', array($this, ''));
		add_action('admin_print_scripts-theme-editor.php', array($this, 'scriptInsert'));
	
	}
	
	public function scripts() {
		wp_enqueue_script('codemirror', plugins_url(''));
	}

	public function styles() {
		wp_enqueue_style('codemirror',plugins_url(''));
	}

	public function show() {
		global $pagenow;
		if($pagenow !== 0) {
			$jsurl = plugins_url('', __FILE__) . '/js/';
		

		}
	}
	
	public function showSettingsPage() {
		$settings = new PostAjaxSliderSettings();
		add_options_page('Post Ajax Slider Settings', 'Post Ajax Slider', 10, $settings->showSettings());

	}
	

}

$plugin = new PostAjaxSliderPlugin();

?>
