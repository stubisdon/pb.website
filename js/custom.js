/* Google Analytics Tracker */
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-103791956-1', 'auto');
ga('send', 'pageview');

$('.estimateButton').on('click', function(){  _gaq.push(['_trackPageview','RequestProject']);  });


// Hotjar Tracking Code for http://paradisebird.co
(function(h,o,t,j,a,r){
    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
    h._hjSettings={hjid:587234,hjsv:5};
    a=o.getElementsByTagName('head')[0];
    r=o.createElement('script');r.async=1;
    r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
    a.appendChild(r);
})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');


//Mailchimp Subscribe Script
$(function(){
  $('#subscribe, #subscribe2, #subscribe32, #subscribe4').ajaxChimp({
    url: '//paradisebird.us16.list-manage.com/subscribe/post?u=17c62aa8d1425b64cc3a1fdce&amp;id=3c39499ee7',
    callback: callbackFunction,
    language: 'pb'
  });

  //js function on success
  function callbackFunction(resp, data) {
    if (resp.result === 'success') {
      setTimeout(function(){
        $.cookie('form',30);
        $('.dialog[data-dialog-id="form"]').addClass('hide').one("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
          $(this).addClass('hidden');
          $.cookie('form','30');
        });
      },3000);

      //facebook event
      fbq('track', 'Lead');

      //google event tracker
      ga('send', {
        hitType: 'event',
        eventCategory: 'email',
        eventAction: 'submit',
        eventLabel: data
      });

      //FREEBIE
      if (data == "freebie-download") {
        //will fix later
        $('#subscribe4 .subscribe-message2').html("Thanks! The download will begin shortly. Or visit this <a href='http://paradisebird.co/Scriptwriting%20Playbook%20by%20Paradise%20Bird.zip'>link</a> to download");
        setTimeout(function(){
          location.href = "http://paradisebird.co/Scriptwriting%20Playbook%20by%20Paradise%20Bird.zip";
        },2000)
      }

      _gaq.push(['_trackPageview','EmailSubmit']);
    }
  }

  $.ajaxChimp.translations.pb = {
    'submit': 'Submitting...',
    0: 'Thank you! Check your mailbox for news.',
    1: 'Please enter your email',
    2: 'An email address must contain a single @',
    3: 'The domain portion of the email address is invalid (the portion after the @: )',
    4: 'The username portion of the email address is invalid (the portion before the @: )',
    5: 'This email address looks fake or invalid. Please enter a real email address'
  }
});