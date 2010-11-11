<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Handles integer data-types
 *
 * @package  Jelly
 */
abstract class Jelly_Core_Field_Integer extends Jelly_Field
{
	/**
	 * @var  int  Default value is 0, per the SQL standard
	 */
	public $default = 0;
	
	/**
	 * Casts all values to integers.
	 * 
	 * @return int
	 */
	public function value($model, $value)
	{
		list($value, $return) = $this->_default($value);
		
		if ( ! $return)
		{
			$value = (int) $value;
		}
		
		return $value;
	}
}
