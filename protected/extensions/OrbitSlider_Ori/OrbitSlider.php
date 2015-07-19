<?php

/**
 * Description of OrbitSlider
 *
 * @author Perochak  <me@perochak.com> <me@perochak.com>
 * @uses Yii v.1.1.5
 *  Ver : 1.3
 */
class OrbitSlider extends CWidget {

    public $name = 'orbit';
    public $mywidth;
    public $myheight;
    public $images = array();
    public $slider_options = array();
    public $default_options = array(
        'timer' => true,
        'bullets' => true,
        'animation' => 'fade',
        'width' => '520',
        'height' => '350',
        'opacity' => '0.7',
        'animationSpeed' => '800',
        'advanceSpeed' => '400',
        'startClockOnMouseOut' => true,
        'startClockOnMouseOutAfter' => '3000',
        'directionalNav' => true,
        'captions' => true,
        'captionAnimationSpeed' => '800',
    );

    public function init() {
        parent::init();
    }

    public function makeImages() {
        $html = '<div id="' . $this->name . '">' . "\n";
        $html .= '<ul id="' . $this->name . 'Content">' . "\n";
        $i = 0;
        $caption = '';
        foreach ($this->images as $img) {
            $html .= '<li class="' . $this->name . 'Image">' . "\n";

            // บรรทัดนี้ original ไม่มี width & height
            $image = '<img src="' . $img['img'] . '" width="' . $this->mywidth . '" height="'. $this->myheight .'" ';
            if (isset($img['caption'])) {
                $image.=' rel="img' . $i . '"';
                $caption .= '<span class="orbit-caption" id="img' . $i . '">' . $img['caption'] . '</span>' . "\n";
            }
            $i++;
            $image.= ' />' . "\n";

            if (isset($img['url'])) {
                $d = $image;
                $image = '';
                $image.='<a href="' . Yii::app()->createUrl($img['url']) . '">' . $d . '</a>';
            }
            $html.=$image;
            $html .= '</li>' . "\n";
        }
        $html .= '<div class="clear ' . $this->name . 'Image"></div>' . "\n";
        $html .= '</ul>' . "\n";
        $html .= '</div>' . "\n";
        $html .=$caption;
        return $html;
    }

    /**
     * Run the widget, including the js files.
     */
    public function run() {
        $cs = Yii::app()->clientScript;

        $dir = dirname(__FILE__) . DIRECTORY_SEPARATOR;
        $baseUrl = Yii::app()->getAssetManager()->publish($dir . 'assets');
        /*    $options = array();
          //$options['timer']=$this->timer;
          /*$options['animation']=$this->animation;
          $options['bullets']=$this->bullets;
          $options['width']=$this->width;
          $options['height']=$this->height;
         */
        foreach ($this->slider_options as $key => $val) {
            $this->default_options[$key] = $val;
        }
        //$options=$this->default_options;
        // if (!empty($this->options)) {
        $this->default_options = CJavaScript::encode($this->default_options);
        //  }

        $clientScript = Yii::app()->getClientScript();

        $clientScript->registerCssFile($baseUrl . '/css/orbit.css'); //http_build_query($cssparams)

        $clientScript->registerCoreScript('jquery');

        $clientScript->registerScriptFile($baseUrl . '/js/jquery.orbit.js');

        //$js = "jQuery('#{$this->name}').orbit($options);";


        $js = "$(window).load(function() {
                 $('#{$this->name}').orbit(
                      $this->default_options
                 );
             });";





        $cs->registerScript('Yii.Orbit' . $this->name, $js);
        echo $this->makeImages();
    }

}

?>
