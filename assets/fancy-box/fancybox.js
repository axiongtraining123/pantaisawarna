
jQuery(document).ready(function($) {
    $(".data-fancybox").fancybox({
      toolbar: true,
      smallBtn: false,
      iframe: {
        css: {
          width: '100%',
          height: '100%',
        },
        attr: {
          allow: "fullscreen"
        }
      },
      buttons: [
        "fullScreen",
        "close"
      ],
      idleTime: false,
      afterLoad: function(instance, current) {
        var $button = instance.$refs.toolbar.find('.fancybox-button--fullscreenToggle');

        $button.on('click', function() {
            var iframe = current.$content.find('iframe')[0];

            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.mozRequestFullScreen) { // Firefox
                iframe.mozRequestFullScreen();
            } else if (iframe.webkitRequestFullscreen) { // Chrome, Safari, and Opera
                iframe.webkitRequestFullscreen();
            } else if (iframe.msRequestFullscreen) { // IE/Edge
                iframe.msRequestFullscreen();
            }
        });
      }
    });
});