<?php


namespace app\controllers;


use ishop\App;
use ishop\Cache;
use RedBeanPHP\R;

class MainController extends \app\controllers\App
{

    public function indexAction()
    {
//        $posts = R::findAll('test');
//        $post = R::findOne('test', 'id = ?', [2]);
//        $this->setMeta('Главная страница::'.App::$app->getProperty('shop_name'), 'Описание..', 'Ключевики..');
//        $names = ['Andrey', 'Jane', 'Mike'];
//        $cache = Cache::instance();
//        $cache->delete('test');
//        $data = $cache->get('test');
//        if(!$data)
//        {
//            $data = $cache->set('test', $names);
//        }
//        debug($data);
//        $this->set(compact('posts', 'post', 'names'));
    }
}