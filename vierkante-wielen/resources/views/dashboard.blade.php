<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sluiten</button>
                    <button type="button" id="saveBtn" class="btn btn-primary">Opslaan</button>
                </div>
            </div>
        </div>
    </div>


    <x-app-layout>
        <x-slot name="header">
        </x-slot>

        <div class="content">
            <div class="table-text">
                <div class="table-grey">
                    <h2>Recente rijlessen</h2>
                    <div class="table-grey-content">
                        <table>
                            <tbody>
                                <tr>
                                    <td><b>Bruno Dijkhuis</b></td>
                                    <td>8-3-2024 om 13:00 uur</td>
                                </tr>
                                <tr>
                                    <td><b>Bruno Dijkhuis</b></td>
                                    <td>7-3-2024 om 14:30 uur</td>
                                </tr>
                                <tr>
                                    <td><b>Bruno Dijkhuis</b></td>
                                    <td>6-3-2024 om 12:45 uur</td>
                                </tr>
                                <tr>
                                    <td><b>Bruno Dijkhuis</b></td>
                                    <td>5-3-2024 om 13:00 uur</td>
                                </tr>
                                <tr>
                                    <td><b>Bruno Dijkhuis</b></td>
                                    <td>4-3-2024 om 14:30 uur</td>
                                </tr>
                                <tr>
                                    <td><b>Bruno Dijkhuis</b></td>
                                    <td>3-3-2024 om 12:45 uur</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="table-grey">
                    <h2>Jouw gegevens</h2>
                    <div class="table-content">
                        <table>
                            <tbody>
                                <tr>
                                    <td><b>Naam:</b></td>
                                    <td>Tyrone Sinnathamby</td>
                                </tr>
                                <tr>
                                    <td><b>Adres:</b></td>
                                    <td>Westerweg 26</td>
                                </tr>
                                <tr>
                                    <td><b>Postcode:</b></td>
                                    <td>1906 EE</td>
                                </tr>
                                <tr>
                                    <td><b>Woonplaats:</b></td>
                                    <td>Limmen</td>
                                </tr>
                                <tr>
                                    <td><b>Telefoonnummer:</b></td>
                                    <td>06 12 34 56 78</td>
                                </tr>
                                <tr>
                                    <td><b>Geboortedatum:</b></td>
                                    <td>28-02-2006</td>
                                </tr>
                                <tr>
                                    <td><b>Geslacht:</b></td>
                                    <td>Man</td>
                                </tr>
                                <tr>
                                    <td><b>E-mail:</b></td>
                                    <td>tyrone@vierkantewielen.com</td>
                                </tr>
                                <tr>
                                    <td><b>Rang:</b></td>
                                    <td>Instructeur</td>
                                </tr>
                                <tr>
                                    <td><b>Meest recente rijles:</b></td>
                                    <td>8-3-2024 om 13:00 uur</td>
                                </tr>
                                <tr>
                                    <td><b>Volgende rijles:</b></td>
                                    <td>9-3-2024 om 12:45 uur</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

    <div class="dashboard-section">
        <h2>Rijinstructeurs Beheren</h2>
        <p>Als admin kunt u hier rijinstructeurs toevoegen en beheren.</p>
        <a href="{{ route('instructors.create') }}" class="btn btn-primary">Rijinstructeur Toevoegen</a>
    </div>



{{-- Calandar --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-md-11 offset-1 mt-5 mb-5">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {

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
                select: function (start, end, allDays) {
                    $('#bookingModal').modal('toggle');

                    $('#saveBtn').click(function () {
                        var title = $('#title').val();
                        var start_date = moment(start).format('YYYY-MM-DD');
                        var end_date = moment(end).format('YYYY-MM-DD');

                        $.ajax({
                            url: "{{ route('calendar.store') }}",
                            type: "POST",
                            dataType: 'json',
                            data: {
                                title,
                                start_date,
                                end_date
                            },
                            success: function (response) {
                                $('#bookingModal').modal('hide')
                                $('#calendar').fullCalendar('renderEvent', {
                                    'title': response.title,
                                    'start': response.start,
                                    'end': response.end,
                                    'color': response.color
                                });
                            },

                            error: function (error) {
                                if (error.responseJSON.errors) {
                                    $('#titleError').html(error.responseJSON.errors
                                        .title);
                                }
                            },
                        });
                    });
                },
                editable: true,
                eventDrop: function (event) {
                    var id = event.id;
                    var start_date = moment(event.start).format('YYYY-MM-DD');
                    var end_date = moment(event.end).format('YYYY-MM-DD');

                    $.ajax({
                        url: "{{ route('calendar.update', '') }}" + '/' + id,
                        type: "PATCH",
                        dataType: 'json',
                        data: {
                            start_date,
                            end_date
                        },
                        success: function (response) {
                            swal("Goed gedaan!", "Evenement bijgewerkt!", "success");
                        },

                        error: function (error) {
                            console.log(error)
                        },
                    });
                },
                eventClick: function (event) {
                    var id = event.id;

                    if (confirm('Weet je zeker dat je dit wilt verwijderen?')) {
                        $.ajax({
                            url: "{{ route('calendar.destroy', '') }}" + '/' + id,
                            type: "DELETE",
                            dataType: 'json',
                            success: function (response) {
                                $('#calendar').fullCalendar('removeEvents', response);
                                // swal("Goed gedaan!", "Evenement Verwijderd!", "success");
                            },
                            error: function (error) {
                                console.log(error)
                            },
                        });
                    }

                },
                selectAllow: function (event) {
                    return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1, 'second').utcOffset(false), 'day');
                },


            })


            $("#bookingModal").on("hidden.bs.modal", function () {
                $('#saveBtn').unbind();
            });

                // $('.fc-event').css('font-size', '14px');

                // $('.fc').css('background-color', 'white')

                $('.fc-event').css('display', 'flex');
                $('.fc-event').css('justify-content', 'center');
                $('.fc-event').css('margin-bottem', '-30px');
                $('.fc-event').css('margin-top', '-29px');

        });
    </script>
</body>

</html>
