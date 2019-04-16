<script type="text/javascript">
    $(document).ready(function () {
        $('.dropify').dropify();
        // validate signIn form on keyup and submit
        $("#AddUserStore").validate({
            rules: {
                fullname :'required',
                password: {
                    required: true,
                    minlength: 6
                },
                password_confirmation:{
                    required: true,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                fullname:{
                    required: "وارد کردن این فیلد الزامی است",
                },
                password: {
                    required: "وارد کردن این فیلد الزامی است",
                    minlength: "حداقل 6 کاراکتر وارد نمائید"
                },
                email: {
                    required: "وارد کردن این فیلد الزامی است",
                    email: "فرمت پست الکترونیک صحیح نمیباشد"
                },
                password_confirmation:{
                    required: "وارد کردن این فیلد الزامی است",
                    equalTo: "کلمه عبور با تکرار آن برابر نیست",
                }
            }

        });

        $("#EditProfileUser").validate({
            rules: {
                phone: {
                    required: true,
                    minlength: 8,
                    maxlength: 8,
                    number : true
                },
                mobile: {
                    required: true,
                    maxlength: 11,
                    minlength: 11,
                    number : true
                },
                national_code: {
                    required: true,
                    maxlength: 10,
                    minlength: 10,
                    number : true
                },
                postal_code: {
                    required: true,
                    maxlength: 10,
                    minlength: 10,
                    number : true
                },
                avatar:"required",
                address:"required",
            },
            messages: {
                mobile:{
                    required: "وارد کردن این فیلد الزامی است",
                    minlength: "حداقل 11 کاراکتر وارد نمائید",
                    maxlength: "حداکثر 11 کاراکتر وارد نمائید",
                    number : "لطفا فقط عدد وارد نمائید"
                },
                phone: {
                    required: "وارد کردن این فیلد الزامی است",
                    minlength: "حداقل 8 کاراکتر وارد نمائید",
                    maxlength: "حداکثر 8 کاراکتر وارد نمائید",
                    number : "لطفا فقط عدد وارد نمائید"
                },
                national_code: {
                    required: "وارد کردن این فیلد الزامی است",
                    minlength: "حداقل 10 کاراکتر وارد نمائید",
                    maxlength: "حداکثر 10 کاراکتر وارد نمائید",
                    number : "لطفا فقط عدد وارد نمائید"
                },
                postal_code:{
                    required: "وارد کردن این فیلد الزامی است",
                    minlength: "حداقل 10 کاراکتر وارد نمائید",
                    maxlength: "حداکثر 10 کاراکتر وارد نمائید",
                    number : "لطفا فقط عدد وارد نمائید"
                },
                avatar:{
                    required: "وارد کردن این فیلد الزامی است"
                },
                address:{
                    required: "وارد کردن این فیلد الزامی است"
                },
            }

        });

    })

    $(".bt-switch").bootstrapSwitch();

    function ChangeStatus(id,CsrfToken) {

        var StatusDel =$('#IsDel-'+id).is(":checked");

        if(StatusDel)
        {
            StatusDel = '0';
            var StatusSwitch = true;
        }else {
            StatusDel='1';
            var StatusSwitch = false;
        }
        $.ajax(
            {
                url: "ListUsers/" + id,
                type: 'POST',
                dataType: "JSON",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    "id":id,
                    "is_del": StatusDel,
                    "flag" : 'IsDel',
                    "_method": 'PATCH',
                    "_token": CsrfToken,
                },
                success: function (data) {
                    var keyResponse = Object.keys(data);

                    if (keyResponse.indexOf('Success') > -1) {
                        $.toast({
                            heading: 'وضعیت کاربر',
                            text: data['Success'],
                            position: 'top-left',
                            loaderBg: '#ff6849',
                            icon: 'success',
                            hideAfter: 3500,
                            stack: 6
                        });

                        setTimeout(function () {
                            $('#IsDel-'+id).attr("checked",);
                        }, 500);
                    } else {
                        $.toast({
                            heading: 'حذف نقش',
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

