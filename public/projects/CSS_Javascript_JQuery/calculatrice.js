(function($){
    $(function () {
        var nbr_1 = '';
        var nbr_2 = '';
        var signe = '';
        var nulle = '';
        var somme = '';
        var nbr = '';
        $('td').each(function(){
            $(this).click(function(){
                $('p').text($('p').text()+$(this).text());
                if($(this).html() === '+'){
                    signe = $(this).html();
                    nbr_1 = $('p').text();
                    nbr = nbr_1.substring(0, nbr_1.length-1);
                    $('p').text(nulle);
                    console.log(nbr);
                }
                if($(this).html() === '-'){
                    signe = $(this).html();
                    nbr_1 = $('p').text();
                    nbr = nbr_1.substring(0, nbr_1.length-1);
                    $('p').text(nulle);
                }
                if($(this).html() === '/'){
                    signe = $(this).html();
                    nbr_1 = $('p').text();
                    nbr = nbr_1.substring(0, nbr_1.length-1);
                    $('p').text(nulle);
                }
                if($(this).html() === 'x'){
                    signe = $(this).html();
                    nbr_1 = $('p').text();
                    nbr = nbr_1.substring(0, nbr_1.length-1);
                    $('p').text(nulle);
                }
                if($(this).html() === 'C'){
                    nbr = $('p').html(nulle);
                }
                if($(this).html() === '='){
                    nbr_2 = $('p').text();
                    if(signe === '+'){
                        somme = parseFloat(nbr)+parseFloat(nbr_2);
                        $('p').attr('value', somme).text(somme);
                    }
                    else if(signe === '-'){
                        somme = parseFloat(nbr)-parseFloat(nbr_2);
                        $('p').attr('value', somme).text(somme);
                    }
                    else if(signe === '/'){
                        somme = parseFloat(nbr)/parseFloat(nbr_2);
                        $('p').attr('value', somme).text(somme);
                    }
                    else if(signe === 'x'){
                        somme = parseFloat(nbr)*parseFloat(nbr_2);
                        $('p').attr('value', somme).text(somme);
                    }
                }
            });
        });
    });
})(jQuery);