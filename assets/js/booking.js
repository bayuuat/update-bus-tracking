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

// today = yyyy + '-' + mm + '-' + dd;
// realTime = hour + ':' + minute;
// document.getElementById("datefield").setAttribute("min", today);
// document.getElementById("jam_mulai").setAttribute("min", realTime);

var base = 'http://localhost/update-bus-tracking/'

$("#datefield").change(function () {
   var tglPilih = document.getElementById('datefield')

   check = tglPilih.value
   console.log(check)
   $.ajax({
      url: base + 'bookings/getDataBook/' + check,
      method: 'post',
      dataType: 'json',
      success: function (data) {
         var min = 0,
            max = 23,
            selectSt = document.getElementById('selectHourstr'),
            selectEd = document.getElementById('selectHourend'),
            opti = document.querySelectorAll('.foo')
         if (opti.length > 0) {
            $("#selectHourstr").empty();
            $("#selectHourend").empty();
         }

         console.log(data)
         arr = []
         arr2 = []
         for (let m = 0; m < data.length; m++) {
            jm = data[m].jam_mulai
            js = data[m].jam_selesai
            b = jm.split(":")
            bb = b[0]
            arr.push(bb)

            bc = js.split(":")
            cc = bc[0]
            arr2.push(cc)
         }

         for (var i = min; i <= max; i++) {
            var opt = document.createElement('option');
            opt.classList.add("foo");
            if (i < 10) {
               opt.value = '0' + i + ':00';
               opt.innerHTML = '0' + i + ' : 00';
               for (let mbc = 0; mbc < arr.length; mbc++) {
                  if (i >= arr[mbc] && i <= arr2[mbc] - 1) {
                     opt.setAttribute('disabled', '');
                  }
               }
            } else {
               opt.value = i + ':00';
               opt.innerHTML = i + ' : 00';
               for (let mbc = 0; mbc < arr.length; mbc++) {
                  if (i >= arr[mbc] && i <= arr2[mbc] - 1) {
                     opt.setAttribute('disabled', '');
                  }
               }
            }
            selectSt.appendChild(opt);
         }

         for (var i = min; i <= max; i++) {
            var opt2 = document.createElement('option');
            opt2.classList.add("foo");
            if (i < 10) {
               opt2.value = '0' + i + ':00';
               opt2.innerHTML = '0' + i + ' : 00';
               for (let mbc = 0; mbc < arr.length; mbc++) {
                  if (i > arr[mbc] && i <= arr2[mbc]) {
                     opt2.setAttribute('disabled', '');
                  }
               }
            } else {
               opt2.value = i + ':00';
               opt2.innerHTML = i + ' : 00';
               for (let mbc = 0; mbc < arr.length; mbc++) {
                  if (i > arr[mbc] && i <= arr2[mbc]) {
                     opt2.setAttribute('disabled', '');
                  }
               }
            }
            selectEd.appendChild(opt2);
         }
      }
   })
})