</body>

<footer>
  <div class='container'>
    <div class='row'>
    	<div class='col-md-8'>
    		<ul>
          <li><a href='mailto:hello@natalieschoch.com'>hello@natalieschoch.com</a></li>
    			<div class='divider white'></div>
          <li><a href='https://github.com/nataliefschoch', target='_blank'>Github</a></li>
    			<li><a href='https://dribbble.com/nataliefschoch', target='_blank'>Dribbble</a></li>
    			<li><a href='https://www.linkedin.com/in/natalie-schoch-978ba17b' , target='_blank'>LinkedIn</a></li>
          <li><a href='https://twitter.com/nataliefschoch', target='_blank'>Twitter</a></li>
    		</ul>
    	</div>
      <div class='col-md-4 text-white text-right'>
        <p>Natalie Schoch &copy; 2017</p>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.web-work-carousel').slick({
        // autoplay: true,
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        centerPadding: '200px',
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 3000,
        appendDots: $('.intro'),
        responsive: [,
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true,
              focusOnSelect: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    });
  </script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script src="https://use.typekit.net/uxj0kgs.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</footer>