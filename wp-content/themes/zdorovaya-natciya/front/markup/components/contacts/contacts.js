
export function map() {

    ymaps.ready(function () {

        const myMap = new ymaps.Map('map', {
                center: [
                    parseFloat(yandex_map_settings.lat),
                    parseFloat(yandex_map_settings.long)
                ],
                zoom: 15,
                controls: []
            }, {
            // searchControlProvider: 'yandex#search'
            }),


            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                hintContent: yandex_map_settings.address,
                balloonContent: yandex_map_settings.address
            }, {

            });

        myMap.geoObjects.add(myPlacemark);
    });


}


// 43.466811, 39.902473
