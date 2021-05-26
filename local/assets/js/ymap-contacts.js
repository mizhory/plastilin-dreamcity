
$(document).ready(function () {
  ymaps.ready(function () {
    var myMap = new ymaps.Map(
      'map',
      {
        controls: [],
        center: [55.760373, 37.655634],
        zoom: 15,
        // autoFitToViewport: 'always'
      },
      {
        searchControlProvider: 'yandex#search',
      }
    ),
      myPlacemark = new ymaps.Placemark(
        [55.760373, 37.655634],
        // myMap.getCenter(),
        {
          balloonContent: '<div class="mapHint"><div class= "mapHint__body"><div class="mapHint__title">Главный офис Dream City</div><div class="mapHint__geo">г. Москва, ул. Народная, д.11, стр.1 подъезд 5</div></div></div>',
        },
        {
          iconLayout: 'default#image',
          iconImageHref: '/local/img/svg/map_geo-dream.svg',
          iconImageSize: [46, 61],
          iconImageOffset: [-32, -31],
        }
      )

    myMap.geoObjects.add(myPlacemark)
  })
})
