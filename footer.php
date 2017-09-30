<footer class="footer">
	<div class="col-sm-60 col-xs-120">
		<div class="footer__left">
			<div class="footer__left_inner">
				<div class="footer__image">
					<img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png">
				</div>
				<div class="footer__info">
					<p><b>[営業時間]</b>平日 11:00～20:00  /  土曜日 10:00～19:00  /  日・祝日 10:00～18:30</p>
					<p><b>[定休日]</b>月曜日・第二火曜日</p>
				</div>
				<?php
					wp_nav_menu(
						array(
							'menu' => 'footer',
							'container_id' => 'fnavi',
							'items_wrap'      => '<ul class="footer__nav">%3$s</ul>',
							// 'echo' => false
						)
					);
				?>
  			<small class="footer__small">2017 © <a href="<?php echo home_url('/') ?>">lani hair resort - 堀江</a></small>
			</div>
		</div>
	</div>
	<div class="col-sm-60 col-xs-120">
		<div class="footer__right">
			<div id="map"></div>
		</div>
	</div>
</footer>

<script src="https://use.fontawesome.com/cfec908fd7.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bundle.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTz6LoX0brjat2YsjFJERBlqAuP0zmFY8"></script>
<script>
$(window).on('load',function(){

  var map;
  var marker;
  var center = {
    lat: 34.6720401, // 緯度
    lng: 135.4931269, // 経度
  }
  function inimap() {
   map = new google.maps.Map(document.getElementById('map'), { // #sampleに地図を埋め込む
      center: center, // 地図の中心を指定
      zoom: 16, // 地図のズームを指定
      styles:[{
        "stylers": [{
          "hue": "#51C0CB"
        }],
        "elementType": "labels",
        "featureType": "all"
      }]
     });
   
    marker = new google.maps.Marker({ // マーカーの追加
      position: center, // マーカーを立てる位置を指定
      map: map, // マーカーを立てる地図を指定
      icon: "<?php echo get_template_directory_uri() ?>/images/mappin.png"
    });
  }
  inimap();

  if(document.getElementById('map2')){
    var map2;
    var marker2;
    var center2 = {
      lat: 34.6719901, // 緯度
      lng: 135.4931443, // 経度
    }
    function inimap() {
     map2 = new google.maps.Map(document.getElementById('map2'), { // #sampleに地図を埋め込む
        center: center2, // 地図の中心を指定
        zoom: 15, // 地図のズームを指定
        styles:[{
          "stylers": [{
            "hue": "#51C0CB"
          }],
          "elementType": "labels",
          "featureType": "all"
        }]
       });
     
      marker2 = new google.maps.Marker({ // マーカーの追加
        position: center, // マーカーを立てる位置を指定
        map: map2, // マーカーを立てる地図を指定
        icon: "<?php echo get_template_directory_uri() ?>/images/mappin.png"
      });
    }
    inimap();
  }


  $('.intro__inner').each(function(){
    var eltop = $(this).find('.intro__description').css('top').replace('px','');
    var elheight = $(this).find('.intro__description').innerHeight();
    $(this).height(parseInt(eltop)+parseInt(elheight));
  })
})
</script>
</body>
</html>
