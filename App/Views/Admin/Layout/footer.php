
<script>

    function chooseFile(fileInput, idImg) {
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById(idImg).setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(fileInput.files[0]);

        }
    }

    function formatNumber(input) {
        let value = input.value.replace(/\D/g, '');
        value = new Intl.NumberFormat().format(value);
        input.value = value;
    }

    // closs mesage
    let closeMessage = document.querySelector(".message .message-close");
    if(closeMessage){
        closeMessage.onclick = function() {
            closeMessage.parentNode.remove()
        }
    }
</script>
</body>

</html>