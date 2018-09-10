
$(document).ready(function(){
	
    loadGalleryImage(true, 'a.thumbnail');
    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#previous, #next').show();
        if(counter_max == counter_current){
            $('#next').hide();
        } else if (counter_current == 1){
            $('#previous').hide();
        }
    }
    
    function loadGalleryImage(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#next, #previous').click(function(){
            if($(this).attr('id') == 'previous'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateImage(selector);
        });
		//to update images in the modal
        function updateImage(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateImage($(this));
        });
    }
	
	//script to show modal on submitting form on Contact page
	$('#contactForm').on('submit', function (e) {
	if (!e.isDefaultPrevented()) {
    $("#sorry").modal('show');
	e.preventDefault();
	
		}
	});
	//script to show modal on submitting party form
		$('#myform').on('submit', function (e) {
		  if (!e.isDefaultPrevented()) {
			$("#sorry").modal('show');
			e.preventDefault();
			
		  }
		});
	});


