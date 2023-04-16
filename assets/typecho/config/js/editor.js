$(document).ready(function(){
        
        var s = $("select[id*='article_type']").children('option:selected').val();
        
        $("input[id*='photos_name']").parent().parent().parent().hide();
        $("input[id*='photos_excerpt']").parent().parent().parent().hide();
        $("input[id*='books_author']").parent().parent().parent().hide();
        $("input[id*='books_time']").parent().parent().parent().hide();
        $("input[id*='books_img']").parent().parent().parent().hide();
        $("input[id*='books_excerpt']").parent().parent().parent().hide();
        $("input[id*='books_reading']").parent().parent().parent().hide();

        if(s == 'photos'){
            $("input[id*='photos_name']").parent().parent().parent().show();
            $("input[id*='photos_excerpt']").parent().parent().parent().show();
        }

        if(s == 'books'){
            $("input[id*='books_author']").parent().parent().parent().show();
            $("input[id*='books_time']").parent().parent().parent().show();
            $("input[id*='books_excerpt']").parent().parent().parent().show();
            $("input[id*='books_reading']").parent().parent().parent().show();
            $("input[id*='books_img']").parent().parent().parent().show();
        }


        $("select[id*='article_type']").change(function(){
        var a=$(this).children('option:selected').val();

        if(a=='photos'){
            $("input[id*='photos_name']").parent().parent().parent().show();
            $("input[id*='photos_excerpt']").parent().parent().parent().show();
        }else{
            $("input[id*='photos_name']").parent().parent().parent().hide();
            $("input[id*='photos_excerpt']").parent().parent().parent().hide();
        }

        if(a=='books'){
            $("input[id*='books_author']").parent().parent().parent().show();
            $("input[id*='books_time']").parent().parent().parent().show();
            $("input[id*='books_excerpt']").parent().parent().parent().show();
            $("input[id*='books_reading']").parent().parent().parent().show();
            $("input[id*='books_img']").parent().parent().parent().show();
        }else{
            $("input[id*='books_author']").parent().parent().parent().hide();
            $("input[id*='books_time']").parent().parent().parent().hide();
            $("input[id*='books_excerpt']").parent().parent().parent().hide();
            $("input[id*='books_reading']").parent().parent().parent().hide();
            $("input[id*='books_img']").parent().parent().parent().hide();
        }

    })
    
})