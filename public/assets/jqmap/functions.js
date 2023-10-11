$(function () {
    $.get('employee/get-jobs', function (data) {
        var markers = [];

        var data = data.states;

        data.forEach(st => {
            markers.push(
                { latLng: [st.latitude, st.longitude], name: st.name, style: { r:7, fill: st.colour } },
            )
        });

        console.log(data);
        $("#world-map").vectorMap({
            map: map,
            backgroundColor: "black",
            showTooltip: true,
            regionsSelectable: false,
            regionsSelectableOne: true,
            markersSelectable: true,
            markersSelectableOne: true,
            markers: markers,
            markerStyle: {
                initial: {
                    fill: 'red',
                    stroke: '#9C9D9B',
                    "fill-opacity": 1,
                    "stroke-width": 1,
                    "stroke-opacity": 1,
                    r: 5
                },
                hover: {
                    stroke: 'black',
                    "stroke-width": 2
                },
                selected: {
                    fill: 'orange'
                },
            },
            series: {
                regions: [
                    {
                        // values: gdpData,
                        scale: ["#C8EEFF", "#0071A4"],
                        normalizeFunction: "polynomial",
                    },
                ],
            },
            onMarkerClick: function (e, code) {
                let jobs = data[code].jobs;
                let modal = bootstrap.Modal.getOrCreateInstance(document.getElementById('jobs-modal'))
                modal.show();
                let list = $('#jobs-list')
                list.html('')
                $('#jobs-count').html(jobs.length)
                jobs.forEach(el => {
                    console.log(el);
                    list.append(`
                        <li>
                            <div class="timeline-panel">
                                <div class="media me-2">
                                    <img alt="image" width="50" src="${el.user.avatar}">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-1">${el.title}</h5>
                                    <small class="d-block">${el.user.name}</small>
                                </div>
                                <div class="dropdown">
                                    <a  class="btn btn-primary light sharp">View
                                    </a>
                                </div>
                            </div>
                        </li>
                    `);
                });
            },
            onRegionTipShow: function (event, label, code) {
                label.html();
            },
            onMarkerTipShow: function (event, label, code) {
                label.html(
                    '<b>' + label.html() + '</b></br>' + '<b>Jobs: </b>' + data[code].jobs.length
                );
            },
        });

    })
})
