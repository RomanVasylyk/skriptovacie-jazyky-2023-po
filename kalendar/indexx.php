<?php


session_start();


?>
<!DOCTYPE html>
<html>
 <head>

  <title>Jquery Fullcalandar Integration with PHP and Mysql</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script>
   /*FullCalendar*/
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    events: 'load.php',
    selectable:true,
    selectHelper:true,
    select: function(start, end, allDay)
    {
     var title = prompt("Enter Event Title");
     if(title)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
      $.ajax({
       url:"insert.php",
       type:"POST",
       data:{title:title, start:start, end:end},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Added Successfully");
       }
      })
     }
    },
    editable:true,
    eventResize:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Event Update');
      }
     })
    },

    eventDrop:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
       calendar.fullCalendar('refetchEvents');
       alert("Event Updated");
      }
     });
    },

    eventClick:function(event)
    {
     if(confirm("Are you sure you want to remove it?"))
     {
      var id = event.id;
      $.ajax({
       url:"delete.php",
       type:"POST",
       data:{id:id},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Event Removed");
       }
      })
     }
    },

   });
  });
   
  </script>
  <style>
@media screen and (max-width: 600px) {
  body{
    overflow-x: hidden;
  }
  .main-menu{
    display: none;
  }
  .hamburger {
    display: inline;
  }
  .main-header{
    
    top:0px;
  }
  .main-menu.responsive {
    display: block;
    position: absolute;
    background-color: rgb(141, 165, 186);
    width:100%;

    top:60px;
    left:0px;
    padding-top:20px;
    padding-bottom:20px;
  }
  .main-menu.responsive li{
    display: block;
    margin-left:0px;
  }
}
.img{
  width: 32%;
}
header{
  position: fixed;  
  top:0;
  left:0;
  right:0;
  width:inherit;
  height:60px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color:salmon;
  z-index: 1; 
}
header a:hover{
  background: rgb(243, 6, 6);
}
.container{
  padding-left:10%;
  padding-right:10%;
}
.main-menu li{
  display:inline;
  margin-left: 20px;
}
.main-menu li a{
  text-decoration: none;
  font-size: 20px;
  color: #f2f2f2;
  font-weight: bold;
  padding: 14px 16px;
    -webkit-transition: ease-in 0.3s;
    transition: ease-in 0.3s;
}
.hamburger {
    display: none;
}
.bg-red{
    background-color:red;
}
.font-white{
    color:white;
}
.o{
  border-radius: 8px;
  height: 250px;
}
ol, ul, dl {
    margin-top: 15px;
   

}
  </style>
 </head>
 <body>
 <?php
include_once "../parts/navk.php";
?>
  <br />
  <h2 style="margin-top: 50px;" align="center">Kalendar</h2>
  <br />
  <div class="container">
   <div id="calendar"></div>
  </div>
 </body>
</html>
