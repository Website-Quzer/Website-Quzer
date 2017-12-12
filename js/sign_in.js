function check_submit_su() {

  var user_name = document.getElementById('user_id').value;
  var user_pass = document.getElementById('pass').value;
  var user_c_pass = document.getElementById('c_pass').value;

  window.console.log(''+username +' ' +user_pass+' '+user_c_pass);
}
function check_submit_si() {
  var user_name = document.getElementById('user_id_si').value;
  var user_pass = document.getElementById('pass_id_si').value;

  if(user_name==undefined || user_pass== undefined){
    alert('undef');
  }

}
function toggle_pass_si() {
  var class_name = document.getElementById('toggle_icon_si').className;


    if(class_name == "fa fa-eye") {var typ="password";
                                        var ad = "fa-eye-slash";
                      }
    else {                            var typ="text";
                                    var ad = "fa-eye";
                                               }
  document.getElementById('pass_id_si').type = typ;
  document.getElementById('toggle_icon_si').className = "fa " + ad;
}

function toggle_pass_su() {
  var class_name = document.getElementById('toggle_icon_su').className;


    if(class_name == "fa fa-eye") {var typ="password";
                                        var ad = "fa-eye-slash";
                      }
    else {                            var typ="text";
                                    var ad = "fa-eye";
                                               }
  document.getElementById('pass_id_su').type = typ;
  document.getElementById('pass_id_c_su').type = typ;
  document.getElementById('toggle_icon_su').className = "fa " + ad;
}
