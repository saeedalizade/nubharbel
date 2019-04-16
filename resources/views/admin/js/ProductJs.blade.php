<script type="text/javascript">
    $(document).ready(function () {
        $('.dropify').dropify();
        // validate signIn form on keyup and submit
        $("#AddProduct").validate({
            rules: {
                title: 'required',
                description: 'required',
                category_id: 'required',
                content: 'required',
                count: {
                    required: true,
                    number: true
                },
                price: {
                    required: true,
                    number: true
                },
                discount: {
                    required: true,
                    number: true
                },
            },
            messages: {
                title: {
                    required: "وارد کردن این فیلد الزامی است",
                },
                description: {
                    required: "وارد کردن این فیلد الزامی است"
                },
                category_id: {
                    required: "وارد کردن این فیلد الزامی است"
                },
                content: {
                    required: "وارد کردن این فیلد الزامی است"
                },
                count: {
                    required: "وارد کردن این فیلد الزامی است",
                    number: "فقط عدد میتوانید وارد کنید"
                },
                price: {
                    required: "وارد کردن این فیلد الزامی است",
                    number: "فقط عدد میتوانید وارد کنید"
                },
                discount: {
                    required: "وارد کردن این فیلد الزامی است",
                    number: "فقط عدد میتوانید وارد کنید"
                }
            }

        });




    })


    function DeleteCat(id, CsrfToken) {

        $.ajax(
            {
                url: "CategoryProduct/" + id,
                type: 'POST',
                dataType: "JSON",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    "id": id,
                    "_method": 'DELETE',
                    "_token": CsrfToken,
                },
                success: function (data) {
                    var keyResponse = Object.keys(data);

                    if (keyResponse.indexOf('Success') > -1) {
                        $.toast({
                            heading: 'حذف دسته بندی',
                            text: data['Success'],
                            position: 'top-left',
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3500,
                            stack: 6
                        });

                        setTimeout(function () {
                            $('#del-' + id).remove();
                        }, 500);
                    } else {
                        $.toast({
                            heading: 'حذف دسته بندی',
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


    function DeleteProduct(id,CsrfToken) {

        $.ajax(
            {
                url: "Product/" + id,
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
                            heading: 'حذف محصول',
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
                            heading: 'حذف محصول',
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

