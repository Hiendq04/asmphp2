<footer>
    <p>@hiendqph37334</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$('.filtering').slick({
    slidesToShow: 4,
    slidesToScroll: 4
});

$('.hotProductHome').slick({
    slidesToShow: 5,
    slidesToScroll: 5
});

var filtered = false;

$('.js-filter').on('click', function() {
    if (filtered === false) {
    $('.filtering').slick('slickFilter', ':even');
    $(this).text('Unfilter Slides');
    filtered = true;
    } else {
    $('.filtering').slick('slickUnfilter');
    $(this).text('Filter Slides');
    filtered = false;
    }
});

function chooseFile(fileInput, idImg) {
    if (fileInput.files && fileInput.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById(idImg).setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(fileInput.files[0]);

    }
}
  // Lưu vị trí cuộn khi trang bị đóng
window.addEventListener('beforeunload', function() {
    localStorage.setItem('scrollPosition', window.scrollY);
});

  // Kiểm tra xem có vị trí cuộn đã lưu trữ hay không
document.addEventListener('DOMContentLoaded', function() {
    var savedScrollPosition = localStorage.getItem('scrollPosition');

    // Nếu có vị trí cuộn được lưu trữ, thì đặt lại vị trí cuộn
    if (savedScrollPosition !== null) {
    window.scrollTo(0, savedScrollPosition);
    }
});

  // closs mesage
let closeMessage = document.querySelector(".message-close");
if (closeMessage) {
    closeMessage.onclick = function() {
    closeMessage.parentNode.remove()
    }
}

function formatNumber(input) {
    let value = input.value.replace(/\D/g, '');
    value = new Intl.NumberFormat().format(value);
    input.value = value;
}



//   api tinh

$(document).ready(function() {
    $.ajax({
    url: "https://provinces.open-api.vn/api/",
    type: "GET",
    success: function(reponse) {
        var tinh = '';
        for (i = 0; i < reponse.length; i++) {
        tinh += '<option value="' + reponse[i].code + '">' + reponse[i].name + '</option>';
        }
        $("#tinh").html(tinh);
    }
    });
    $('#tinh').change(function() {
var idTinh = $('#tinh').val();
    $.ajax({
        url: "https://provinces.open-api.vn/api/p/" + idTinh + "?depth=2",
        type: "GET",
        success: function(data) {
        var huyen = '';
        var listHuyen = data.districts;
        for (var i = 0; i < listHuyen.length; i++) {
            huyen += '<option value="' + listHuyen[i].code + '">' + listHuyen[i].name + '</option>';
        }
        $("#huyen").html(huyen);
        }
    });
    });
    $('#huyen').change(function() {
    var idHuyen = $('#huyen').val();
$.ajax({
        url: "https://provinces.open-api.vn/api/d/" + idHuyen + "?depth=2",
        type: "GET",
        success: function(data) {
        var xa = '';
        var listXa = data.wards;
        for (var i = 0; i < listXa.length; i++) {
            xa += '<option value="' + listXa[i].code + '">' + listXa[i].name + '</option>';
        }
        $("#xa").html(xa);
        }
    });
    });
});
</script>
</body>

</html>
