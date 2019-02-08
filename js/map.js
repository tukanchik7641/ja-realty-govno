$(document).ready(function () {

    yamap();
    
    function yamap() {


        var hash = location.hash;

        window.addEventListener('hashchange', function() {
            hash = window.location.hash.substr(1);

            console.log(hash);

            $('.project-item').parent().show();

            $('.project-item').not('.'+hash).parent().hide();
            

        });


    }


})