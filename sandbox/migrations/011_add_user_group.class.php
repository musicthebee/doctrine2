<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AddUserGroup extends Doctrine_Migration
{
	public function up()
	{
		$this->createTable('user_group', array (
  'user_id' => 
  array (
    'primary' => true,
    'type' => 'integer',
    'length' => 11,
  ),
  'group_id' => 
  array (
    'primary' => true,
    'type' => 'integer',
    'length' => 11,
  ),
), array (
  'indexes' => 
  array (
  ),
  'primary' => 
  array (
    0 => 'user_id',
    1 => 'group_id',
  ),
));
	}

	public function down()
	{
		$this->dropTable('user_group');
	}
}