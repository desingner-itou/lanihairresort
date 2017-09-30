import Vue from 'vue'
import axios from 'axios'
import 'bootstrap'
import 'babel-polyfill'

// const BASEURL = "/lani/index.php/wp-json/wp/v2";
const BASEURL = "/index.php/wp-json/wp/v2";

if (document.getElementById('staffs')) {
  const staffsInstance = new Vue({
    el: "#staffs",
    data() {
      return {
        stylist: [],
        assistant: [],
        errors: [],
      };
    },
    mounted(){
      axios.get(BASEURL+'/staff')
      .then( (response) => { 
      	response.data.sort( (a,b) => {
          if(a.id<b.id) return -1
          if(a.id > b.id) return 1
          return 0
      	})
      	response.data.map( (x) => {
      		if(x.acf.staff_job.slug == 'assistant'){
      			this.assistant.push(x)
      		}else{
	      		this.stylist.push(x)
      		}
      	})
      })
    }
  })
}

if (document.getElementById('styles')) {
  const stylesInstance = new Vue({
    el: "#styles",
    data() {
      return {
        styles: [],
        errors: [],
      };
    },
    methods:{
      getThumbUrl(post){
        return post['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['full']['source_url']
      },
    },
    mounted(){
      axios.get(BASEURL+'/style?_embed')
      .then( (response) => { 
      	response.data.sort( (a,b) => {
          if(a.id<b.id) return -1
          if(a.id > b.id) return 1
          return 0
      	})
      	this.styles = response.data
      })
    }
  })
}

if (document.getElementById('campaigns')) {
  const campaignsInstance = new Vue({
    el: "#campaigns",
    data() {
      return {
        campaigns: [],
        errors: [],
      };
    },
    methods:{
      getThumbUrl(post){
        return post['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['full']['source_url']
      },
    },
    mounted(){
      axios.get(BASEURL+'/campaign?_embed')
      .then( (response) => { 
      	response.data.sort( (a,b) => {
          if(a.id<b.id) return -1
          if(a.id > b.id) return 1
          return 0
      	})
      	this.campaigns = response.data
      })
    }
  })
}



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