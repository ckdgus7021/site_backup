<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>jQuery</title>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <style>
      div.box {
        height: 50px;
        border: 1px solid #bcbcbc;
        background-color: #dadada;
      }
    </style>
    <script>
      $( document ).ready( function() {
        $( 'button.hide1' ).click( function() {
          $( '.box1' ).hide();
        } );
        $( 'button.hide2' ).click( function() {
          $( '.box2' ).hide( 1000 );
        } );
        $( 'button.hide3' ).click( function() {
          $( '.box3' ).hide( 1000, 'linear' );
        } );
        $( 'button.hide4' ).click( function() {
          $( '.box4' ).hide( 1000, 'linear', function() {
            $( this ).show( 1000 );
          } );
        } );
      } );
    </script>
  </head>
  <body>
    <p><button class="hide1">Hide</button></p>
    <p><code>.hide();</code></p>
    <div class="box box1"></div>
    <p><button class="hide2">Hide</button></p>
    <p><code>.hide( 1000 );</code></p>
    <div class="box box2"></div>
    <p><button class="hide3">Hide</button></p>
    <p><code>.hide( 1000, 'linear' );</code></p>
    <div class="box box3"></div>
    <p><button class="hide4">Hide</button></p>
    <p><code>.hide( 1000, 'linear', function() { $( this ).show( 1000 ); } );</code></p>
    <div class="box box4"></div>
  </body>
</html>