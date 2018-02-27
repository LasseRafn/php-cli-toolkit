<?php

namespace LasseRafn\CliToolkit;

class Color
{
	const DEFAULT      = "\e[0m";
	const WHITE        = "\e[1;37m";
	const BLACK        = "\e[0;30m";
	const BLUE         = "\e[0;34m";
	const LIGHT_BLUE   = "\e[1;34m";
	const GREEN        = "\e[0;32m";
	const LIGHT_GREEN  = "\e[1;32m";
	const CYAN         = "\e[0;36m";
	const LIGHT_CYAN   = "\e[1;36m";
	const RED          = "\e[0;31m";
	const LIGHT_RED    = "\e[1;31m";
	const PURPLE       = "\e[0;35m";
	const LIGHT_PURPLE = "\e[1;35m";
	const BROWN        = "\e[0;33m";
	const YELLOW       = "\e[1;33m";
	const GRAY         = "\e[0;30m";
	const LIGHT_GRAY   = "\e[0;37m";


	public static function default( $text = '' ) { return self::DEFAULT . $text . self::DEFAULT; }

	public static function white( $text = '' ) { return self::WHITE . $text . self::DEFAULT; }

	public static function black( $text = '' ) { return self::BLACK . $text . self::DEFAULT; }

	public static function blue( $text = '' ) { return self::BLUE . $text . self::DEFAULT; }

	public static function light_blue( $text = '' ) { return self::LIGHT_BLUE . $text . self::DEFAULT; }

	public static function green( $text = '' ) { return self::GREEN . $text . self::DEFAULT; }

	public static function light_green( $text = '' ) { return self::LIGHT_GREEN . $text . self::DEFAULT; }

	public static function cyan( $text = '' ) { return self::CYAN . $text . self::DEFAULT; }

	public static function light_cyan( $text = '' ) { return self::LIGHT_CYAN . $text . self::DEFAULT; }

	public static function red( $text = '' ) { return self::RED . $text . self::DEFAULT; }

	public static function light_red( $text = '' ) { return self::LIGHT_RED . $text . self::DEFAULT; }

	public static function purple( $text = '' ) { return self::PURPLE . $text . self::DEFAULT; }

	public static function light_purple( $text = '' ) { return self::LIGHT_PURPLE . $text . self::DEFAULT; }

	public static function brown( $text = '' ) { return self::BROWN . $text . self::DEFAULT; }

	public static function yellow( $text = '' ) { return self::YELLOW . $text . self::DEFAULT; }

	public static function gray( $text = '' ) { return self::GRAY . $text . self::DEFAULT; }

	public static function light_gray( $text = '' ) { return self::LIGHT_GRAY . $text . self::DEFAULT; }
}
