function display_ct5() {
    var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var x = new Date()
    var day = x.getDay();
    var month = x.getMonth();
    var ampm = x.getHours() >= 12 ? ' PM' : ' AM';

    var x1 = days[day] + ", " + x.getDate() + " " + months[month] + " " + x.getFullYear();
    x1 = x1 + " / " + x.getHours() + ":" + x.getMinutes() + ":" + x.getSeconds() + "" + ampm;
    document.getElementById('ct5').innerHTML = x1;
    display_c5();
}

function display_c5() {
    var refresh = 1000; // Refresh rate in milli seconds
    mytime = setTimeout('display_ct5()', refresh)
}
display_c5()