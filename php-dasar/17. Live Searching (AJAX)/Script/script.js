var kataPencarian = document.getElementById('kataPencarian');
var tombol = document.getElementById('tombol');
var tabel = document.getElementById('tabel');

kataPencarian.addEventListener('keyup', function() {
    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4 && ajax.status == 200) {
            tabel.innerHTML = ajax.responseText;
        }
    }

    ajax.open('GET', 'AJAX/data.php?kataPencarian=' + kataPencarian.value, true);
    ajax.send();
});