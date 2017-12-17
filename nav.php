<?php echo "
  <div class=\"container-fluid style=\"margin:0px;\"\">
  <nav class=\"navbar navbar-dark bg-dark navbar-expand-lg full_width\">
  <a  class=\"navbar-brand\" href=\"#\"> <img src=\"images/title_png/logo.png\" class=\"d-inline-block align-top\" alt=\"logo_Quzer\" id=\"nav_logo\">&nbsp;&nbsp;Quzer</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"user_home_pg.php\"> <label >Post Question</label></a>
          </li>
          <li class=\"nav-item dropdown\" id=\"nav_more\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              More
            </a>
            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
              <a class=\"dropdown-item item_hover\" href=\"#\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp;&nbsp;My Profile</a>
              <a class=\"dropdown-item item_hover\" href=\"#\"><i class=\"fa fa-bell\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Notifications</a>
              <a class=\"dropdown-item item_hover\" href=\"#\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Settings</a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item item_hover\" href=\"logout.php\">Logout &nbsp; <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> </a>
            </div>
          </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
          <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </div>
</nav>
</div>"
?>
