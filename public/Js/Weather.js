(() => {
    const temperatureElement = document.getElementById('temperature');
    const weatherElement = document.getElementById('weather');
    const timezoneElement = document.getElementById('timezone');

    if (!temperatureElement || !weatherElement || !timezoneElement) {
        return;
    }

    const weatherUrl = new URL('https://api.open-meteo.com/v1/forecast');
    weatherUrl.search = new URLSearchParams({
        latitude: '-6.8235',
        longitude: '39.2695',
        current: 'temperature_2m,weather_code',
        timezone: 'Africa/Dar_es_Salaam',
    });

    const weatherDescriptions = {
        0: 'Clear sky',
        1: 'Mainly clear',
        2: 'Partly cloudy',
        3: 'Overcast',
        45: 'Fog',
        48: 'Rime fog',
        51: 'Light drizzle',
        53: 'Moderate drizzle',
        55: 'Dense drizzle',
        56: 'Light freezing drizzle',
        57: 'Dense freezing drizzle',
        61: 'Slight rain',
        63: 'Moderate rain',
        65: 'Heavy rain',
        66: 'Light freezing rain',
        67: 'Heavy freezing rain',
        71: 'Slight snow',
        73: 'Moderate snow',
        75: 'Heavy snow',
        77: 'Snow grains',
        80: 'Slight rain showers',
        81: 'Moderate rain showers',
        82: 'Violent rain showers',
        85: 'Slight snow showers',
        86: 'Heavy snow showers',
        95: 'Thunderstorm',
        96: 'Thunderstorm with light hail',
        99: 'Thunderstorm with heavy hail',
    };

    const updateTimezone = () => {
        timezoneElement.textContent = new Intl.DateTimeFormat('en-GB', {
            timeZone: 'Africa/Dar_es_Salaam',
            timeZoneName: 'short',
            hour: '2-digit',
            minute: '2-digit',
        }).format(new Date());
    };

    let weatherRequestInProgress = false;

    const updateWeather = async () => {
        if (weatherRequestInProgress) {
            return;
        }

        weatherRequestInProgress = true;
        const controller = new AbortController();
        const timeout = window.setTimeout(() => controller.abort(), 10000);

        try {
            const response = await fetch(weatherUrl, {
                headers: { Accept: 'application/json' },
                signal: controller.signal,
            });

            if (!response.ok) {
                throw new Error(`Weather request failed with status ${response.status}`);
            }

            const data = await response.json();
            const temperature = data.current?.temperature_2m;
            const weatherCode = data.current?.weather_code;

            if (!Number.isFinite(temperature) || !Number.isInteger(weatherCode)) {
                throw new Error('Weather response did not contain valid current conditions');
            }

            temperatureElement.textContent = `${Math.round(temperature)}°C`;
            weatherElement.textContent = weatherDescriptions[weatherCode] ?? 'Conditions unavailable';
        } catch (error) {
            console.error('Unable to load current weather for Dar es Salaam:', error);
            temperatureElement.textContent = '--°C';
            weatherElement.textContent = 'Weather unavailable';
        } finally {
            window.clearTimeout(timeout);
            weatherRequestInProgress = false;
        }
    };

    updateTimezone();
    updateWeather();
    window.setInterval(updateTimezone, 60000);
    window.setInterval(updateWeather, 15 * 60 * 1000);
})();
