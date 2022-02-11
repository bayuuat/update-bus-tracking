var today = new Date();
var minute = today.getMinutes();
var hour = today.getHours();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

if (minute < 10) {
    minute = '0' + minute;
 }
 
 if (hour < 10) {
    hour = '0' + hour;
 } 
 
if (dd < 10) {
   dd = '0' + dd;
}

if (mm < 10) {
   mm = '0' + mm;
} 
    
today = yyyy + '-' + mm + '-' + dd;
realTime = hour + ':' + minute;
document.getElementById("datefield").setAttribute("min", today);
document.getElementById("jam_mulai").setAttribute("min", realTime);