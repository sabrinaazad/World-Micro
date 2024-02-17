/*utility*/

var getClosest = function (elem, selector) {

	// Element.matches() polyfill
	if (!Element.prototype.matches) {
	    Element.prototype.matches =
	        Element.prototype.matchesSelector ||
	        Element.prototype.mozMatchesSelector ||
	        Element.prototype.msMatchesSelector ||
	        Element.prototype.oMatchesSelector ||
	        Element.prototype.webkitMatchesSelector ||
	        function(s) {
	            var matches = (this.document || this.ownerDocument).querySelectorAll(s),
	                i = matches.length;
	            while (--i >= 0 && matches.item(i) !== this) {}
	            return i > -1;
	        };
	}

	// Get the closest matching element
	for ( ; elem && elem !== document; elem = elem.parentNode ) {
		if ( elem.matches( selector ) ) return elem;
	}
	return null;

};

var simulateClick = function (elem) {
	// Create our event (with options)
	var evt = new MouseEvent('click', {
		bubbles: true,
		cancelable: true,
		view: window
	});
	// If cancelled, don't dispatch our event
	var canceled = !elem.dispatchEvent(evt);
};


document.addEventListener("DOMContentLoaded", function() {

/*main nav toggle*/
function initNav(){
    var hamburgerButton = document.getElementById('hamburgerButton')
    var mainNav = document.getElementById('mainNav')
    var navDrawers = document.querySelectorAll('.menu-item-has-children')
    
    function toggleMobileNav(){
        if (mainNav.classList.contains('is-open')){
            mainNav.classList.remove('is-open')
        } else{
            mainNav.classList.add('is-open')
        }   
    }

    hamburgerButton.addEventListener('click', toggleMobileNav)


    function toggleNavDrawers(navDrawer){
        if (navDrawer.classList.contains('is-open')){
            navDrawer.classList.remove('is-open')
        } else{
            navDrawer.classList.add('is-open')
        }   
    }
    for (var i = 0; i < navDrawers.length; i++) {
        navDrawers[i].addEventListener('click', function(e){
            toggleNavDrawers(e.target)
        })
    
        navDrawers[i].addEventListener( 'keydown', function (e) {
            var keyCode = e.keyCode;
            if(keyCode === 13){
                toggleNavDrawers(e.target)
            }
        })
    }
    
}

initNav()


});
