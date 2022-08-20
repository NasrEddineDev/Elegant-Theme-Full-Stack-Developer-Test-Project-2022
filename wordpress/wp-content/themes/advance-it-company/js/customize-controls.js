( function( api ) {

	// Extends our custom "advance-it-company" section.
	api.sectionConstructor['advance-it-company'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );