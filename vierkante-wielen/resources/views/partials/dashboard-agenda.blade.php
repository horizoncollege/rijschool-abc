<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Voeg het Nederlandse locale script toe -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/locale/nl.js'></script>

    <style>


    </style>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Rijles inplannen</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" id="title">
                    <span id="titleError" class="text-danger"></span>
                </div>
                <div class="modal-body">
                    <select class="form-control" name="autoType" id="auto-type">
                        <option value="Schakel">Schakel</option>
                        <option value="Automaat">Automaat</option>
                        <option value="Handicapt">Handicapt</option>
                    </select>
                    <span id="autoTypeError" class="text-danger"></span>
                    <!-- Voeg een nieuw span toe voor eventuele fouten -->
                    <div class="time-event">
                        <label for="appt">Begin tijd</label>
                        <input type="time" id="start-time" name="StartTime" required />
                        <label for="appt">Eind tijd</label>
                        <input type="time" id="end-time" name="EndTime" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sluiten</button>
                    <button type="button" id="saveBtn" class="btn btn-primary">Opslaan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mt-5">Agenda</h3>
                <div class="">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var booking = @json($events);

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev, next today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay, list',
                },

                events: booking,
                selectable: true,
                selectHelper: true,
                defaultView: 'agendaWeek',
                select: function(start, end, allDays) {
                    $('#bookingModal').modal('toggle');

                    $('#saveBtn').click(function() {
    var title = $('#title').val();
    var autoType = $('#auto-type').val();
    var startDateTime = $('#start-time').val();
    var endDateTime = $('#end-time').val();

    // Voeg de geselecteerde tijd toe aan de geselecteerde start- en einddatum
    var startDate = moment(start.format('YYYY-MM-DD') + ' ' + startDateTime,
        'YYYY-MM-DD HH:mm').format('YYYY-MM-DD HH:mm');
    var endDate = moment(end.format('YYYY-MM-DD') + ' ' + endDateTime,
        'YYYY-MM-DD HH:mm').format('YYYY-MM-DD HH:mm');


    $.ajax({
        url: "/calendar/store",
        type: "POST",
        dataType: 'json',
        data: {
            title,
            auto_type: autoType,
            start_date: startDate,
            end_date: endDate
        },
        success: function(response) {
            $('#bookingModal').modal('hide');
            $('#calendar').fullCalendar('renderEvent', {
                'title': response.title,
                'start': response.start,
                'end': response.end,
                'color': response.color
            });
            location.reload(); // Hier wordt de pagina vernieuwd
        },
        error: function(error) {
            if (error.responseJSON.errors) {
                $('#titleError').html(error.responseJSON.errors
                    .title);
                $('#autoTypeError').html(error.responseJSON
                    .errors.auto_type);
            }
        },
    });
});


            },
            editable: true,
            eventDrop: function(event) {
                var id = event.id;
                var start_date = moment(event.start).format('YYYY-MM-DD HH:mm');
                var end_date = moment(event.end).format('YYYY-MM-DD HH:mm');

                $.ajax({
                    url: "/calendar/update/" + event.id,
                    type: "PATCH",
                    dataType: 'json',
                    data: {
                        start_date,
                        end_date
                    },
                    success: function(response) {
                        swal("Gelukt!", "afspraak bijgewerkt!", "success");
                    },

                    error: function(error) {
                        console.log(error)
                    },
                });
            },
            eventClick: function(event) {
                var id = event.id;

                if (confirm('Weet je zeker dat je dit wilt verwijderen?')) {
                    $.ajax({
                        url: "/calendar/destroy/" + event.id,
                        type: "DELETE",
                        dataType: 'json',
                        success: function(response) {
                            $('#calendar').fullCalendar('removeEvents', response);
                        },
                        error: function(error) {
                            console.log(error)
                        },
                    });
                }

            },
            selectAllow: function(event) {
                return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1,
                    'second').utcOffset(false), 'day');
            },

            minTime: "07:00:00", // Begin van de dag
            maxTime: "24:00:00", // Einde van de dag
        })

        

        $("#bookingModal").on("hidden.bs.modal", function() {
            $('#saveBtn').unbind();
        });

    });
    </script>
</body>

</html>
