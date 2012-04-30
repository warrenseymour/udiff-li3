<?php
namespace app\models;

class Widgets extends \lithium\data\Model {

    public static function findInActive() {
        return static::findAll([
            'conditions' => [
                'active' => false
             ]
        ]);
    }

    public function activate($widget) {
        $widget->save([
            'active' => true
        ]);

        return $widget;
    }
}

?>
