<header role="banner" class="site-header">
  <div class="wrap">
    <!-- Logo -->
    <picture class="logo">
      <source type="image/svg+xml" srcset="/profiles/base/themes/jenkinsmorrow/assets/images/logos/logo.svg">
      <img src="/profiles/base/themes/jenkinsmorrow/assets/images/logos/logo.png" alt="Jenkins & Morrow">
    </picture>
  <!-- Main Navigation -->
  <?php if ($page['main_nav']): ?>
    <nav role="navigation" class="main-navigation">
      <?php print render($page['main_nav']); ?>
    </nav>
  <?php endif; ?>
  </div>
</header>
<!-- Close Header -->

<?php if ($page['preface']): ?>
  <div class="preface cleafix">
    <div class="wrap">
      <?php print render($page['preface']); ?>
    </div>
  </div>
<?php endif; ?>
<!-- Close Preface -->
<main role="main" id="content">
  <div class="wrap">
    <?php if ($page['help']): ?>
        <?php print render($page['help']); ?>
    <?php endif; ?>

    <?php if ($page['sidebar_first']): ?>
      <aside class="sidebar-first" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>
    
    <?php if ($page['content']): ?>
        <?php print render($page['content']); ?>
    <?php endif; ?>

    <?php if ($page['sidebar_second']): ?>
      <aside class="sidebar-second" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </div>
</main>
<footer>
  <?php if ($page['footer']): ?>
    <div class="wrap">
      <?php print render($page['footer']); ?>
    </div>
  <?php endif; ?>
</footer>