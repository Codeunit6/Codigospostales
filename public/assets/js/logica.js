$(function() {
    $('#select-colonia').on('change', seleccionarMunicipio);
})
function seleccionarMunicipio(){
    var id = $(this).val();
    console.log(id);
    
    if(! id){
        $('#select-municipio').html(html_select);
    }
    //AJAX
    $.get('/index/'+id,function(data){
        var html_select = '<option value="">Seleccione Colonia</option>';
        for(var i=0;i<data.length;i++){
            html_select += '<option value="' + data[i].municipio +'">'+ data[i].municipio +'</option>';
            $('#select-municipio').html(html_select);
        }
    });
    
    
}