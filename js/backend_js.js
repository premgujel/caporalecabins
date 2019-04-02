function profilepic(id) {
		// Uploading files
		var file_frame;
		var randnumber = Math.floor(Math.random() * 100 + 1);
		// event.preventDefault();

		// If the media frame already exists, reopen it.
		if ( file_frame ) {
		 file_frame.open();
		  return;
		}

		// Create the media frame.
		file_frame = wp.media.frames.file_frame = wp.media({
		  title: "SMS Uploader",
		  button: {
			text: jQuery( this ).data( 'upload' ),
		  },
		  multiple: false  // Set to true to allow multiple files to be selected
		});

		// When an image is selected, run a callback.
		 file_frame.on( 'select', function() {
		 
		var selection = file_frame.state().get('selection');
		 
		selection.map( function( attachment ) {
		 
		attachment = attachment.toJSON();
		jQuery('.myprofile_pic'+id).append('<div id="slide-'+randnumber+'" class="all-img"><img onclick="removeimg('+randnumber+');" class="close-img" src="/wp-content/themes/caporalecabins/images/close-icon.png" /><img class="attachment-profile" src="' + attachment.url + '" alt="Profile Picture" title="Change Your Profile Picture"></div>')
		jQuery('#profile_pic'+id).append('<input id="images-'+randnumber+'" type="hidden" name="profile_pic[]" value="' + attachment.url+ '">');
		//jQuery('#profile_pic'+id).val(attachment.url);
		jQuery('.old_pic').hide();
		// Do something with attachment.id and/or attachment.url here

		});
		});
		// Finally, open the modal
		file_frame.open();     
}

function removeimg(urlID){
	if (confirm("Press a button!")) {
		jQuery("#slide-"+urlID).remove();
		jQuery("#images-"+urlID).remove();
	}
}
