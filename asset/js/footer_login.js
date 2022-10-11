var signIn = $('.acceder'),
    signUp = $('.registrarse'),
    card1 = $('#logearse'),
    card2 = $('#registrarse'),
    submit = $('.enviar');

function ifActive(elem) {
    if (elem.hasClass('modo-activo')) {
        return true;
    } else {
        return false;
    }
}

function switchCards() {
    signUp.on('click', function (e) {
        e.preventDefault();
        if (ifActive(signIn)) {
            signUp.addClass('modo-activo');
            signIn.removeClass('modo-activo');
            card1.removeClass('modo-mostrar').addClass('esconder');
            card2.removeClass('esconder').addClass('modo-mostrar animated bounceInRight');
        }
    });
    signIn.on('click', function (e) {
        e.preventDefault();
        if (ifActive(signUp)) {
            signUp.removeClass('modo-activo');
            signIn.addClass('modo-activo');
            card2.removeClass('modo-mostrar').addClass('esconder');
            card1.removeClass('esconder').addClass('modo-mostrar animated bounceInLeft');
        }
    });

}

switchCards();

// float labels
// https://codepen.io/jobennett/pen/Wvdrba

$('form li').each(function () {
    $(this).addClass('js-hide-label');
});

$('form li').find('input').on('keyup', function (e) {
    var $this = $(this),
        $parent = $this.parent();

    if (e.type == 'keyup') {
        //this if statement is needed if a user hits delete within the input. Otherwise, the label will appear along w placeholder
        if ($this.val() == '') {
            $parent.addClass('js-hide-label');
            //add the class if keyup and the input isn't empty
        } else {
            $parent.removeClass('js-hide-label');
        }
    }
});