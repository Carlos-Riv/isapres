// countup
import { CountUp } from 'countup.js';

// count options
const options = {
    duration: 8,
};

// instanciamos countup /setup
const countUp = new CountUp('countup', 1240, options);

// elemento to check
const findMe = document.getElementById('countup');

// function check element on viewport
var isInViewport = function (elem) {
	var distance = elem.getBoundingClientRect();
	return (
		distance.top >= 0 &&
		distance.left >= 0 &&
		distance.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
		distance.right <= (window.innerWidth || document.documentElement.clientWidth)
	);
};

// listener element
window.addEventListener('scroll', function (event) {
	if (isInViewport(findMe)) {
        // metho start countup
        countUp.start();
	} else {
        // method reset count up
        countUp.reset();

  }
}, false);
