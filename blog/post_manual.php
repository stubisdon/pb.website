<?php 
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/header.php";
  $title = "Blog";

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    $id = 10;
  }

  $q = "SELECT * FROM portfolio_data WHERE id = $id";
  $r = mysqli_query($db,$q);
  $project = mysqli_fetch_assoc($r);

  //inject params below this line from DB
  $pageMode = "blog"; //permanent
  $url = "https://paradisebird.co/blog/how-to-make-a-perfect-commercial-video-102837/";
  $type = "article"; //permanent
  $title = "How to Make a Perfect Commercial Video (Live Action)";
  $description = "Run and gun! If you’re great at it, millions of views will come to you. Well, not really. As soon as you start doing it, a number of questions will pop up, and you can find yourself overwhelmed in a matter of an hour. This article will tell you how to put all of these questions in the right order to avoid the feeling of endless complexity with the fear of missing out while other brands are producing great content out there.";
  $image = "https://blog.pond5.com/wp-content/uploads/2016/06/storyboard-guide-header.jpg";

  include_once($path);
?>

<!-- Default approach -->
<section class="slide autoHeight whiteSlide">
  <div class="content">
    <div class="container">
      <div class="wrap left">

        <div class="article-content fix-10-12">

            <h1 class="margin-bottom-5">How to make a perfect commercial video (live action) - Paradise Bird</h1>

            <p class="meta"><a href="author.php" title="Posts by Carrie Cousins" rel="author" data-wpel-link="internal">Dmitry Kotov</a> • <span itemprop="datePublished" content="2017-04-04">February 18, 2018</span></p> 

            <p>Run and gun! If you’re great at it, millions of views will come to you. Well, not really. As soon as you start doing it, a number of questions will pop up, and you can find yourself overwhelmed in a matter of an hour. This article will tell you how to put all of these questions in the right order to avoid the feeling of endless complexity with the fear of missing out while other brands are producing great content out there.</p>

            <h2>That moment</h2>
            <p>It always starts with a great idea. The idea comes to your mind and lights up all of your neurons, shocking you with it’s greatness. </p>
            <p>That’s great, but how do you communicate it to others, and even more, how do you make this idea come to life? This is where an established process can help you out. A process that was organically formed, tested in the field and polished by others. That’s the key to success.</p>
            <p>Here at Paradise Bird, we tested our process with more than 50 videos we made before. And we don’t mind sharing it with the world, so you can learn from us and make even greater videos.</p>

            <h2>The Script</h2>
            <p>First of all, videos are about delivering a message. It is considered to be one of the best forms of communication invented by humanity, since one second of a video can pack more than 1,000,000 words. But it could be really overwhelming to blast such a great amount of words in one take, so we should start small and limit ourselves with about just 1,000 words to begin with. This short-form of a video description is called a Script in the video production business. </p>
            <p>Cut down all the sprinkles and small details you see in your head, shrink it down to the most important things: setting, heroes, actions, dialogue lines (if there’s any). Here are some examples of scripts for simple videos we made before: Example 1, Example 2, Example 3.</p>
            <p>If the Script is too much of a challenge to begin with, or the product that you are working on is too damn complex, you can start with an even shorter form of a video description – a Synopsis.</p>
            <p>Usually, a Synopsis consists of 1-3 sentences. It could be something as simple as “a video coverage of events happening at [Event Name] with a couple interviews at [Brand Name] booth” up to something really complex as “a view on the future of Cybersecurity unravelling through a continuous one-shot take with a confident protagonist telling about the possibilities to the camera and going through these possibilities in real-time”.</p>
            <p>It is really important to keep in mind that this synopsis ideally should be based on the actual problems that your business solves and a number of unique values that you bring to the world.</p>

            <blockquote>
            	<p>Pro Tip:</p>
            	<p>People should be inspired, shocked, amazed, amused, anything but no reaction = non-action. Commercials are all about making people take action, so there should be an emotional trigger for the viewer.</p>
            	<p>You can create an emotional response with different methods, pack lots of information in a short period of time and you will get people overwhelmed (works for a problem statement), throw a verbal or a visual joke in a scene and make people laugh to relate to main characters more, use ambiguity to lure people inside your story and make them interested in what happens next. A set of these tricks is usually a “deck of cards” that each Director uses to win viewer’s attention, so don’t be afraid of copying some tricks from your favorite directors and then develop your own set of tricks that works best for you. Then it will be your own style that will set you apart from other directors.</p>
        	</blockquote>

        	<p>Sometimes, it is hard to start writing a script or even a synopsis because there’s so much to think about at the beginning. We dealt with this before and we totally feel you. To make this process easier, we created a Scriptwriting Playbook. It consists 5 questions, and each one of them serves as a ground layer for your future script.</p>

        	<p>And yes, you can get it for free.</p>

        	<p>BUTTON</p>

            <h3>Director’s Treatment</h3>
            <p>When the Script or a Synopsis looks good for all members of the project team, it’s time to add more to it and imagine how it really will look like. At this stage it is more about “how we see this when the production is over”, “look and feel”, or as someone might say “mood”.</p>
            <p>This is where you can get crafty, and describe each scene or a part of the video in more details. It could be a long description with visual and video references, and even some music score references they consider perfect for the video.</p>
            <p>Different Directors treat this stage differently, some are good at drawing and can create a storyboard which also communicates the main frames and angles of the future video.</p>

            <div class="figure wide"><img data-action="zoom" src="https://blog.pond5.com/wp-content/uploads/2016/06/storyboard-guide-header.jpg" alt="Storyboeard Example" width="1400" srcset="https://blog.pond5.com/wp-content/uploads/2016/06/storyboard-guide-header.jpg" sizes="(max-width: 1400px) 100vw, 1400px"></div>

            <p>Some are not that good at drawing, but they can communicate their vision with the power of presentations:</p>
            <!-- <p>[https://nofilmschool.com/sites/default/files/uploads/2014/04/DJ_Snake_Lil_Jon_DANIELS_Music_Video_Treatment.pdf]</p> -->
            <p>Some are still not good at drawing but they’re good at Photoshop, so they photoshop a storyboard like we did for one of our projects:</p>
            <p>[link to CGIV storyboard]</p>
            <p>And sometimes, it’s enough to just say “I know how it will look like”, or “I don’t know how it’ll look like, but I’ll make it anyway because I want”. Each project is different, but the main goal of this stage remains the same – the Director should be confident that he’ll make a great video. If this is a team projects – he should make sure that every member of the team <strong>knows</strong> that the Director <strong>has</strong> a vision for the project. If this is a one-man project – just start doing it. You always will have room for improvement.</p>



            <h3>Pre-Production Documents</h3>
            <p>Oh, how many versions of this stage we tried out and how many we saw from other guys from the industry. The number is countless. You can definitely say: every artist has their own tools, so this applies to Producers as well. </p>
            <p>We saw articles like 99 best templates for pre-production or 163 free pre-production templates for Filmmakers but it all narrows down to 8 different areas of knowledge the Producer should take care of during Pre-Production Stage:</p>
            <ul>
              <li><strong>Locations</strong></li>
              <li><strong>Talent</strong></li>
              <li><strong>Costumes/Make-up</strong></li>
              <li><strong>Props</strong></li>
              <li><strong>Gear (Camera, Light, Grip, Sound)</strong></li>
              <li><strong>Production Crew</strong></li>
              <li><strong>Music</strong></li>
              <li><strong>Insurance</strong></li>
              <li><strong>Travel and Accommodation</strong></li>
              <li><strong>(Bonus) Catering</strong></li>
            </ul>

            <p>The level of detail on each area really depends on the scale of production. If you’re shooting a selfie-video on your phone on the street – you probably don’t need any of these documents. But when you start adding more variables to the equation – things start getting more complex and a number of risks arises. The more you entities you add to the script – the bigger a Producer’s Breakdown becomes.</p>
            <p>Here’s a good video that explains how the process of Production Breakdown works</p>
            <div class="videoHolder"><iframe src="https://www.youtube.com/embed/MzCLLHscMOw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
            <p>During this stage, the main goal is to make sure that everything planned in the script will be present at the shooting stage when it’s needed. If there’s a wig that a character wears in the scene, somebody has to deliver it to the stage and put it on the actor. We just mentioned 4 entities that should be taken care of: Wig (Prop), Stage (Location), Put the wig on the actor (Make-up), Actor (Talent).</p>
            <p>So if you’re a solo video creator, we honestly suggest restricting yourself on the Scriptwriting stage and keep the amount of entities as small as possible. Otherwise, you risk juggling between money and logistics and the artistry of executing the vision of a video.</p>
            <p>If you go with a team approach, make sure that there’s is a person dedicated to just keeping things in order. Logistics, bills, schedules, call sheets, agreements, and so on - it could be done by one person if the scale of production allows it. If there’s too many things to wrangle, it could be done by segmenting the fields of responsibility (Camera Department, Sound Department, etc.) and/or layering management (Executive Producer, Line Producer, Production Assistant, etc.).</p>

            <h2>Production Days or Principal Photography Stage</h2>
            <p>Lights, Camera, Action! It’s time to get that footage recorded.</p>
            <p>Everybody is on the set, gear is ready to get hot in action, and you got it from the first take! In the dream world, yes, that happens all the time. In the real world, there is a chance of that, but we’re talking 0.01%.</p>
            <p>Most of the time, something will go wrong. Some minor details crumble all the time, and sometimes, major pile of your vision might go down, grabbing lots of minor details down as well. And you know what to do in this case?</p>
            <p>Don’t panic. We felt like that almost at every shooting day.</p>
            <p>We haven’t gotten an Oscar, but we feel that the main thing that sets Successful Directors from average Joes is keeping it calm, believing in their vision and solving problems on the go.</p>
            <p>When something misshapens, get back to your Synopsis and ask yourself, what do you have around you right now that might be a good substitute to the part that just failed, but will still communicate the original vision? There’s always a solution.</p>
            <p>The mic keeps detaching from the shirt? Tape it up DIY-style so no one will see it. The camera keeps overheating? Well, you just got a good schedule adjustment that’ll let you rehearse the script with actors. The main actor doesn’t play the part like you saw it in your head? Try to find another stronger side of them and emphasize attention on it.</p>
            <p>The worst thing you can do on set – is to start yelling at people and call it quits. That’s something that is called “unprofessional behavior”. You are on the ship with others today and instead of letting them down, provide the solution and get everybody onboard with it.</p>
            <p>If you happen to have another Director on the set, help them out. Try to feel them, because you’re the part of this theater and your actions or non-actions might affect the final outcome of the production day. If there’s no Director on the set, you should become one directly or indirectly.</p>
            <p>And if you’re capturing an event, it means that somebody has organized it and being non-intrusive is best thing that you should do. Become a ninja and capture the most candid impressions from attendees, because in journalist-style videography, that stuff is golden.</p>

            <blockquote>
            	<p>Pro-tip:</p>
            	<p>Before leaving the set earlier than you planned, dedicate some time to quickly browse through the footage and audio you’ve captured with the whole team, because if there’s a failure with something that still can be recaptured – you still have time to reshoot it. A very popular joke sounds like “we’ll fix it in post” that usually means tripling the time spent on post-production or not even being able to fix it at all.</p>
            	<p>These Quality Assurance breaks are also good to make after the first take from a scene to avoid the chance of getting golden takes and then blaming yourself about “not moving this chair a bit further”.</p>
            	<p>Things to check on a break: continuity, composition, exposure, color palette, grain, noise, make-up, shadows.</p>
            </blockquote>

            <h2>Post-Production</h2>
            <p>Well, to be honest, post-production is so vast in it’s variations and types of services, that people run large studios like The Mill that are focused on just post-production.</p>
            <p>You can skip the whole stage if you are live-streaming or you are a magician.</p>
            <p>Before posting another article dedicated on types of post-production, we’ll just focus your attention on the main questions you should ask yourself while you are at the post-production stage: </p>

            <p><em>Does the picture look good? And is the sound alright?</em></br>
            If you haven’t followed the pro-tip from the previous part of this article, you have to to do your best at fixing it. We’re not the fans of doing it because post-production has its layer of “fakeness” added on top of the video, even if it’s done by the best people at their craft, but sometimes it’s worth it. Underexposed or overexposed footage is easy to fix, some colors might be replaced by masks, some people can replace a whole face with a deep learning algorithm.</p>
            <p><em>Is the video even slightly boring? </em></br>
            Instead of sacrificing views, sometimes it’s better to cut some parts that loose your viewers. At the first cut the best judge is yourself. And after you spent more than several hours on editing, the best judge would be yourself on the next day (or after a good distraction or a break for jogging and thinking about something else). After the third version, it’s best to show the video to your friends. </p>
            <p>If everybody in your close vicinity thinks that the video is ideal, show it to your best customer – sometimes they might give you some great feedback on something you haven’t noticed before.</p>
            <p>With this information, we can say that the ball is on your side of the field now. If you are brave enough – you can pull off anything you want. And if you think you might need some help from professionals, that’s totally alright. </p>
            <p>Anyways, subscribe to the updates from our team and we will give you more insights about video production industry. </p>
            <p>Cheers, </br>Paradise Bird.</p>
            
            <p><em>Which is you favourite design documentary? Share more below in the comments section!</em></p>
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