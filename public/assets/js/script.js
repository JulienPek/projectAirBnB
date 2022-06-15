let el = document.getElementById('calendar');
let calendar = new FullCalendar.Calendar(el, {
  plugins: ['dayGrid', 'bootstrap'],
  themeSystem: 'bootstrap',
  weekNumbers: true,
  eventLimit: true,
    events: 'https://fullcalendar.io/demo-events.json'
    /* [
        {
            title: 'All Day Event',
            start: '2022-01-01',
            end: '2022-12-31'
        },
    ] */
})
calendar.render();