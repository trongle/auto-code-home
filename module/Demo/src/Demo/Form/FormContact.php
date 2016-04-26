<?php  
namespace Demo\Form;

use Zend\Form\Form;

class FormContact extends Form{

     public function __construct(){
          parent::__construct();

          $this->setAttributes(array(
               "method" => "post",
          ));

          //username
          $this->add(array(
               "name" => "username",
               "type" => "text",
               "required" => true,
               "attributes" => array(
                    "id" => "username",
                    "placeholder" => "Hi friend, how may I call you ?",
                    "name" => "username",
               ),
               "options" => array(
                    "label" => "Name *",
                    "label_attributes" => array(
                         "class" => "iconic user",
                         "for" => "username",
                    ),
                    "label_options" => array(
                         "disable_html_escape" => true,
                    ),
               ),
          ));


          //usermail
          $this->add(array(
               "name" => "usermail",
               "type" => "text",
               "required" => true,
               "attributes" => array(
                    "id" => "usermail",
                    "placeholder" => "I promise I hate spam as much as you do",
                    "name" => "usermail",
               ),
               "options" => array(
                    "label" => "E-mail address *",
                    "label_attributes" => array(
                         "class" => "iconic mail-alt",
                         "for" => "usermail",
                    ),
                    "label_options" => array(
                         "disable_html_escape" => true,
                    ),
               ),
          ));


          //usersite
          $this->add(array(
               "name" => "usersite",
               "type" => "url",
               "required" => true,
               "attributes" => array(
                    "id" => "usersite",
                    "placeholder" => "eg: http://www.htmldrive.net",
                    "name" => "usersite",
               ),
               "options" => array(
                    "label" => "Website",
                    "label_attributes" => array(
                         "class" => "iconic link",
                         "for" => "usersite",
                    ),
                    "label_options" => array(
                         "disable_html_escape" => true,
                    ),
               ),
          ));


          //subject
          $this->add(array(
               "name" => "subject",
               "type" => "text",
               "required" => true,
               "attributes" => array(
                    "id" => "subject",
                    "placeholder" => "What would you like to talk about?",
                    "name" => "subject",
               ),
               "options" => array(
                    "label" => "Subject",
                    "label_attributes" => array(
                         "class" => "iconic quote-alt",
                         "for" => "subject",
                    ),
                    "label_options" => array(
                         "disable_html_escape" => true,
                    ),
               ),
          ));


          //Message
          $this->add(array(
               "name" => "Message",
               "type" => "text",
               "required" => true,
               "attributes" => array(
                    "placeholder" => "Don't be shy, live me a friendly message and I'll answer as soon as possible",
               ),
               "options" => array(
                    "label" => "Message *",
                    "label_attributes" => array(
                         "class" => "iconic comment",
                         "for" => "message",
                    ),
                    "label_options" => array(
                         "disable_html_escape" => true,
                    ),
               ),
          ));


          //submit
          $this->add(array(
               "name" => "submit",
               "type" => "submit",
               "required" => false,
               "attributes" => array(
                    "value" => " ★ Send the mail !",
               ),
          ));
     }


     public function showError(){
          if(empty($this->getMessages())) return false;

          $error = '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>';
          foreach($this->getMessages() as $key=>$val){
               $error .= sprintf('<p><b>%s : </b>%s</p>',ucfirst($this->convertToPrettyName($key)),current($val));
          }
          $error .= '</div>';

          return $error;
     }


     private function convertToPrettyName($fieldName){
          switch($fieldName){
               case "username" :
                    return "Name *";
                    break;
               case "usermail" :
                    return "E-mail address *";
                    break;
               case "usersite" :
                    return "Website";
                    break;
               case "subject" :
                    return "Subject";
                    break;
               case "Message" :
                    return "Message *";
                    break;
               case "submit" :
                    return "";
                    break;
          }
     }
}
?>