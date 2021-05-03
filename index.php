<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    $disks = [
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
        ],
        [
            'title' => 'Live at Wembley 86',
            'author' => 'Queen',
            'year' => 1992,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg'
        ],
        [
            'title' => 'Ten\'s Summoner\'s Tales',
            'author' => 'Sting',
            'year' => 1993,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg'
        ],
        [
            'title' => 'Steve Gadd band',
            'author' => 'Steve Gadd Band',
            'year' => 2018,
            'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg'
        ],
        [
            'title' => 'Brave new World',
            'author' => 'Iron Maiden',
            'year' => 2000,
            'poster' => 'https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg'
        ],
        [
            'title' => 'One more car, one more rider',
            'author' => 'Eric Clapton',
            'year' => 2002,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg'
        ]
    ];
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>ajax dischi</title>
     <link rel="stylesheet" href="./dist/css/master.css">

   </head>
   <body>

     <main>

       <div class="main_cont">

         <?php foreach ($disks as $value) { ?>
            <div class="back_container">
              <img class="image"src="

              <?php echo $value['poster'];?>

              " alt="">

            </div>
            <?php
             }
            ?>


       </div>

     </main>



     <script src="https://cdn.jsdelivr.net/npm/vue"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
     <script src="./dist/js/main.js" charset="utf-8"></script>
   </body>
 </html>
