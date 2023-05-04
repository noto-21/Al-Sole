<?php

include("MenuBar.php");

$outmssg = "Purchase Ticket";
$moremssg = "More Information";
$totalRet = 0;

?>

<!DOCTYPE html>

<html>
<head>
    <title>~Ticket Booth~</title>
    <link rel="stylesheet" href="tbc.css">
   
</head>
<script src="TicketBooth.js" async></script>
<body>
  <h1 id="title" style="text-shadow: -2px 2px 4px #808080; box-shadow: 0px 2px 6px #000000;"><em><b>~Ticket Booth~</b></em></h1>
  <video id="background-video" autoplay loop muted poster="https://cdn.mediatheque.epmoo.fr/link/smr18gfs3959n5s.webm4">
    <source src="https://cdn.mediatheque.epmoo.fr/link/smr18gfs3959n5s.webm4" type="video/mp4">
    </video>
  <video autoplay loop muted plays-inline>
    <source src="https://www.youtube.com/watch?v=JxpyYJEVITg">
  </video>
    <div class="ContentForEvents">
    
  <div id="ContentForEvents">
    <hr>
    <p><em>Scroll to view events...</em></p>

    <!--EVENT 1-->
    <div class="event-row" id="event1">
    <h2>EVENT 1</h2>
    <p>
       WORKSHOP:<br>Contemporary Art Analysis
      <br> Workshop to provide help to those who intellectual or developmental disabilities understand and appreciate new age contemporary art. Hosted by David Davidson.
       <br>
       
        For more information about the event, please visit the Event Calendar
        <!--link page to the Event Calendar here-->
        <br><a href="calendar_index.php" style="background-color: goldenrod; color: black;">EVENT CALENDAR</a> <br> <br>

            <strong>Purchase Ticket? -> <em style="background-color: goldenrod; color: black;">$100</em></strong><br>
            <button onclick="ev1+=addEvent(1)" class="add_event" type="button" style="background-color: goldenrod; color: black;">Purchase</button><br>
            <script> var ev1 = 0;  </script>
    </div>
    </p>
    <hr> <hr>
    
     <!--EVENT 2-->
     <div class="event-row" id="event1">
      <h2>EVENT 2</h2>
      <p> Artist Showcase:<br>Hilary Pecis<br>
      Showcasing Hilary Pecis's still life and landscape paintings inspired by the vibrant storybook quality, incarnating domestic vignettes and week markets in characterful frame.<br>
        
          For more information about the event, please visit the Event Calendar
          <!--link page to the Event Calendar here-->
          <br><a href="calendar_index.php" style="background-color: goldenrod; color: black;">EVENT CALENDAR</a> <br> <br>
  
              <strong>Purchase Ticket? -> <em style="background-color: goldenrod; color: black;">$500</em></strong> <br>
              <button onclick="ev1+=addEvent(2)" class="add_event" type="button" style="background-color: goldenrod; color: black;">Purchase</button><br>
              
              
           
  
      </div>
          
         
      </p>
      <hr> <hr>


      <!--EVENT 3-->
      <div class="event-row" id="event1">
        <h2>EVENT 3</h2>
        <p> WORKSHOP:<br>Introduction to Drawing<br>
          We will be running a workshop that introduces students to a range of media and techniques in drawing, as well as different application methods to develop an awareness of line, volume and form.<br>
            For more information about the event, please visit the Event Calendar
            <span class="event-price">$300</span>
            <!--link page to the Event Calendar here-->
            <br><a href="calendar_index.php" style="background-color: goldenrod; color: black;">EVENT CALENDAR</a> <br> <br>
    
            <strong>Purchase Ticket? -> <em style="background-color: goldenrod; color: black;">$300</em></strong> <br>
                <button onclick="ev1+=addEvent(3)" class="add_event" type="button" style="background-color: goldenrod; color: black;">Purchase</button><br>
             
    
        </div>
            
           
        </p>
        <hr> <hr>


    <!--EVENT 4-->
    <div class="event-row" id="event1">
      <h2>EVENT 4</h2>
      <p> ARTIST SHOWCASE:<br>Leonardo Da Vinci<br>
      Leonardo Da Vinci was Renaissance painter, sculptor, architect, inventor, military engineer and draftsmans. In light of this event, Al Sole will resurrect Leonardo in order to study his great work.<br>
          For more information about the event, please visit the Event Calendar
          <span class="event-price">$300</span>
          <!--link page to the Event Calendar here-->
          <br><a href="calendar_index.php" style="background-color: goldenrod; color: black;">EVENT CALENDAR</a> <br> <br>
  
          <strong>Purchase Ticket? -> <em style="background-color: goldenrod; color: black;">$300</em></strong> <br>
              
              <button onclick="ev1+=addEvent(4)" class="add_event" type="button" style="background-color: goldenrod; color: black;">Purchase</button><br>
           
  
      </div>
          
         
      </p>
      <hr> <hr>

    <!--EVENT 5-->
    <div class="event-row" id="event1">
      <h2>EVENT 5</h2>
      <p> ARTIST SHOWCASE:<br>Shara Hughes<br>
      Shara Hughes's brushstrokes freewheel across the canvas in smorgaboard of colour. She is a New York-based artist; that has a bold signature that riffs on dramatic tones and dreamlike manifestations.<br>
          For more information about the event, please visit the Event Calendar
          <span class="event-price">$400</span>
          <!--link page to the Event Calendar here-->
          <br><a href="calendar_index.php" style="background-color: goldenrod; color: black;">EVENT CALENDAR</a> <br> <br>
  
          <strong>Purchase Ticket? -> <em style="background-color: goldenrod; color: black;">$400</em></strong> <br>
              
              <button onclick="ev1+=addEvent(5)" class="add_event" type="button" style="background-color: goldenrod; color: black;">Purchase</button><br>
           
  
      </div>
          
         
      </p>
      <hr> <hr>
    <!--EVENT 6-->
    <div class="event-row" id="event1">
      <h2>EVENT 6</h2>
      <p> WORKSHOP:<br>Sculpting<br>
        Create your own abstract steel sculpture wil basic tig welding knowledge.<br>
          For more information about the event, please visit the Event Calendar
          <span class="event-price">$80</span>
          <!--link page to the Event Calendar here-->
          <br><a href="calendar_index.php" style="background-color: goldenrod; color: black;">EVENT CALENDAR</a> <br> <br>
  
          <strong>Purchase Ticket? -> <em style="background-color: goldenrod; color: black;">$80</em></strong> <br>
              <button onclick="ev1+=addEvent(6)" class="add_event" type="button" style="background-color: goldenrod; color: black;">Purchase</button><br>
           
  
      </div>
          
         
      </p>
      <hr> <hr>
    
     <!--EVENT 7-->
     <div class="event-row" id="event1">
      <h2>EVENT 7</h2>
      <p> ARTIST SHOWCASE:<br>Issy Wood<br>
      Issy Wood's kafkaesque paintings put people and everyday objects in macabre avatars. We are excited to announce that Issy Wood will be showcasing for three days to show some of her most inspiring pieces.<br>
          For more information about the event, please visit the Event Calendar
          <span class="event-price">$100</span>
          <!--link page to the Event Calendar here-->
          <br><a href="calendar_index.php" style="background-color: goldenrod; color: black;">EVENT CALENDAR</a> <br> <br>
  
          <strong>Purchase Ticket? -> <em style="background-color: goldenrod; color: black;">$100</em></strong> <br>
              
              <button onclick="ev1+=addEvent(7)" class="add_event" type="button" style="background-color: goldenrod; color: black;">Purchase</button><br>
           
  
      </div>
          
         
      </p>
      <hr> <hr>


      <!--EVENT 8-->
      <div class="event-row" id="event1">
        <h2>EVENT 8</h2>
        <p> WORKSHOP:<br>Introduction to Painting<br>
        This workshop introduces students to a variety of ranges for painting techniques through exercises designed to develope a awareness of line, volume, form and colour. <br>
            For more information about the event, please visit the Event Calendar
            <span class="event-price">$100</span>
            <!--link page to the Event Calendar here-->
            <br><a href="calendar_index.php" style="background-color: goldenrod; color: black;">EVENT CALENDAR</a> <br> <br>
    
            <strong>Purchase Ticket? -> <em style="background-color: goldenrod; color: black;">$100</em></strong> <br>
                
                <button onclick="ev1+=addEvent(8)" class="add_event" type="button" style="background-color: goldenrod; color: black;">Purchase</button><br>
             
    
        </div>
            
           
        </p>
        <hr> <hr>

    <!--EVENT 9-->
    <div class="event-row" id="event1">
      <h2>EVENT 9</h2>
      <p> ARTIST SHOWCASE:<br>Tomokazu Matsuyma<br>
      The New York-based artist has a psychedelic samural and outlandish cowboys style, his center of inspiration is based around pop art and manga. Come join us for a three day live painting session with Tomokazu Matsuyama.<br>
          For more information about the event, please visit the Event Calendar
          <span class="event-price">$100</span>
          <!--link page to the Event Calendar here-->
          <br><a href="calendar_index.php" style="background-color: goldenrod; color: black;">EVENT CALENDAR</a> <br> <br>
  
          <strong>Purchase Ticket? -> <em style="background-color: goldenrod; color: black;">$100</em></strong> <br>
              
              <button onclick="ev1+=addEvent(9)" class="add_event" type="button" style="background-color: goldenrod; color: black;">Purchase</button><br>
</div>
</p>
<hr><hr>

    <!--EVENT 10-->
    <div class="event-row" id="event1">
      <h2>EVENT 10</h2>
      <p>WORKSHOP:<br>Introduction to Photography <br>
      Hosted by Robert Down a master photographer. He will be teaching you the basic concept of photography like Aperture, shutter speed, ISO speed, exposure. <br>
          For more information about the event, please visit the Event Calendar
          <span class="event-price">$100</span>
               <br><a href="calendar_index.php" style="background-color: goldenrod; color: black;">EVENT CALENDAR</a> <br> <br>
               <strong>Purchase Ticket? -> <em style="background-color: goldenrod; color: black;">$100</em></strong> <br>
              <button onclick="ev1+=addEvent(10)" class="add_event" type="button" style="background-color: goldenrod; color: black;">Purchase</button><br>
      </div>
         
      </p>
      <hr> <hr>
      <button onclick= "alert('Your total is $' + ev1)" class="add_event" type="button" style="background-color: green; color: white;">Calculate Total</button> <br> <br><br>
      
      <?php
      if ($u_dat)
      {
        echo '<button type="button" style="text-align:center; background-color: green; color: white;"><a href="FinalTicket.php">Proceed</a></button>';
      }
      else
      {
        echo '<button type="button" style="text-align:center; background-color: green; color: white;"><a href="login.php">Proceed</a></button>';
      }
      ?>
      
    </div>
    </div>
        <hr>
        </div>
    </p>
  </div> 
</body>
</html>