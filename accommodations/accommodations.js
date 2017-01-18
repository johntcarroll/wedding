$(document).ready(function(){
    $("#show-hotel1").click(function(){
        $("#hotel1").modal('show');
    });
    $('#hotel1').on('shown.bs.modal', (function() {
        var mapIsAdded = false;

        return function() {
          if (!mapIsAdded) {
            $('.modal-body').html('<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d12244.315433204492!2d-75.56055080814133!3d39.89486668372968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x89c6faa42c7468ab%3A0x48a51ceaa82b2fd3!2sWyndham+Garden+Glen+Mills+Wilmington%2C+Baltimore+Pike%2C+Glen+Mills%2C+PA!3m2!1d39.8806042!2d-75.5446458!4m5!1s0x89c6f042a851e795%3A0xb6ef7943b091e2ab!2sPenn+Oaks+Country+Club%2C+Penn+Oaks+Drive%2C+West+Chester%2C+PA!3m2!1d39.908664099999996!2d-75.5606897!5e0!3m2!1sen!2sus!4v1484767793360" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>');

            mapIsAdded = true;
          }    
        };
      })());
});
