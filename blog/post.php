<?php 
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/header.php";
  $title = "Blog";
  include_once($path);

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    $id = 1;
  }

  $q = "SELECT * FROM blog WHERE id = $id";
  $r = mysqli_query($db,$q);
  $post = mysqli_fetch_assoc($r);

?>

<!-- Default approach -->
<section class="slide autoHeight whiteSlide">
  <div class="content">
    <div class="container">
      <div class="wrap left">

        <div class="article-content fix-10-12">

            <h1 class="margin-bottom-5"><?php echo $post['title']; ?></h1>

            <p class="meta"><?php echo $post['author']; ?> • <?php echo $post['date']; ?></p> 

            <?php echo $post['body']; ?>
            
          </div>
          
          <div class="article-subscribe">
            <h2 class="margin-bottom-1">Psst!</h2>
            <p class="margin-bottom-2">Like the article? Subscribe to get more like this weekly in your mailbox.</p>
            <form id="subscribe2" class="done" data-name="top-form" novalidate="true">
              <input type="email" value="" name="EMAIL" id="subscribe-email" placeholder="Your e-mail" class="rectangular cropRight">
              <button type="submit" name="subscribe-submit" class="button white stroke rectangular cropRight">Get Your Story</button>
              <label for="subscribe-email" class="subscribe-message2"></label>
            </form>
          </div>

      </div>
    </div>
  </div>
</section>

<!-- EXAMPLE: Disqus -->
<section class="slide autoHeight">
  <div class="content">
    <div class="container">
      <div class="wrap top">
        
        <h1>Comments</h1>
        <div class="fix-8-12 margin-top-8">
          <div id="disqus_thread"></div>
            <script>

            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://paradisebird.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div>
          
      </div>
    </div>
  </div>
</section>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/footer.php";
   include_once($path);
?>