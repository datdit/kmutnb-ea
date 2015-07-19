<?php

$gMap->zoom = 6;
$mapTypeControlOptions = array(
    'position' => EGMapControlPosition::RIGHT_TOP,
    'style' => EGMap::MAPTYPECONTROL_STYLE_HORIZONTAL_BAR
);

$gMap->mapTypeId = EGMap::TYPE_ROADMAP;
$gMap->mapTypeControlOptions = $mapTypeControlOptions;

// Preparing InfoWindow with information about our marker.
$info_window_a = new EGMapInfoWindow("<div class='gmaps-label' style='color: #000;'>Hi! I'm your marker!</div>");

// Setting up an icon for marker.
$icon = new EGMapMarkerImage("http://google-maps-icons.googlecode.com/files/car.png");

$icon->setSize(32, 37);
$icon->setAnchor(16, 16.5);
$icon->setOrigin(0, 0);

// Saving coordinates after user dragged our marker.
$dragevent = new EGMapEvent('dragend', 'function (event) { $.ajax({
                                                        type:"POST",
                                                        url:"' . $this->createUrl('hotel/savecoords') . '/' . $model->id . '",
                                                        data:({lat: event.latLng.lat(), lng: event.latLng.lng()}),

                                                        cache:false,
                                                    });}', false, EGMapEvent::TYPE_EVENT_DEFAULT);
if ($model->long) {
    // If we have already created marker - show it
    $marker = new EGMapMarker($model->lat, $model->long, array('title' => Yii::t('catalog', $model->name),
        'icon' => $icon, 'draggable' => true), 'marker', array('dragevent' => $dragevent));
    $marker->addHtmlInfoWindow($info_window_a);
    $gMap->addMarker($marker);
    $gMap->setCenter($model->lat, $model->long);
    $gMap->zoom = 16;
} else {
    // Setting up new event for user click on map, so marker will be created on place and respectful event added.
    $gMap->addEvent(new EGMapEvent('click', 'function (event) {var marker = new google.maps.Marker({position: event.latLng, map: ' . $gMap->getJsName() .
            ', draggable: true, icon: ' . $icon->toJs() . '}); ' . $gMap->getJsName() .
            '.setCenter(event.latLng); var dragevent = ' . $dragevent->toJs('marker') .
            '; $.ajax({' .
            '"type":"POST",' .
            '"url":"' . $this->createUrl('hotel/savecoords') . "/" . $model->id . '",' .
            '"data":({"lat": event.latLng.lat(), "lng": event.latLng.lng()}),' .
            '"cache":false,' .
            '}); }', false, EGMapEvent::TYPE_EVENT_DEFAULT_ONCE));
}
$gMap->renderMap(array(), Yii::app()->language);
?>
