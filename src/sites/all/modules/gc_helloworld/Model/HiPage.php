<?php

Namespace Model;

class HiPage extends BasePage {

    public function setTitle() {
        $this->title = "Hi - Another Page in DTestable"; }

    public function setSubTitle() {
        $this->subTitle = "A DTestable Subtitle"; }

    public function setContent() {
        $this->content = '
        <br />
        <p>Since Drupal is already a CMS, its unlikely you\'ll be using class based data models to deliver your
        standard pages, but if you need pages that must be tested at Unit Level or there is another reason for structure
        at code level, here\'s a Page Model Factory and an Example page Model for you.</p>
        <p><a href="/index.php?control=index&action=home">To first page</a></p> ' ; }

}