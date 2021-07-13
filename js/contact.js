
jQuery.validator.addMethod('isPhone', function(value,element) {
    var length = value.length;
    var mobile = new RegExp('^09\\d{8}$')
    var tel = /^\d{2}-?\d{7}$/;
    return this.optional(element) || (tel.test(value) || mobile.test(value));
})
$().ready(function() {
    $("#contactForm").validate({
        rules: {
            company: "required",
            name: "required",
            phone: {
                required: true,
                isPhone: true
            },            
            email: {
                required: true,
                email: true
            },
            address: {
                required: true,
            },
            interest: {
                required: true,
            },
            message: {
                required: true,
            },
        },
        messages: {
            company: "請輸入個人公司或名稱",
            name: "請輸入聯絡人",
            phone: {
                required: "請輸入聯絡電話",
                isPhone:'電話格式錯誤'
            },            
            email: {
                required: "請輸入E-mail",
                email: 'E-mail格式錯誤'
            },
            address: {
                required: "請輸入地址",
            },
            interest: {
                required: "請輸入您最有興趣的產品",
            },
            message: {
                required: "請輸入留言",
            },
        },
        submitHandler:function(form){
            form.submit();
        }   
    })

})
