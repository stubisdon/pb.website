<?php 
  include('config/analytics.php');

  if (!isset($extraClass)) {
    $extraClass = "";
  }
?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="We love telling stories in a visual format.">
    <meta name="keywords" content="videos, marketing, production">

    <!-- Pinterest Verification -->
    <meta name="p:domain_verify" content="a74eb16b9e4148e39ad27971bbb5a979"/>

    <!-- Page title -->
    <?php if (!isset($title)) {
      $title = "";
    } else {
      $title = $title . " | ";
    } ?>
    <title><?=$title?>Paradise Bird – The Company of Storytellers.</title>



    <!-- Mailchimp Subscribe Script -->

    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon">

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '187871261592124');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=187871261592124&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

<?php if(isset($pageMode)) { ?>
    <meta property="og:url"                content="<?php echo $url; ?>" />
    <meta property="og:type"               content="<?php echo $type; ?>" />
    <meta property="og:title"              content="<?php echo $title; ?>" />
    <meta property="og:description"        content="<?php echo strip_tags($description); ?>" />
    <meta property="og:image"              content="<?php echo $image; ?>" />
<?php }?>


  </head>
  <body class="slides scroll animateOnScroll noPreload whiteSlide <?=$extraClass?>">

<!-- SVG Library -->
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">

  <symbol id="logo" viewBox="0 0 23 23"><path d="M13.5 17.5l-5-4v8.5c0 .6.3.7.7.3l4.3-4.8zm9-11.5c.5 0 .7-.3.4-.8l-3.7-4.5c-.4-.4-.9-.4-1.3 0l-4.2 5.1.1.2h8.7zm-22-1c-.6 0-.6.3-.2.6l13.9 11.1 3.6-4c.4-.4.7-1.2.7-1.7v-4h-5l-2.1-1.6c-.5-.2-1.4-.4-1.9-.4h-9z"/></symbol>

  <symbol id="logo-text" viewBox="0 0 477 66.2"><path d="M95 19.2c-3.7 0-7.1 1.5-9.6 3.9l-.5-3h-6.5v44.6h7v-22c2.5 2.5 5.9 3.9 9.6 3.9 7.6 0 13.7-6.1 13.7-13.7 0-7.5-6.2-13.7-13.7-13.7zm3.8 18.7c-1.3 1.3-2.9 2-4.7 2s-3.5-.7-4.8-2-2-3.1-2-5 .7-3.6 2-4.9c1.3-1.4 3-2.1 4.8-2.1s3.5.7 4.7 2.1c1.3 1.3 2 3.1 2 4.9-.1 2-.8 3.7-2 5zm36.1-15.3c-2.4-2-5.5-3.2-8.9-3.2-7.6 0-13.7 6.1-13.7 13.7s6.1 13.7 13.7 13.7c3.4 0 6.5-1.2 8.9-3.2v2.4h6.4v-25.9h-5.8l-.6 2.5zm-3.2 15.4c-1.3 1.3-2.9 2-4.7 2s-3.5-.7-4.8-2c-1.3-1.4-2-3.1-2-5s.7-3.7 2-5c1.3-1.3 3-2 4.8-2s3.5.7 4.7 2c1.3 1.3 2 3.1 2 5s-.7 3.6-2 5zm22.4-15l-1.1-2.9h-5.8v25.9h7.5v-14.3c.8-4.1 5.2-6.8 9.6-4.9l2.9-6.7c-1.4-.5-2.9-.7-4.4-.7-3.3 0-6.7 1.1-8.7 3.6zm36.1-.4c-2.4-2-5.5-3.2-8.9-3.2-7.6 0-13.7 6.1-13.7 13.7s6.1 13.7 13.7 13.7c3.4 0 6.5-1.2 8.9-3.2v2.4h6.4v-25.9h-5.8l-.6 2.5zm-3.2 15.4c-1.3 1.3-2.9 2-4.7 2-1.8 0-3.5-.7-4.8-2-1.3-1.4-2-3.1-2-5s.7-3.7 2-5c1.3-1.3 3-2 4.8-2 1.8 0 3.5.7 4.7 2 1.3 1.3 2 3.1 2 5s-.7 3.6-2 5zm37.3-14.8c-2.5-2.4-5.9-3.9-9.6-3.9-7.6 0-13.7 6.2-13.7 13.7 0 7.6 6.1 13.7 13.7 13.7 3.7 0 7.1-1.5 9.6-3.9v3.2h7.1v-44.7h-7.1v21.9zm-3.8 14.8c-1.3 1.3-3 2-4.8 2-1.8 0-3.5-.7-4.7-2s-2-3.1-2-5 .7-3.6 2-5c1.3-1.3 2.9-2 4.7-2 1.8 0 3.5.7 4.8 2 1.3 1.4 2 3.1 2 5s-.7 3.7-2 5zm16.9 8h7.7v-25.9h-7.7v25.9zm0-33.7h7.7v-8.4h-7.7v8.4zm26.2 18.3c-3-1-5.8-1.4-5.5-3.3.4-2.8 3.8-3.1 8.8.5l3.5-5.5c-3.5-2.1-5.9-3.1-10.3-3.1-4.9 0-9.2 3.1-9.2 7.9 0 5 3.5 6.5 8.5 8.1 1.9.6 3.8 1.2 3.8 3.1 0 3.2-5.8 3.1-9.5-1.3l-4.8 4.9c3.2 3.2 7.6 4.7 12.3 4.7 5.3 0 9.5-4 9.5-8.1 0-4.4-3.5-6.8-7.1-7.9zm22.6-11.4c-7.6 0-13.7 6.1-13.7 13.7s6.2 13.7 13.7 13.7c4.1 0 7.9-1.9 10.4-4.8l-5.6-3.8c-1.2 1.2-2.8 1.9-4.4 1.9-1.7 0-3.4-.7-4.6-2.1-.7-.7-1.1-1.6-1.5-2.5h19.3c.2-.8.2-1.6.2-2.5-.1-7.5-6.2-13.6-13.8-13.6zm-5.9 11.6c.4-1.1.9-2.1 1.6-2.9 1.3-1.3 2.9-2 4.6-2 1.7 0 3.4.7 4.6 2 .8.8 1.3 1.9 1.6 2.9h-12.4zm41.4-11.6c-3.7 0-7.1 1.5-9.6 3.9v-21.8h-7.7v44.7h7.7v-3.2c2.5 2.4 5.9 3.9 9.6 3.9 7.6 0 13.7-6.1 13.7-13.7s-6.1-13.8-13.7-13.8zm3.8 18.7c-1.3 1.3-2.9 2-4.7 2s-3.5-.7-4.8-2-2-3.1-2-5 .7-3.6 2-5c1.3-1.3 3-2 4.8-2s3.5.7 4.7 2c1.3 1.4 2 3.1 2 5s-.7 3.7-2 5zm14.4-25.6h7.7v-8.4h-7.7v8.4zm0 33.7h7.7v-25.9h-7.7v25.9zm19.4-23l-1.1-2.9h-5.8v25.9h7.5v-14.3c.8-4.1 5.2-6.8 9.6-4.9l2.9-6.7c-1.4-.5-2.9-.7-4.4-.7-3.3 0-6.7 1.1-8.7 3.6zm37 .2c-2.5-2.4-5.9-3.9-9.6-3.9-7.6 0-13.7 6.2-13.7 13.7 0 7.6 6.1 13.7 13.7 13.7 3.7 0 7.1-1.5 9.6-3.9v3.2h7.1v-44.7h-7.1v21.9zm-3.8 14.8c-1.3 1.3-3 2-4.8 2s-3.5-.7-4.7-2-2-3.1-2-5 .7-3.6 2-5c1.3-1.3 2.9-2 4.7-2s3.5.7 4.8 2c1.3 1.4 2 3.1 2 5s-.8 3.7-2 5zm16 8h7.9v-7.9h-7.9v7.9zm32.4-17.9l3.5-6.1c-2.5-1.7-5.4-2.8-8.6-2.8-7.9 0-14.3 6.1-14.3 13.7s6.4 13.7 14.3 13.7c3.2 0 6.1-1 8.5-2.6l-3.4-6c-4.5 4.4-12.3.8-12.3-5 0-6.4 8.4-9.1 12.3-4.9zm20.2-8.8c-7.9 0-14.3 6.1-14.3 13.7s6.4 13.7 14.3 13.7c8 0 14.3-6.1 14.3-13.7s-6.3-13.7-14.3-13.7zm4.9 18.7c-1.3 1.3-2.9 2-4.8 2-1.7 0-3.5-.7-4.7-2-1.4-1.4-2-3.1-2-5s.7-3.7 2-5c1.2-1.4 2.9-2.1 4.7-2.1 1.9 0 3.5.7 4.8 2.1 1.3 1.3 1.9 3.1 1.9 4.9 0 2-.7 3.8-1.9 5.1zm-440.3 25.6c0 1.7.9 2 2 .9l12.5-14-14.5-11.6v24.7zm31.2-61.9c-1.2-1.2-2.6-1.2-3.8 0l-12.2 14.8.3.6h25.3c1.5 0 2-.9 1.2-2.3l-10.8-13.1zm-22.7 13.6c-1.5-.6-4.1-1.2-5.5-1.2h-26.2c-1.7 0-1.7.9-.6 1.7l40.5 32.3 10.5-11.6c1.2-1.2 2-3.5 2-4.9v-11.6h-14.6l-6.1-4.7z"/></symbol>
  <symbol id="instagram" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.4 1.1.4 2.2.1 1.3.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.2-1.1.4-2.2.4-1.3.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.4-.4-1.1-.4-2.2-.1-1.3-.1-1.6-.1-4.8s0-3.6.1-4.8c0-1.2.2-1.9.3-2.3.2-.6.5-1 .9-1.4.5-.4.9-.6 1.4-.9.4-.1 1.1-.3 2.3-.4h4.8m0-2.2c-3.3 0-3.7 0-4.9.1-1.3 0-2.2.2-3 .5-.7.3-1.4.7-2.1 1.4-.7.7-1.1 1.4-1.4 2.1-.3.8-.5 1.7-.5 3-.1 1.2-.1 1.6-.1 4.9 0 3.3 0 3.7.1 4.9.1 1.3.3 2.1.6 2.9.2.8.6 1.5 1.3 2.2.7.7 1.3 1.1 2.1 1.4.8.3 1.6.5 2.9.6h5s3.7 0 4.9-.1c1.3-.1 2.1-.3 2.9-.6.8-.3 1.5-.7 2.1-1.4.7-.7 1.1-1.3 1.4-2.1.3-.8.5-1.6.6-2.9.1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.1-1.3-.3-2.1-.6-2.9-.2-.8-.6-1.5-1.3-2.2-.7-.7-1.3-1.1-2.1-1.4-.8-.3-1.6-.5-2.9-.6h-5zM12 5.8c-3.4 0-6.2 2.8-6.2 6.2s2.8 6.2 6.2 6.2 6.2-2.8 6.2-6.2-2.8-6.2-6.2-6.2zm0 10.2c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"/><circle class="st0" cx="18.4" cy="5.6" r="1.4"/></symbol>
  <symbol id="linkedin" viewBox="0 0 24 24"><path d="M22.2 0h-20.4c-1 0-1.8.8-1.8 1.7v20.7c0 1 .8 1.7 1.8 1.7h20.5c1 0 1.8-.8 1.8-1.7v-20.7c-.1-.9-.9-1.7-1.9-1.7zm-14.9 20.2h-3.6v-10.9h3.6v10.9zm-1.8-12.4c-1.2 0-2-.8-2-1.9 0-1.1.8-1.9 2.1-1.9 1.2 0 2 .8 2 1.9-.1 1.1-.9 1.9-2.1 1.9zm14.8 12.4h-3.6v-5.8c0-1.5-.5-2.5-1.8-2.5-1 0-1.6.7-1.9 1.3-.1.2-.1.6-.1.9v6.1h-3.6v-10.9h3.6v1.5c.5-.7 1.3-1.8 3.3-1.8 2.4 0 4.2 1.6 4.2 4.9v6.3z"/></symbol>
  <symbol id="twitter" viewBox="0 1 24 23"><path d="M21.5 7.6v.6c0 6.6-5 14.1-14 14.1-2.8 0-5.4-.8-7.6-2.2l1.2.1c2.3 0 4.4-.8 6.1-2.1-2.2 0-4-1.5-4.6-3.4.3.1.6.1.9.1.5 0 .9-.1 1.3-.2-2.1-.6-3.8-2.6-3.8-5 .7.4 1.4.6 2.2.6-1.3-.9-2.2-2.4-2.2-4.1 0-.9.2-1.8.7-2.5 2.4 3 6.1 5 10.2 5.2-.1-.4-.1-.7-.1-1.1 0-2.7 2.2-5 4.9-5 1.4 0 2.7.6 3.6 1.6 1-.3 2.1-.7 3-1.3-.4 1.2-1.1 2.1-2.2 2.7 1-.1 1.9-.4 2.8-.8-.6 1.1-1.4 2-2.4 2.7z"/></symbol>
  <symbol id="facebook" viewBox="0 0 24 24"><path d="M24 1.3v21.3c0 .7-.6 1.3-1.3 1.3h-6.1v-9.3h3.1l.5-3.6h-3.6v-2.2c0-1.1.3-1.8 1.8-1.8h1.9v-3.2c-.3 0-1.5-.1-2.8-.1-2.8 0-4.7 1.7-4.7 4.8v2.7h-3.1v3.6h3.1v9.2h-11.5c-.7 0-1.3-.6-1.3-1.3v-21.4c0-.7.6-1.3 1.3-1.3h21.3c.8 0 1.4.6 1.4 1.3z"/></symbol>
  <symbol id="youtube" viewBox="0 0 24 24"><path d="M23.6 6.3c-.3-1.2-1.4-2.2-2.6-2.3-3-.3-6-.3-9-.3s-6 0-9 .3c-1.2.1-2.3 1.1-2.6 2.3-.4 1.8-.4 3.8-.4 5.7 0 1.9 0 3.9.4 5.7.3 1.2 1.4 2.2 2.6 2.3 3 .3 6 .3 9 .3s6 0 9-.3c1.3-.1 2.3-1.1 2.6-2.4.4-1.7.4-3.7.4-5.6 0-1.9 0-3.9-.4-5.7zm-14.1 9v-6.6l6.5 3.3-6.5 3.3z"/></symbol>
  <symbol id="close" viewBox="0 0 30 30"><path d="M15 0c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15zm5.7 19.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3s-.5-.1-.7-.3l-4.3-4.3-4.3 4.3c-.2.2-.4.3-.7.3s-.5-.1-.7-.3c-.4-.4-.4-1 0-1.4l4.3-4.3-4.3-4.3c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l4.3 4.3 4.3-4.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-4.3 4.3 4.3 4.3z"/></symbol>
  <symbol id="menu" viewBox="0 0 22 22"><path d="M1 5h20c.6 0 1-.4 1-1s-.4-1-1-1h-20c-.6 0-1 .4-1 1s.4 1 1 1zm20 5h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1zm0 7h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1z"/></symbol>
</svg>

<nav class="panel top">
  <div class="fix-custom">
    <div class="sections desktop">
      <div class="left"><a href="/" title="Go to Main Page"><svg style="width:230px;height:32px"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo-text"></use></svg></a></div>
      <div class="right">
        <ul class="menu">
          <li><a href="/blog/">Blog</a></li>
          <li><a href="/work/">Work</a></li>
          <li><a href="/about/">About Us</a></li>
        </ul>
        <a class="button menuButton small rectangular stroke" href="/contact">Get in Touch</a> 
      </div>
    </div>
    <div class="sections compact hidden">
      <div class="left"><a href="/" title="Go to Main Page"><svg style="width:200px;height:32px"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo-text"></use></svg></a></div>
      <div class="right"><span class="button actionButton stroke white rectangular sidebarTrigger" data-sidebar-id="compact"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu"></use></svg></span>
      </div>
    </div>
  </div>
</nav>

