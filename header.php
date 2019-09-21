<script>   
    function final_countdown(endtime){
        // Set the date we're counting down to
        var countDownDate = new Date(endtime).getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

          // Get today's date and time
          var now = new Date().getTime();

          // Find the distance between now and the count down date
          var distance = countDownDate - now;

          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // Output the result in an element with id="demo"
          document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
          + minutes + "m " + seconds + "s ";

          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "Ačiū, kad lankėtės!";
          }
        }, 1000);
    }
</script>


<nav class="navbar navbar-inverse"> 
    <div class="container-fluid" style="display: inline-block !important;">
        <ul class="nav navbar-nav">     
            <li >
                <a href="svieslente.php">Švieslentė</a>
            </li>
            <li >
                <a href="index.php">Naujas Klientas</a>
            </li>
            <li >
                <a href="aptarnavimas.php">Specialisto Puslapis</a>
            </li>
             <li >
                 <a href="lankytojo_puslapis.php">Lankytojo Puslapis</a>
            </li>
            
    </div>
</nav>