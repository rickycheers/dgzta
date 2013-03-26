<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div id="header">
          <div id="logos">
              <img align="center" alt="" src="/images/logos/banner.jpg" />
          </div>
      </div>
      <div id="content" class="car_admin_content">
          <?php echo $sf_content ?>
      </div>
      <div class="rp_admin_footer">
        <p class="rp_admin_dev">Desarrollado por Abraham Rafael Rico Moreno.<br /> <?php echo date('Y', time());?><a href="http://www.abricolabs.net/"> Labs Cafeinne</a>. 461 1433 296 </p>
      </div>
  </body>
</html>
