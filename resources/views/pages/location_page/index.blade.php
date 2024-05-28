<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Location') }}
        </h2>
    </x-slot>

    <div class="min-h-screen ">
        <div class="max-w-7xl mx-auto pt-10 pb-5">
            <div class="flex justify-center">
                <img src="./assets/shell-logo.png" class="w-16" alt="Shell Logo" />
            </div>

            <div class="text-center font-semibold">Sebaran Shell Cabang Surabaya</div>
            <div id="map" class="h-[512px]"></div>
        </div>
    </div>
</x-app-layout>

<script>
    let map, markers = [];
    /* ----------------------------- Initialize Map ----------------------------- */
    function initMap() {
        map = L.map('map', {
            center: {
                lat: -7.7926,
                lng: 110.3659,
            },
            zoom: 13
        });

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        map.on('click', mapClicked);
        initMarkers();
    }
    initMap();

    /* --------------------------- Initialize Markers --------------------------- */
    function initMarkers() {
        const offices = <?php echo json_encode($offices); ?>;

        for (let index = 0; index < offices.length; index++) {

            const data = offices[index];
            const marker = generateMarker(data, index);

            marker.addTo(map).bindPopup(
                `<b>Shell-${data.code}</b> <br/> ${data.address} <br/> Open ${data.operation_hours}`);
            map.panTo(data.position);
            markers.push(marker)
        }
    }

    function generateMarker(data, index) {
        return L.marker(data.position, {
                draggable: false
            })
            .on('click', (event) => markerClicked(event, index))
            .on('dragend', (event) => markerDragEnd(event, index));
    }

    /* ------------------------- Handle Map Click Event ------------------------- */
    function mapClicked($event) {
        console.log(map);
        console.log($event.latlng.lat, $event.latlng.lng);
    }

    /* ------------------------ Handle Marker Click Event ----------------------- */
    function markerClicked($event, index) {
        console.log(map);
        console.log($event.latlng.lat, $event.latlng.lng);
    }

    /* ----------------------- Handle Marker DragEnd Event ---------------------- */
    function markerDragEnd($event, index) {
        console.log(map);
        console.log($event.target.getLatLng());
    }
</script>
