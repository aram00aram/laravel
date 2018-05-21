$(document).ready(function(){
    $('button[name=product_edit]').click(function () {
        var url='products/';
        var id= $(this,'button[name=product_edit]').attr('id');
        var method=$('input[name=_method]').val();
        var published=$('select[name=published]').val();
        var product_name=$('input[name=product_name]').val();
        var description_short=$('textarea[name=description_short]').val();
        var description=$('textarea[name=description]').val();
        var meta_title=$('input[name=meta_title]').val();
        var meta_description=$('input[name=meta_description]').val();
        var meta_keyword=$('input[name=meta_keyword]').val();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: 'products/'+id+'/edit',
            type: 'get',

            data: {
                _token: CSRF_TOKEN,
                    id:id,
                    method:method,
                description_short:description_short
            },
            dataType: 'JSON',
            success: function (data) {
                $('select[name=published]').val(data.published);
                $('input[name=product_name]').val(data.product_name);
                $('textarea[name=description_short]').val(data.description_short);
                $('textarea[name=description]').val(data.description);
                $('input[name=meta_title]').val(data.meta_title);
                $('input[name=meta_description]').val(data.meta_description);
                $('input[name=meta_keyword]').val(data.meta_keyword);
                $('input[name=product_id]').val(data.id);

             /*   location.reload();*/
            }
         })
    });

    $('input[name=product_create]').click(function () {
            var url='products/';
            var id= $('input[name=product_id]').val() || '';
              var _method=$('input[name=_method]').val() || 'post' ;

            var published=$('select[name=published]').val();
            var product_name=$('input[name=product_name]').val();
            var description_short=$('textarea[name=description_short]').val();
            var description=$('textarea[name=description]').val();
            var meta_title=$('input[name=meta_title]').val();
            var meta_description=$('input[name=meta_description]').val();
            var meta_keyword=$('input[name=meta_keyword]').val();
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                console.log(id);
                console.log(product_name);
            $.ajax({
                url: url+id,
                type: _method,
                data: {
                    _token: CSRF_TOKEN,
                    _method: _method,
                    id:id,
                    published:published,
                    product_name:product_name,
                    description_short:description_short,
                    description:description,
                    meta_title:meta_title,
                    meta_description:meta_description,
                    meta_keyword:meta_keyword,
                },
                dataType: 'JSON',
                success: function (data) {
                    console.log(data.id);
                    location.reload();
                }
            });


        })





});