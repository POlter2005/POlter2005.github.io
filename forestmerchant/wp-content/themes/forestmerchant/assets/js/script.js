let header__burger = document.querySelector('.header__burger');
let header_menu = document.querySelector('.header__menu');
let back = document.querySelector('body');
let header__list = document.querySelector('.header__list');

header__burger.onclick = function () {
	header__burger.classList.toggle('active');
	header_menu.classList.toggle('active');
	back.classList.toggle('lock');
}

header__list.onclick = function () {
	header__menu.classList.remove('active');
	back.classList.toggle('lock');
}
ScrollReveal().reveal('.fullscreen', {
	delay: 450,
	duration: 1100,

	easing: 'ease'
});
$(document).ready(function () {
	// Add smooth scrolling to all links
	$("a").on('click', function (event) {

		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
			// Prevent default anchor click behavior
			event.preventDefault();

			// Store hash
			var hash = this.hash;

			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 1100, function () {

				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			});
		} // End if
	});
});
ScrollReveal().reveal('.fullscreen__title-1', {
	delay: 600,
	duration: 1100,

	distance: '30px',
	easing: 'ease'
});
ScrollReveal().reveal('.fullscreen__title-2', {
	delay: 750,
	duration: 1200,

	distance: '30px'
});
ScrollReveal().reveal('.img__container', {
	delay: 900,
	duration: 1300,
	distance: '30px',

});
ScrollReveal().reveal('.fullscreen__text', {
	delay: 1000,
	duration: 1200,

	distance: '30px'
});
ScrollReveal().reveal('.btn__link', {
	delay: 1150,
	duration: 1200,

	distance: '30px'
});
ScrollReveal().reveal('.scroll', {
	delay: 1300,
	duration: 1200,

});
//section1 animate
ScrollReveal().reveal('.hr_1', {
	delay: 300,
	duration: 900,

	distance: '-30px',
	easing: 'ease'
});
ScrollReveal().reveal('.hr_2', {
	delay: 300,
	duration: 900,

	distance: '30px',
	easing: 'ease'
});
ScrollReveal().reveal('.section__title', {
	delay: 500,
	duration: 1200,

	easing: 'ease'
});
ScrollReveal().reveal('.section__description', {
	delay: 800,
	duration: 1200,

	easing: 'ease'
});
ScrollReveal().reveal('.information__title', {
	delay: 950,
	duration: 1000,

	easing: 'ease'
});
ScrollReveal().reveal('.information__list_1', {
	delay: 1050,
	duration: 1000,

	easing: 'ease',
	distance: '30px'
});
ScrollReveal().reveal('.information__list_2', {
	delay: 1150,
	duration: 1000,

	easing: 'ease',
	distance: '30px'
});
ScrollReveal().reveal('.information__list_3', {
	delay: 1250,
	duration: 1000,

	easing: 'ease',
	distance: '30px'
});
ScrollReveal().reveal('.section__link', {
	delay: 1400,
	duration: 1000,

	easing: 'ease',
	distance: '30px'
});
ScrollReveal().reveal('.img_anim-1', {
	delay: 300,
	duration: 1000,

	easing: 'ease',
	distance: '-20px'
});
ScrollReveal().reveal('.img_anim-2', {
	delay: 400,
	duration: 1000,

	easing: 'ease',
	distance: '-20px'
});
ScrollReveal().reveal('.img_anim-3', {
	delay: 500,
	duration: 1000,

	easing: 'ease',
	distance: '-20px'
});
ScrollReveal().reveal('.img_anim-4', {
	delay: 600,
	duration: 1000,

	easing: 'ease',
	distance: '-20px'
});
ScrollReveal().reveal('.img_anim-5', {
	delay: 600,
	duration: 1000,

	easing: 'ease',
	distance: '-20px'
});
ScrollReveal().reveal('.text_anim-1', {
	delay: 350,
	duration: 1300,

	easing: 'ease',
	distance: '-20px'
});
ScrollReveal().reveal('.text_anim-2', {
	delay: 450,
	duration: 1300,

	easing: 'ease',
	distance: '-20px'
});
ScrollReveal().reveal('.text_anim-3', {
	delay: 550,
	duration: 1300,

	easing: 'ease',
	distance: '-20px'
});
ScrollReveal().reveal('.text_anim-4', {
	delay: 650,
	duration: 1300,

	easing: 'ease',
	distance: '-20px'
});
ScrollReveal().reveal('.text_anim-5', {
	delay: 750,
	duration: 1300,

	easing: 'ease',
	distance: '-20px'
});
ScrollReveal().reveal('.character__section-title', {
	delay: 700,
	duration: 1300,

	easing: 'ease',
	distance: '-20px'
});
ScrollReveal().reveal('.skills__img', {
	delay: 300,
	duration: 1300,

	easing: 'ease'

});
ScrollReveal().reveal('.skills__title', {
	delay: 400,
	duration: 1300,

	easing: 'ease'

});
ScrollReveal().reveal('.skills__list', {
	delay: 550,
	duration: 1300,

	easing: 'ease'

});
ScrollReveal().reveal('.skills__bonus', {
	delay: 700,
	duration: 1300,

	easing: 'ease'

});
ScrollReveal().reveal('.for__title', {
	delay: 350,
	duration: 1300,

	easing: 'ease'

});
ScrollReveal().reveal('.for__description', {
	delay: 450,
	duration: 1300,

	easing: 'ease'

});
ScrollReveal().reveal('.for__desc-img', {
	delay: 600,
	duration: 1300,

	easing: 'ease'

});
ScrollReveal().reveal('.game-do__description', {
	delay: 200,
	duration: 1300,

	easing: 'ease'

});
ScrollReveal().reveal('.game-do__desc-img', {
	delay: 400,
	duration: 1300,

	easing: 'ease'

});
ScrollReveal().reveal('.complect__section_img', {
	delay: 400,
	duration: 1300,

	easing: 'ease'

});
ScrollReveal().reveal('.complect__section_title', {
	delay: 600,
	duration: 1300,

	easing: 'ease'

});
ScrollReveal().reveal('.complect__section_list', {
	delay: 800,
	duration: 1300,

	easing: 'ease'

});
//анимация скрола при нажатии

//слайдер
function Sim(sldrId) {

	let id = document.getElementById(sldrId);
	if(id) {
		this.sldrRoot = id
	}
	else {
		this.sldrRoot = document.querySelector('.sim-slider')
	};

	// Carousel objects
	this.sldrList = this.sldrRoot.querySelector('.sim-slider-list');
	this.sldrElements = this.sldrList.querySelectorAll('.sim-slider-element');
	this.sldrElemFirst = this.sldrList.querySelector('.sim-slider-element');
	this.leftArrow = this.sldrRoot.querySelector('div.sim-slider-arrow-left');
	this.rightArrow = this.sldrRoot.querySelector('div.sim-slider-arrow-right');
	this.indicatorDots = this.sldrRoot.querySelector('div.sim-slider-dots');

	// Initialization
	this.options = Sim.defaults;
	Sim.initialize(this)
};

Sim.defaults = {

	// Default options for the carousel
	loop: true,     // Бесконечное зацикливание слайдера
	auto: true,     // Автоматическое пролистывание
	interval: 5000, // Интервал между пролистыванием элементов (мс)
	arrows: true,   // Пролистывание стрелками
	dots: true      // Индикаторные точки
};

Sim.prototype.elemPrev = function(num) {
	num = num || 1;

	let prevElement = this.currentElement;
	this.currentElement -= num;
	if(this.currentElement < 0) this.currentElement = this.elemCount-1;

	if(!this.options.loop) {
		if(this.currentElement == 0) {
			this.leftArrow.style.display = 'none'
		};
		this.rightArrow.style.display = 'block'
	};
	
	this.sldrElements[this.currentElement].style.opacity = '1';
	this.sldrElements[prevElement].style.opacity = '0';

	if(this.options.dots) {
		this.dotOn(prevElement); this.dotOff(this.currentElement)
	}
};

Sim.prototype.elemNext = function(num) {
	num = num || 1;
	
	let prevElement = this.currentElement;
	this.currentElement += num;
	if(this.currentElement >= this.elemCount) this.currentElement = 0;

	if(!this.options.loop) {
		if(this.currentElement == this.elemCount-1) {
			this.rightArrow.style.display = 'none'
		};
		this.leftArrow.style.display = 'block'
	};

	this.sldrElements[this.currentElement].style.opacity = '1';
	this.sldrElements[prevElement].style.opacity = '0';

	if(this.options.dots) {
		this.dotOn(prevElement); this.dotOff(this.currentElement)
	}
};

Sim.prototype.dotOn = function(num) {
	this.indicatorDotsAll[num].style.cssText = 'background-color:#BBB; cursor:pointer;'
};

Sim.prototype.dotOff = function(num) {
	this.indicatorDotsAll[num].style.cssText = 'background-color:#556; cursor:default;'
};

Sim.initialize = function(that) {

	// Constants
	that.elemCount = that.sldrElements.length; // Количество элементов

	// Variables
	that.currentElement = 0;
	let bgTime = getTime();

	// Functions
	function getTime() {
		return new Date().getTime();
	};
	function setAutoScroll() {
		that.autoScroll = setInterval(function() {
			let fnTime = getTime();
			if(fnTime - bgTime + 10 > that.options.interval) {
				bgTime = fnTime; that.elemNext()
			}
		}, that.options.interval)
	};

	// Start initialization
	if(that.elemCount <= 1) {   // Отключить навигацию
		that.options.auto = false; that.options.arrows = false; that.options.dots = false;
		that.leftArrow.style.display = 'none'; that.rightArrow.style.display = 'none'
	};
	if(that.elemCount >= 1) {   // показать первый элемент
		that.sldrElemFirst.style.opacity = '1';
	};

	if(!that.options.loop) {
		that.leftArrow.style.display = 'none';  // отключить левую стрелку
		that.options.auto = false; // отключить автопркрутку
	}
	else if(that.options.auto) {   // инициализация автопрокруки
		setAutoScroll();
		// Остановка прокрутки при наведении мыши на элемент
		that.sldrList.addEventListener('mouseenter', function() {clearInterval(that.autoScroll)}, false);
		that.sldrList.addEventListener('mouseleave', setAutoScroll, false)
	};

	if(that.options.arrows) {  // инициализация стрелок
		that.leftArrow.addEventListener('click', function() {
			let fnTime = getTime();
			if(fnTime - bgTime > 1000) {
				bgTime = fnTime; that.elemPrev()
			}
		}, false);
		that.rightArrow.addEventListener('click', function() {
			let fnTime = getTime();
			if(fnTime - bgTime > 1000) {
				bgTime = fnTime; that.elemNext()
			}
		}, false)
	}
	else {
		that.leftArrow.style.display = 'none'; that.rightArrow.style.display = 'none'
	};

	if(that.options.dots) {  // инициализация индикаторных точек
		let sum = '', diffNum;
		for(let i=0; i<that.elemCount; i++) {
			sum += '<span class="sim-dot"></span>'
		};
		that.indicatorDots.innerHTML = sum;
		that.indicatorDotsAll = that.sldrRoot.querySelectorAll('span.sim-dot');
		// Назначаем точкам обработчик события 'click'
		for(let n=0; n<that.elemCount; n++) {
			that.indicatorDotsAll[n].addEventListener('click', function() {
				diffNum = Math.abs(n - that.currentElement);
				if(n < that.currentElement) {
					bgTime = getTime(); that.elemPrev(diffNum)
				}
				else if(n > that.currentElement) {
					bgTime = getTime(); that.elemNext(diffNum)
				}
				// Если n == that.currentElement ничего не делаем
			}, false)
		};
		that.dotOff(0);  // точка[0] выключена, остальные включены
		for(let i=1; i<that.elemCount; i++) {
			that.dotOn(i)
		}
	}
};

new Sim();
