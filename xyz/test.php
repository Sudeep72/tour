<?php
session_start();
echo "<style>
            p {
              opacity: 1;
              transition: opacity 1s ease-in-out;
            }
            p.hide {
              opacity: 0;
            }
      </style>";
echo "<p>Hello World!</p>";
echo "<script>setTimeout(function(){ document.querySelector('p').classList.add('hide'); }, 3000);</script>";
?>

