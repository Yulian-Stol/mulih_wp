'use strict';

document.addEventListener("DOMContentLoaded", function() {

	//----------------------FIXED-HEADER-----------------------
	const headerFixed = (headerFixed, headerActive) => {
		const header =  document.querySelector(headerFixed),
					active = headerActive.replace(/\./, '');

		window.addEventListener('scroll', function() {
			const top = pageYOffset;
			
			if (top >= 90) {
				header.classList.add(active);
			} else {
				header.classList.remove(active);
			}

		});

	};
	headerFixed('.header', '.header--active');

	//----------------SWIPER---------------
	let swiper = new Swiper(".mySwiper", {
		slidesPerView: 1,
		spaceBetween: 15,
		breakpoints: {
			992: {
				slidesPerView: 3,
				spaceBetween: 34,
			},
			576: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
		}
	});

	//----------------------TABS-JS----------------------
	const tabs = (headerSelector, tabSelector, contentSelector, activeClass) => {
		const header = document.querySelector(headerSelector),
					tab = document.querySelectorAll(tabSelector),
					content = document.querySelectorAll(contentSelector);

		function hideTabContent() {
			content.forEach(item => {
				item.style.display = "none";
			});

			tab.forEach(item => {
				item.classList.remove(activeClass);
			});
		}

		function showTabContent(i = 0) {
			content[i].style.display = "flex";
			tab[i].classList.add(activeClass);
		}

		hideTabContent();
		showTabContent();

		header.addEventListener('click', (e) => {
			const target = e.target;
			if (target && 
				(target.classList.contains(tabSelector.replace(/\./, '')) || 
				target.parentNode.classList.contains(tabSelector.replace(/\./, '')))) {
				tab.forEach((item, i) => {
					if (target == item || target.parentNode == item) {
						hideTabContent();
						showTabContent(i);
					}
				});
			}
		});
	};
	tabs('.tabs', '.tabs__item', '.tabs__wrap', 'active');

	//------------------------------ACCORDIONS---------------------------
	const accordions = (accordionSelector) => {
		const	accordion = document.querySelectorAll(accordionSelector);

		accordion.forEach(item => {
			const accordionClick = item.querySelector('.accordion__header'),
						accordionContent = item.querySelector('.accordion__content');

			accordionClick.addEventListener('click', (e) => {
				if(!item.classList.contains('accordion--active')) {

					accordion.forEach((otherItem) => {
						const otherContent = otherItem.querySelector('.accordion__content');
						if (otherItem.classList.contains('accordion--active')) {
							otherItem.classList.remove('accordion--active');
							otherContent.style.height = '0px';
						}
					});

					item.classList.add('accordion--active')
					accordionContent.style.height = "auto"
					let height = accordionContent.clientHeight + "px"
					accordionContent.style.height = "0px"

					setTimeout(() => {
						accordionContent.style.height = height
					}, 0)

					} else {
						accordionContent.style.height = "0px"
							item.classList.remove('accordion--active')
				}

			});
		});

	};
	accordions('.accordion');

	//---------------input-range--------------------
	let slider = document.getElementById("myRange");
	let output = document.getElementById("sliderValue");
	output.innerHTML = slider.value;

	slider.oninput = function() {
			output.innerHTML = this.value;
	}

	//----------------------HAMBURGER-----------------------
	const hamburger = (hamburgerButton, hamburgerNav, hamburgerHeader) => {
		const button = document.querySelector(hamburgerButton),
			nav = document.querySelector(hamburgerNav),
			header = document.querySelector(hamburgerHeader);

		button.addEventListener("click", (e) => {
			button.classList.toggle("hamburger--active");
			nav.classList.toggle("header__nav--active");
			header.classList.toggle("header--menu");
		});
	};
	hamburger(".hamburger", ".header__nav", ".header");


});
