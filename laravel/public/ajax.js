function ajax(url,data)
{
    $.ajax({
        url:url,  
        dataType:'jsonp',
        type:'GET',
        jsonp:'callback',  
        data:data,
        success:function(msg){
             console.log(msg)
                             
        }
    });
}