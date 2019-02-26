<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: yty-->
<!-- * Date: 28.06.2018-->
<!-- * Time: 13:59-->
<!-- */-->

</body>
<script type="text/javascript">
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init(){
        myMap = new ymaps.Map("map", {
            center: [59.92821248, 30.34716829],
            zoom: 16
        });
        myPlacemark = new ymaps.Placemark([59.92821248, 30.34716829], { hintContent: 'Scuderia!', balloonContent: 'Scuderia Gym' });

        myMap.geoObjects.add(myPlacemark);

    }
</script>
</html>