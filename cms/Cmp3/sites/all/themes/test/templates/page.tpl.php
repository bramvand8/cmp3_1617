<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>


<div class="top-bar">
  <div class="top-bar-left">
    <ul class="menu">
      <li class="menu-text">Let's template</li>
    </ul>
  </div>
  <div class="top-bar-right">
    <?php print render($page['navigation']); ?>

  </div>
</div>

<div id="header" class="hero callout large primary" style="background-image: url('img/header.jpg')">
  <div class="row column text-center">
    <h1><?php echo foundation_get_title(); ?></h1>
  </div>
</div>
<div class="row" id="content">
  <div class="medium-8 columns">
    <?php print render($page['highlighted']);?>
    <?php print render($page['content']);?>


    <div class="blog-post">
      <h3>Awesome blog post title
        <small>3/6/2016</small>
      </h3>
      <img class="thumbnail" src="img/850x350.png">
      <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim
        congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci.
        Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum.
        Nulla at nulla justo, eget luctus.</p>
      <div class="callout">
        <ul class="menu simple">
          <li><a href="#">Author: Mike
              Mikers</a></li>
          <li><a href="#">Comments: 3</a></li>
        </ul>
      </div>
    </div>
    <div class="blog-post">
      <h3>Awesome blog post title
        <small>3/6/2016</small>
      </h3>
      <img class="thumbnail" src="img/850x350.png">
      <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim
        congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci.
        Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum.
        Nulla at nulla justo, eget luctus.</p>
      <div class="callout">
        <ul class="menu simple">
          <li><a href="#">Author: Mike
              Mikers</a></li>
          <li><a href="#">Comments: 3</a></li>
        </ul>
      </div>
    </div>
    <div class="blog-post">
      <h3>Awesome blog post title
        <small>3/6/2016</small>
      </h3>
      <img class="thumbnail" src="img/850x350.png">
      <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim
        congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci.
        Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum.
        Nulla at nulla justo, eget luctus.</p>
      <div class="callout">
        <ul class="menu simple">
          <li><a href="#">Author: Mike
              Mikers</a></li>
          <li><a href="#">Comments: 3</a></li>
        </ul>
      </div>
    </div>
    <div class="blog-post">
      <h3>Awesome blog post title
        <small>3/6/2016</small>
      </h3>
      <img class="thumbnail" src="img/850x350.png">
      <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim
        congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci.
        Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum.
        Nulla at nulla justo, eget luctus.</p>
      <div class="callout">
        <ul class="menu simple">
          <li><a href="#">Author: Mike
              Mikers</a></li>
          <li><a href="#">Comments: 3</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="medium-3 columns sticky-container" data-sticky-container="" style="height: 318px;">
    <div class="sticky is-anchored is-at-top" data-sticky="wnvizo-sticky" data-anchor="content"
         data-resize="gzn37n-sticky" style="max-width: 285px; margin-top: 0px; top: 0px; bottom: 1966px;"
         data-events="resize">
      <?php print render($page['sidebar_right']);?>

      <h4>Categories</h4>
      <ul>
        <li><a href="#">Skyler</a></li>
        <li><a href="#">Jesse</a></li>
        <li><a href="#">Mike</a></li>
        <li><a href="#">Holly</a></li>
      </ul>
      <h4>Authors</h4>
      <ul>
        <li><a href="#">Skyler</a></li>
        <li><a href="#">Jesse</a></li>
        <li><a href="#">Mike</a></li>
        <li><a href="#">Holly</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="row column">
  <ul class="pagination" role="navigation" aria-label="Pagination">
    <li class="disabled">Previous</li>
    <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
    <li><a href="#" aria-label="Page 2">2</a></li>
    <li><a href="#" aria-label="Page 3">3</a></li>
    <li><a href="#" aria-label="Page 4">4</a></li>
    <li class="ellipsis"></li>
    <li><a href="#" aria-label="Page 12">12</a></li>
    <li><a href="#" aria-label="Page 13">13</a></li>
    <li><a href="#" aria-label="Next page">Next</a>
    </li>
  </ul>
</div>
<div class="row">
  <div class="medium-8 columns">
    <h5>Here&rsquo;s your basic grid:</h5>
    <!-- Grid Example -->

    <div class="row">
      <div class="large-12 columns">
        <div class="primary callout">
          <p><strong>This is a twelve column section in a row.</strong> Each of these includes a div.callout element so you can see where the columns are - it's not required at all for the grid.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="large-6 medium-6 columns">
        <div class="primary callout">
          <p>Six columns</p>
        </div>
      </div>
      <div class="large-6 medium-6 columns">
        <div class="primary callout">
          <p>Six columns</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="large-4 medium-4 small-4 columns">
        <div class="primary callout">
          <p>Four columns</p>
        </div>
      </div>
      <div class="large-4 medium-4 small-4 columns">
        <div class="primary callout">
          <p>Four columns</p>
        </div>
      </div>
      <div class="large-4 medium-4 small-4 columns">
        <div class="primary callout">
          <p>Four columns</p>
        </div>
      </div>
    </div>

    <hr />

    <h5>We bet you&rsquo;ll need a form somewhere:</h5>
    <form>
      <div class="row">
        <div class="large-12 columns">
          <label>Input Label</label>
          <input type="text" placeholder="large-12.columns" />
        </div>
      </div>
      <div class="row">
        <div class="large-4 medium-4 columns">
          <label>Input Label</label>
          <input type="text" placeholder="large-4.columns" />
        </div>
        <div class="large-4 medium-4 columns">
          <label>Input Label</label>
          <input type="text" placeholder="large-4.columns" />
        </div>
        <div class="large-4 medium-4 columns">
          <div class="row collapse">
            <label>Input Label</label>
            <div class="input-group">
              <input type="text" placeholder="small-9.columns" class="input-group-field" />
              <span class="input-group-label">.com</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Select Box</label>
          <select>
            <option value="husker">Husker</option>
            <option value="starbuck">Starbuck</option>
            <option value="hotdog">Hot Dog</option>
            <option value="apollo">Apollo</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="large-6 medium-6 columns">
          <label>Choose Your Favorite</label>
          <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Radio 1</label>
          <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Radio 2</label>
        </div>
        <div class="large-6 medium-6 columns">
          <label>Check these out</label>
          <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
          <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Textarea Label</label>
          <textarea placeholder="small-12.columns"></textarea>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="row">
  <div class="medium-4 columns">
    <h5>Try one of these buttons:</h5>
    <p><a href="#" class="button">Simple Button</a><br/>
      <a href="#" class="success button">Success Btn</a><br/>
      <a href="#" class="alert button">Alert Btn</a><br/>
      <a href="#" class="secondary button">Secondary Btn</a></p>
    <div class="callout">
      <h5>So many components, girl!</h5>
      <p>A whole kitchen sink of goodies comes with Foundation. Check out the docs to see them all, along with details on making them your own.</p>
      <a href="http://foundation.zurb.com/sites/docs/" class="small button">Go to Foundation Docs</a>
    </div>
  </div>
</div>


<<?php /*

  <div id="page-wrapper"><div id="page">

    <div id="header"><div class="section clearfix">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name"><strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong></div>
            <?php else: /* Use h1 when the content title is empty  ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /#name-and-slogan -->
      <?php endif; ?>

      <?php print render($page['header']); ?>

    </div></div> <!-- /.section, /#header -->

    <?php if ($main_menu || $secondary_menu): ?>
      <div id="navigation"><div class="section">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
      </div></div> <!-- /.section, /#navigation -->
    <?php endif; ?>

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

    <?php print $messages; ?>

    <div id="main-wrapper"><div id="main" class="clearfix">

      <div id="content" class="column"><div class="section">
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div></div> <!-- /.section, /#content -->

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_first']); ?>
        </div></div> <!-- /.section, /#sidebar-first -->
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar"><div class="section">
          <?php print render($page['sidebar_second']); ?>
        </div></div> <!-- /.section, /#sidebar-second -->
      <?php endif; ?>

    </div></div> <!-- /#main, /#main-wrapper -->

    <div id="footer"><div class="section">
      <?php print render($page['footer']); ?>
    </div></div> <!-- /.section, /#footer -->

  </div></div> <!-- /#page, /#page-wrapper -->

*/