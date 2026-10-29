
        // Update Timezone for East Africa
        function updateTimezone() {
            const easternAfrica = new Date().toLocaleString('en-US', { timeZone: 'Africa/Dar_es_Salaam' });
            document.getElementById('timezone').textContent = 'UTC';
        }

        // Update Temperature from Dar es Salaam
        function updateTemperature() {
            // Fetch real weather data for Dar es Salaam, Tanzania
            fetch('https://wttr.in/DarEsSalaam?format=j1')
                .then(response => response.json())
                .then(data => {
                    const temp = data.current_condition[0].temp_C;
                    const condition = data.current_condition[0].description;
                    document.getElementById('temperature').textContent = temp + '°C';
                })
                .catch(error => {
                    console.log('Unable to fetch temperature, using fallback');
                    document.getElementById('temperature').textContent = '--°C';
                });
        }

        // Initialize on page load
        updateTimezone();
        updateTemperature();
    