    var rating_data = 0;

    let games = document.querySelectorAll('.destaque-column .jogo, .lançamentos-column .jogo, .bem-avaliados-column .jogo, .acao-aventura-column .jogo');

    games.forEach(game => {
        game.addEventListener('click', function() {
            console.log(game.dataset.gameName);

            let stars = document.querySelectorAll('.submit_star');

            stars.forEach(star => {
                star.addEventListener('mouseenter', function() {
                    let rating = parseInt(star.dataset.rating); 

                    reset_background();

                    for (let i = 1; i <= rating; i++) {
                        console.log('Adding class to submit_star_' + i);
                        $('#submit_star_' + i).addClass('aaa');
                        console.log('test');
                    }
                })
            })
        });
    });

    function reset_background() {
        for (let i = 1; i <= 5; i++) {
            $('#submit_star_' + i).addClass('star-light');
            
            $('#submit_star_' + i).removeClass('aaa');
        }
    }

    $('#reset-btn').click(function() {
        reset_background();
    })

    $(document).on('click', '.submit_star', function() {
        rating_data = $(this).data('rating');

        $('.submit_star').removeClass('aaa');
        for (let i = 1; i <= rating_data; i++)
            $('#submit_star_' + i).addClass('aaa');
    });

    $('#review-save-button').click(function() {
        let user_review = $('#review').val();
        let plataforma = $('.dropdown').val();
        $.ajax({
            url: "review.php",
            method: "POST",
            data: {
                rating_data: rating_data,
                save_review: true,
                user_review: user_review,
                plataforma: plataforma
            },
            success:function(response) {
                alert(response);
            }
        })
    });