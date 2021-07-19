var myVar=setInterval(LoadData,8000);

http_request= new XMLHttpRequest();

function  LoadData(){
    $('#MyTable tbody').empty();

    $.ajax({
        url:'process.php',
        dataType:'json',
        success:function(data){
            for(var i=0; i<data.length; i++){
                var row=$('<tr><td><b>' + data[i].sender_name + ':</b></br>' +data[i].sender_message +'</td></tr>');
                $('#record').append(row);
            }
        },
        error: function(jqXHR, textStatus, errorThrown){
            alert('Error: ' + textStatus + ' - ' + errorThrown);
        }
    });
}


//post data to the server00
$(document).ready(function(){
    $('#butsave').on('click', function(){
    
       
        $("#butsave").attr("disabled", "disabled");
        var name=document.forms["frm1"]["name"].value;
        var msg=document.forms["frm1"]["msg"].value;

        if(name!="" && msg!=""){
            $.ajax({
                url: "save.php",
                type: "POST",
                data:{
                    name:name,
                    msg:msg,
                },
                cache: false,
                success:function(dataResult){
                    var dataResult=JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $("#butsave").removeAttr("disabled");
                        document.forms["frm1"]["name"].value="";
                        document.forms["frm1"]["msg"].value="";
                        LoadData();
                        // alert('Data Added Successfully');

                    }
                    else if(dataResult.statusCode==201){
                        alert("error occured");
                    }
                }
        
            });
        }
        else{
            alert("plase fill all fields");
        }
    });
});