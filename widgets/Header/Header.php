<?php

namespace codecrafter\dashboard\widgets;

use yii\base\Widget;

class Header extends Widget
{
    public function run()
    {
        return $this->render('view');
    }
}