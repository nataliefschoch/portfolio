</body>

<footer>
  <div class='container'>
    <div class='row'>
    	<div class='col-md-3'>
    		<a href:'mailto:hello@natalieschoch.com'>
    			<h3>hello@natalieschoch.com</h3>
    		</a>
    	</div>
    	<div class='col-md-6'>
    		<ul class='text-center'>
    			<li><a href='#'>Github</a></li>
    			<li><a href='#'>Dribbble</a></li>
    			<li><a href='#'>LinkedIn</a></li>
    		</ul>
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
        variableWidth: true,
        responsive: [
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