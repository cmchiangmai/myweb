<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {
        //echo "นิกร ทดสอบ actionTest1";
        //return $this->render('test1');
        $a = 3;
        $b = 5;
        $sum = $a + $b;
        $param =  ['sum' => $sum , 'a'=>$a,'bb'=>$b];
        



        return $this->render('test1',$param);
    }//จบtest 1
    
    public function actionTest2($name=null) {
        $n = "Your is name $name";
        return $this->render('test2',['nnn'=>$n]);
             //echo "Your name is $name";
        
        
    }
    

}
