var Login = {

    init: function() {
        $("#usuario").focus();

        $("input").focusout(function() {
            if ($(this).val() == "") {
                $(this).css("border-color", "red");
            } else {
                $(this).css("border-color", "green");
            }
        });
    },

    logar: function() {
        $("#erro").html("");
        $("#group-button button i").removeClass('fa-lock');
        $("#group-button button i").addClass('fa-spinner');
        $("#group-button button i").addClass('fa-pulse');

        dados = $(document.login).serializeArray();
        contador = 0;

        for (i = 0; dados.length > i; i++) {
            if (dados[i].value == "") {
                $("#" + dados[i].name).css("border-color", "red");
                contador++;
            } else {
                $("#" + dados[i].name).css("border-color", "green");
                contador--;
            }
        };

        if (contador <= 0) {
            return true;
        } else {
            $("#group-button button i").removeClass('fa-spinner');
            $("#group-button button i").removeClass('fa-pulse');
            $("#group-button button i").addClass('fa-lock');
            return false;
        }
    },

    logout: function(url) {
        $("#group-button").html("<img src='http://imagem.ongame.com.br/site_novo/global/ajax-loader.gif'>");

        window.location = url;
    }
}

$(document).ready(function() {
    Login.init();
});