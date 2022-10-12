"use strict";

/**
 * Accordeon
 */
var c = document.querySelectorAll('.gdt-accordeon .collapse-bar');
var len = c.length;
for (var i = 0; i < len; i++) {
	c[i].onclick = function() {
		this.parentNode.classList.remove('closed');
		this.parentNode.classList.add('opened');
		GDO.triggerResize();
	};
}

var c = document.querySelectorAll('.gdt-accordeon .uncollapse-bar');
var len = c.length;
for (var i = 0; i < len; i++) {
	c[i].onclick = function() {
		this.parentNode.classList.remove('opened');
		this.parentNode.classList.add('closed');
		GDO.triggerResize();
	};
}

/**
 * Clicking on <span submit> triggers <input>
 */
//var c = document.querySelectorAll('div.gdt-submit');
//var len = c.length;
//for (var i = 0; i < len; i++) {
//	var btn = c[i];
//	btn.onclick = function() {
//		btn.querySelector('input[type=submit]').click();
//	};
//}

/**
 * Toggle the thumbs up/down icon for checkboxes on change.
 */
var c = document.querySelectorAll('.gdt-cbx select');
var len = c.length;
for (var i = 0; i < len; i++) {
	c[i].onselect = (event) => {
		debugger;
	};
}
//document.querySelector('[name='+location.hash+']');
