<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

// Originaly CodeIgniter i18n library by Jérôme Jaglale
// http://maestric.com/en/doc/php/codeigniter_i18n
// modification by Yeb Reitsma

/*
in case you use it with the HMVC modular extension
uncomment this and remove the other lines
load the MX_Loader class */

//require APPPATH."third_party/MX/Lang.php";

//class MY_Lang extends MX_Lang {

class MY_Lang extends CI_Lang {


  /**************************************************
   configuration
  ***************************************************/

  // languages
  private $languages = array(
    'tr' => 'turkce',
    'en' => 'english',
  );

  // special URIs (not localized)
  private $special = array (
    "admin"
  );

  // where to redirect if no language in URI
  private $uri;
  private $default_uri;
  private $lang_code;

  /**************************************************/


  function MY_Lang()
  {
    parent::__construct();

    global $CFG;
    global $URI;
    global $RTR;

    $this->uri = $URI->uri_string();
    $this->default_uri = $RTR->default_controller;

    $uri_segment = $this->get_uri_lang($this->uri);
    $this->lang_code = $uri_segment['lang'] ;

    $url_ok = false;
    if ((!empty($this->lang_code)) && (array_key_exists($this->lang_code, $this->languages)))
    {
        $language = $this->languages[$this->lang_code];
        $CFG->set_item('language', $language);
        $url_ok = true;
    }

    if ((!$url_ok) && (!$this->is_special($uri_segment['parts'][0]))) // special URI -> no redirect
    { 
      // set default language
      $CFG->set_item('language', $this->languages[$this->default_lang()]);

      $uri = (!empty($this->uri)) ? $this->uri: $this->default_uri;
      //OPB - modification to use i18n also without changing the .htaccess (without pretty url) 
      $index_url = empty($CFG->config['index_page']) ? '' : $CFG->config['index_page']."/";
      $new_url = $CFG->config['base_url'].$index_url.$this->default_lang().'/'.$uri;

      header("Location: " . $new_url, TRUE, 302);
      exit;
    }
  }



  // get current language
  // ex: return 'en' if language in CI config is 'english' 
  function lang()
  {
    global $CFG;        
    $language = $CFG->item('language');

    $lang = array_search($language, $this->languages);
    if ($lang)
    {
      return $lang;
    }

    return NULL;    // this should not happen
  }


  function is_special($lang_code)
  {
    if ((!empty($lang_code)) && (in_array($lang_code, $this->special)))
      return TRUE;
    else
      return FALSE;
  }


  function switch_uri($lang)
  {
    if ((!empty($this->uri)) && (array_key_exists($lang, $this->languages)))
    {

      if ($uri_segment = $this->get_uri_lang($this->uri))
      {
        $uri_segment['parts'][0] = $lang;
        $uri = implode('/',$uri_segment['parts']);
      }
      else
      {
        $uri = $lang.'/'.$this->uri;
      }
    }

    return $uri;
  }

  //check if the language exists
  //when true returns an array with lang abbreviation + rest
  function get_uri_lang($uri = '')
  {
    if (!empty($uri))
    {
      $uri = ($uri[0] == '/') ? substr($uri, 1): $uri;

      $uri_expl = explode('/', $uri, 2);
      $uri_segment['lang'] = NULL;
      $uri_segment['parts'] = $uri_expl;  

      if (array_key_exists($uri_expl[0], $this->languages))
      {
        $uri_segment['lang'] = $uri_expl[0];
      }
      return $uri_segment;
    }
    else
      return FALSE;
  }


  // default language: first element of $this->languages
  function default_lang()
  {
    $browser_lang = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';
    $browser_lang = substr($browser_lang, 0,2);
    if(array_key_exists($browser_lang, $this->languages))
        return $browser_lang;
    else{
        reset($this->languages);
        return key($this->languages);
    }
  }


  // add language segment to $uri (if appropriate)
  function localized($uri)
  {
    if (!empty($uri))
    {
      $uri_segment = $this->get_uri_lang($uri);
      if (!$uri_segment['lang'])
      {

        if ((!$this->is_special($uri_segment['parts'][0])) && (!preg_match('/(.+)\.[a-zA-Z0-9]{2,4}$/', $uri)))
        {
          $uri = $this->lang() . '/' . $uri;
        }
      }
    }
    return $uri;
  }


/**
     * Same behavior as the parent method, but it can load the first defined 
     * lang configuration to fill other languages gaps. This is very useful
     * because you don't have to update all your lang files during development
     * each time you update a text. If a constant is missing it will load
     * it in the first language configured in the array $languages. (OPB)
     * 
     * 
     * @param boolean $load_first_lang false to keep the old behavior. Please
     * modify the default value to true to use this feature without having to 
     * modify your code 
     */
    function load($langfile = '', $idiom = '', $return = FALSE, $add_suffix = TRUE, $alt_path = '', $load_first_lang = false) {
        if ($load_first_lang) {
            reset($this->languages);
            $firstKey = key($this->languages);
            $firstValue = $this->languages[$firstKey];

            if ($this->lang_code != $firstKey) {
                $addedLang = parent::load($langfile, $firstValue, $return, $add_suffix, $alt_path);
                if ($addedLang) {
                    if ($add_suffix) {
                        $langfileToRemove = str_replace('.php', '', $langfile);
                        $langfileToRemove = str_replace('_lang.', '', $langfileToRemove) . '_lang';
                        $langfileToRemove .= '.php';
                    }
                    $this->is_loaded = array_diff($this->is_loaded, array($langfileToRemove));
                }
            }
        }
        return parent::load($langfile, $idiom, $return, $add_suffix, $alt_path);
    }

} 

// END MY_Lang Class

/* End of file MY_Lang.php */
/* Location: ./application/core/MY_Lang.php */