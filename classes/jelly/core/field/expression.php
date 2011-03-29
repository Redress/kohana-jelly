<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Handles expression fields, which allow an arbitrary database 
 * expression as the field column.
 * 
 * For example, if you always wanted the field to return a concatenation
 * of two columns in the database, you can do this:
 * 
 * 'field' => new Jelly_Field_Expression('array(
 *       'column' => DB::expr("CONCAT(`first_name`, ' ', `last_name`)")
 * ))
 * 
 * Keep in mind that aliasing breaks down in Database_Expressions.
 *
 * @package    Jelly
 * @author     Jonathan Geiger
 * @copyright  (c) 2010-2011 Jonathan Geiger
 * @license    http://www.opensource.org/licenses/isc-license.txt
 */
abstract class Jelly_Core_Field_Expression extends Jelly_Field {

	/**
	 * @var  boolean  expression fields are not in_db
	 */
	public $in_db = FALSE;

} // End Jelly_Core_Field_Expression