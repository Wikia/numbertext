<?php
/**
 * Main classes used by the Numbertext extension.
 * Is based on the source code from http://numbertext.org/
 *
 * @author Pavel Astakhov <pastakhov@yandex.ru>
 * @license LGPL/BSD dual-license
 */
class Numbertext {
	private static function load( $lang ) {
		$url = __DIR__ . "/data/" . $lang . ".sor";
		$st = file_get_contents( $url );
		if ( $st === false ) {
			return null;
		}
		$s = new Soros( $st );
		if ( $lang != null ) {
			self::addModule( [ $lang, $s ] );
		}
		return $s;
	}

	public static function onParserFirstCallInit( Parser $parser ) {
		global $wgNumbertext_defaultLang, $wgLanguageCode, $wgNumbertextLang;

		$wgNumbertext_defaultLang = $wgLanguageCode;

		$wgNumbertextLang = [
			'Hung' => '',
			'Hung_2' => '',
			'Roman' => '',
			'Roman_2' => '',
			'Suzhou' => '',
			'af_ZA' => 'af',
			'ca_ES' => 'ca',
			'cs_CZ' => 'cs',
			'da_DK' => 'da',
			'de_DE' => 'de',
			'el_EL' => 'el',
			'en_IN' => '',
			'en_US' => 'en',
			'en_US_2' => '',
			'eo' => 'eo',
			'es_ES' => 'es',
			'fi_FI' => 'fi',
			'fr_BE' => '',
			'fr_CH' => '',
			'fr_FR' => 'fr',
			'he_IL' => 'he',
			'hu_HU' => 'hu',
			'hu_HU_2' => '',
			'id_ID' => 'id',
			'it_IT' => 'it',
			'ja_JP' => 'ja',
			'ja_JP_2' => '',
			'ko_KP' => 'ko-KP',
			'ko_KR' => 'ko',
			'lb_LU' => 'lb',
			'lt_LT' => 'lt',
			'lv_LV' => 'lv',
			'nl_NL' => 'nl',
			'pl_PL' => 'pl',
			'pt_BR' => 'pt-BR',
			'pt_PT' => 'pt',
			'ro_RO' => 'ro',
			'ru_RU' => 'ru',
			'sh_RS' => 'sh',
			'sl_SI' => 'sl',
			'sr_RS' => 'sr',
			'sv_SE' => 'sv',
			'th_TH' => 'th',
			'tr_TR' => 'tr',
			'vi_VN' => 'vi',
			'zh_ZH' => 'zh',
			'zh_ZH_2' => '',
		];

		$parser->setFunctionHook( 'MAG_NUMBERTEXT', 'Numbertext::numbertext' );
		$parser->setFunctionHook( 'MAG_MONEYTEXT', 'Numbertext::moneytext' );
	}

	private static function getModules( $m = null ) {
		static $modules = [];
		if ( is_array( $m ) ) {
			$modules[] = $m;
		}
		return $modules;
	}

	private static function getLangModule( $lang ) {
		$modules = self::getModules();
		if ( isset( $modules[$lang] ) ) {
			return $modules[$lang];
		}
		return null;
	}

	private static function addModule( $m ) {
		self::getModules( $m );
	}

	public function __construct() {
 }

	/**
	 * Number to text conversion
	 *
	 * @param Parser $parser
	 * @param string $input
	 * @param string $lang default 'en_US'
	 * @return string
	 */
	public static function numbertext( &$parser, $input = '', $lang = '' ) {
		$fileLang = self::getLangFileName( $lang );

		$s = self::getLangModule( $fileLang );
		if ( is_null( $s ) ) {
			$s = self::load( $fileLang );
		}
		if ( is_null( $s ) ) {
			return null;
		}
		return $s->run( $input );
	}

	/**
	 * Money to text conversion
	 *
	 * @param Parser $parser
	 * @param string $input
	 * @param string $money
	 * @param string $lang default 'en_US'
	 * @return string
	 */
	public static function moneytext( &$parser, $input = '', $money = '', $lang = '' ) {
		return self::numbertext( $parser, $money . " " . $input, $lang );
	}

	private static function getLangFileName( $lang, $except = '' ) {
		global $wgNumbertext_defaultLang, $wgNumbertextLang;

		if ( $lang == '' ) {
			if ( ( $wgNumbertext_defaultLang == '' || is_null( $wgNumbertext_defaultLang ) )
				&& $except == ''
			) {
				$lang = $GLOBALS['wgUser']->getOption( 'language' );
				$except = 'user';
			} elseif ( $except != 'content' ) {
				$lang = $wgNumbertext_defaultLang;
				$except = 'content';
			} else {
				return 'en_US';
			}
		}

		if ( array_key_exists( $lang, $wgNumbertextLang ) ) {
			return $lang;
		}

		$ret = self::recursive_array_search( strtolower( $lang ), $wgNumbertextLang );
		if ( $ret === false ) {
			return self::getLangFileName( '', $except );
		}
		return $ret;
	}

	private static function recursive_array_search( $needle, $haystack ) {
		foreach ( $haystack as $key => $value ) {
			$current_key = $key;
			if (
				$needle === $value ||
				( is_array( $value ) && self::recursive_array_search( $needle, $value ) !== false )
			) {
				return $current_key;
			}
		}
		return false;
	}
}
