<?php
define('gb_title', 'DEFAULT TITLE');
class BasePage
{
  protected $title = gb_title;

  public $page;

  function __construct($page)
  {
    $this->page = $page;
  }

  function title()
  {
    echo $this->title;
  }

  function get_view()
  {
    $view = "UIView/" . $this->page . '.view.php';
    if (file_exists($view)) {
      return $view;
    }
    return 'UIView/error.view.php';
  }

  function render()
  {
    $view = $this->get_view();
    require_once($view);
  }

  function route_link($page, $class, $text)
  {
    $classtext = ($this->page == $page) ? ' class="' . $class . '"' : '';
    echo '<li' . $classtext . '><a href="' . $page . '.php">' . $text . '</a></li>';
  }
}
?>
