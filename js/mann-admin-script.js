jQuery(document).ready(function($) {
    $(document).on('click', '#footer-logo', function(event) {
        event.preventDefault();

        if (typeof wp.media.editor === 'undefined') {
            console.error('wp.media.editor is not available.');
            return;
        }
        
        var send_attachment_bkp = wp.media.editor.send.attachment;
        var button = $(this);
        wp.media.editor.send.attachment = function(props, attachment) {
            console.log(attachment.url);
            $('.logo-upload').val(attachment.url); // Set the value of the input field
            wp.media.editor.send.attachment = send_attachment_bkp;
        }
        wp.media.editor.open(button);
        return false;
    });
});