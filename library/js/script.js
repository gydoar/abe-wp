
    $(document).ready(function() {
 
      $("#owl-demo").owlCarousel({
     
          navigation : false, // Show next and prev buttons
          pagination:false,
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true,
          autoPlay:3000
     
          // "singleItem:true" is a shortcut for:
          // items : 1, 
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false
     
      });
     
    });
