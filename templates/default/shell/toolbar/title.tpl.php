<header>
  <div class="branding">
    <a href="/">
      <img class="logo" src="<?= \Idno\Core\site()->config()->getDisplayURL() ?>Themes/CryptoPartyMN/images/crypto_logo.svg">
      <span class="mn">MN</span>
    </a>
    <div class="tagline">Free Event @ Waterbury April 11th 2015</div>
  </div>

  <navigation>
  <?php if(\Idno\Core\site()->session()->currentUser()){ ?>
    
    <?php if (\Idno\Core\site()->canWrite()) { ?>

      <a href="<?= \Idno\Core\site()->config()->getDisplayURL() ?>account/settings/">Settings</a>
      <?php if (\Idno\Core\site()->session()->currentUser()->isAdmin()) { ?>

         <a href="<?= \Idno\Core\site()->config()->getDisplayURL() ?>admin/">Site configuration</a>
      <?php } ?>
    <?php } ?>
    <?= \Idno\Core\site()->actions()->createLink(\Idno\Core\site()->config()->getDisplayURL() . 'session/logout', 'Sign out', null, array('class' => '')); ?>
  <?php } else {?>

  <a href="<?= \Idno\Core\site()->config()->getDisplayURL() ?>session/login">Sign in 

  <?php } ?>

  <a href="javascript:void(0)">About</a>
  <a href="javascript:void(0)">Contact</a>
  <a href="javascript:void(0)">RSVP</a>

  <div class="clear"></div>
  </navigation>
</header>




