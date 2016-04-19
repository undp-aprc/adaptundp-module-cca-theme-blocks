(function ($) {
	Drupal.behaviors.cca_theme_blocks_map_layers = {
		attach: function (context, settings) {
            $('.impact-story-select-icon', context).bind('click', function() {
                $(this).toggleClass('inactive');
                $('select#edit-field-impact-theme-target-id').val($(this).attr('data-id'));
                $('div.view-filters form').submit();
            })

        }
	}
})(jQuery);