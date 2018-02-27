<?php

use PHPUnit\Framework\TestCase;

class ColorOutputTest extends TestCase
{
	/** @test */
	public function can_use_helpers_to_generate_colored_output() {
		$this->assertSame( '\e[0m[failure]\e[0m', cli_text_default( '[failure]' ) );
		$this->assertSame( '\e[1;37m[failure]\e[0m', cli_text_white( '[failure]' ) );
		$this->assertSame( '\e[0;30m[failure]\e[0m', cli_text_black( '[failure]' ) );
		$this->assertSame( '\e[0;34m[failure]\e[0m', cli_text_blue( '[failure]' ) );
		$this->assertSame( '\e[1;34m[failure]\e[0m', cli_text_light_blue( '[failure]' ) );
		$this->assertSame( '\e[0;32m[failure]\e[0m', cli_text_green( '[failure]' ) );
		$this->assertSame( '\e[1;32m[failure]\e[0m', cli_text_light_green( '[failure]' ) );
		$this->assertSame( '\e[0;36m[failure]\e[0m', cli_text_cyan( '[failure]' ) );
		$this->assertSame( '\e[1;36m[failure]\e[0m', cli_text_light_cyan( '[failure]' ) );
		$this->assertSame( '\e[0;31m[failure]\e[0m', cli_text_red( '[failure]' ) );
		$this->assertSame( '\e[1;31m[failure]\e[0m', cli_text_light_red( '[failure]' ) );
		$this->assertSame( '\e[0;35m[failure]\e[0m', cli_text_purple( '[failure]' ) );
		$this->assertSame( '\e[1;35m[failure]\e[0m', cli_text_light_purple( '[failure]' ) );
		$this->assertSame( '\e[0;33m[failure]\e[0m', cli_text_brown( '[failure]' ) );
		$this->assertSame( '\e[1;33m[failure]\e[0m', cli_text_yellow( '[failure]' ) );
		$this->assertSame( '\e[0;30m[failure]\e[0m', cli_text_gray( '[failure]' ) );
		$this->assertSame( '\e[0;37m[failure]\e[0m', cli_text_light_gray( '[failure]' ) );
	}
}
