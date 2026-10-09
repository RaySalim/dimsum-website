// Lights Out countdown — next Grand Prix starts Sunday 07:00 local time
(function () {
    var daysEl = document.getElementById('countdown-days');
    var hoursEl = document.getElementById('countdown-hours');
    var minutesEl = document.getElementById('countdown-minutes');
    var secondsEl = document.getElementById('countdown-seconds');
    var liveEl = document.getElementById('countdown-live');

    if (!daysEl || !hoursEl || !minutesEl || !secondsEl) {
        return;
    }

    function nextRaceStart() {
        var now = new Date();
        var race = new Date(now);
        race.setHours(7, 0, 0, 0);
        var daysUntilSunday = (7 - now.getDay()) % 7;
        race.setDate(now.getDate() + daysUntilSunday);
        if (race <= now) {
            race.setDate(race.getDate() + 7);
        }
        return race;
    }

    function pad(n) {
        return String(n).padStart(2, '0');
    }

    function tick() {
        var now = new Date();
        var diff = nextRaceStart() - now;

        if (diff <= 0) {
            daysEl.textContent = '00';
            hoursEl.textContent = '00';
            minutesEl.textContent = '00';
            secondsEl.textContent = '00';
            if (liveEl) {
                liveEl.classList.remove('hidden');
            }
            return;
        }

        var totalSeconds = Math.floor(diff / 1000);
        daysEl.textContent = pad(Math.floor(totalSeconds / 86400));
        hoursEl.textContent = pad(Math.floor((totalSeconds % 86400) / 3600));
        minutesEl.textContent = pad(Math.floor((totalSeconds % 3600) / 60));
        secondsEl.textContent = pad(totalSeconds % 60);
    }

    tick();
    setInterval(tick, 1000);
})();
