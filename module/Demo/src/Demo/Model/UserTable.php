<?php

namespace Demo\Model;

use Zend\Db\Sql\Select;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\TableGateway\TableGateway;

class UserTable extends AbstractTableGateway{
	protected $_tableGateway;

	public function __construct(TableGateway $tableGateway){
		$this->_tableGateway = $tableGateway;
		return $this;
	}

	public function listItem($arrParam = null,$options = null){
		$result =   $this->_tableGateway->select(function(Select $select) use($arrParam){
			$select->columns(array( "user_id","fullname","birthdate","gender","email","phone","address" ))
					  ->join(array("g" => "groups"),
								"users.user_role = g.group_id",
								array("group_name" => "group_name"),
								$select::JOIN_LEFT
						);
		})->toArray();

		return $result;
	}								

}
?>
