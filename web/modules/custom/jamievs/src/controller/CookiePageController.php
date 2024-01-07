<?php

/**
 * @file
 * Contains \Drupal\mymodule\Controller\FirstController
 */
 
 namespace Drupal\jamievs\Controller;

 use Drupal\Core\Controller\ControllerBase;

 class CookiePageController extends ControllerBase{
    public function content() {
        return [
            '#type' => 'markup',
            '#markup' => t("Cookies are small pieces of text sent to your browser by a website you visit. They help that website remember information about your visit, which can both make it easier to visit the site again and make the site more useful to you. Other technologies, including unique identifiers used to identify a browser, app or device, pixels, and local storage, can also be used for these purposes. Cookies and other technologies as described throughout this page can be used for the purposes described below."),
        ];
    }
 }