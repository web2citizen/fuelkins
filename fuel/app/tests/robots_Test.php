<?php
include_once(APPPATH.'/tasks/robots.php');
/**
 * Robots class Tests
 *
 * @group App
 */
class Test_Robots extends TestCase
{

	public function test_run()
	{
		$test = \Fuel\Tasks\Robots::run();
		$pattern = '/KILL ALL HUMANS!/u';

		$this->assertRegExp($pattern, $test);
	}

	public function test_run_speach()
	{
		$speech = 'HELLO!';
		$test = \Fuel\Tasks\Robots::run($speech);
		$pattern = '/'.$speech.'/u';

		$this->assertRegExp($pattern, $test);
	}

	public function test_protect()
	{
		$test = \Fuel\Tasks\Robots::protect();
		$pattern = '/PROTECT ALL HUMANS/u';

		$this->assertRegExp($pattern, $test);
	}
}