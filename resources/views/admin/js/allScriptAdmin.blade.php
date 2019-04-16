<script type="text/javascript">
    $(document).ready(function () {

        // validate signIn form on keyup and submit
        $("#loginform").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 6
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                password: {
                    required: "وارد کردن این فیلد الزامی است",
                    minlength: "حداقل 6 کاراکتر وارد نمائید"
                },
                email: {
                    required: "وارد کردن این فیلد الزامی است",
                    email: "فرمت پست الکترونیک صحیح نمیباشد"
                }
            },
            submitHandler: function (form) {
                $.ajax({
                    type: $(form).attr('method'),
                    url: $(form).attr('action'),
                    data: $(form).serialize(),
                })
                    .done(function (response) {
                        if (response.indexOf('success') > -1) {
                            $.toast({
                                heading: 'ورود به ادمین',
                                text: 'شما با موفقیت وارد شدید',
                                position: 'top-right',
                                loaderBg: '#ff6849',
                                icon: 'success',
                                hideAfter: 3500

                            });


                            setTimeout(function () {
                                window.location = "{{route('dashboard')}}";
                            }, 1000);


                        } else {
                            $.toast({
                                heading: 'ورود به ادمین',
                                text: 'نام کاربری یا کلمه عبور صحیح نمی باشد',
                                position: 'top-right',
                                loaderBg: '#ff6849',
                                icon: 'error',
                                hideAfter: 3500

                            });
                        }
                    });

            }
        });
    })
</script>