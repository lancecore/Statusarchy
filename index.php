<html>
<head>
	<title>Statusarchy</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<style type="text/css">
@font-face {
	font-family: "Roadgeek";
	src: url(fonts/Roadgeek/Roadgeek.ttf) format("truetype");
}

body {
	background: #000000;
	margin: 0 auto;
	font-family: Roadgeek, sans-serif;
	font-size: 1em;
	color: #ffffff;
	text-align: center;
	text-transform: uppercase;
}

div#wrap {
	margin: 0 auto;
	width: 1000px;
}

/* Graph Area */

div#graphs {
	width: auto;
	height: auto;
	position: relative;
	padding: 0 12px 0 12px;
	margin: 16px 0 0 0;
}

div#graphwrap {
	height: 300px;
}

span.graphnums {
	font-size: 1.2em;
}

span.graphnums span.slash {
	font-face: Helvetica, sans-serif;
	font-size: .65em;
	color: #cccccc;
}

span.graphnums em {
	color: #5AB9FB;
	font-style: none;
}

span.graphtitle {

}

div#graphbox1 {
	position: relative;
	height: auto;
	width: 170px;
	float: left;
	padding: 0 12px 0 12px;
}

div#graph1 {
	background: #FABD15;
	height: 28%;
	bottom: 0;
}

div#graphbox2 {
	position: relative;
	height: auto;
	width: 170px;
	float: left;
	padding: 0 12px 0 12px;
}

div#graph2 {
	background: #49C817;
	height: 39%;
	bottom: 0;
}

div#graphbox3 {
	position: relative;
	height: auto;
	width: 170px;
	float: left;
	padding: 0 12px 0 12px;
}

div#graph3 {
	background: #FD3B15;
	height: 58%;
	bottom: 0;
}

div#graphbox4 {
	position: relative;
	height: 270px;
	width: 170px;
	float: left;
	padding: 0 12px 0 12px;
}

div#graph4 {
	background: #7554BF;
	height: 18%;
	bottom: 0;
}

div#graphbox5 {
	position: relative;
	height: auto;
	width: 170px;
	float: left;
	padding: 0 12px 0 12px;
}

div#graph5 {
	background: #107CF8;
	height: 13%;
	bottom: 0;
}

/* Project Area */

div#projects {
	height: 300px;
}

div.projrow {
	width: 1000px;
	text-align: left;
}

span.icon, span.title, span.info, span.members {
	font-size: 1.45em;
	height: auto;
	background: #1A1A1A;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	padding: 6px;
	margin: 3px;
	display: block;
	float: left;
}

span.icon {
	width: 30px;
	clear: both;
}

span.title {
	width: 270px;
}

span.info {
	width: 135px;
}

span.members {
	width: 300px;
}

/* Countdown Area */

div#countdowns {
	clear: both;
	position: relative;
	width: auto;
	height: auto;
	top: 60px;
	font-size: 2em;
}

span.count {

}

span.event {
	color: #9C9B97;
}

/* Info Box Area */

div#infoboxes {
	position: relative;
	top: 120px;
	height: 410px;
	text-align: center;
}

div#profit, div#bus, div#calendar {
	height: 400px;
	width: 300px;
	-moz-border-radius: 15px;
	-webkit-border-radius: 15px;
}

/* Not sure if this is supposed to have a gradient or if it just looks that way in the photo. */
div#profit {
	float: left;
	margin: 0 5% 0 0;
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#1A1A1A), to(#0D0D0D));
	background-color: #1A1A1A;
}

div#profit em {
	font-family: Helvetica, sans-serif;
	font-style: none;
	font-weight: 800;
}

div#profit p {
	font-size: 4em;
}

p.triangle {
	border-color: transparent transparent #2BB925 transparent ;
	border-style: solid;
	border-width: 0 30px 50px 30px;
	height: 0;
	width: 0;
	position: relative;
	margin: 100px 0 0 120px;
}

div#bus {
	float: left;
	background: #203246;
}

div.buswrap {
	margin: 50px;
}

div.circle1 {
	clear: both;
	height: 40px;
	width: 40px;
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	background: #F26225;
	font-size: 1.55em;
	float: left;
}

div.circle2 {
	clear: both;
	height: 40px;
	width: 40px;
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	background: #B61600;
	font-size: 1.55em;
	float: left;
}

div.time {
	float: left;
	font-size: 2em;
	margin: -4px 0 0 16px;
	text-transform: none;
}


div#calendar {
	float: right;
	background: #2C2A2B;
}

div#calhead {
	background: #A7312F;
	-webkit-border-top-left-radius: 15px;
	-webkit-border-top-right-radius: 15px;
	-moz-border-radius-topleft: 15px;
	-moz-border-radius-topright: 15px;
	font-size: 1.8em;
	text-transform: none;
	padding: 6px;
}

div#calendar span.slash {
	font-face: Helvetica, sans-serif;
	font-size: .65em;
}

div#calendar ul {
	list-style-type: none;
	font-size: 1.5em;
	text-align: left;
	padding: 0;
	margin-top: 0;
}

#calendar li {
	border: solid #000000;
	border-width: 0 0 4px 0;
}


div#calendar span.date {
	color: #A5A7A6;
}

/* Tweets */

div#twitbar {
	clear: both;
	position: relative;
	top: 175px;
}

div#twitbar ul {
	list-style-type: none;
}

div#twitbar ul li {
	float: left;
	margin: 0 20px 0 0;
}

div#othertweets {
	padding: 15px 0 0 0;
}
</style>
</head>

<body>
<div id="wrap">
	
<div id="graphs">
	<div id="graphwrap">
	<div id="graphbox1">
		<span class="graphnums">18<span class="slash">/</span><em>1</em></span>
		<div id="graph1"></div>
		<span class="graphtitle">TRANSMIT</span>
	</div>

	<div id="graphbox2">
		<span class="graphnums">29<span class="slash">/</span><em>3</em></span>
		<div id="graph2"></div>
		<span class="graphtitle">CODA</span>
	</div>

	<div id="graphbox3">
		<span class="graphnums">48<span class="slash">/</span><em>3</em></span>
		<div id="graph3"></div>
		<span class="graphtitle">UNISON</span>
	</div>

	<div id="graphbox4">
		<span class="graphnums">8<span class="slash">/</span><em>2</em></span>
		<div id="graph4"></div>
		<span class="graphtitle">CANDYBAR</span>
	</div>
	
	<div id="graphbox5">
		<span class="graphnums">3<span class="slash">/</span><em>0</em></span>
		<div id="graph5"></div>
		<span class="graphtitle">GENERAL</span>
	</div>
	</div>
</div>

<div id="projects">
	<div class="projrow">
		<span class="icon">*</span>
		<span class="title">Transmit</span>
		<span class="info">Info1</span>
		<span class="info">Info2</span>
		<span class="members">1 2 3 4</span>
	</div>
	
	<div class="projrow">
		<span class="icon">*</span>
		<span class="title">Unison</span>
		<span class="info">Info1</span>
		<span class="info">Info2</span>
		<span class="members">1 2 3 4</span>
	</div>
	
	<div class="projrow">
		<span class="icon">*</span>
		<span class="title">Coda</span>
		<span class="info">Info1</span>
		<span class="info">Info2</span>
		<span class="members">1 2 3 4</span>
	</div>
	
	<div class="projrow">
		<span class="icon">*</span>
		<span class="title">Project4</span>
		<span class="info">Info1</span>
		<span class="info">Info2</span>
		<span class="members">1 2 3 4</span>
	</div>
	
	<div class="projrow">
		<span class="icon">*</span>
		<span class="title">Project5</span>
		<span class="info">Info1</span>
		<span class="info">Info2</span>
		<span class="members">1 2 3 4</span>
	</div>
	
	<div class="projrow">
		<span class="icon">*</span>
		<span class="title">Project6</span>
		<span class="info">Info1</span>
		<span class="info">Info2</span>
		<span class="members">1 2 3 4</span>
	</div>
	
	<div class="projrow">
		<span class="icon">*</span>
		<span class="title">Project7</span>
		<span class="info">Info1</span>
		<span class="info">Info2</span>
		<span class="members">1 2 3 4</span>
	</div>
	
	<div class="projrow">
		<span class="icon">*</span>
		<span class="title">Project8</span>
		<span class="info">Info1</span>
		<span class="info">Info2</span>
		<span class="members">1 2 3 4</span>
	</div>
	
	<div class="projrow">
		<span class="icon">*</span>
		<span class="title">Project9</span>
		<span class="info">Info1</span>
		<span class="info">Info2</span>
		<span class="members">1 2 3 4</span>
	</div>
	
	<div class="projrow">
		<span class="icon">*</span>
		<span class="title">Project10</span>
		<span class="info">Info1</span>
		<span class="info">Info2</span>
		<span class="members">1 2 3 4</span>
	</div>
</div>

<div id="countdowns">
	<span class="count">* 25 Days</span> <span class="event">until iPad Launch</span>
</div>

<div id="infoboxes">
	<div id="profit">
		<p class="triangle"></p>
		<p>0.95<em>%</em></p>
	</div>
	
	<div id="bus">
		<div class="buswrap">
			<div class="circle1">4</div><div class="time">1:02</div>
		</div>
		<div class="buswrap">
			<div class="circle2">9</div><div class="time">9 Min</div>
		</div>
	</div>
	
	<div id="calendar">
		<div id="calhead">Monday, 3<span class="slash">/</span>8</div>
		<ul>
			<li><span class="date">3<span class="slash">/</span>11</span> Ned Out (Vacati...</li>
			<li><span class="date">3<span class="slash">/</span>12</span> Ned Out (Vacati...</li>
			<li><span class="date">3<span class="slash">/</span>15</span> Ned Out (Vacati...</li>
		</ul>
	</div>
</div>

<div id="twitbar">

	<div id="mytweets">
		<ul>
			<li>tv whatsoever - does that count?</li>
			<li>* I confess: I didnt think much of hu</li>
		</ul>
	</div>
	
	<div id="othertweets">
		<ul>
			<li>the last 14+ years. I cant begin to say how much I love Coda.</li>
			<li>* Healthy</li>
		</ul>
	</div>

</div>

</div>
</body>
</html>