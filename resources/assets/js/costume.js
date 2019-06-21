$(document).ready(function () {
    // validate signIn form on keyup and submit
    $(".NewsLetter").validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
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
                    var res = response.split(':')
                    if (response.indexOf('success') > -1) {
                        $.toast({
                            heading: 'عضویت در خبر نامه',
                            text: res[1],
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3500

                        });

                    } else {
                        $.toast({
                            heading: 'عضویت در خبر نامه',
                            text: res[1],
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'error',
                            hideAfter: 3500

                        });
                    }
                });

        }
    });


    $(".PostComment").validate({
        rules: {
            comment: {
                required: true,
            }
        },
        messages: {
            comment: {
                required: "وارد کردن این فیلد الزامی است"
            }
        },
        submitHandler: function (form) {
            $.ajax({
                type: $(form).attr('method'),
                url: $(form).attr('action'),
                data: $(form).serialize(),
            })
                .done(function (response) {
                    var res = response.split(':')
                    if (response.indexOf('success') > -1) {
                        $.toast({
                            heading: 'ارسال نظر',
                            text: res[1],
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3500

                        });

                    } else {
                        $.toast({
                            heading: 'ارسال نظر',
                            text: res[1],
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