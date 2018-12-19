<?php
/**
 * @author      Dmitriy Sabirov <web8dew@yandex.ru>
 * @copyright   Dmitriy Sabirov 19.12.18
 * @license     MIT
 * @license     https://opensource.org/licenses/MIT
 * @since       19.12.18
 */

/**
 * @var $this \yii\web\View
 */
?>
<div>
    <img id="image" src="picture.jpg">
</div>

<?php
$initializeCropper = <<<JS
var image = jQuery('#image');

image.cropper({
  aspectRatio: 16 / 9,
  crop: function(event) {
    console.log(event.detail.x);
    console.log(event.detail.y);
    console.log(event.detail.width);
    console.log(event.detail.height);
    console.log(event.detail.rotate);
    console.log(event.detail.scaleX);
    console.log(event.detail.scaleY);
  }
});

// Get the Cropper.js instance after initialized
// var cropper = image.data('cropper');
JS;

$this->registerJs($initializeCropper);
