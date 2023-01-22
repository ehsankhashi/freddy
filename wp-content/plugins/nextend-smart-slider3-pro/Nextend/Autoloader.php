<br>
<b>Fatal error</b>:  Uncaught Error: Call to undefined function Nextend\Framework\Platform\WordPress\is_admin() in C:\xampp\htdocs\wp-content\plugins\nextend-smart-slider3-pro\Nextend\Framework\Platform\WordPress\PlatformWordPress.php:17
Stack trace:
#0 C:\xampp\htdocs\wp-content\plugins\nextend-smart-slider3-pro\Nextend\Framework\Platform\Platform.php(19): Nextend\Framework\Platform\WordPress\PlatformWordPress-&gt;__construct()
#1 C:\xampp\htdocs\wp-content\plugins\nextend-smart-slider3-pro\Nextend\Framework\Pattern\SingletonTrait.php(12): Nextend\Framework\Platform\Platform-&gt;__construct()
#2 C:\xampp\htdocs\wp-content\plugins\nextend-smart-slider3-pro\Nextend\Framework\Platform\Platform.php(85): Nextend\Framework\Platform\Platform::getInstance()
#3 C:\xampp\htdocs\wp-content\plugins\nextend-smart-slider3-pro\Nextend\Autoloader.php(194): require('C:\\xampp\\htdocs...')
#4 C:\xampp\htdocs\wp-content\plugins\nextend-smart-slider3-pro\Nextend\Autoloader.php(175): Nextend\Autoloader-&gt;requireFile('C:\\xampp\\htdocs...')
#5 C:\xampp\htdocs\wp-content\plugins\nextend-smart-slider3-pro\Nextend\Autoloader.php(128): Nextend\Autoloader-&gt;loadMappedFile('Nextend\\', 'Framework\\Platf...')
#6 C:\xampp\htdocs\wp-content\plugins\nextend-smart-slider3-pro\Nextend\SmartSlider3\SmartSlider3.php(30): Nextend\Autoloader-&gt;loadClass('Nextend\\Framewo...')
#7 C:\xampp\htdocs\wp-content\plugins\nextend-smart-slider3-pro\Nextend\Framework\Pattern\SingletonTrait.php(16): Nextend\SmartSlider3\SmartSlider3-&gt;init()
#8 C:\xampp\htdocs\wp-content\plugins\nextend-smart-slider3-pro\Nextend\Framework\Pattern\SingletonTrait.php(12): Nextend\SmartSlider3\SmartSlider3-&gt;__construct()
#9 [internal function]: Nextend\SmartSlider3\SmartSlider3::getInstance()
#10 C:\xampp\htdocs\wp-content\plugins\nextend-smart-slider3-pro\Nextend\Autoloader.php(45): call_user_func_array(Array, Array)
#11 C:\xampp\htdocs\wp-content\plugins\nextend-smart-slider3-pro\Nextend\Autoloader.php(55): Nextend\Autoloader-&gt;__construct()
#12 C:\xampp\htdocs\wp-content\plugins\nextend-smart-slider3-pro\Nextend\Autoloader.php(203): Nextend\Autoloader::getInstance()
#13 {main}
  thrown in <b>C:\xampp\htdocs\wp-content\plugins\nextend-smart-slider3-pro\Nextend\Framework\Platform\WordPress\PlatformWordPress.php</b> on line <b>17</b><br>