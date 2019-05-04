<?php
/**
 * Created by IntelliJ IDEA.
 * User: ахма
 * Date: 07.04.2019
 * Time: 3:19
 */

namespace app\components;

use yii\base\Component;

class TestService extends Component
{
    public $prop = 'default';

    public function run(){
        return $this->prop;
    }
}