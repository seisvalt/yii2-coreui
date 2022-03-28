Yii2 CoreUI
===============


Yii2 extension for CoreUI admin dashboard

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).


```
php composer.phar require --prefer-dist seisvalt/yii2-coreui "*"
```

or add

```
"seisvalt/yii2-coreui": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Make your module or controller layout to be `seisvalt/coreui/views/layouts/main.php` by modifiying the layout attribute.

Also you can make your `@app/views/layouts/main.php` to look like:

```html

<?php $this->beginContent('seisvalt/coreui/views/layouts/main.php') ?>
    <?= $content ?>
<?php $this->endContent() ?>

```
