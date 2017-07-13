$("#rsvp_form").submit(function($e) {
  if($(".guest-container").length == 0){
      if($("#guests_attending").val() == "0"){
          if(verify_rsvp_form()){
              return;
          }else{
              $e.preventDefault();
          }
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
    if($(".guest-container").length < 9){
        add_guest_line();
    }
});

$(document).on('click', '#remove_guest', function(){
    if($(".guest-container").length != 1){
        $(".guest-container").last().remove();
        $("#guests_attending").val(+$("#guests_attending").val() - 1);
    }
});

function verify_rsvp_form(){
    $verified = true;
    $(".required").each(function(){
        if($(this).val() == ''){
            $verified = false;
        }
    });
    if(!$verified){
        alert("Please complete all required fields marked with a *");
    }
    return $verified;
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
            if($guests > 1){
                $(".guest-container").last().append("<hr/>");
            }
            $(".guest-container").last().after(text);
            $("#guests_attending").val(+$("#guests_attending").val() + 1);
        },
        error: function(data){
            alert('AJAX SCRIPT ERROR. Check dev panel (F12) for details');
        }
    });
}
