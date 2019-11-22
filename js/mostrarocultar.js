function mostrar() {
  $show=document.getElementById("pass")
  $show.type="text";
  $b2=document.getElementById("b2")
  $b2.type="button";
  $b2=document.getElementById("b1")
  $b2.type="hidden";
}
function ocultar() {
  $show=document.getElementById("pass")
  $show.type="password";
  $b2=document.getElementById("b2")
  $b2.type="hidden";
  $b2=document.getElementById("b1")
  $b2.type="button";
}
