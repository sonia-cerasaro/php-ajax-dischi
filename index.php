 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="./dist/css/master.css">
   </head>
   <body>
     <div id="root">

       <header>
         <h1>PHP DISKS</h1>
       </header>

       <main>
         <div class="main_cont">
           <div class="back_container"
           v-for="disk in disks">
           <img class="image" :src="disk.poster">
           </div>
         </div>
       </main>

     </div>

     <script src="https://cdn.jsdelivr.net/npm/vue"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
     <script src="./src/root/js/main.js" charset="utf-8"></script>

   </body>
 </html>
