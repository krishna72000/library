<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\models\Book;
use Faker\Factory;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex()
    {
        $faker=Factory::create();
       for($i=0;$i<1000;$i++){
           $model=new Book();
           $model->name=$faker->company();
           $model->author=implode(", ",[$faker->name(),$faker->name(),$faker->name()]);
           $model->category=$faker->randomLetter();
           $model->create_by=1;
           $model->copy_no=$faker->biasedNumberBetween(2,50);
           $model->pages=$faker->biasedNumberBetween(70,550);
           
           $model->edition=" Edition ".$faker->biasedNumberBetween(1,5);
           $model->save(false);
           echo "\book ".$model->name." added\n";
       }
    }
}