<?php

/**
 * JFlowPlayer class file.
 *
 * @author jerry2801 <jerry2801@gmail.com>
 *
 * A typical usage of JFlowPlayer is as follows:
 * <pre>
 * $this->widget('application.extensions.flowplayer.JFlowPlayer', array(
 *     'url' => Html::mediaUrl('video.flv'),
 *     'id'=>'player',
 *     'width' => '400px',
 *     'height' => '280px',
 * ));
 * </pre>
 */

class JFlowPlayer extends CWidget
{
	public $baseUrl;
    public $url;
    public $id;
    public $width;
    public $height;

    public function init()
    {
        $dir = dirname(__FILE__).DIRECTORY_SEPARATOR.'source';
        $this->baseUrl = Yii::app()->getAssetManager()->publish($dir);

        $cs = Yii::app()->getClientScript();

        if(! $this->id)
            $this->id='player';

        if(! $this->width)
            $this->width='520px';

        if(! $this->height)
            $this->height='330px';

        $playerUrl = $this->baseUrl.'/flowplayer-3.1.5.swf';

        $cs->registerScriptFile($this->baseUrl.'/flowplayer-3.1.4.min.js');

        $cs->registerScript('flowplayer-script-'.$this->id,'flowplayer("'.$this->id.'", "'.$playerUrl.'");');

    }

    public function run()
    {
        echo '<a href="'.$this->url.'" style="display:block;width:'.$this->width.';height:'.$this->height.'" id="'.$this->id.'"></a>';
    }
}