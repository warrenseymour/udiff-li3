<?php
namespace app\controllers;
use app\models\Widgets;

class WidgetsController extends \lithium\action\Controller {

	public function index() {
        $widgets = Widgets::all([
            'conditions' => [
                'active' => true
            ]
        ]);

        return compact('widgets');
	}
}

?>
