<?php  
namespace Demo\Form;

use Zend\InputFilter\InputFilter;

class FormContactFilter extends InputFilter{

    public function __construct() {
     
			//username
			$this->add(array(
			     "name" => "username",
			     "validators" => array(
			          array(
			               "name" => "NotEmpty",
			               "break_chain_on_failure" => "true"
			          ),
			     ),
			));


			//usermail
			$this->add(array(
			     "name" => "usermail",
			     "validators" => array(
			          array(
			               "name" => "EmailAddress",
			               "break_chain_on_failure" => "true"
			          ),
			     ),
			));


			//usersite
			$this->add(array(
			     "name" => "usersite",
			     "validators" => array(
			          array(
			               "name" => "NotEmpty",
			               "break_chain_on_failure" => "true"
			          ),
			     ),
			));
    }
}
?>