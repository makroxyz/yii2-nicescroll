yii2-nicescroll
===============
yii2-nicescroll-descriptin

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist "guzuomuse/yii2-nicescroll": "dev-master"
```

or add

```
""guzuomuse/yii2-nicescroll": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
\guzuomuse\nicescroll\NiceScroll::begin([
//    'id'=>'nicescroll_parent_div',
    'options'=>[       
    ],
    'pluginOptions'=>[
//        'cursorborder'=>'5px dotted #FF0000',
        'smoothscroll'=>false,
        "cursorcolor"=>"#9C9A9C",
        'cursorwidth'=>'8px',
//        'boxzoom'=>true,
//        'cursorborderradius'=>'10px',
//        'scrollspeed'=>60,
//        'background'=>'#00ff00',
////        'bouncescroll'=>true,
//        'railoffset'=> new yii\web\JsExpression('{top:0,left:0}'),
//        'railpadding'=>new \yii\web\JsExpression('{top:0,right:0,left:0,bottom:0}'),
    ],

]);
```
some contents your want to rendered by nicescroll......


```php
\guzuomuse\nicescroll\NiceScroll::end();

```
