<?php

/**
 * Part of the FuelPHP framework.
 *
 * @package   Fuel\Validation
 * @version   2.0
 * @license   MIT License
 * @copyright 2010 - 2013 Fuel Development Team
 */

namespace Fuel\Validation;

/**
 * Tests for AbstractRule
 *
 * @package Fuel\Validation
 * @author  Fuel Development Team
 */
class AbstractRuleTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * @var AbstractRule
	 */
	protected $object;

	protected function setUp()
	{
		$this->object = \Mockery::mock('Fuel\Validation\AbstractRule[validate]');
	}

	/**
	 * @covers \Fuel\Validation\AbstractRule::getMessage
	 * @group  Validation
	 */
	public function testDefaultMessage()
	{
		$this->assertEquals(
			'',
			$this->object->getMessage()
		);
	}

	/**
	 * @covers \Fuel\Validation\AbstractRule::getMessage
	 * @covers \Fuel\Validation\AbstractRule::setMessage
	 * @group  Validation
	 */
	public function testGetSetMessage()
	{
		$message = 'This is a test message';

		$this->object->setMessage($message);

		$this->assertEquals(
			$message,
			$this->object->getMessage()
		);
	}
}
