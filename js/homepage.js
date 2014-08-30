
$(document)
  .ready(function() {

     var
      changeSides1 = function() {
        $('.ui.shape')
          .eq(0)
            .shape('flip over')
            .end()
          .eq(1)
            .shape('flip over')
            .end()
          .eq(2)
            .shape('flip back')
            .end()
          .eq(3)
            .shape('flip back')
            .end()
        ;
      },
      validationRules = {
        firstName: {
          identifier  : 'first-name',
          rules: [
            {
              type   : 'empty',
              prompt : 'Please enter your firstname'
            }]
        },
        lastName: {
          identifier  : 'last-name',
          rules: [
            {
              type   : 'empty',
              prompt : 'Please enter your lastname'
            }]
        },
      username: {
      identifier : 'username',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter a username'
        }
      ]
    },
    password: {
      identifier : 'password',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter a password'
        },
        {
          type   : 'length[6]',
          prompt : 'Your password must be at least 6 characters'
        }
      ]
    },
    confirm: {
      identifier : 'confirm',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please confirm your password'
        },
        {
          type   : 'length[6]',
          prompt : 'Your password must be at least 6 characters'
        }
      ]
    },
    citizenID: {
      identifier : 'citizenID',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your citizenID'
        }
      ]
    },
    organization: {
      identifier : 'organization',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your organization'
        }
      ]
    },
    district: {
      identifier : 'district',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your district'
        }
      ]
    },
    email: {
      identifier : 'email',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your e-mail'
        }
      ]
    },
    file: {
      identifier : 'file',
      rules: [
        {
          type   : 'empty',
          prompt : 'Envident for your work ownership'
        }
      ]
    },
    terms: {
      identifier : 'terms',
      rules: [
        {
          type   : 'checked',
          prompt : 'You must agree to the terms and conditions'
        }
      ]
    }
    };
    $('.ui.dropdown')
      .dropdown({
        on: 'hover'
      })
    ;

    $('.ui.form')
      .form(validationRules, {
        on: 'blur'
      })
    ;

    $('.masthead .information')
      .transition('scale in')
    ;

    setInterval(changeSides1, 3000);
});

 

