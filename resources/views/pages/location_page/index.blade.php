<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Location') }}
        </h2>
    </x-slot>

    <div class="min-h-screen ">
        <div class="max-w-7xl mx-auto pt-8 pb-2">
            <div class="flex justify-center">
                <img src="./assets/shell-logo.png" class="w-16" alt="Shell Logo" />
            </div>

            <div class="text-center font-semibold mb-4">Sebaran Shell Cabang Surabaya</div>
            <div class="flex flex-row gap-2">
                <div id="map" class="h-[512px] w-3/4"></div>
                <div class="w-1/4 p-4 bg-white border-2 border-secondary rounded-lg">

                    <div class="text-xl font-semibold">Customize</div>
                    <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

                    <!-- TABS -->
                    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                            data-tabs-toggle="#default-tab-content" role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 bg-gray-100 border-b-2 rounded-t-lg" id="area-tab"
                                    data-tabs-target="#area" type="button" role="tab" aria-controls="area"
                                    aria-selected="false">Area</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="inline-block p-4 bg-gray-100 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="marker-tab" data-tabs-target="#marker" type="button" role="tab"
                                    aria-controls="marker" aria-selected="false">Marker</button>
                            </li>
                        </ul>
                    </div>
                    <div id="default-tab-content">
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="area" role="tabpanel"
                            aria-labelledby="area-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Coming Soon !

                            </p>
                        </div>
                        <div class="hidden rounded-lg" id="marker" role="tabpanel" aria-labelledby="marker-tab">

                            <form action="{{ route('location_store') }}" class="max-w-sm mx-auto flex flex-col"
                                method="post">
                                @csrf
                                <div class="mb-4">
                                    <label for="code"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shell
                                        Code</label>
                                    <input type="text" name="code" aria-describedby="helper-text-explanation"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="ex: bendul merisi">
                                </div>
                                <div class="mb-4">
                                    <label for="address"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shell
                                        Address</label>
                                    <input type="text" name="address" aria-describedby="helper-text-explanation"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="ex: st. bendul merisi">
                                </div>
                                <div class="mb-4">
                                    <label for="location"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position
                                        <span class="text-xs text-gray-500">latitude, longitude</span><span
                                            class="text-red-700">*</span></label>
                                    <div class="flex flex-row items-center gap-2">
                                        <div>
                                            <input type="text" name="lat"
                                                aria-describedby="helper-text-explanation"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="ex: -7.9082xx"required>
                                        </div>
                                        <div>
                                            <input type="text" name="lng"
                                                aria-describedby="helper-text-explanation"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="ex: 112.5412xx" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="mt-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    let map, markers = [];
    /* ----------------------------- Initialize Map ----------------------------- */
    function initMap() {
        map = L.map('map').setView([-7.28, 112.74], 12)

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
                `<div class="text-lg font-bold">Shell-${data.code}</div> ${data.address} <br/> <div class="font-semibold">Opens <span class="text-green-700">${data.open_hours}</span></div>`
            );
            markers.push(marker)
        }
    }

    function generateMarker(data, index) {
        return L.marker(data.position, {
            draggable: false
        });
    }

    /* ------------------------- Handle Map Click Event ------------------------- */
    function mapClicked($event) {
        console.log(map);
        console.log($event.latlng.lat, $event.latlng.lng);
    }
</script>
