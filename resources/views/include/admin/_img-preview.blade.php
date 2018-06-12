<script>
    function imgPreview(fileDom,src){

        if (window.FileReader) {
            var reader = new FileReader();
        } else {
            alert("您的设备不支持图片预览功能，如需该功能请升级您的设备！");
        }

        var file = fileDom.files[0];
        var imageType = /^image\//;

        if (!imageType.test(file.type)) {
            alert("请选择图片！");
            return;
        }

        reader.onload = function(e) {

            var img = document.getElementById(src);

            img.src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
</script>