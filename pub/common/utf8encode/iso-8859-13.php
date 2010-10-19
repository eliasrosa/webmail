<?php

	/**
	 * Original data taken from:
	 * ftp://ftp.unicode.org/Public/MAPPINGS/ISO8859/8859-13.TXT
	 * @param string $string
	 * @return string
	 */
	function charset_encode_iso_8859_13($string)
	{
		$mapping = array(
					"\xC2\x80" => "\x80",
					"\xC2\x81" => "\x81",
					"\xC2\x82" => "\x82",
					"\xC2\x83" => "\x83",
					"\xC2\x84" => "\x84",
					"\xC2\x85" => "\x85",
					"\xC2\x86" => "\x86",
					"\xC2\x87" => "\x87",
					"\xC2\x88" => "\x88",
					"\xC2\x89" => "\x89",
					"\xC2\x8A" => "\x8A",
					"\xC2\x8B" => "\x8B",
					"\xC2\x8C" => "\x8C",
					"\xC2\x8D" => "\x8D",
					"\xC2\x8E" => "\x8E",
					"\xC2\x8F" => "\x8F",
					"\xC2\x90" => "\x90",
					"\xC2\x91" => "\x91",
					"\xC2\x92" => "\x92",
					"\xC2\x93" => "\x93",
					"\xC2\x94" => "\x94",
					"\xC2\x95" => "\x95",
					"\xC2\x96" => "\x96",
					"\xC2\x97" => "\x97",
					"\xC2\x98" => "\x98",
					"\xC2\x99" => "\x99",
					"\xC2\x9A" => "\x9A",
					"\xC2\x9B" => "\x9B",
					"\xC2\x9C" => "\x9C",
					"\xC2\x9D" => "\x9D",
					"\xC2\x9E" => "\x9E",
					"\xC2\x9F" => "\x9F",
					"\xC2\xA0" => "\xA0",
					"\xE2\x80\x9D" => "\xA1",
					"\xC2\xA2" => "\xA2",
					"\xC2\xA3" => "\xA3",
					"\xC2\xA4" => "\xA4",
					"\xE2\x80\x9E" => "\xA5",
					"\xC2\xA6" => "\xA6",
					"\xC2\xA7" => "\xA7",
					"\xC3\x98" => "\xA8",
					"\xC2\xA9" => "\xA9",
					"\xC5\x96" => "\xAA",
					"\xC2\xAB" => "\xAB",
					"\xC2\xAC" => "\xAC",
					"\xC2\xAD" => "\xAD",
					"\xC2\xAE" => "\xAE",
					"\xC3\x86" => "\xAF",
					"\xC2\xB0" => "\xB0",
					"\xC2\xB1" => "\xB1",
					"\xC2\xB2" => "\xB2",
					"\xC2\xB3" => "\xB3",
					"\xE2\x80\x9C" => "\xB4",
					"\xC2\xB5" => "\xB5",
					"\xC2\xB6" => "\xB6",
					"\xC2\xB7" => "\xB7",
					"\xC3\xB8" => "\xB8",
					"\xC2\xB9" => "\xB9",
					"\xC5\x97" => "\xBA",
					"\xC2\xBB" => "\xBB",
					"\xC2\xBC" => "\xBC",
					"\xC2\xBD" => "\xBD",
					"\xC2\xBE" => "\xBE",
					"\xC3\xA6" => "\xBF",
					"\xC4\x84" => "\xC0",
					"\xC4\xAE" => "\xC1",
					"\xC4\x80" => "\xC2",
					"\xC4\x86" => "\xC3",
					"\xC3\x84" => "\xC4",
					"\xC3\x85" => "\xC5",
					"\xC4\x98" => "\xC6",
					"\xC4\x92" => "\xC7",
					"\xC4\x8C" => "\xC8",
					"\xC3\x89" => "\xC9",
					"\xC5\xB9" => "\xCA",
					"\xC4\x96" => "\xCB",
					"\xC4\xA2" => "\xCC",
					"\xC4\xB6" => "\xCD",
					"\xC4\xAA" => "\xCE",
					"\xC4\xBB" => "\xCF",
					"\xC5\xA0" => "\xD0",
					"\xC5\x83" => "\xD1",
					"\xC5\x85" => "\xD2",
					"\xC3\x93" => "\xD3",
					"\xC5\x8C" => "\xD4",
					"\xC3\x95" => "\xD5",
					"\xC3\x96" => "\xD6",
					"\xC3\x97" => "\xD7",
					"\xC5\xB2" => "\xD8",
					"\xC5\x81" => "\xD9",
					"\xC5\x9A" => "\xDA",
					"\xC5\xAA" => "\xDB",
					"\xC3\x9C" => "\xDC",
					"\xC5\xBB" => "\xDD",
					"\xC5\xBD" => "\xDE",
					"\xC3\x9F" => "\xDF",
					"\xC4\x85" => "\xE0",
					"\xC4\xAF" => "\xE1",
					"\xC4\x81" => "\xE2",
					"\xC4\x87" => "\xE3",
					"\xC3\xA4" => "\xE4",
					"\xC3\xA5" => "\xE5",
					"\xC4\x99" => "\xE6",
					"\xC4\x93" => "\xE7",
					"\xC4\x8D" => "\xE8",
					"\xC3\xA9" => "\xE9",
					"\xC5\xBA" => "\xEA",
					"\xC4\x97" => "\xEB",
					"\xC4\xA3" => "\xEC",
					"\xC4\xB7" => "\xED",
					"\xC4\xAB" => "\xEE",
					"\xC4\xBC" => "\xEF",
					"\xC5\xA1" => "\xF0",
					"\xC5\x84" => "\xF1",
					"\xC5\x86" => "\xF2",
					"\xC3\xB3" => "\xF3",
					"\xC5\x8D" => "\xF4",
					"\xC3\xB5" => "\xF5",
					"\xC3\xB6" => "\xF6",
					"\xC3\xB7" => "\xF7",
					"\xC5\xB3" => "\xF8",
					"\xC5\x82" => "\xF9",
					"\xC5\x9B" => "\xFA",
					"\xC5\xAB" => "\xFB",
					"\xC3\xBC" => "\xFC",
					"\xC5\xBC" => "\xFD",
					"\xC5\xBE" => "\xFE",
					"\xE2\x80\x99" => "\xFF");

		return str_replace(array_keys($mapping), array_values($mapping), $string);
	}

