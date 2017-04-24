    <!-- Bagian Footer paling bawah -->
<footer class="row">
<div class="footer-atas">

	<div class="panel-body">
			
			<!-- start: Row -->
		<div class="container">

				<!-- start: About -->
				<div class="col-md-4">
					
					<h3>Tentang</h3><br>
                        <div class='center_prod_box_big'>            

                    <span class="chip">
                        <img src="<?php echo URL; ?>assets/avatars/avatar4.png" alt="Person" width="96" height="96">
                        Dahrey Andreass
                    </span>		
 
                        </div>															
				</div>
				<!-- end: About -->
				<hr class="hidden-md hidden-lg">

				<!-- start: Photo Stream -->
				<div class="col-md-4 .col-md-offset-4">
					
					<h3>Alamat Kami</h3><br>
				    <ul style='list-style-type:none'>
			            <li style='padding-bottom:5px'><i class='fa fa-map-marker'></i> Alamat &nbsp: pekalongan</li>
                        <li style='padding-bottom:5px'><i class='fa fa-phone'></i> Telp &nbsp&nbsp&nbsp : 083839467000</li>
                        <li style='padding-bottom:5px'><i class='fa fa-envelope'></i> Email &nbsp: <a href='$alt[email]'>dahrianshor@gmail.com</a></li>
				    </ul>	
                    
					<br class="hidden-sm hidden-xs">							            						                  
  				    
				</div>
				<!-- end: Photo Stream -->
                <hr class="hidden-md hidden-lg">
		        <div class="col-md-4">				
					<!-- end: Newsletter -->
                    <h3>Ikuti Kami</h3><br />
					   
                        <div class="text-center">

				                <div class="icon-fb">
                                    <a href="#" target="output"><i class="fa fa-facebook"></i></a>
                                </div>
								
				                <div class="icon-tw">
                                    <a href="#" target="output"><i class="fa fa-twitter"></i></a>
                                </div>

				                <div class="icon-ig">
                                    <a href="#" target="output"><i class="fa fa-instagram"></i></a>
                                </div>
				                <div class="icon-pt">
                                    <a href="#" target="output"><i class="fa fa-pinterest"></i></a>
                                </div>															  	
						</div>  
				</div>								
		</div>
		<!-- end: Row -->		
	</div>
		

</div>	
        <div class="footer-bawah">
            <p>&copy; <?php $tgl=getdate();echo "$tgl[year]";?> Reyycommerce. All Rights Reserved.</p>
            <ul class="list-inline">
                <li>
                    <a href="#">Privasi</a>
                </li>
                <li>
                    <a href="#">Ketentuan</a>
                </li>
                <li>
                    <a href="#">Bantuan</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- jQuery, memuat protocol-less -->
		<!--basic scripts-->

		<!--[if !IE]>-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->

<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo URL; ?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?php echo URL; ?>assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

        
		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo URL; ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!--Instal script lain disini-->
		<script src="<?php echo URL; ?>assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo URL; ?>assets/Reyy/js/jqBootstrapValidation.js"></script>
		<script src="<?php echo URL; ?>assets/js/jquery.slimscroll.min.js"></script>

	    
		<!--Halaman skrip plugin yang spesifik-->
		<!--[if lte IE 8]>
		  <script src="<?php echo URL; ?>assets/js/excanvas.min.js"></script>
		<![endif]-->

		<!--script untuk halaman administrasi dan lainnya-->
		<script src="<?php echo URL; ?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo URL; ?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo URL; ?>assets/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo URL; ?>assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo URL; ?>assets/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo URL; ?>assets/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo URL; ?>assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo URL; ?>assets/js/flot/jquery.flot.resize.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo URL; ?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo URL; ?>assets/js/ace.min.js"></script>

		<!--script terkait dengan halaman ini-->
<script type="text/javascript">

  //enable syntax highlighter
  prettyPrint();

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3112455-22']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
		<script type="text/javascript">
			$(function() {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
				});
			
			
			
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 35, color: "#68BC31"},
				{ label: "search engines",  data: 25, color: "#2091CF"},
				{ label: "ad campaings",  data: 10, color: "#AF4E96"},
				{ label: "direct traffic",  data: 20, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
             kita diselamatkan fungsi menggambar dan data untuk redraw dengan posisi yang berbeda kemudian ketika beralih ke modus RTL dinamis
             sehingga tidak diperlukan yang sebenarnya.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			
			  var $tooltip = $("<div class='tooltip top in hide'><div class='tooltip-inner'></div></div>").appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
		
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').slimScroll({
					height: '300px'
			    });
				
				
				//browser default Android entah bagaimana bingung ketika menekan pada label yang akan menyebabkan menyeret tugas
				//sehingga menonaktifkan menyeret saat mengklik label
				var agent = navigator.userAgent.toLowerCase();
				if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				});
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {//hanya untuk Chrome !!!! sehingga dropdown pada item tidak muncul di bawah item lainnya setelah dipindahkan
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
				
			
			})
		</script> 
         <!--di script ini untuk logic waktu - jam-->
         <script src="<?php echo URL; ?>assets/Reyy/js/jam.js"></script>

    <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
    <script>
        var url = "<?php echo URL; ?>";
    </script>
</body>
</html>
