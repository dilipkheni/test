<!-- index.html -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>React Tutorial</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  </head>
  <body>
    <div id="content"></div>
    
    
<button>Filter Resolve</button>
<p></p>
 
<script>
    
    function asyncEvent() {
  var dfd = jQuery.Deferred();
 
  // Resolve after a random interval
  setTimeout(function() {
    dfd.resolve( "hurray" );
  }, Math.floor( 400 + Math.random() * 2000 ) );
 
  // Reject after a random interval
  setTimeout(function() {
    dfd.reject( "sorry" );
  }, Math.floor( 400 + Math.random() * 2000 ) );
 
  // Show a "working..." message every half-second
  setTimeout(function working() {
    console.log( dfd.state());
    if ( dfd.state() === "pending" ) {
      dfd.notify( "working... " );
      
      setTimeout( working, 500 );
    }
  }, 1 );
 
  // Return the Promise so caller can't change the Deferred
  return dfd.promise();
}
 
// Attach a done, fail, and progress handler for the asyncEvent
$.when( asyncEvent() ).then(
  function( status ) {
    alert( status + ", things are going well" );
  },
  function( status ) {
    alert( status + ", you fail this time" );
  },
  function( status ) {
    $( "body" ).append( status );
  }
);


/*
    var url = 'http://localhost/test.php';
    var url2 = 'http://localhost/test.php';
    var request = $.ajax( url ),
    chained = request.then(function( data ) {
      return $.ajax( url2 );
    });

    request.done(function( data ) {
        console.log('1');
      // data retrieved from url2 as provided by the first request
    });
    
     chained.done(function( data ) {
        console.log('2');
      // data retrieved from url2 as provided by the first request
    });
*/
</script>
 



     <script>
         /*
        var filterResolve = function() {

            var defer = $.Deferred(),
            filtered = defer.then(function( value ) {
                return value * 2;
            });

            defer.reject( 5 );
            filtered.done(function( value ) {
              $( "p" ).html( "Success : Value is ( 2*5 = ) 10: " + value );
            });

              filtered.fail(function( value ) {
              $( "p" ).html( "Fail : Value is ( 2*5 = ) 10: " + value );
            });

       };

        $( "button" ).on( "click", filterResolve );
        */
        </script>



     <script  >
         /*
      var p1 = new Promise(function(resolve, reject) {
            resolve("Success!");
            // or
            // reject ("Error!");
        });

        p1.then(function(value) {
          console.log(value); // Success!
        }, function(reason) {
          console.log(reason); // Error!
        });
        */
    </script>
  </body>
</html>