$(function($){
    $("#formulario").on("submit",function(e){
      e.preventDefault(); // impedir o evento submit
  
        //   Segunda parte do projeto

        // $.ajax({
        //     'url': '',
        //     'method': 'post',
        //     'data': {
        //         'search': ''
        //     }
        // })
  
    });

    $("#formulario").keyup((e) => {
        var search = $("#user_input").val();

        if(search == ''){
            $(".box-github").css('display','none');
        }else{
            $(".box-github").css('display','block');
        }
       
         $.ajax({
            'url': 'motorDeBusca.php',
            'method': 'post',
            'data': {
                'search': search
            }
            
        }).done((res) => {
            $(".github-user-item").html(res)
        })
    })
});