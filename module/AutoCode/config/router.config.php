<?php
$home = $code = array(
    "type"=> "Segment",
    "options" => array(
        "route" => "/",
        "defaults" => array(
            "__NAMESPACE__" => "AutoCode\Controller",
            "controller"    => "AutoCode\Controller\Index",
            "action"        => "index"
        )
    ),
);

$code = array(
	"type"=> "Segment",
	"options" => array(
		"route" => "/autocode",
		"defaults" => array(
			"__NAMESPACE__" => "AutoCode\Controller",
			"controller"    => "AutoCode\Controller\Index",
			"action"        => "index"
		)
	),
	'may_terminate' => true,
    'child_routes' => array(
         'default' => array(
            'type'    => 'Segment',
            'options' => array(
                'route'    => '[/:action][/]',
                'constraints' => array(
                    'action'     => '[a-zA-Z][a-zA-Z0-9_-]*'
                    // 'controller'     => '[a-zA-Z][a-zA-Z0-9_-]*'
                ),
            ),
        ),
    )
);

return array(
    "router"       => array(
        "routes" => array(
            "home" => $home,
            "code" => $code
        )
    )
);

?>