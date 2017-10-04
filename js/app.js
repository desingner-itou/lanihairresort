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
      axios.get(BASEURL+'/staff?per_page=100')
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
      axios.get(BASEURL+'/style?_embed&per_page=100')
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
      axios.get(BASEURL+'/campaign?_embed&per_page=100')
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


if (document.getElementById('menus')) {
  const menusInstance = new Vue({
    el: "#menus",
    data() {
      return {
        menus: [],
        errors: [],
      };
    },
    mounted(){
      axios.get(BASEURL+'/menu?_embed&per_page=100')
      .then( (response) => { 
        response.data.sort( (a,b) => {
          if(a.id<b.id) return -1
          if(a.id > b.id) return 1
          return 0
        })
        this.menus = response.data
      })
    }
  })
}

