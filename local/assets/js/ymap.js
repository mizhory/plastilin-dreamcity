$(document).ready(function () {
  ymaps.ready(function () {
    let zoomPanelTop
    let zoomPanelRight
    if ($(window).width() > 768) {
      zoomPanelTop = document.querySelector('#map').offsetHeight / 2 - 55
    } else if ($(window).width() <= 768) {
      zoomPanelTop = 20
    }
    if ($(window).width() > 1200) {
      zoomPanelRight = 80
    } else if ($(window).width() <= 1200) {
      zoomPanelRight = 20
    }

    var myMap = new ymaps.Map(
      'map',
      {
        controls: [],
        center: [56.120373, 37.955634],
        zoom: 9,
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
          balloonContent: '<div class="mapHint"><div class="mapHint__image"><img src="../../templates/dreamcity-plastilin/assets/img/similar1.png"></div><div class= "mapHint__body"><div class="mapHint__title">3-комн. квартира, 105,6 м²</div> <div class="mapHint__geo">Москва, САО, р-н Аэропорт, Ленинградский просп., 36</div><div class="mapHint__price"><span>1200 ₽ </span>за месяц</div></div></div>',
          hideIconOnBalloonOpen: false,
        },
        {
          iconLayout: 'default#image',
          iconImageHref: '../img/svg/map_geo.svg',
          iconImageSize: [46, 61],
          iconImageOffset: [-32, -31],
        }
      ),

      ZoomLayout = ymaps.templateLayoutFactory.createClass("<div class='mapZoom-panel'>" +
        "<div id='zoom-in' class='mapZoom-btn'></i></div>" +
        "<div id='zoom-out' class='mapZoom-btn'></i></div>" +
        "</div>", {
        build: function () {
          ZoomLayout.superclass.build.call(this);
          this.zoomInCallback = ymaps.util.bind(this.zoomIn, this);
          this.zoomOutCallback = ymaps.util.bind(this.zoomOut, this);
          $('#zoom-in').bind('click', this.zoomInCallback);
          $('#zoom-out').bind('click', this.zoomOutCallback);
        },
        clear: function () {
          $('#zoom-in').unbind('click', this.zoomInCallback);
          $('#zoom-out').unbind('click', this.zoomOutCallback);
          ZoomLayout.superclass.clear.call(this);
        },
        zoomIn: function () {
          var map = this.getData().control.getMap();
          map.setZoom(map.getZoom() + 1, { checkZoomRange: true });
        },
        zoomOut: function () {
          var map = this.getData().control.getMap();
          map.setZoom(map.getZoom() - 1, { checkZoomRange: true });
        }
      }),

      zoomControl = new ymaps.control.ZoomControl({
        options: {
          layout: ZoomLayout,
          position: {
            top: zoomPanelTop,
            left: 'auto',
            right: zoomPanelRight
          }
        }
      });

    myMap.controls.add(zoomControl);
    myMap.geoObjects.add(myPlacemark)

    let openMapBtn = document.querySelector('.cardInfo__openMap')
    let closeMapBtn = document.querySelector('.cardInfo__closeMap')
    if (openMapBtn !== null) {
      openMapBtn.addEventListener('click', function () {
        setTimeout(() => {
          myMap.container.fitToViewport()
        }, 300);
      })
      closeMapBtn.addEventListener('click', function () {
        setTimeout(() => {
          myMap.container.fitToViewport()
        }, 300);
      })
    }

  })
})
