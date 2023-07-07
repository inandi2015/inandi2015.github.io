( function( api ) {

	// Extends our custom "upgrade-to-pro" section.
	api.sectionConstructor['upgrade-to-pro'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
