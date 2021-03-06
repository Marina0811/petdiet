<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Petdiet</title>
        <link href="{{ secure_asset('fullcalendar/lib/main.css') }}" rel='stylesheet'>
        <script src="{{ secure_asset('fullcalendar/lib/main.js') }}"></script>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            navLinks: true,
            navLinkDayClick: function(date, jsEvent) {
                var year = date.getFullYear().toString() 
                var month = (date.getMonth()+1).toString().padStart(2, "0") 
                //var month = (date.getUTCMonth()+1).toString().padStart(2, "0") 
                var day = date.getDate().toString().padStart(2, "0")
                var ymd = year + "-" + month + "-" + day
                //console.log(date);
                //console.log(month);
                //console.log(ymd);
                const url = '{{ route('changeDate', '*') }}'.replace('*', ymd);
                window.location.href = url;
            },
            initialView: 'dayGridMonth',
            events: @json($events),
            views: {
                dayGridMonth: { // name of view
                    titleFormat: function(date) {
                        return date.date.year + '/' + (date.date.month + 1);
                    }
                }
            }
        });
        calendar.render();
      });
        </script>
    </head>
    <body>
        <div id="calendar"></div>
    </body>
</html>








<!--
<form method="POST" action="">
   @csrf
  <input type="text" name="title">
  <input type="date" name="start">
  <input type="color" name="textColor">
  <button type="submit">登録</button>
</form>
-->
