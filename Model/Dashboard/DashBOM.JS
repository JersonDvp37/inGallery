    //DISPLAY NO HTML DA IMAGEM CARRREGADA
    var changeImages = document.getElementById('changeImage');
    var imageLoad = document.getElementById('imageLoad');
    var imgUpload_btn = document.getElementById('imgUpload_btn');
    var imageDisplay = document.getElementById('imageDisplay');

    imageLoad.addEventListener("change", function(){
        changeImage(this);
    });

    function changeImage(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                imageDisplay.setAttribute('src', e.target.result);
                document.getElementById('imgZoomed').setAttribute('src', e.target.result);
                imageDisplay.style.display = 'block';
                changeImages.style.display = 'block';
                imgUpload_btn.style.display = 'none';                  
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    var imgSrc_Zoom = document.getElementById('imgZoom');
    function imagemZoom(){
        imgSrc_Zoom.setAttribute("src", imageDisplay);
        imgSrc_Zoom.style.display = 'block';
        document.getElementById('imgZoom').style.display = 'block';
    } 

        function closeZoom(){
            document.getElementById('imgZoom').style.display = 'none';
        }

    //