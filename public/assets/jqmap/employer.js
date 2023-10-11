$(function () {
    $.get('employer/get-applicants', function (data) {
        var markers = [];

        var data = data.states;

        data.forEach(st => {
            markers.push(
                { latLng: [st.latitude, st.longitude], name: st.name, style: { r: 10, fill: st.colour } },
            )
        });

        console.log(data);
        $("#world-map").vectorMap({
            map: map,
            // backgroundColor: "transparent",
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
                        scale: ["#C8EEFF", "#0071A4"],
                        normalizeFunction: "polynomial",
                    },
                ],
            },
            onMarkerClick: function (e, code) {
                let applicants = data[code].applicants;
                if (applicants.length == 0) {
                    alert('No data available');
                    return;
                }
                let modal = bootstrap.Modal.getOrCreateInstance(document.getElementById('applicant-modal'))
                modal.show();
                let list = $('#applicants-list')
                list.html('')
                $('#applicant-count').html(applicants.length)
                applicants.forEach(el => {
                    console.log(el);
                    list.append(`
                        <li>
                            <div class="timeline-panel">
                                <div class="media me-2">
                                    <img alt="image" width="50" src="${el.avatar}">
                                </div>
                                <div class="media-body">
                                    <h5 class="mb-1">${el.name}</h5>
                                    <small class="d-block">${el.address}</small>
                                </div>
                                <div class="dropdown">
                                    <a href='/employer/applicant/${el.id}' class="btn btn-primary light sharp">View
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
                    '<b>' + label.html() + '</b></br>' + '<b>Employees: </b>' + data[code].applicants.length
                );
            },
        });

    })
})
