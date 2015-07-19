<?php

class BreadCrumb extends CWidget {

    public $crumbs = array();
    public $newCrumb = array();
    public $delimiter = ' > ';
    public $hideCrumbsOnHome = true;
    public $firstCrumb = array('Home' => array('name' => 'Home', 'url' => array('site/index')));
    public $excludeCrumbs = array('Login');
    public $crumbs2Show = 3;
    public $truncatedCrumb = array('Truncated' => array('name' => '...'));

    public function run() {

        // Breadcrumbs are a way back to to the homepage so dump
        // the crumbs if we find ourselves back on the homepage
        $homepageRoutes = array('/index.php', '/site/index', '/');
        if (in_array($this->newCrumb['url'][0], $homepageRoutes)) {
            unset($_SESSION['crumbs']);

            // If desired, don't show the lone Home crumb on
            // the homepage
            if ($this->hideCrumbsOnHome) {
                return;
            }
        }

        // Place the homepgage anchor crumb in the first position
        $this->crumbs = $this->firstCrumb;

        // Some pages, such as Login, we don't want in the list, so
        // let's exclude them
        if (!in_array($this->newCrumb['name'], $this->excludeCrumbs)) {


            $newCrumbKey = $this->newCrumb['name'];

            // If we have an existing crumb list, check to see whether
            // the new crumb is already in the list. If so, dump all the
            // crumbs from that crumb position to the end of the list. The
            // purpose of this is to keep the list clean of duplicates.
            if (sizeof($_SESSION['crumbs']) > 0) {
                if (array_key_exists($newCrumbKey, $_SESSION['crumbs'])) {

                    $offset = $this->array_offset($_SESSION['crumbs'], $newCrumbKey);
                    $_SESSION['crumbs'] = array_slice($_SESSION['crumbs'], 0, $offset, true);
                }
            }

            // Finally add the new crumb to the end of the list
            $_SESSION['crumbs'][$newCrumbKey] = $this->newCrumb;

            // If we have more crumbs than we want to display, we'll evict the
            // oldest crumbs from the list. Plus we'll show a truncated crumb
            // so the user has a visual indicator that we are truncating.
            if (sizeof($_SESSION['crumbs']) > $this->crumbs2Show) {
                array_shift($_SESSION['crumbs']);
                $this->crumbs = array_merge($this->crumbs, $this->truncatedCrumb);
            }
        }

        // Ok, we've build the crumb list prefix with the Home crumb and possibly
        // the Truncated crumb. Now lets add the user's crumbs.
        if (sizeof($_SESSION['crumbs']) > 0) {
            $this->crumbs = array_merge($this->crumbs, $_SESSION['crumbs']);
        }

        // display!
        $this->render('breadCrumb');
    }

    /**
     * Find the integer position of the offset key in the array
     * @param array $array
     * @param string $offset_key
     * @return int
     */
    public function array_offset($array, $offset_key) {
        $offset = 0;
        foreach ($array as $key => $val) {
            if ($key == $offset_key)
                return $offset;
            $offset++;
        }
        return -1;
    }

}

?>