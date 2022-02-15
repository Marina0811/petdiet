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
          initialView: 'dayGridMonth',
          events: [
            { // this object will be "parsed" into an Event Object
              title: 'テスト', // a property!
              start: '2022-02-09', // a property!
              end: '2022-02-10' // a property! ** see important note below about 'end' **
            }
          ]
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
