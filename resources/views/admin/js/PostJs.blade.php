<script type="text/javascript">
    $(document).ready(function () {
        $('.dropify').dropify();
        // validate signIn form on keyup and submit
        $("#AddPost").validate({
            rules: {
                title :'required',
                description :'required',
                content :'required',
                type :'required',
                status :'required',
                img :'required'
            },
            messages: {
                title:{
                    required: "وارد کردن این فیلد الزامی است",
                },
                description: {
                    required: "وارد کردن این فیلد الزامی است"
                },
                img: {
                    required: "وارد کردن این فیلد الزامی است"
                }
            }

        });
        $('#AddPost, #EditPost .submitForEditor').click(function(){
            if (tinyMCE){ tinyMCE.triggerSave(); }
        });


    })







    function DeletePosts(id,CsrfToken) {

        $.ajax(
            {
                url: "Slider/" + id,
                type: 'POST',
                dataType: "JSON",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    "id":id,
                    "_method": 'DELETE',
                    "_token": CsrfToken,
                },
                success: function (data) {
                    var keyResponse = Object.keys(data);

                    if (keyResponse.indexOf('Success') > -1) {
                        $.toast({
                            heading: 'حذف بنر اسلایدر',
                            text: data['Success'],
                            position: 'top-left',
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3500,
                            stack: 6
                        });

                        setTimeout(function () {
                            $('#del-'+id).remove();
                        }, 500);
                    } else {
                        $.toast({
                            heading: 'حذف بنر اسلایدر',
                            text: data['Error'],
                            position: 'top-left',
                            loaderBg: '#ff6849',
                            icon: 'error',
                            hideAfter: 3500,
                            stack: 6
                        })
                    }


                }

            }
        );
    }



</script>

