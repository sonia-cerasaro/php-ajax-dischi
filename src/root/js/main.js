Vue.config.devtools = true;

var app = new Vue ({
  el: '#root',
  data: {
    disks: [],
  },
  created() {
    axios.get('http://localhost:8888/php-ajax-dischi/dataAccess.php')
    .then((response) => {
      console.log(response.data);
      this.disks = response.data;
    })
  }
});
