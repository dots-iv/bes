
$('.slider_content').slick({
    infinite: true,
    slidesToShow: 2,
    dots:true,
    slidesToScroll: 2
  });
  // Находим все теги <a>
const allLinks = document.querySelectorAll('a');

// Проходимся по каждой ссылке и меняем href на #form
allLinks.forEach(link => {
    link.href = '#consultation-form';
});

