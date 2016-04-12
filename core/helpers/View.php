<?php

  require_once(VENDOR_DIR.'/autoload.php');

  class View {

    /**
     * Make a twig render view
     * with some params to pass
     *
     * @param {string} template
     * @param {array} data
     */
    static public function make($template, $data = array()) {

      // Load twig
      $loader = new Twig_Loader_Filesystem(APP_DIR.'/views');
      $twig = new Twig_Environment($loader);

      // Pass global vars
      $data['URL'] = URL;

      // Render view
      echo $twig->render($template.'.twig.php', $data);

    }

  }
