import './bootstrap';
var visible= false;


function show(){
 
    Swal.fire({
        title: "Click able links!",
        text: "Clickable links are Contact and about us!",
        icon: "success"
      });
}
window.onload=show;