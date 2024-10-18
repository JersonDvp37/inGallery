var displaySection = document.getElementById('SectionUpload');
    var hideShow = false;
function addPost(){

    hideShow = !hideShow;
    if(hideShow){

        document.getElementById('SectionUpload').style.display = 'block';
    }else{
        
        document.getElementById('SectionUpload').style.display = 'none';
    }
}