import Vue from 'vue'
import axios from 'axios'
import 'bootstrap'
import $ from 'jquery'


const BASEURL = "/logopo/index.php/wp-json/wp/v2";
const THEMEURL = "/logopo/wp-content/themes/theme_name/img/";

// if (document.getElementById('home')) {
//   var homeInstance = new Vue({
//     el: "#home",

//     data() {
//       return {
//         datas: [],
//         errors: [],
//       };
//     },

//     methods: {
//       getImgUrl(post,size){
//         return post['_embedded']['wp:featuredmedia'][0]['media_details']['sizes'][size]['source_url'];
//       },
//       imageThumb(img){
//         return img.replace(/(.*)(\.[jpg|png])/,"$1-150x150$2");
//       },
//     },

//     mounted(){
//       axios.get(BASEURL)
//       .then( (response) => { homeInstance.datas = response.data; })
//     }
//   })
// }

