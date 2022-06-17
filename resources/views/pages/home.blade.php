@extends('layouts.default')

@section('content')

<head>
  <title>I am Lester Salvoza</title>
  <style>
  body{
      background-color:#F5E4E0;
	   }
     .head
       {
         background-color: #EF7A0C;
         width: 100%;
         height: 22vh;
         border-bottom: 6px solid rgb(27, 27, 27);
         padding: 10px;
         text-align: center;
       }

       .container
       {
           background-color: rgba(248, 248, 248, 0.63);
           box-shadow: 5px 5px 10px rgb(170, 170, 170);
           width: 85%;
           margin: auto;
           border-radius: 50px;

       }

       .text {
         color: #522c48;
         font-size: 15px;
         width: 100%;
         height:50%;
         text-align: center;
         padding: 8px 12px;
         bottom: 8px;
         position: relative;
         margin-bottom: 20px;
       }

  .header {
  padding: 50px;
  text-align: center;
  background: #f1ad5e;
  color: black;
  font-size: 30px;
  height: 600px;
   background-size:cover;
    }


    .divText{
      padding: 10px;
      height: auto;
  text-align: center;
   background-size:cover;
  color: black;
  font-size: 32px;
      border-bottom: solid 2px #8A8583;
	 border: double;
	  font-style: italic;
    background-color: #f5bf82;



    }

	 .divText2{
      padding: 10px;
      height: 700px;
  text-align: center;
   background-size:cover;
  color: black;
  font-size: 30px;
      border-bottom: solid 2px #8A8583;
	 border: double;
	  font-style:italic;
    background-color: #f8d4ab;



    }

	}

  </style>

</head>
<body>

  <div class="head">
    <h1> Hello! My Name is </h1>
    <h3 style="color:#ed430e;"> LESTER JOHN C. SALVOZA </h3>
    <p> BSCS - 3A </p>
      </div>
<!-- Write your comments here -->

<div class="header">
  <h1>Git and GitHub</h1>
  <p>Git and GitHub is one of my favorite topic in CS 202. I have learned that the major difference between Git and GitHub is their functionality. Git is designed to manage all source code history while GitHub includes collaboration functionality like project management, and more.</p>
</div>

<div class="divText">

    <h1>Controllers and routing</h1>
    <p>The topic I chose from our Laravel lectures is controllers and routing. In this topic, it allows the person  to create the controller classes with methods used to handle the requests.


</div>

<div class="divText2">
  <h1>About Me</h1>
   <p>I am Lester John Salvoza, you can call me"Les" for short. My friends and family in our place calls me "dodoy". I am 21 years old and my birthday is November 20, 2000. I am kind, and hard-working person. I am also a Jolly and talkative person and only my close friend knows that I have this kind of characteristic because sometimes, I am shy to show off some of my characteristic especially when its my first time to meet the person. My hobbies are drawing, painting, playing badminton, and cycling.
    <h1>Me 6Years from now</h1>
	<p>6 years from now, I am a degree holder, I can see myself having a stable job and can provide my personal need as well as my parent needs. 6 years from now, I see myself as a famous artist,  a responsible, and kind person in the eyes of everyone. Most of all, 6 years from now, I see myself teaching someone about this Laravel topics.
</div>

</body>
</html>

@stop
