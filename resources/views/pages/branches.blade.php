<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        html {
            height: 100%
        }

        body {
            height: 100%;
            margin: 0;
            padding: 0
        }

        .wrap {
            max-width: 75em;
            min-height: 40em;
            height: 100%;
            width: 100%;
            margin: 0 auto;
            padding-top: 2.5%;
        }

        #map-canvas {
            height: 100%;
        }
    </style>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true">
    </script>
    <script type="text/javascript">
        var map;
        var centerPos = new google.maps.LatLng(8.02582238707567, 80.63592190643425);
        var zoomLevel = 7.65;
        var locations = [
            ['Ampara\nTel: 063-2222887\nFax: 063-2222877', 7.291321174132912, 81.67809102505433],
            ['Akuressa\nTel: 041-2284878\nFax: 041-2284878', 6.100986983210131, 80.47575460021514],
            ['Ambalangoda\nTel: 091-2255875', 6.234728495402383, 80.05437233896525],
            ['Ambalanthota\nTel: 047-2225346', 6.122813054125806, 81.02363142732486],
            ['Anuradhapura\nTel: 025-2227638\nFax: 025-2227637', 8.33827714941481, 80.41167278315335],
            ['Avissawella\nTel: 036-2234862\nFax: 036-2233704', 6.955830691672618, 80.2040570273275],
            ['Badulla\nTel: 055-2231692\nFax: 055-2231694', 6.984917642886803, 81.0589407423036],
            ['Balangoda\nTel: 045-2289522', 6.647257372783424, 80.69808273711445],
            ['Batticaloa\nTel: 065-2229896\nFax: 065-2229875', 7.7196013817637885, 81.70120512987248],
            ['Chilaw\nTel: 032-2224252', 7.576928246150864, 79.80014282547785],
            ['Chunnakam\nTel: 021-2240530', 9.74671048892985, 80.02871381014533],
            ['COOP House\nTel: 011-2554358', 6.899099368966076, 79.8539082546391],
            ['Dambulla\nTel: 066-2285377\nFax: 066-2285477', 7.8798518915029785, 80.64989393897122],
            ['Embilipitiya\nTel: 047-2262162\nFax: 047-2262163', 6.333648386196445, 80.85519340064364],
            ['Galgamuwa\nTel: 037-2260996\nFax: 037-2260923', 8.015509141858363, 80.27468361774783],
            ['Galle\nTel: 091-2223155\n Fax: 091-2223295', 6.036686229915599, 80.21700878403048],
            ['Gampaha\nTel: 033-2248601\nFax: 033-2231617', 7.09171620276276, 79.99805031013194],
            ['Homagama\nTel: 011- 2895424\nFax: 011 2893916', 6.840916629444281, 79.99928482547507],
            ['Horana\nTel: 034-2265984\nFax: 034-2265985', 6.719555901671767, 80.07076338129468],
            ['Jaffna\nTel: 021-2228071\nFax: 021-2228071', 9.665489983179217, 80.01483908130879],
            ['Kalawana\nTel: 045-2256033\nFax: 045-2256088', 6.53028783218996, 80.39508159663805],
            ['Kaluthara\nTel: 034-2238252', 6.599472814502481, 79.95803726842531],
            ['Kandy\nTel: 081-2223440\nFax: 081-2205662', 7.296781559640883, 80.63603915616473],
            ['Kegalle\nTel: 035-2231912\nFax: 035-2222215', 7.2538901549544805, 80.34725788500063],
            ['Kekirawa\nTel: 025-2264996\nFax: 025-2264996', 8.040411099009132, 80.59732684238],
            ['Kilinochchi\nTel: 021-2285792', 9.389475165392506, 80.40854931014312],
            ['Kiribathgoda\nTel: 011-2907920\Fax: 011-2987332', 6.982113942782558, 79.93092226780364],
            ['Kuliyapitiya\nTel: 037-2281633\nFax: 037-2281630', 7.469708156236654, 80.0479387384421],
            ['Kurunegala\nTel: 037-2225463\nFax: 037-2221915', 7.485319155053422, 80.36445993711749],
            ['Maharagama\nTel: 011-2088744\nFax: 011 -2089508', 6.845400622872677, 79.93455419478711],
            ['Mahiyanganaya\nTel: 055-2257451', 7.334059033843999, 80.99305212362488,],
            ['Malabe\nTel: 011-2077454\nFax: 011-2185841', 6.902273459073511, 79.95630709663928],
            ['Mannar\nTel: 023-2251336', 8.983499829909164, 79.90913202548475],
            ['Matale\nTel: 066-2057222\nFax: 066-2224499', 7.47953542119013, 80.62304586595349],
            ['Matara\nTel: 041-2237765', 5.949265843095423, 80.54493425245649],
            ['Monaragala\nTel: 055-2276155\nFax: 055-2277533', 6.100877984755639, 80.47577449663683],
            ['Moratuwa\nTel: 011-2644841', 6.773698020128143, 79.88291896780288],
            ['Morawaka\nTel: 041-2284878 \nFax: 041-2284878', 6.264802423273341, 80.48957333441389],
            ['Negambo\nTel: 031-2228446\nFax: 031-2230320', 7.204032410119167, 79.8418592371164],
            ['Nelliady\nTel: 021-2264945\nFax: 021-2264945', 9.804125565310926, 80.19908380938912],
            ['Nikaweratiya\nTel: 037-2260996\nFax: 037-2260923', 7.752021064168177, 80.11714669479069],
            ['Nugegoda\nTel: 011-2088744\nFax: 011-2089508', 6.876637179851999, 79.89059273711521],
            ['Nuwara Eliya\nTel: 052-2235590\nFax: 052-2235594', 6.9569880672604345, 80.79502237347008],
            ['Polonnaruwa\nTel: 027-2227311\nFax: 027-2227310', 7.9269224944156935, 81.0355257524634],
            ['Puttalam\nTel: 032-2265292\nFax: 032-2267366', 8.027112861164685, 79.83818009843755],
            ['Rathnapura\nTel: 045-2233238\nFax: 045-2233238', 6.728704360783553, 80.36361352128006],
            ['Thambuththegama\nTel: 025-2275728', 8.354964990533299, 80.42039775463608],
            ['Trincomalee\nTel: 026-2062121\nFax: 026-2062122', 8.57798138796931, 81.22460545431852],
            ['Vauniya\nTel: 024-2227961\nFax: 024-2227962', 8.753158971349361, 80.49854755431947],
            ['Wennappuwa\nTel: 031-2255910\nFax: 031-2255910', 7.335589061419949, 79.84430773711689],
        ];

        function initialize() {
            var mapOptions = {
                center: centerPos,
                gestureHandling: "none",
                zoomControl: false,
                zoom: zoomLevel
            };
            map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    title: locations[i][0],
                    map: map
                });
            }
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<body>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Branch Network</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Branch Network</li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="">
    <div class="container">
        <div class="section-header">
            <h2>Branch Network</h2>
        </div>
    </div>
</section>
<!-- End About Section -->

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Branch Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Tele No.</th>
                            <th scope="col">Fax No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <div class="wrap">
                    <div id="map-canvas"></div>
                </div>
            </div>
        </div>
    </div><br><br>

</body>

</html>