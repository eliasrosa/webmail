<?php

	/**
	 * Original data taken from:
	 * ftp://ftp.unicode.org/Public/MAPPINGS/ISO8859/8859-14.TXT
	 * @param string $string
	 * @return string
	 */
	function charset_decode_iso_8859_14($string)
	{
		$mapping = array(
					"\x80" => "\xC2\x80",
					"\x81" => "\xC2\x81",
					"\x82" => "\xC2\x82",
					"\x83" => "\xC2\x83",
					"\x84" => "\xC2\x84",
					"\x85" => "\xC2\x85",
					"\x86" => "\xC2\x86",
					"\x87" => "\xC2\x87",
					"\x88" => "\xC2\x88",
					"\x89" => "\xC2\x89",
					"\x8A" => "\xC2\x8A",
					"\x8B" => "\xC2\x8B",
					"\x8C" => "\xC2\x8C",
					"\x8D" => "\xC2\x8D",
					"\x8E" => "\xC2\x8E",
					"\x8F" => "\xC2\x8F",
					"\x90" => "\xC2\x90",
					"\x91" => "\xC2\x91",
					"\x92" => "\xC2\x92",
					"\x93" => "\xC2\x93",
					"\x94" => "\xC2\x94",
					"\x95" => "\xC2\x95",
					"\x96" => "\xC2\x96",
					"\x97" => "\xC2\x97",
					"\x98" => "\xC2\x98",
					"\x99" => "\xC2\x99",
					"\x9A" => "\xC2\x9A",
					"\x9B" => "\xC2\x9B",
					"\x9C" => "\xC2\x9C",
					"\x9D" => "\xC2\x9D",
					"\x9E" => "\xC2\x9E",
					"\x9F" => "\xC2\x9F",
					"\xA0" => "\xC2\xA0",
					"\xA1" => "\xE1\xB8\x82",
					"\xA2" => "\xE1\xB8\x83",
					"\xA3" => "\xC2\xA3",
					"\xA4" => "\xC4\x8A",
					"\xA5" => "\xC4\x8B",
					"\xA6" => "\xE1\xB8\x8A",
					"\xA7" => "\xC2\xA7",
					"\xA8" => "\xE1\xBA\x80",
					"\xA9" => "\xC2\xA9",
					"\xAA" => "\xE1\xBA\x82",
					"\xAB" => "\xE1\xB8\x8B",
					"\xAC" => "\xE1\xBB\xB2",
					"\xAD" => "\xC2\xAD",
					"\xAE" => "\xC2\xAE",
					"\xAF" => "\xC5\xB8",
					"\xB0" => "\xE1\xB8\x9E",
					"\xB1" => "\xE1\xB8\x9F",
					"\xB2" => "\xC4\xA0",
					"\xB3" => "\xC4\xA1",
					"\xB4" => "\xE1\xB9\x80",
					"\xB5" => "\xE1\xB9\x81",
					"\xB6" => "\xC2\xB6",
					"\xB7" => "\xE1\xB9\x96",
					"\xB8" => "\xE1\xBA\x81",
					"\xB9" => "\xE1\xB9\x97",
					"\xBA" => "\xE1\xBA\x83",
					"\xBB" => "\xE1\xB9\xA0",
					"\xBC" => "\xE1\xBB\xB3",
					"\xBD" => "\xE1\xBA\x84",
					"\xBE" => "\xE1\xBA\x85",
					"\xBF" => "\xE1\xB9\xA1",
					"\xC0" => "\xC3\x80",
					"\xC1" => "\xC3\x81",
					"\xC2" => "\xC3\x82",
					"\xC3" => "\xC3\x83",
					"\xC4" => "\xC3\x84",
					"\xC5" => "\xC3\x85",
					"\xC6" => "\xC3\x86",
					"\xC7" => "\xC3\x87",
					"\xC8" => "\xC3\x88",
					"\xC9" => "\xC3\x89",
					"\xCA" => "\xC3\x8A",
					"\xCB" => "\xC3\x8B",
					"\xCC" => "\xC3\x8C",
					"\xCD" => "\xC3\x8D",
					"\xCE" => "\xC3\x8E",
					"\xCF" => "\xC3\x8F",
					"\xD0" => "\xC5\xB4",
					"\xD1" => "\xC3\x91",
					"\xD2" => "\xC3\x92",
					"\xD3" => "\xC3\x93",
					"\xD4" => "\xC3\x94",
					"\xD5" => "\xC3\x95",
					"\xD6" => "\xC3\x96",
					"\xD7" => "\xE1\xB9\xAA",
					"\xD8" => "\xC3\x98",
					"\xD9" => "\xC3\x99",
					"\xDA" => "\xC3\x9A",
					"\xDB" => "\xC3\x9B",
					"\xDC" => "\xC3\x9C",
					"\xDD" => "\xC3\x9D",
					"\xDE" => "\xC5\xB6",
					"\xDF" => "\xC3\x9F",
					"\xE0" => "\xC3\xA0",
					"\xE1" => "\xC3\xA1",
					"\xE2" => "\xC3\xA2",
					"\xE3" => "\xC3\xA3",
					"\xE4" => "\xC3\xA4",
					"\xE5" => "\xC3\xA5",
					"\xE6" => "\xC3\xA6",
					"\xE7" => "\xC3\xA7",
					"\xE8" => "\xC3\xA8",
					"\xE9" => "\xC3\xA9",
					"\xEA" => "\xC3\xAA",
					"\xEB" => "\xC3\xAB",
					"\xEC" => "\xC3\xAC",
					"\xED" => "\xC3\xAD",
					"\xEE" => "\xC3\xAE",
					"\xEF" => "\xC3\xAF",
					"\xF0" => "\xC5\xB5",
					"\xF1" => "\xC3\xB1",
					"\xF2" => "\xC3\xB2",
					"\xF3" => "\xC3\xB3",
					"\xF4" => "\xC3\xB4",
					"\xF5" => "\xC3\xB5",
					"\xF6" => "\xC3\xB6",
					"\xF7" => "\xE1\xB9\xAB",
					"\xF8" => "\xC3\xB8",
					"\xF9" => "\xC3\xB9",
					"\xFA" => "\xC3\xBA",
					"\xFB" => "\xC3\xBB",
					"\xFC" => "\xC3\xBC",
					"\xFD" => "\xC3\xBD",
					"\xFE" => "\xC5\xB7",
					"\xFF" => "\xC3\xBF");
		
		$outStr = '';
    	for ($i = 0, $len = strlen($string); $i < $len; $i++)
    	{
    		$outStr .= (array_key_exists($string{$i}, $mapping))?$mapping[$string{$i}]:$string{$i};
		}
		
		return $outStr;
	}

