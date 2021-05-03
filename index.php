 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <div id="root">

       <div class=""
       v-for="disk in disks">
       <img :src="disk.poster" alt="">
       </div>




     </div>

     <script src="https://cdn.jsdelivr.net/npm/vue"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
     <script src="./src/root/js/main.js" charset="utf-8"></script>


   </body>
 </html>
