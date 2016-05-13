<?php

namespace My\View\Helper;

use Zend\Db\Metadata\Metadata;
use Zend\View\Helper\AbstractHelper;

class ListTableNames extends AbstractHelper {

	public function __invoke() {
		$sm         = $this->getView()->getHelperPluginManager()->getServiceLocator();
		$adapter    = $sm->get("db_demo");
		$metadata   = new Metadata($adapter);
		$tableNames = $metadata->getTableNames();

		return $tableNames;
	}

}
?>
