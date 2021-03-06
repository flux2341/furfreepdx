<?php
include('header.php');
?>
<style>
  .location {
    margin:10px;
  }
  #app {
    max-width:600px;
    margin:0 auto;
    padding:10px;
  }
  #app img {
    width:100%;
  }
  h4 {
    text-align:center;
  }
</style>
<main id="app">
  <h4>Sign the Petition</h4>
  <p>There are 6 local Portland businesses where you can sign the petition. Each signature helps convince the city commissioners that the people of Portland support a ban on the sale of new fur products. Together we can take a stand against this violent, cruel, and unnecessary industry.</p>
  
  <div v-for="location in locations" class="location">
    <h5>{{location.name}}</h5>
    <div>{{location.address}}</div>
  </div>
  <img src="./content/standalone_petition_locations.jpg"/>
</main>
<script>
  let app = new Vue({
    el: '#app',
    data: {
      locations: [{
        name: 'No Bones Beach Club',
        address: '3928 N Mississippi Ave, Portland, OR 97227'
      },{
        name: 'Food Fight! Grocery',
        address: '1217 SE Stark St, Portland, OR 97214'
      },{
        name: 'Oracle Coffee Company',
        address: '3875 SW Bond Ave, Portland, OR 97239'
      }]
    }
  })
</script>

<?php
include('footer.php');
?>
