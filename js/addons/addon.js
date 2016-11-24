    

   	$(document).ready(function(){ //untuk tab
      $(".tab-content div").tab('show');
    });

    $(document).ready(function(){ // untuk popover
      $(".popover-examples a").popover({
        placement : 'bottom'
      });
    });

    $(document).ready(function(){ //untuk tooltips
      $(".tooltips a").tooltip({
      //  placement : 'top'
      });
      $(".tooltips input").tooltip();
      $(".tooltips div").tooltip();
      $(".tooltips span").tooltip();
      $(".tooltips td").tooltip({
        placement: 'top'
      });
    });

    

