var $menu_open = false;
var winwidth = $(window).width();

(function($, viewport){

    // Execute on initial page load
    $(document).ready(function() {
         // Executes only in XS breakpoint (mobile/small tablet)
		if( viewport.is('xs') ) {
			$('#access').click(function(){
				if ($menu_open) {
					$('.menu-header').hide();
				}
				else {
					$('.menu-header').show();
				}
				$menu_open = !$menu_open;
			});
        }
		else {
			// Not mobile, so show menu items normally
			$('.menu-header').show();
		}
		
		// Executes only in SM breakpoint or greater
		if( viewport.is('>=sm') ) {
			
		}
    });

    
	// Execute code each time window size changes
    $(window).resize(
        viewport.changed(function() {
            if( viewport.is('xs') ) {
				
				//ignore vertical viewport changes (say, from scrolling on mobile)
				if ($(window).width() != winwidth) {
					
					//set new width size to mem
					winwidth = $(window).width();
					
					// Set menu to closed initially
					$('.menu-header').hide();
					
					$('#access').click(function(){
						if ($menu_open) {
							$('.menu-header').hide();
						}
						else {
							$('.menu-header').show();
						}
						$menu_open = !$menu_open;
					});
					
				}
            }
			else {
				// Not mobile, so show menu items normally
				$('.menu-header').show();
			}
        })
    );
	

})(jQuery, ResponsiveBootstrapToolkit);

