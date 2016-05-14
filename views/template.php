<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <?php $view->script('theme', 'theme:js/theme.js', ['uikit-sticky',  'uikit-lightbox',  'uikit-parallax']) ?>
    </head>
    <body>
      <nav class="uk-navbar uk-margin-large-bottom" data-uk-sticky="{top:0}">
        <a class="uk-navbar-brand" href="<?= $view->url()->get() ?>">
            <?php if ($params['logo']) : ?>
                <img class="uk-responsive-height" src="<?= $this->escape($params['logo']) ?>" alt="">
            <?php else : ?>
                <?= $params['title'] ?>
            <?php endif ?>
        </a>

        <?php if ($view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
        <div class="uk-navbar-flip uk-hidden-small">
            <?= $view->menu('main', 'menu-navbar.php') ?>
            <?= $view->position('navbar', 'position-blank.php') ?>
        </div>
        <?php endif ?>

        <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
        <div class="uk-navbar-flip uk-visible-small">
            <a href="#offcanvas" class="uk-navbar-toggle" data-uk-offcanvas></a>
        </div>
        <?php endif ?>
      </nav>

      <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

        <?php if ($view->position()->exists('hero')) : ?>
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-1">

                <div class="uk-vertical-align uk-text-center sme-hero">
                    <div class="uk-vertical-align-middle uk-width-1-2">
                      <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                          <?= $view->position('hero', 'position-grid.php') ?>
                      </section>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>


        <?php if ($view->position()->exists('top')) : ?>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-container uk-container-center">
                <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                    <?= $view->position('top', 'position-grid.php') ?>
                </section>
            </div>
          </div>



          <hr class="uk-grid-divider">
          <?php endif; ?>



        <div class="uk-grid" data-uk-grid-margin>

          <div class="uk-width-medium-1-1">
            <!-- Render system messages -->
            <?= $view->render('messages') ?>

            <!-- Render content -->
            <?= $view->render('content') ?>
          </div>

      </div>

      <?php if ($view->position()->exists('bottom')) : ?>
        <hr class="uk-grid-divider">

        <div class="uk-grid" data-uk-grid-margin>
          <div class="uk-container uk-container-center">
              <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                  <?= $view->position('bottom', 'position-grid.php') ?>
              </section>
          </div>
        </div>


        <hr class="uk-grid-divider">
        <?php endif; ?>

    </div>


  <?php if ($view->position()->exists('footer')) : ?>
  <footer class="uk-block uk-block-secondary uk-contrast uk-text-small">
      <div class="uk-container uk-container-center">
        <section class="uk-grid uk-grid-match" data-uk-grid-margin>
            <?= $view->position('footer', 'position-grid.php') ?>
        </section>
      </div>
  </footer>
  <?php endif; ?>


  <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
  <div id="offcanvas" class="uk-offcanvas">
      <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">

          <?php if ($params['logo_offcanvas']) : ?>
          <div class="uk-panel uk-text-center">
              <a href="<?= $view->url()->get() ?>">
                  <img src="<?= $this->escape($params['logo_offcanvas']) ?>" alt="">
              </a>
          </div>
          <?php endif ?>

          <?php if ($view->menu()->exists('offcanvas')) : ?>
              <?= $view->menu('offcanvas', ['class' => 'uk-nav-offcanvas']) ?>
          <?php endif ?>

          <?php if ($view->position()->exists('offcanvas')) : ?>
              <?= $view->position('offcanvas', 'position-panel.php') ?>
          <?php endif ?>

      </div>
  </div>
  <?php endif ?>

  <?= $view->render('footer') ?>

</body>
</html>
