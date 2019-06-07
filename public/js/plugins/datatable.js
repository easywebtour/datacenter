// Utility
if ( typeof Object.create !== 'function' ) {
	Object.create = function( obj ) {
		function F() {};
		F.prototype = obj;
		return new F();
	};
}

(function( $, window, document, undefined ) {

    var DataTable = {
		init: function ( options, elem ) {
			var self = this;

            self.options = options;
			// set Elem
			self.$elem = $(elem);

            console.log( self.options );
        }
    }

    $.fn.datatable = function( options ) {
		return this.each(function() {
			var $this = Object.create( DataTable );
			$this.init( options, this );
			$.data( this, 'DataTable', $this );
		});
	};

	$.fn.datatable.options = {
		timeout: 3000
	};


})( jQuery, window, document );
