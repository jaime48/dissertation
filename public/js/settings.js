$(document).ready(function() {
    $('#settings').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            new_first_name: {
                validators: {
                    stringLength: {
                        min: 2,
                    },

                }
            },
            new_last_name: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                }
            },


            new_phone: {
                validators: {

                    phone: {
                        country: 'GB',
                        message: 'Please supply a vaild phone number'
                    }
                }
            },
            new_address: {
                validators: {
                    stringLength: {
                        min: 8,
                    },

                }
            },
            new_city: {
                validators: {
                    stringLength: {
                        min: 4,
                    },

                }
            },

            new_zip: {
                validators: {

                    zipCode: {
                        country: 'GB',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },


            new_pass: {
                validators: {
                    regexp: {
                        regexp: /^[a-z\s_0-1]+$/i,
                        message: 'Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters'
                    }


                }
            },
            confirmPassword: {
                validators: {
                    identical: {
                        field: 'new_pass',
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

                                if(msg==0){

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

