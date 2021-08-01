
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
        submitHandler:function(){
            // form.submit();
            let company = $('#company').val()
            let name = $('#name').val()
            let phone = $('#phone').val()
            let email = $('#email').val()
            let address = $('#address').val()
            let interest = $('#interest').val()
            let message = $('#message').val()
            let sendTxt = `
                <p style="font-size:18px;color:black;">
                   <strong>個人公司或名稱: </strong><span>${company}</span>
                </p>
                <p style="font-size:18px;color:black;">
                   <strong>聯絡人: </strong><span>${name}</span>
                </p>
                <p style="font-size:18px;color:black;">
                   <strong>聯絡電話: </strong><span>${phone}</span>
                </p>
                <p style="font-size:18px;color:black;">
                   <strong>E-mail: </strong><span>${email}</span>
                </p>
                <p style="font-size:18px;color:black;">
                   <strong>地址: </strong><span>${address}</span>
                </p>
                <p style="font-size:18px;color:black;">
                   <strong>您最有興趣的產品: </strong><span>${interest}</span>
                </p>
                <p style="font-size:18px;color:black;">
                    <strong>給我們的留言: </strong><span>${message}</span>
                </p>
            `
            Email.send({
                Host : "smtp.gmail.com",
                Username : "penbill2016@gmail.com",
                Password : "075717169",
                To : 'penbillpopo@gmail.com',
                From : "penbill2016@gmail.com",
                Subject : "巴比倫-聯絡我們",
                Body : sendTxt
            }).then(
              message => {
                  if(message === 'OK'){
                        alert('發送成功')
                  }else{
                        alert('發送失敗')
                  }
              }
            );
        }   
    })

})
