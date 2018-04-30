function mueveReloj(){ 
var LaFecha=new Date();
var Mes=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasem=new Array('domingo','lunes','martes','mi&eacute;rcoles','jueves','viernes','s&aacute;bado');
var diasemana=LaFecha.getDay();
var FechaCompleta="";
var NumeroDeMes="";
var hora = LaFecha.getHours();
var minuto = LaFecha.getMinutes(); 
var segundo = LaFecha.getSeconds();
NumeroDeMes=LaFecha.getMonth();
var ciudad = "Guayaquil,";
FechaCompleta=ciudad+" "+diasem[diasemana]+" "+LaFecha.getDate()+" de "+Mes[NumeroDeMes]+" del "+LaFecha.getFullYear()+"<-Hora->"+hora+":"+minuto+":"+segundo;
document.getElementById('gbsys').innerHTML=FechaCompleta;
setTimeout('mueveReloj()',1000)
} 
