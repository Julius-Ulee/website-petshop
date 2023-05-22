var tombolMenu = document.getElementsByClassName('tombol-menu')[0];
var menu = document.getElementsByClassName('menu')[0];

tombolMenu.onclick = function() {
    menu.classList.toggle('active');
}

menu.onclick = function() {
    menu.classList.toggle('active');
}

function hitungJumlah() {
    var numberSelectpet = document.getElementById("numberSelectpet");
    var numberSelectservice = document.getElementById("numberSelectservice");
    var numberSelectday = document.getElementById("numberSelectday");
    var jumlahElement = document.getElementById("jumlahElement");
    var jumlah = 0;

    jumlah += parseInt(numberSelectpet.value);
    jumlah += parseInt(numberSelectservice.value);
    jumlah += parseInt(numberSelectday.value);

    jumlahElement.textContent = jumlah;
  }