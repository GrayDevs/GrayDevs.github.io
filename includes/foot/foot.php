	<footer id="footer">
		<div class="container">
			<div class="col-container">
				<div class="col">
					<div class="footer_title">
						 <h4>About us</h4>
					</div>
					<p class="footer_text">
						<i>Projet 3.0 </i> est un projet de DUT Réseau & Télecom (R&T).<br>
							&copy 2016-2017.
						<a href="index.php?page=contact">L'équipe du Site</a>	
					</p>
				</div>

				<div class="col">
					<div class="footer_title">
						<h4>Wikipedia & DBpedia </h4>
					</div>
					<p class="footer_text">
						Ressource libre sous licence <i>GNU General Public License</i>				
					</p>
				</div>

				<div class="col">
					<div class="footer_title">
						<h4>Special Thanks</h4> 
					</div>
					<p class="footer_text">
						Lorem Ipsum sit amet es dolores. Integer eu consequat diam, a pulvinar sapien. 
					</p>
				</div>
			</div>
		</div>
	</footer><!--/#footer-->
	
	<!--toTop Button-->
	<a href="#0" class="cd-top"><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="arrow up" style="border: solid white; border-width: 0px 5px 5px 0; display: inline-block;  padding: 7px;"></i></a>
	
	<!-- Others Scripts !-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
	
<script> //accodrion result section
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>

<script> /* menu button animation */
function menuButtonAnimation(x) {
    x.classList.toggle("change");
}
</script>

<script> //toTop Button
jQuery(document).ready(function($){
// browser window scroll (in pixels) after which the "back to top" link is shown
var offset = 300,
//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
    offset_opacity = 1200,
    //duration of the top scrolling animation (in ms)
    scroll_top_duration = 700,
    //grab the "back to top" link
    $back_to_top = $('.cd-top');

//hide or show the "back to top" link
$(window).scroll(function(){
    ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
    if( $(this).scrollTop() > offset_opacity ) { 
        $back_to_top.addClass('cd-fade-out');
    }
});

//smooth scroll to top
$back_to_top.on('click', function(event){
    event.preventDefault();
    $('body,html').animate({
        scrollTop: 0 ,
        }, scroll_top_duration
    );
});

});
</script>
	
</body>
</html>