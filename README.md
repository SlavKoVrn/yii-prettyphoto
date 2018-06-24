# PrettyPhoto image galary widget for Yii Framework

The extension uses jQuery PrettyPhoto and makes image galary from php array of structure defined.

[PrettyPhoto image galary PHP Array generator](http://yii2.kadastrcard.ru/prettyphoto).

![PrettyPhoto image galary](http://yii2.kadastrcard.ru/uploads/prettyphoto.jpg)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run:

```bash
composer require slavkovrn/yii-prettyphoto:dev-master
```

or add

```bash
"slavkovrn/yii-prettyphoto": "dev-master"
```

to the require section of your `composer.json` file.

Usage
-----

Set link to extension in your view:

```php
<? $this->widget(slavkovrn\prettyphoto\PrettyPhotoWidget::class,[
    'id'     =>'prettyPhoto',   // id of plugin should be unique at page
    'images' => [               // images at popup window of prettyPhoto galary
        1 => [
                'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image1.jpg',
                'thumb' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image1.jpg',
                'title' => 'Image visible in widget',
            ],
        2 => [
                'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image2.jpg',
                'thumb' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image2.jpg',
                'title' => 'image 1',
            ],
        3 => [
                'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image3.jpg',
                'thumb' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image3.jpg',
                'title' => 'image 2',
            ],
        4 => [
                'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image4.jpg',
                'thumb' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image4.jpg',
                'title' => 'image 3',
            ],
    ]
]); ?>
```
<a href="mailto:slavko.chita@gmail.com">write comments to admin</a>
