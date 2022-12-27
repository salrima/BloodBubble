$(document).ready(function(){
    $('#userform').validate({
        wrapper: 'div',
        errorLabelContainer: "#messageBox",
        errorClass: "error fail-alert",
        validClass: "valid success-alert",
        rules: {
            fname: {
                required: true,
            },
            lname: {
                required: true,
            },
            uname: {
                required: true,
            },
            pass: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            mobileno: {
                required: true,
                number:true,
                minlength:10,
                // email: true,
            },
            gender: {
                required: true,
                // email: true,
            },
            dob: {
                required: true,
                // email: true,
            },
            age: {
                required: true,
                min:18,
                // email: true,
            },
            city: {
                required: true,
                // email: true,
            },
            district: {
                required: true,
                // email: true,
            },
            state: {
                required: true,
                // email: true,
            },
            pincode: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            fname: 'Please enter your first name',
            lname: 'Please enter your middle name',
            uname: 'Please enter your user name',
            pass: 'Please enter your password',
            email: {
                required: 'Please enter your email',
                email: 'Enter a vaild email',
            },
            mobileno: {
                required: 'Please enter your mobile number',
                number:'Please enter a valid mobile number',
                minlength: 'Please enter 10 Digit No',
            },
            gender: 'Please select your gender',
            dob: 'Please enter your date of birth',
            age: {
                required: 'Please enter your age',
                min:'You must be atleast 18',
            },
            city: 'Please enter your city',
            district: 'Please enter your district',
            state: 'Please enter your state',
            pincode: {
                required: 'Please enter your pincode',
                minlength: 'Pincode must be of atleast 6 digits'
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
    
    $('#ProfileForm').validate({
        wrapper: 'div',
        errorLabelContainer: "#messageBox",
        errorClass: "error fail-alert",
        validClass: "valid success-alert",
        rules: {
            fname: {
                required: true,
            },
            lname: {
                required: true,
            },
            mnum: {
                required: true,
                minlength: 10,
            },
            email: {
                required: true,
                email: true,
            },
        },
        messages: {
            fname: 'Please enter your First Name',
            lname: 'Please enter your Last Name',
            email: {
                required: 'Please enter your Email',
                minlength: 'Please enter a valid Email',
            },
            mnum: {
                required: 'Please enter your Mobile Number',
                minlength: 'Mobile Number must be 10 digit long',
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
    
    $('#CreditForm').validate({
        wrapper: 'div',
        errorLabelContainer: "#messageBox",
        errorClass: "error fail-alert",
        validClass: "valid success-alert",
        rules: {
            cardno: {
                required: true,
                minlength: 16,
            },
            cvv: {
                required: true,
                minlength: 3,
            },
            exptdate: {
                required: true,
            },
            clabel: {
                required: true,
            },
        },
        messages: {
            cardno: {
                required: '<br/>Please enter the Card Number',
                minlength: 'Card Number must be 16 digit long',
            },
            cvv: {
                required: 'Please enter the CVV',
                minlength: 'CVV must be 3 digit',
            },
            exptdate: 'Please enter the Exp Date',
            clabel: 'Please enter the Card Label',
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});