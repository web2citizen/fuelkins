<?php
/**
 * Sample class Tests
 *
 * @group App
 */
class Test_Sample extends TestCase
{

	public function test_message()
	{
		$message = "Hello";
		$test = Sample::message($message);
		$expected = $message;

		$this->assertEquals($expected, $test);
	}

	public function test_message_null()
	{
		$test = Sample::message();
		$expected = "message";

		$this->assertEquals($expected, $test);
	}
}