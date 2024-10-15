// script.js

(function ($, Drupal) {
  Drupal.behaviors.slickCarousel = {
    attach: function (context, settings) {
      if (!$('.content-wrapper').hasClass('slick-initialized')) {
        $('.content-wrapper', context).slick({
          arrow: true,
          dots: false,
          infinite: true,
          speed: 1500,
          slidesToShow: 3,
          slidesToScroll: 3,
          responsive: [
            {
              breakpoint: 1020,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrow: false
              }
            }
          ]
        });
      }
      $(document).ready(function ($) {
        var selectElement = $('.view-event-tab .view-filters select');
        var formElement = $('.view-event-tab .view-filters .views-exposed-form');
        var ulElement = $('<ul class="event-tab-list"></ul>');
        selectElement.find('option').each(function () {
          var optionValue = $(this).val();
          var optionText = $(this).text();
          var liElement = $('<li></li>')
            .text(optionText)
            .attr('data-value', optionValue)
            .addClass('event-tab-item');
          liElement.on('click', function () {
            selectElement.val(optionValue).trigger('change');
            ulElement.find('li').removeClass('active');
            $(this).addClass('active');
          });
          ulElement.append(liElement);
        });
        formElement.after(ulElement);
        selectElement.hide();
        var initialValue = selectElement.val();
        ulElement.find('li[data-value="' + initialValue + '"]').addClass('active');
      });
    }  
  };
})(jQuery, Drupal);
