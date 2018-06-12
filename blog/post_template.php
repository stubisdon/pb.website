<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/header.php";
   $title = "Blog";
   include_once($path);

   if (isset($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    $id = 10;
  }

    $q = "SELECT * FROM portfolio_data WHERE id = $id";
    $r = mysqli_query($db,$q);
    $project = mysqli_fetch_assoc($r);

?>

<!-- Default approach -->
<section class="slide autoHeight whiteSlide">
  <div class="content">
    <div class="container">
      <div class="wrap left">

        <div class="article-content fix-10-12">

            <h1 class="margin-bottom-5">Two New Ways to Get More Insight into Your Audience</h1>

            <p class="meta"><strong><a href="author.php" title="Posts by Carrie Cousins" rel="author" data-wpel-link="internal">Carrie Cousins</a></strong> • <span itemprop="datePublished" content="2017-04-04">March 16, 2017</span> • <a href="#comments" class="leave-a-comment" data-wpel-link="internal">17 Comments</a> (<a class="post-edit-link" href="https://designmodo.com/wp-admin/post.php?post=301559&amp;action=edit" data-wpel-link="internal">Edit</a>)</p>

            <p>Documentaries have a profound effect in terms of their ability to both teach and inspire. As designers, we are one of the primary creative industries and always looking to find and use inspiration, whether it be from images, art, products, or even music.</p>
            <p>Below I have compiled a list of six <strong>inspiring design documentaries</strong> that should help serve as excellent resources to help you learn something new, however advanced you are as a designer. They have all taught me something new about design and design thinking, as well as inspiring me with new styles and ways of working.</p>
            <p><em>All of the following six design documentaries are available watch freely with only one requiring a Netflix trial or subscription.</em></p>

            <ul>
              <li><strong>Innovative</strong> – Innovation in design is constantly moving in a forward direction. As technological development expands, innovative design should keep up with the momentum. According to Wells, “Innovative design always develops in tandem with innovative technology, and can never be an end in itself.”</li>
              <li><strong>Product Usefulness</strong> – The usefulness of a product is identified by the psychological connection it brings as well as its aesthetic. Well, thought-out design highlights a product’s usefulness and is careful to ignore creating any elements that do not satisfy this goal.</li>
              <li><strong>Aesthetic</strong> – A product’s aesthetic quality is a component of its usefulness. People use products daily and their appearance affects their well-being. According to Wells, only well-executed objects can be beautiful.</li>
              <li><strong>Makes product understandable</strong> – Design makes the product come to life. It allows the product to speak and answers all of the user’s questions. Essentially, it is self-explanatory.</li>
              <li><strong>Unobtrusive</strong> –Wells identifies design as neither a “work of art or a decorative object.” It fills a purpose and should be neutral so users can input their own form of self-expression. If design overwhelms and detracts from a user’s experience, even if it is beautiful, it has lost its true purpose.</li>
              <li><strong>Honest</strong> – Design must be true and honest and never suggest a product is more innovative and powerful than it actually is. It should never manipulate a consumer nor make them think a product is something it is not.</li>
              <li><strong>Long-lasting</strong> – Great design is not trendy. It lasts forever much like timeless fashion. It will never appear antiquated or behind its time.</li>
              <li><strong>Thorough</strong> – A great design process must include attention to thoroughness and accuracy. A good designer will express care and respect towards the consumer by finishing a project while leaving nothing to chance.</li>
              <li><strong>Environmentally friendly</strong> – According to Wells, “Design makes an important contribution to the preservation of the environment. It conserves resources and minimizes physical and visual pollution throughout the lifecycle of the product.”</li>
            </ul>

            <h2>Design Is Future</h2>
            <div class="figure wide"><img data-action="zoom" class="alignnone size-full wp-image-301560" src="https://designmodo.com/wp-content/uploads/2017/04/image03.jpg" alt="Design Is Future" width="1400" srcset="https://designmodo.com/wp-content/uploads/2017/04/image03.jpg 1400w, https://designmodo.com/wp-content/uploads/2017/04/image03-240x160.jpg 240w, https://designmodo.com/wp-content/uploads/2017/04/image03-600x399.jpg 600w, https://designmodo.com/wp-content/uploads/2017/04/image03-768x511.jpg 768w, https://designmodo.com/wp-content/uploads/2017/04/image03-1024x682.jpg 1024w, https://designmodo.com/wp-content/uploads/2017/04/image03-170x113.jpg 170w" sizes="(max-width: 1400px) 100vw, 1400px"></div>
            <p>This is an inspiring <a class="link" href="#">documentary</a> that is exceptionally well put together. <strong>‘Design Is Future’</strong>, which is held at Disseny Hub Barcelona during Barcelona Design Week, explores ideas for the future of design and talks about its rise to prominence over the last decade or two.</p>
            <p>It explores some interesting thoughts about the role of design, design thinking, and poses questions to some of the most forward thinking design professionals around today. There is particularly excellent insight into design as a tool to help with innovation and sustainability for people, businesses, and society as a whole.</p>

            <h3>Design &amp; Thinking</h3>
            <div class="figure"><a href="https://www.youtube.com/watch?v=Z_YwyMssN0Y" data-wpel-link="external" target="_blank" rel="nofollow"><img class="alignnone size-full wp-image-301561" src="https://designmodo.com/wp-content/uploads/2017/04/image02.jpg" alt="Design &amp; Thinking" width="700" srcset="https://designmodo.com/wp-content/uploads/2017/04/image02.jpg 700w, https://designmodo.com/wp-content/uploads/2017/04/image02-113x160.jpg 113w, https://designmodo.com/wp-content/uploads/2017/04/image02-600x849.jpg 600w, https://designmodo.com/wp-content/uploads/2017/04/image02-80x113.jpg 80w" sizes="(max-width: 700px) 100vw, 700px"></a></div>
            <p><strong>Design &amp; Thinking</strong> conducts interviews with prominent individuals from companies such as Autodesk and Coca-Cola, looking at the process of design thinking and design’s ability to make a significant impact on real-world problems.</p>

            <blockquote><p>“Companies like Apple are making design impossible for startups to ignore. Startups like&nbsp;<a href="http://path.com/" data-wpel-link="external" target="_blank" rel="nofollow">Path</a>,&nbsp;<a href="http://airbnb.com/" data-wpel-link="external" target="_blank" rel="nofollow">Airbnb</a>,&nbsp;<a href="http://squareup.com/" data-wpel-link="external" target="_blank" rel="nofollow">Square</a>, and&nbsp;<a href="http://massivehealth.com/" data-wpel-link="external" target="_blank" rel="nofollow">Massive Health</a>&nbsp;have design at the core of their business, and they’re doing phenomenal work. But what is ‘design’ actually? Is it a logo? A WordPress theme? An innovative&nbsp;UI?…It’s so much more than that. It’s a state of mind. It’s an approach to a problem. It’s how you’re going to kick your competitor’s ass.”</p></blockquote>

            <p>It discusses how strategic and well-thought out design decisions can have a positive effect on every problem, from everyday life, to solving world hunger and other humanitarian issues.</p>

            <h3>The Modern Russian Design</h3>
            <div class="figure wide"><a href="https://www.youtube.com/watch?v=1GkOPUh3J_I" data-wpel-link="external" target="_blank" rel="nofollow"><img class="alignnone size-full wp-image-301562" src="https://designmodo.com/wp-content/uploads/2017/04/image01.jpg" alt="The Modern Russian Design" width="800" srcset="https://designmodo.com/wp-content/uploads/2017/04/image01.jpg 800w, https://designmodo.com/wp-content/uploads/2017/04/image01-320x160.jpg 320w, https://designmodo.com/wp-content/uploads/2017/04/image01-600x300.jpg 600w, https://designmodo.com/wp-content/uploads/2017/04/image01-768x384.jpg 768w, https://designmodo.com/wp-content/uploads/2017/04/image01-226x113.jpg 226w" sizes="(max-width: 800px) 100vw, 800px"></a></div>
            <p>Sergey Shanovich’s documentary <strong>The Modern Russian Design</strong> provides a unique insight into one of the most interesting regions of the world and its design industry, and individuals who are trying to make an impact across multiple areas of design. It covers the past 20 years of progress within the Russian design field and documents the designers who have helped contribute to a part of this progress.</p>
            <p>The documentary covers multiple areas of design including fashion, industrial, multimedia, web, and graphic design.</p>

            <h3>Connecting – Trends in UI, Interaction, &amp; Experience Design</h3>
            <div class="figure"><a href="https://www.youtube.com/watch?v=lciYKwVLTuk" data-wpel-link="external" target="_blank" rel="nofollow"><img class="alignnone size-full wp-image-301563" src="https://designmodo.com/wp-content/uploads/2017/04/image00.jpg" alt="Trends in UI, Interaction, &amp; Experience Design" width="1200" srcset="https://designmodo.com/wp-content/uploads/2017/04/image00.jpg 1200w, https://designmodo.com/wp-content/uploads/2017/04/image00-295x160.jpg 295w, https://designmodo.com/wp-content/uploads/2017/04/image00-600x325.jpg 600w, https://designmodo.com/wp-content/uploads/2017/04/image00-768x416.jpg 768w, https://designmodo.com/wp-content/uploads/2017/04/image00-1024x555.jpg 1024w, https://designmodo.com/wp-content/uploads/2017/04/image00-209x113.jpg 209w" sizes="(max-width: 1200px) 100vw, 1200px"></a></div>
            <p><strong>Connecting</strong> is a short but interesting documentary which shows just how far we have come in the last 3 to 5 years. It helps take a step back from the constant innovation and progress, and look at interaction and UX design from a new perspective.</p>
            <p>Specifically exploring the future of interaction and user experience design, ‘Connecting’ looks to document the impact technology is having on the lives of everyday people, how that may develop into the future, and the ramifications of such developments.</p>

            <h3>Jeffrey Zeldman 20 years of Web Design and Community</h3>
            <div class="figure wide"><a href="https://vimeo.com/104641191" data-wpel-link="external" target="_blank" rel="nofollow"><img class="alignnone size-full wp-image-301564" src="https://designmodo.com/wp-content/uploads/2017/04/image05.jpg" alt="20 years of Web Design and Community" width="960" srcset="https://designmodo.com/wp-content/uploads/2017/04/image05.jpg 960w, https://designmodo.com/wp-content/uploads/2017/04/image05-284x160.jpg 284w, https://designmodo.com/wp-content/uploads/2017/04/image05-600x338.jpg 600w, https://designmodo.com/wp-content/uploads/2017/04/image05-768x432.jpg 768w, https://designmodo.com/wp-content/uploads/2017/04/image05-201x113.jpg 201w" sizes="(max-width: 960px) 100vw, 960px"></a></div>
            <p>An inspiring figure in web design, this documentary has Jeffrey Zeldman discuss a variety of topics about the past, present, and future of web design.</p>
            <p>Owner of ‘A List Apart’, Jeffrey has some great tips for designers and developers alike, specifically around topics such as building a mailing list, and looking towards to <strong>future of web design</strong>. It is well worth a watch to learn from someone who has been working in the industry since the very earliest beginnings.</p>

            <h3>Abstract: The Art of Design</h3>
            <div class="figure wide"><a href="https://www.youtube.com/watch?v=DYaq2sWTWAA" data-wpel-link="external" target="_blank" rel="nofollow"><img class="alignnone size-full wp-image-301565" src="https://designmodo.com/wp-content/uploads/2017/04/image04.jpg" alt="Abstract: The Art of Design" width="724" srcset="https://designmodo.com/wp-content/uploads/2017/04/image04.jpg 724w, https://designmodo.com/wp-content/uploads/2017/04/image04-273x160.jpg 273w, https://designmodo.com/wp-content/uploads/2017/04/image04-600x351.jpg 600w, https://designmodo.com/wp-content/uploads/2017/04/image04-193x113.jpg 193w" sizes="(max-width: 724px) 100vw, 724px"></a></div>
            <p><strong>Abstract</strong> is an incredibly well put together series by Netflix which devotes an episode to almost every major category of design. Particularly inspiring and related to web and graphic design are episodes following Christoph Niemann and Paula Scher, illustrator and artist respectively.</p>
            <p>It provides unique insight into their design thinking and creative process, and serves up a host a great knowledge and inspiration. The documentaries also look at how design affects people and the impact it has upon everyday lives.</p>
            <p><em>Which is you favourite design documentary? Share more below in the comments section!</em></p>
          </div>

      </div>
    </div>
  </div>
</section>

<hr class="hr">

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/footer.php";
   include_once($path);
?>