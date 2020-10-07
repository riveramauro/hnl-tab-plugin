(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
   * 
	 */
  $(function(){
    var contactTab = document.querySelector('#contactTab');
    var contactContainer = document.querySelector('#contactTabSlider');
    var closeTab = document.querySelector('#closeTab');
    var widthQuery =  window.matchMedia('(max-width: 500px)');

    function readCookie(name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return true;
      }
      return null;
    }
    var hsCookie = readCookie('hsf');

    contactTab.addEventListener('click' ,function (event) {
      contactContainer.classList.toggle('tabOpen');
    });

    closeTab.addEventListener('click', function(event){
      contactContainer.classList.toggle('tabOpen');
      openContactTab(40000);
    });

    var openContactTab = function (timeToOpen) {
      if(!hsCookie){
        setTimeout(function () {
          contactContainer.className = 'tabOpen';
          console.log('Contact Tab Open: ' + Date('MM YY DD HH:aa'));
        }, timeToOpen);
        window.onscroll = function(e) {
          if(!widthQuery.matches && contactContainer.className === 'tabOpen') {
            contactContainer.classList.toggle('tabOpen');
          }
        }
      }
      return
    }

    if (!contactContainer.classList.contains('tabOpen')) {
      openContactTab(1000);
    }
  });

})( jQuery );
