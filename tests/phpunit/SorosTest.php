<?php

require_once __DIR__ . '/../../Soros.php';

/**
 * Test class for Soros.
 * Generated by PHPUnit on 2013-01-11 at 03:29:26.
 *
 * @covers Soros
 */
class SorosTest extends PHPUnit\Framework\TestCase {

	public function test_ru_RU() {
		$this->assertTrue( mb_internal_encoding( 'UTF-8' ) );

		$contents = file_get_contents( __DIR__ . "/../../data/ru_RU.sor" );
		$this->assertFalse( $contents === false );

		$s = new Soros( $contents );

		$this->assertEquals( $s->run( '1' ), 'один' );
		$this->assertEquals( $s->run( '2' ), 'два' );
		$this->assertEquals( $s->run( '3' ), 'три' );
		$this->assertEquals( $s->run( '4' ), 'четыре' );
		$this->assertEquals( $s->run( '5' ), 'пять' );
		$this->assertEquals( $s->run( '6' ), 'шесть' );
		$this->assertEquals( $s->run( '7' ), 'семь' );
		$this->assertEquals( $s->run( '8' ), 'восемь' );
		$this->assertEquals( $s->run( '9' ), 'девять' );
		$this->assertEquals( $s->run( '10' ), 'десять' );
		$this->assertEquals( $s->run( '11' ), 'одиннадцать' );
		$this->assertEquals( $s->run( '12' ), 'двенадцать' );
		$this->assertEquals( $s->run( '13' ), 'тринадцать' );
		$this->assertEquals( $s->run( '14' ), 'четырнадцать' );
		$this->assertEquals( $s->run( '15' ), 'пятнадцать' );
		$this->assertEquals( $s->run( '16' ), 'шестнадцать' );
		$this->assertEquals( $s->run( '17' ), 'семнадцать' );
		$this->assertEquals( $s->run( '18' ), 'восемнадцать' );
		$this->assertEquals( $s->run( '19' ), 'девятнадцать' );

		$this->assertEquals( $s->run( '20' ), 'двадцать' );
		$this->assertEquals( $s->run( '21' ), 'двадцать один' );
		$this->assertEquals( $s->run( '22' ), 'двадцать два' );

		$this->assertEquals( $s->run( '30' ), 'тридцать' );
		$this->assertEquals( $s->run( '31' ), 'тридцать один' );
		$this->assertEquals( $s->run( '32' ), 'тридцать два' );

		$this->assertEquals( $s->run( '40' ), 'сорок' );
		$this->assertEquals( $s->run( '41' ), 'сорок один' );
		$this->assertEquals( $s->run( '42' ), 'сорок два' );

		$this->assertEquals( $s->run( '50' ), 'пятьдесят' );
		$this->assertEquals( $s->run( '51' ), 'пятьдесят один' );
		$this->assertEquals( $s->run( '52' ), 'пятьдесят два' );

		$this->assertEquals( $s->run( '60' ), 'шестьдесят' );
		$this->assertEquals( $s->run( '61' ), 'шестьдесят один' );
		$this->assertEquals( $s->run( '62' ), 'шестьдесят два' );
		$this->assertEquals( $s->run( '63' ), 'шестьдесят три' );
		$this->assertEquals( $s->run( '64' ), 'шестьдесят четыре' );

		$this->assertEquals( $s->run( '70' ), 'семьдесят' );
		$this->assertEquals( $s->run( '71' ), 'семьдесят один' );
		$this->assertEquals( $s->run( '72' ), 'семьдесят два' );

		$this->assertEquals( $s->run( '80' ), 'восемьдесят' );
		$this->assertEquals( $s->run( '81' ), 'восемьдесят один' );
		$this->assertEquals( $s->run( '82' ), 'восемьдесят два' );

		$this->assertEquals( $s->run( '90' ), 'девяносто' );
		$this->assertEquals( $s->run( '91' ), 'девяносто один' );
		$this->assertEquals( $s->run( '92' ), 'девяносто два' );

		$this->assertEquals( $s->run( '100' ), 'сто' );
		$this->assertEquals( $s->run( '101' ), 'сто один' );
		$this->assertEquals( $s->run( '102' ), 'сто два' );
		$this->assertEquals( $s->run( '110' ), 'сто десять' );
		$this->assertEquals( $s->run( '115' ), 'сто пятнадцать' );
		$this->assertEquals( $s->run( '122' ), 'сто двадцать два' );

		$this->assertEquals( $s->run( '200' ), 'двести' );
		$this->assertEquals( $s->run( '300' ), 'триста' );
		$this->assertEquals( $s->run( '400' ), 'четыреста' );
		$this->assertEquals( $s->run( '500' ), 'пятьсот' );
		$this->assertEquals( $s->run( '600' ), 'шестьсот' );
		$this->assertEquals( $s->run( '700' ), 'семьсот' );
		$this->assertEquals( $s->run( '800' ), 'восемьсот' );
		$this->assertEquals( $s->run( '900' ), 'девятьсот' );

		$this->assertEquals( $s->run( '1000' ), 'одна тысяча' );
		$this->assertEquals( $s->run( '1001' ), 'одна тысяча один' );
		$this->assertEquals( $s->run( '1012' ), 'одна тысяча двенадцать' );
		$this->assertEquals( $s->run( '1112' ), 'одна тысяча сто двенадцать' );

		$this->assertEquals( $s->run( '2000' ), 'две тысячи' );
		$this->assertEquals( $s->run( '3000' ), 'три тысячи' );
		$this->assertEquals( $s->run( '4000' ), 'четыре тысячи' );
		$this->assertEquals( $s->run( '5000' ), 'пять тысяч' );
		$this->assertEquals( $s->run( '6000' ), 'шесть тысяч' );
		$this->assertEquals( $s->run( '7000' ), 'семь тысяч' );
		$this->assertEquals( $s->run( '8000' ), 'восемь тысяч' );
		$this->assertEquals( $s->run( '9000' ), 'девять тысяч' );

		$this->assertEquals( $s->run( '10000' ), 'десять тысяч' );
		$this->assertEquals( $s->run( '10001' ), 'десять тысяч один' );
		$this->assertEquals( $s->run( '10011' ), 'десять тысяч одиннадцать' );
		$this->assertEquals( $s->run( '10105' ), 'десять тысяч сто пять' );
		$this->assertEquals( $s->run( '11000' ), 'одиннадцать тысяч' );
		$this->assertEquals( $s->run( '12345' ), 'двенадцать тысяч триста сорок пять' );
		$this->assertEquals( $s->run( '20781' ), 'двадцать тысяч семьсот восемьдесят один' );

		$this->assertEquals( $s->run( '100000' ), 'сто тысяч' );
		$this->assertEquals( $s->run( '100001' ), 'сто тысяч один' );
		$this->assertEquals( $s->run( '100002' ), 'сто тысяч два' );
		$this->assertEquals( $s->run( '100010' ), 'сто тысяч десять' );
		$this->assertEquals( $s->run( '100330' ), 'сто тысяч триста тридцать' );
		$this->assertEquals( $s->run( '100900' ), 'сто тысяч девятьсот' );
		$this->assertEquals( $s->run( '100603' ), 'сто тысяч шестьсот три' );
		$this->assertEquals( $s->run( '100339' ), 'сто тысяч триста тридцать девять' );

		$this->assertEquals( $s->run( '101000' ), 'сто одна тысяча' );
		$this->assertEquals( $s->run( '101004' ), 'сто одна тысяча четыре' );
		$this->assertEquals( $s->run( '101025' ), 'сто одна тысяча двадцать пять' );
		$this->assertEquals( $s->run( '101246' ), 'сто одна тысяча двести сорок шесть' );
		$this->assertEquals( $s->run( '102000' ), 'сто две тысячи' );
		$this->assertEquals( $s->run( '102007' ), 'сто две тысячи семь' );
		$this->assertEquals( $s->run( '102018' ), 'сто две тысячи восемнадцать' );
		$this->assertEquals( $s->run( '102059' ), 'сто две тысячи пятьдесят девять' );
		$this->assertEquals( $s->run( '102400' ), 'сто две тысячи четыреста' );
		$this->assertEquals( $s->run( '103000' ), 'сто три тысячи' );
		$this->assertEquals( $s->run( '103708' ), 'сто три тысячи семьсот восемь' );
		$this->assertEquals( $s->run( '104000' ), 'сто четыре тысячи' );
		$this->assertEquals( $s->run( '105000' ), 'сто пять тысяч' );
		$this->assertEquals( $s->run( '106000' ), 'сто шесть тысяч' );
		$this->assertEquals( $s->run( '107003' ), 'сто семь тысяч три' );
		$this->assertEquals( $s->run( '108002' ), 'сто восемь тысяч два' );
		$this->assertEquals( $s->run( '109001' ), 'сто девять тысяч один' );

		$this->assertEquals( $s->run( '110000' ), 'сто десять тысяч' );
		$this->assertEquals( $s->run( '131000' ), 'сто тридцать одна тысяча' );
		$this->assertEquals( $s->run( '122000' ), 'сто двадцать две тысячи' );
		$this->assertEquals( $s->run( '142876' ), 'сто сорок две тысячи восемьсот семьдесят шесть' );
		$this->assertEquals( $s->run( '151543' ), 'сто пятьдесят одна тысяча пятьсот сорок три' );

		$this->assertEquals( $s->run( '200000' ), 'двести тысяч' );
		$this->assertEquals( $s->run( '202000' ), 'двести две тысячи' );
		$this->assertEquals( $s->run( '300000' ), 'триста тысяч' );

		$this->assertEquals( $s->run( '1000000' ), 'один миллион' );
		$this->assertEquals( $s->run( '2000000' ), 'два миллиона' );
		$this->assertEquals( $s->run( '3000000' ), 'три миллиона' );
		$this->assertEquals( $s->run( '4000000' ), 'четыре миллиона' );
		$this->assertEquals( $s->run( '5000000' ), 'пять миллионов' );
		$this->assertEquals( $s->run( '6102099' ), 'шесть миллионов сто две тысячи девяносто девять' );
		$this->assertEquals( $s->run( '7010100' ), 'семь миллионов десять тысяч сто' );

		$this->assertEquals( $s->run( '10010010' ), 'десять миллионов десять тысяч десять' );
		$this->assertEquals( $s->run( '20020200' ), 'двадцать миллионов двадцать тысяч двести' );
		$this->assertEquals( $s->run( '21021021' ), 'двадцать один миллион двадцать одна тысяча двадцать один' );
		$this->assertEquals( $s->run( '22022022' ), 'двадцать два миллиона двадцать две тысячи двадцать два' );
		$this->assertEquals( $s->run( '25025025' ), 'двадцать пять миллионов двадцать пять тысяч двадцать пять' );
		$this->assertEquals( $s->run( '30000000' ), 'тридцать миллионов' );

		$this->assertEquals( $s->run( '100000000' ), 'сто миллионов' );
		$this->assertEquals( $s->run( '101000000' ), 'сто один миллион' );
		$this->assertEquals( $s->run( '102000000' ), 'сто два миллиона' );
		$this->assertEquals( $s->run( '103000000' ), 'сто три миллиона' );
		$this->assertEquals( $s->run( '104000000' ), 'сто четыре миллиона' );
		$this->assertEquals( $s->run( '105000000' ), 'сто пять миллионов' );
		$this->assertEquals( $s->run( '110000000' ), 'сто десять миллионов' );
		$this->assertEquals( $s->run( '190000000' ), 'сто девяносто миллионов' );
		$this->assertEquals( $s->run( '191000000' ), 'сто девяносто один миллион' );
		$this->assertEquals( $s->run( '192000000' ), 'сто девяносто два миллиона' );
		$this->assertEquals( $s->run( '555000000' ), 'пятьсот пятьдесят пять миллионов' );
		$this->assertEquals( $s->run( '987654321' ), 'девятьсот восемьдесят семь миллионов шестьсот пятьдесят четыре тысячи триста двадцать один' );

		$this->assertEquals( $s->run( '1000000000' ), 'один миллиард' );
		$this->assertEquals( $s->run( '2000000000' ), 'два миллиарда' );
		$this->assertEquals( $s->run( '3456789123' ), 'три миллиарда четыреста пятьдесят шесть миллионов семьсот восемьдесят девять тысяч сто двадцать три' );

		$this->assertEquals( $s->run( '1234567891' ), 'один миллиард двести тридцать четыре миллиона пятьсот шестьдесят семь тысяч восемьсот девяносто один' );
		$this->assertEquals( $s->run( '12345678912' ), 'двенадцать миллиардов триста сорок пять миллионов шестьсот семьдесят восемь тысяч девятьсот двенадцать' );
		$this->assertEquals( $s->run( '123456789123' ), 'сто двадцать три миллиарда четыреста пятьдесят шесть миллионов семьсот восемьдесят девять тысяч сто двадцать три' );
		$this->assertEquals( $s->run( '2345678912345' ), 'два триллиона триста сорок пять миллиардов шестьсот семьдесят восемь миллионов девятьсот двенадцать тысяч триста сорок пять' );
		$this->assertEquals( $s->run( '34567891234567' ), 'тридцать четыре триллиона пятьсот шестьдесят семь миллиардов восемьсот девяносто один миллион двести тридцать четыре тысячи пятьсот шестьдесят семь' );
		$this->assertEquals( $s->run( '456789123456789' ), 'четыреста пятьдесят шесть триллионов семьсот восемьдесят девять миллиардов сто двадцать три миллиона четыреста пятьдесят шесть тысяч семьсот восемьдесят девять' );
		$this->assertEquals( $s->run( '5678912345678912' ), 'пять квадриллионов шестьсот семьдесят восемь триллионов девятьсот двенадцать миллиардов триста сорок пять миллионов шестьсот семьдесят восемь тысяч девятьсот двенадцать' );
		$this->assertEquals( $s->run( '67891234567891234' ), 'шестьдесят семь квадриллионов восемьсот девяносто один триллион двести тридцать четыре миллиарда пятьсот шестьдесят семь миллионов восемьсот девяносто одна тысяча двести тридцать четыре' );
		$this->assertEquals( $s->run( '789123456789123456' ), 'семьсот восемьдесят девять квадриллионов сто двадцать три триллиона четыреста пятьдесят шесть миллиардов семьсот восемьдесят девять миллионов сто двадцать три тысячи четыреста пятьдесят шесть' );
		$this->assertEquals( $s->run( '8912345678912345678' ), 'восемь квинтиллионов девятьсот двенадцать квадриллионов триста сорок пять триллионов шестьсот семьдесят восемь миллиардов девятьсот двенадцать миллионов триста сорок пять тысяч шестьсот семьдесят восемь' );
		$this->assertEquals( $s->run( '91234567891234567891' ), 'девяносто один квинтиллион двести тридцать четыре квадриллиона пятьсот шестьдесят семь триллионов восемьсот девяносто один миллиард двести тридцать четыре миллиона пятьсот шестьдесят семь тысяч восемьсот девяносто один' );
		$this->assertEquals( $s->run( '111111111111111111111' ), 'сто одиннадцать квинтиллионов сто одиннадцать квадриллионов сто одиннадцать триллионов сто одиннадцать миллиардов сто одиннадцать миллионов сто одиннадцать тысяч сто одиннадцать' );
		$this->assertEquals( $s->run( '2222222222222222222222' ), 'два секстилиона двести двадцать два квинтиллиона двести двадцать два квадриллиона двести двадцать два триллиона двести двадцать два миллиарда двести двадцать два миллиона двести двадцать две тысячи двести двадцать два' );
		$this->assertEquals( $s->run( '33333333333333333333333' ), 'тридцать три секстилиона триста тридцать три квинтиллиона триста тридцать три квадриллиона триста тридцать три триллиона триста тридцать три миллиарда триста тридцать три миллиона триста тридцать три тысячи триста тридцать три' );
		$this->assertEquals( $s->run( '444444444444444444444444' ), 'четыреста сорок четыре секстилиона четыреста сорок четыре квинтиллиона четыреста сорок четыре квадриллиона четыреста сорок четыре триллиона четыреста сорок четыре миллиарда четыреста сорок четыре миллиона четыреста сорок четыре тысячи четыреста сорок четыре' );
		$this->assertEquals( $s->run( '5555555555555555555555555' ), 'пять септиллионов пятьсот пятьдесят пять секстилионов пятьсот пятьдесят пять квинтиллионов пятьсот пятьдесят пять квадриллионов пятьсот пятьдесят пять триллионов пятьсот пятьдесят пять миллиардов пятьсот пятьдесят пять миллионов пятьсот пятьдесят пять тысяч пятьсот пятьдесят пять' );
		$this->assertEquals( $s->run( '66666666666666666666666666' ), 'шестьдесят шесть септиллионов шестьсот шестьдесят шесть секстилионов шестьсот шестьдесят шесть квинтиллионов шестьсот шестьдесят шесть квадриллионов шестьсот шестьдесят шесть триллионов шестьсот шестьдесят шесть миллиардов шестьсот шестьдесят шесть миллионов шестьсот шестьдесят шесть тысяч шестьсот шестьдесят шесть' );
		$this->assertEquals( $s->run( '777777777777777777777777777' ), 'семьсот семьдесят семь септиллионов семьсот семьдесят семь секстилионов семьсот семьдесят семь квинтиллионов семьсот семьдесят семь квадриллионов семьсот семьдесят семь триллионов семьсот семьдесят семь миллиардов семьсот семьдесят семь миллионов семьсот семьдесят семь тысяч семьсот семьдесят семь' );
	}

}
