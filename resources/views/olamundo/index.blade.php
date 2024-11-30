<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:100');
 html, body, h1 {
	 padding: 0;
	 margin: 0;
	 font-family: 'Montserrat', sans-serif;
}
 #app {
	 background: #0a0a0a;
	 height: 100vh;
	 width: 100%;
	 margin: 0;
	 padding: 0;
	 display: flex;
	 flex-direction: column;
	 justify-content: center;
	 align-items: center;
	 background: linear-gradient(rgba(10, 10, 10, .6), rgba(0, 0, 0, .9)), repeating-linear-gradient(0, transparent, transparent 2px, black 3px, black 3px), url('./imghello.jpg');
	 background-size: cover;
	 background-position: center;
	 z-index: 1;
}
 #wrapper {
	 text-align: center;
}
 .sub {
	 color: #64dcdc;
	 letter-spacing: 1em;
}
/* Our mixin positions a copy of our text directly on our existing text, while also setting content to the appropriate text set in the data-text attribute. */
 .glitch {
	 position: relative;
	 color: white;
	 font-size: 4em;
	 letter-spacing: 0.5em;
	/* Animation provies a slight random skew. Check bottom of doc for more information on how to random skew. */
	 animation: glitch-skew 1s infinite linear alternate-reverse;
}
 .glitch::before {
	 content: attr(data-text);
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 left: 2px;
	 text-shadow: -2px 0 #ff00c1;
	/* Creates an initial clip for our glitch. This works in a typical top,right,bottom,left fashion and creates a mask to only show a certain part of the glitch at a time. */
	 clip: rect(44px, 450px, 56px, 0);
	/* Runs our glitch-anim defined below to run in a 5s loop, infinitely, with an alternating animation to keep things fresh. */
	 animation: glitch-anim 5s infinite linear alternate-reverse;
}
 .glitch::after {
	 content: attr(data-text);
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 left: -2px;
	 text-shadow: -2px 0 #00fff9, 2px 2px #ff00c1;
	 animation: glitch-anim2 1s infinite linear alternate-reverse;
}
/* Creates an animation with 20 steaps. For each step, it calculates a percentage for the specific step. It then generates a random clip box to be used for the random glitch effect. Also adds a very subtle skew to change the 'thickness' of the glitch.*/
 @keyframes glitch-anim {
	 0% {
		 clip: rect(95px, 9999px, 44px, 0);
		 transform: skew(0.03deg);
	}
	 5% {
		 clip: rect(17px, 9999px, 92px, 0);
		 transform: skew(0.92deg);
	}
	 10% {
		 clip: rect(41px, 9999px, 38px, 0);
		 transform: skew(0.79deg);
	}
	 15% {
		 clip: rect(92px, 9999px, 4px, 0);
		 transform: skew(0.35deg);
	}
	 20% {
		 clip: rect(25px, 9999px, 88px, 0);
		 transform: skew(0.24deg);
	}
	 25% {
		 clip: rect(96px, 9999px, 93px, 0);
		 transform: skew(0.05deg);
	}
	 30% {
		 clip: rect(69px, 9999px, 81px, 0);
		 transform: skew(0.49deg);
	}
	 35% {
		 clip: rect(34px, 9999px, 81px, 0);
		 transform: skew(0.78deg);
	}
	 40% {
		 clip: rect(55px, 9999px, 86px, 0);
		 transform: skew(0.34deg);
	}
	 45% {
		 clip: rect(20px, 9999px, 33px, 0);
		 transform: skew(0.48deg);
	}
	 50% {
		 clip: rect(79px, 9999px, 39px, 0);
		 transform: skew(0.92deg);
	}
	 55% {
		 clip: rect(69px, 9999px, 69px, 0);
		 transform: skew(0.44deg);
	}
	 60% {
		 clip: rect(75px, 9999px, 53px, 0);
		 transform: skew(0.9deg);
	}
	 65% {
		 clip: rect(1px, 9999px, 93px, 0);
		 transform: skew(0.51deg);
	}
	 70% {
		 clip: rect(6px, 9999px, 45px, 0);
		 transform: skew(0.65deg);
	}
	 75% {
		 clip: rect(1px, 9999px, 66px, 0);
		 transform: skew(0.05deg);
	}
	 80% {
		 clip: rect(39px, 9999px, 88px, 0);
		 transform: skew(0.92deg);
	}
	 85% {
		 clip: rect(26px, 9999px, 91px, 0);
		 transform: skew(0.98deg);
	}
	 90% {
		 clip: rect(35px, 9999px, 92px, 0);
		 transform: skew(0.86deg);
	}
	 95% {
		 clip: rect(52px, 9999px, 71px, 0);
		 transform: skew(0.61deg);
	}
	 100% {
		 clip: rect(32px, 9999px, 86px, 0);
		 transform: skew(0.16deg);
	}
}
 @keyframes glitch-anim2 {
	 0% {
		 clip: rect(88px, 9999px, 1px, 0);
		 transform: skew(0.67deg);
	}
	 5% {
		 clip: rect(93px, 9999px, 19px, 0);
		 transform: skew(0.57deg);
	}
	 10% {
		 clip: rect(10px, 9999px, 1px, 0);
		 transform: skew(0.95deg);
	}
	 15% {
		 clip: rect(20px, 9999px, 90px, 0);
		 transform: skew(0.47deg);
	}
	 20% {
		 clip: rect(85px, 9999px, 85px, 0);
		 transform: skew(0.93deg);
	}
	 25% {
		 clip: rect(64px, 9999px, 18px, 0);
		 transform: skew(0.14deg);
	}
	 30% {
		 clip: rect(14px, 9999px, 38px, 0);
		 transform: skew(0.07deg);
	}
	 35% {
		 clip: rect(89px, 9999px, 48px, 0);
		 transform: skew(0.62deg);
	}
	 40% {
		 clip: rect(66px, 9999px, 33px, 0);
		 transform: skew(0.59deg);
	}
	 45% {
		 clip: rect(43px, 9999px, 14px, 0);
		 transform: skew(0.85deg);
	}
	 50% {
		 clip: rect(82px, 9999px, 48px, 0);
		 transform: skew(0.83deg);
	}
	 55% {
		 clip: rect(9px, 9999px, 27px, 0);
		 transform: skew(0.74deg);
	}
	 60% {
		 clip: rect(31px, 9999px, 40px, 0);
		 transform: skew(0.96deg);
	}
	 65% {
		 clip: rect(28px, 9999px, 96px, 0);
		 transform: skew(0.25deg);
	}
	 70% {
		 clip: rect(13px, 9999px, 1px, 0);
		 transform: skew(0.7deg);
	}
	 75% {
		 clip: rect(19px, 9999px, 99px, 0);
		 transform: skew(0.62deg);
	}
	 80% {
		 clip: rect(74px, 9999px, 75px, 0);
		 transform: skew(0.51deg);
	}
	 85% {
		 clip: rect(58px, 9999px, 75px, 0);
		 transform: skew(0.41deg);
	}
	 90% {
		 clip: rect(46px, 9999px, 70px, 0);
		 transform: skew(0.04deg);
	}
	 95% {
		 clip: rect(48px, 9999px, 9px, 0);
		 transform: skew(0.06deg);
	}
	 100% {
		 clip: rect(66px, 9999px, 11px, 0);
		 transform: skew(0.36deg);
	}
}
 @keyframes glitch-skew {
	 0% {
		 transform: skew(-2deg);
	}
	 10% {
		 transform: skew(5deg);
	}
	 20% {
		 transform: skew(2deg);
	}
	 30% {
		 transform: skew(4deg);
	}
	 40% {
		 transform: skew(-1deg);
	}
	 50% {
		 transform: skew(5deg);
	}
	 60% {
		 transform: skew(2deg);
	}
	 70% {
		 transform: skew(3deg);
	}
	 80% {
		 transform: skew(-3deg);
	}
	 90% {
		 transform: skew(-4deg);
	}
	 100% {
		 transform: skew(0deg);
	}
}
</style>
<title>_j ;D</title>
<div id="app">
	<div id="wrapper">
		<h1 class="glitch" data-text="_j ;D">_j ;D</h1>
		<span class="sub"></span>
	</div>
</div>