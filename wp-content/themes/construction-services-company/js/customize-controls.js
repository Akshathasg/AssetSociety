( function( api ) {

	// Extends our custom "construction-services-company" section.
	api.sectionConstructor['construction-services-company'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );