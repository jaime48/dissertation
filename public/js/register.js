
$(document).ready(function() {
    var verificationCode = '';
    $('#verifyButton').click(function(){
        $registerEmail = $('#email').val();

        $.ajax({
            async:true,
            method:'GET',
            url:'sendVerificationCode',
            data:{email:$registerEmail}
        }).done(function(msg){
            verificationCode = msg;
            var counter = 5;
            setInterval(function() {
                if (counter >= 0) {
                    $('#verifyButton').attr("disabled", true).text('resend in '+counter+'s');
                }
                if (counter === 0) {
                    $('#verifyButton').attr("disabled", false).text('resend');
                }
                counter--;
            }, 1000);
        });
    });
    $('#reg_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
            last_name: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            user_type: {
                validators: {
                    notEmpty: {
                        message : 'Please select your identity'
                    }
                }

            },

            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'GB',
                        message: 'Please supply a vaild phone number'
                    }
                }
            },
            address: {
                validators: {
                    stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                    stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'GB',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            comment: {
                validators: {
                    stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description about yourself'
                    }
                }
            },
            email: {
                trigger:'blur',
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    },
                    callback:{
                        message: 'wrong answer',
                        callback: function(value,validator,$field){
                            var veri = true;
                            $.ajax({
                                async:false,
                                method: "GET",
                                url: "verifyemail",
                                data:{email:value}
                            }).done(function(msg){
                                if(msg==1){
                                    veri = false;
                                }
                            });
                            if(veri){
                                return{
                                    valid:true
                                }
                            }
                            return{
                                valid:false,
                                message:'email address already registered'
                            }
                        }
                    }
                }
            },

            verificationCode: {
                trigger:'blur',
                validators: {
                    notEmpty: {
                        message: 'Please enter verification code'
                    },
                    callback:{
                        message: 'wrong answer',
                        callback: function(value,validator,$field){

                            if(value == verificationCode){
                                return{
                                    valid:true
                                }
                            }
                            return{
                                valid:false,
                                message:'wrong verification code'
                            }
                        }
                    }
                }
            },

            password: {
                validators: {
                    identical: {
                        field: 'confirmPassword',
                        message: 'Confirm your password below - type same password please'
                    },
                    regexp: {
                        regexp: /^[a-z\s_0-1]+$/i,
                        message: 'Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters'
                    }


                }
            },
            confirmPassword: {
                validators: {
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            currentPassword: {
                trigger:'blur',
                validators: {
                    notEmpty: {
                        message: 'Please supply your current password'
                    },
                    callback:{
                        message: 'wrong answer',
                        callback: function(value,validator,$field){
                            var veri = true;
                            $.ajax({
                                async:false,
                                method: "GET",
                                url: "checkPassword",
                                data:{password:value}
                            }).done(function(msg){
                                if(msg!=value){
                                    veri = false;
                                }
                            });
                            if(veri){
                                return{
                                    valid:true
                                }
                            }
                            return{
                                valid:false,
                                message:'password incorrect'
                            }
                        }
                    }
                }
            },


        }
    })


        .on('success.form.bv', function(e) {

            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
            //$('#reg_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            //e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            //$.post($form.attr('action'), $form.serialize(), function(result) {
            //    console.log(result);
            //}, 'json');
        });
});

