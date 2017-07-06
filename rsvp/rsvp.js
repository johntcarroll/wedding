$("#rsvp_form").submit(function($e) {
  if($(".guest-container").length == 0){
      if($("guests_attending").val() == 0){
          return;
      }else{
          $e.preventDefault();
          load_guest_lines();
      }
  }else{

      if(verify_rsvp_form()){
          return;
      }else{
          $e.preventDefault();
      }
  }
});

$(document).on('click', '#add_guest', function(){
    add_guest_line();
});

$(document).on('click', '#remove_guest', function(){
    $(".guest-container").last().remove();
});

function verify_rsvp_form(){

}

function load_guest_lines(){
    $fname = $("#start_fname").val();
    $lname = $("#start_lname").val();
    $guests = $("#guests_attending").val();
    $.ajax({
        url: "ajax/get_guests_table.php",
        data:{
            fname: $fname,
            lname: $lname,
            guests: $guests
        },
        method: 'post',
        dataType: 'text',
        success:function(text){
            $("#starting_line").after(text);
            $("#starting_line").addClass("hidden");
        },
        error: function(data){
            alert('AJAX SCRIPT ERROR. Check dev panel (F12) for details');
        }
    });
}

function add_guest_line(){
    $guests = $('.guest-container').length;
    $.ajax({
        url: "ajax/get_single_guest_row.php",
        data:{
            guests: $guests
        },
        method: 'post',
        dataType: 'text',
        success:function(text){
            $(".guest-container").last().after(text);
        },
        error: function(data){
            alert('AJAX SCRIPT ERROR. Check dev panel (F12) for details');
        }
    });
}
