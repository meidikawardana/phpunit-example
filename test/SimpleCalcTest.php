<?php
use PHPUnit\Framework\TestCase;
use SimpleCalc\SimpleCalc;

class SimpleCalcTest extends TestCase
{
	/** 
	 * @dataProvider add10PercentProvider
	 */
	public function testAddPercentage($input, $expected, $percentage)
	{
		try {
		  $calc = new SimpleCalc;
		  $output = $calc->addPercentage($input, $percentage);
		  $this->assertSame($expected, $output);
		} catch (\Exception $e) {
		  $this->assertEquals('Invalid Percentage', $e->getMessage());
		}
	}
		
	public function add10PercentProvider()
	{
		return [
			[
				100,
				110,
				10
			],
			[
				0,
				0,
				10
			],
			[
				1,
				1.1,
				10
			],
			[
				1.1,
				1.21,
				10
			],
			[
				-20,
				-18,
				10
			],
			[
				100,
				120,
				20,
			],
			[
				10,
				11.25,
				12.5
			],
			[
				10,
				0,
				-5
			],
			[
				10,
				0,
				"abc"
			]			
		];
	}	
}