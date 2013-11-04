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
 * Defines a common interface for validation rules
 *
 * @package Fuel\Validation
 * @author  Fuel Development Team
 */
interface RuleInterface
{

	/**
	 * Performs validation on the given value.
	 * $field and $allFields are optional values to allow the validation rule to have some idea of context. This allows
	 * for rules such as "required" and "match field", validation rules that act on all the data rather than a single
	 * field.
	 *
	 * If a validation rule requires $field or $allFields but is not passed a value the rule should return false
	 * rather than throwing an exception.
	 *
	 * @param mixed  $value     Value to validate
	 * @param string $field     Name of the field that is being validated
	 * @param array  $allFields Values of all the other fields being validated
	 *
	 * @return bool
	 */
	public function validate($value, $field = null, &$allFields = null);

	/**
	 * Gets the failure message for this rule
	 *
	 * @return string
	 */
	public function getMessage();

	/**
	 * Sets the failure message for this rule
	 *
	 * @param string $message
	 *
	 * @return $this
	 */
	public function setMessage($message);

	/**
	 * Sets the parameter for this validation rule.
	 * See each Rule's documentation for what this should be.
	 *
	 * @param mixed $params
	 *
	 * @return $this
	 */
	public function setParameter($params);

	/**
	 * Returns the value of the set parameter.
	 * See each Rule's documentation for what the parameter does.
	 *
	 * @return mixed
	 */
	public function getParameter();

}