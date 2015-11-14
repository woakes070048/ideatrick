function modalTerms(){
    var modal = UIkit.modal("#modalTerms");
        modal.show();
}

$('.popular-stage').slick({
  infinite: false,
  speed: 200,
  slidesToShow: 3,
  slidesToScroll: 12,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 12,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 12
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 12
      }
    }
  ]
});

$('.the-community').slick({
  infinite: false,
  speed: 200,
  slidesToShow: 4,
  slidesToScroll: 8,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 8,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 8
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 8
      }
    }
  ]
});

$('.fresh-stage').slick({
  infinite: false,
  speed: 200,
  slidesToShow: 4,
  slidesToScroll: 12,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 12,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 12
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 12
      }
    }
  ]
});