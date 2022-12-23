$(document).ready(() => {
    // slide toggle 
    $('.wrap ul').hide();
    $('.wrap ul').fadeIn(2000);

    $('.wrap .nameDescrPrice').click((e) => {
        e.target.nextElementSibling.className === 'img' ? $(e.target.nextElementSibling).slideToggle().css({display: 'flex'}) : $(e.target).parent().next().slideToggle().css({display: 'flex'});
    });

    // swiper config
    const swiper = new Swiper('.swiper', {
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
    });

    // del empty img/.slide-wrap
    $('.swiper-slide').each((i, element) => {
        $(element)[0].children.length < 1 ? $(element).hide() : false;
    });
}); 