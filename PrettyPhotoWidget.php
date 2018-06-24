<?php

namespace slavkovrn\prettyphoto;

class PrettyPhotoWidget extends \CWidget
{
	/**
	 * List of images in galary
	 * @var images []
	 * Array
	 * (
	 * 	[0] => Array
	 * 		(
	 * 			['src'] => http://yii2.kadastrcard.ru/uploads/prettyphoto/image1.jpg
	 * 			['thumb'] => http://yii2.kadastrcard.ru/uploads/prettyphoto/image1.jpg
	 * 			['title'] => Image visible in widget (first one)
	 * 		)
	 * 	...
	 * 	[n] => Array
	 * 		(
	 * 			[src] => http://yii2.kadastrcard.ru/uploads/prettyphoto/image4.jpg
	 * 			['thumb'] => http://yii2.kadastrcard.ru/uploads/prettyphoto/image4.jpg
	 * 			[title] => Some image
	 * 		)
	 * )
	 */
	public $images = [];

	/**
	 * @var width int Width of image seen in galary (first one)
	 */

	public $width = 320;
	/**
	 * @var height int Height of image seen in galary (first one)
	 */
	public $height = 200;

	/**
	 * @var id string Unique identificator of galary at page
	 */
	public $id = '0';

	/**
	 * Initialization of widget - publication of PrettyPhoto library
	 * @inheritdoc
	 */
	public function init()
	{
		$this->publishAssets();
	}

	/**
	 * @inheritdoc
	 */
	public function run()
	{
		$this->render('index', [
			'images' => $this->images,
			'width' => $this->width,
			'height' => $this->height,
			'id' => $this->id,
		]);
	}

	public function publishAssets() {

		$assets = dirname(__FILE__) . '/assets';


		$baseUrl = \Yii::app()->assetManager->publish($assets, true, -1, YII_DEBUG);

		if (is_dir($assets)) {

			\Yii::app()->clientScript->registerCssFile($baseUrl . '/css/prettyPhoto.css');
			\Yii::app()->clientScript->registerScriptFile($baseUrl . '/js/jquery.prettyPhoto.min.js');
			\Yii::app()->clientScript->registerScriptFile($baseUrl . '/js/jquery.prettyPhoto.init.min.js');

		} else {
			throw new \Exception('Publication error: Folder with prettyphoto assets not exists.');
		}
	}
}
