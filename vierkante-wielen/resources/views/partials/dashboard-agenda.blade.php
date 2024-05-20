<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <!-- FullCalendar CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <!-- SweetAlert JS -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- FullCalendar Dutch locale -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/locale/nl.js'></script>

    <style>
        /* Voeg hier eventuele aangepaste stijlen toe */
        .opmerking {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 7px solid #FFB703;
            border-radius: .3rem;
            outline: 0;
        }

        .btn-secondary {
            color: #fff;
            border-color: #6c757d;
            background-color: #003D86;
            padding: 5px 15px;
            margin-left: 10px;
            border: 5px solid transparent;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
        }

        .btn-primary {
            color: #fff;
            background-color: #FFB703;
            border-color: #6c757d;
            padding: 5px 15px;
            margin-left: 10px;
            border: 5px solid transparent;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
        }

        .btn-secondary,
        .btn-primary {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Toevoegen van een schaduw */
            transition: box-shadow 0.3s ease;
            /* Vloeiende overgang voor schaduw bij hover */
        }

        .btn-secondary:hover,
        .btn-primary:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Intensifiëren van de schaduw bij hover */
            background-color: #6c757d;
        }

        .time-event label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .time-event input[type="time"] {
            padding: 5px;
            border: 2px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .time-event input[type="time"]:focus {
            outline: none;
            border-color: #FFB703;
            /* Kleur van de focusrand aanpassen */
            box-shadow: 0 0 5px rgba(0, 61, 134, 0.5);
            /* Toevoegen van een schaduw bij focus */
        }

        h3 {
            margin-bottom: 10px;
            margin-top: 10px;
            font-size: 18px;
            color: #003D86;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Popup Modal for Booking -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Rijles inplannen</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <h3>Titel</h3>
                    <input type="text" class="form-control" id="title">
                    <span id="titleError" class="text-danger"></span>
                </div>
                <!-- Time Selection -->
                <div class="time-event">
                    <h3 for="appt">Begin tijd</h3>
                    <input type="time" id="start-time" name="StartTime" min="07:00" max="23:59" required />
                    <h3 for="appt">Eind tijd</h3>
                    <input type="time" id="end-time" name="EndTime" min="07:00" max="23:59" required />
                </div>
                <!-- Dropdown for Students -->
                <div class="table-grey">
                    <h3>Leerlingen</h3>
                    <div class="table-grey-content">
                        <select id="leerlingen-dropdown">
                            <option value="leerlingid">Selecteer een leerling</option>
                            @foreach ($users as $user)
                                @if ($user->hasRole('Leerling'))
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div <!-- Dropdown for Instructors -->
                <div class="table-grey">
                    <h3>Rijinstructeurs</h3>
                    <div class="table-grey-content">
                        <select id="rijinstructeurs-dropdown">
                            <option value="instructeurid">Selecteer een rijinstructeur</option>
                            @foreach ($users as $user)
                                @if ($user->hasRole('Rijinstructeur'))
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- Car Type Selection -->
                <div class="modal-body">
                    <h3>Auto type</h3>
                    <select class="form-control" name="autoType" id="auto-type">
                        <option value="Schakel">Schakel</option>
                        <option value="Automaat">Automaat</option>
                        <option value="Handicapt">Handicapt</option>
                    </select>
                    <span id="autoTypeError" class="text-danger"></span>
                </div>
                <!-- Remarks Section -->
                <div class="opmerking">
                    <h3>Opmerking</h3>
                    <input type="text" id="opmerking">
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sluiten</button>
                    <button type="button" id="saveBtn" class="btn btn-primary">Opslaan</button>
                    <button type="button" id="deleteBtn" class="btn btn-danger">Verwijderen</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Container -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mt-5">Agenda</h2>
                <div id="calendar"></div>
            </div>
        </div>
    </div>


    <!-- Script to handle FullCalendar and Modal -->
    <script>
        $(document).ready(function() {
            // Set up AJAX with CSRF token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Load events into FullCalendar
            var booking = @json($events);

            // Determine if user is admin or instructor
            var isAuthorizedUser =
                {{ auth()->user()->hasRole('Admin') || auth()->user()->hasRole('Rijinstructeur') ? 'true' : 'false' }};

            // Initialize FullCalendar
            var calendar = $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,list',
                },
                events: booking,
                selectable: isAuthorizedUser,
                selectHelper: true,
                defaultView: 'agendaWeek',
                select: function(start, end, allDays) {
                    if (isAuthorizedUser) {
                        $('#bookingModal').modal('toggle');
                        $('#saveBtn').data('start', start);
                        $('#saveBtn').data('end', end);
                    }
                },
                editable: true,
                eventDrop: function(event) {
                    var id = event.id;
                    var start_date = moment(event.start).format('YYYY-MM-DD HH:mm');
                    var end_date = moment(event.end).format('YYYY-MM-DD HH:mm');

                    // AJAX request to update the event
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

                    // Load event data into the modal
                    $('#title').val(event.title);
                    $('#start-time').val(moment(event.start).format('HH:mm'));
                    $('#end-time').val(moment(event.end).format('HH:mm'));
                    $('#rijinstructeurs-dropdown').val(event.instructeurid);
                    $('#leerlingen-dropdown').val(event.leerlingid);
                    $('#auto-type').val(event.auto_type);
                    $('#opmerking').val(event.opmerking);

                    // Show the modal
                    $('#bookingModal').modal('toggle');

                    // Set the save button data
                    $('#saveBtn').data('id', id);

                    // Unbind and bind the save button click event
                    $('#saveBtn').unbind().click(function() {
                        var title = $('#title').val();
                        var autoType = $('#auto-type').val();
                        var startDateTime = $('#start-time').val();
                        var endDateTime = $('#end-time').val();
                        var instructeurid = $('#rijinstructeurs-dropdown').val();
                        var leerlingid = $('#leerlingen-dropdown').val();
                        var opmerking = $('#opmerking').val();

                        // Formatteer de start- en einddatum met moment.js
                        var start = moment(startDateTime, 'HH:mm').format(
                        'YYYY-MM-DD HH:mm:ss');
                        var end = moment(endDateTime, 'HH:mm').format('YYYY-MM-DD HH:mm:ss');

                        // AJAX request to update the event
                        $.ajax({
                            url: "/calendar/update/" + id,
                            type: "PATCH",
                            dataType: 'json',
                            data: {
                                title,
                                auto_type: autoType,
                                start_date: start,
                                end_date: end,
                                instructeurid,
                                leerlingid,
                                opmerking,
                            },
                            success: function(response) {
                                $('#bookingModal').modal('hide');
                                location.reload();
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

                    // Unbind and bind the delete button click event
                    $('#deleteBtn').unbind().click(function() {
                        if (confirm('Weet je zeker dat je dit wilt verwijderen?')) {
                            // AJAX request to delete the event
                            $.ajax({
                                url: "/calendar/destroy/" + id,
                                type: "DELETE",
                                dataType: 'json',
                                success: function(response) {
                                    $('#calendar').fullCalendar('removeEvents', id);
                                    location.reload();
                                    $('#bookingModal').modal('hide');
                                },
                                error: function(error) {
                                    location.reload();
                                    console.log(error);
                                },
                            });
                        }
                    });
                },
                selectAllow: function(event) {
                    return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1,
                        'second').utcOffset(false), 'day');
                },
                minTime: "07:00:00", // Begin van de dag
                maxTime: "24:00:00", // Einde van de dag
            });

            // Unbind the save button click event when modal is closed
            $("#bookingModal").on("hidden.bs.modal", function() {
                $('#saveBtn').unbind();
                $('#deleteBtn').unbind();
            });

            $('#saveBtn').click(function () {
                var title = $('#title').val();
                var autoType = $('#auto-type').val();
                var startDateTime = $('#start-time').val();
                var endDateTime = $('#end-time').val();
                var instructeurid = $('#rijinstructeurs-dropdown').val();
                var leerlingid = $('#leerlingen-dropdown').val();
                var opmerking = $('#opmerking').val();
    
                var start = $('#saveBtn').data('start');
                var end = $('#saveBtn').data('end');
    
                var startDate = moment(start.format('YYYY-MM-DD') + ' ' + startDateTime,
                    'YYYY-MM-DD HH:mm').format('YYYY-MM-DD HH:mm');
                var endDate = moment(end.format('YYYY-MM-DD') + ' ' + endDateTime,
                    'YYYY-MM-DD HH:mm').format('YYYY-MM-DD HH:mm');
    
                // AJAX request to store the event
                $.ajax({
                    url: "/calendar/store",
                    type: "POST",
                    dataType: 'json',
                    data: {
                        title,
                        auto_type: autoType,
                        start_date: startDate,
                        end_date: endDate,
                        instructeurid,
                        leerlingid,
                        opmerking,
                    },
                    success: function (response) {
                        $('#bookingModal').modal('hide');
                        $('#calendar').fullCalendar('renderEvent', {
                            'title': response.title,
                            'start': response.start,
                            'end': response.end,
                            'color': response.color,
                            'instructeurid': instructeurid,
                            'leerlingid': leerlingid
                        });
                        location.reload();
                    },
                    error: function (error) {
                        if (error.responseJSON.errors) {
                            $('#titleError').html(error.responseJSON.errors.title);
                            $('#autoTypeError').html(error.responseJSON.errors.auto_type);
                        }
                    },
                });
            });
        });
    </script>
    </body>