document.addEventListener("DOMContentLoaded", function(event) {

  let voteLikeClick = document.querySelector('.js-vote-like-click');
  let voteDislikeClick = document.querySelector('.js-vote-dislike-click');
  let voteLikeResult = document.querySelector('.vote-like-result');
  let voteDislikeResult = document.querySelector('.vote-dislike-result');

  // Лайкнули
  if (voteLikeClick) {
    voteLikeClick.addEventListener('click', function(e) {

      // Проверяем голосовал ли уже или нет
      if (localStorage.getItem('vote_yes')) {
        console.log('уже голосовал');
        return;
      } else {
        localStorage.setItem('vote_yes', 'yes');

        // Отправляем запрос
        let data = {
          action: 'vote_like_click_action',
        };
        // addFavToTable(data);
        jQuery.ajax({
          url: ajaxurl, // AJAX handler
          data: data,
          type: 'POST',
          beforeSend : function(xhr) {
            console.log('Загружаю')
          },
          success : function(data) {
            if (data) {
              console.log('data', data);
              voteLikeResult.textContent = data; 
            }
          }
        });
      }
    });  
  }

  // Дизлайкнули
  if (voteDislikeClick) {
    voteDislikeClick.addEventListener('click', function(e) {

      // Проверяем голосовал ли уже или нет
      if (localStorage.getItem('vote_yes')) {
        console.log('уже голосовал');
        return;
      } else {
        localStorage.setItem('vote_yes', 'yes');
        
        // Отправляем запрос
        let data = {
          action: 'vote_dislike_click_action',
        };
        // addFavToTable(data);
        jQuery.ajax({
          url: ajaxurl, // AJAX handler
          data: data,
          type: 'POST',
          beforeSend : function(xhr) {
            console.log('Загружаю')
          },
          success : function(data) {
            if (data) {
              console.log('data', data);
              voteDislikeResult.textContent = data; 
            }
          }
        });
      }
    });  
  }
});