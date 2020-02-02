document.addEventListener('DOMContentLoaded', function() {
  window.onload = function() {
    $.ajax({
      method: 'GET',
      url:
        '  https://api.openweathermap.org/data/2.5/weather?q=Zurich&units=metric&appid,ca&appid=4a48e1e1428fd83889074671fbf259d9'
    }).done(function(results) {
      console.log(results);
      $('#results').empty();
      $('#results').append(
        `<img class="ikona" src="http://openweathermap.org/img/wn/${results.weather[0].icon}@2x.png"/>
        <div class="temp-descript"> <p class="descript"> ${results.weather[0].description}</p>
          <p> ${results.main.temp}˚C</p></div>`
      );
    });
  };
});

// document.addEventListener('DOMContentLoaded', function() {
//   window.onload = function() {
//     $.ajax({
//       method: 'GET',

//       authorization: 'TKqSW7Vq6KQ5OAPWr8jrRZumaayJ',

//       url:
//         ' https://api.srgssr.ch/forecasts/v1.0/weather/current/?latitude=47.36667&longitude=8.5'
//     }).done(function(results) {
//       console.log(results);
//       $('#results').empty();
//       $('#results').append();
//     });
//   };
// });

// (function($) {
//   $(function() {
//     var settings = {
//       async: true,
//       crossDomain: true,

//       url:
//         'https://api.srgssr.ch/forecasts/v1.0/weather/current/?latitude=47.36667&longitude=8.5',
//       method: 'GET',
//       headers: {
//         authorization: 'Basic dGNob3JlOkBadXJpY2gyNA=='
//       }
//     };

//     $.ajax(settings).done(function(response) {
//       console.log(response);
//       $('#response ').append();
//     });
//   });
// })(jQuery);

// document.addEventListener('DOMContentLoaded', function() {
//   window.onload = function() {
//     var settings = {
//       async: true,
//       crossDomain: true,
//       url:
//         'https://api.srgssr.ch/forecasts/v1.0/weather/current/?latitude=47.36667&longitude=8.5',
//       method: 'GET',
//       headers: {
//         authorization: 'Basic dGNob3JlOkBadXJpY2gyNA=='
//       }
//     };

//     $.ajax(settings).done(function(response) {
//       console.log(response);
//     });
//   };
// });

// (function($) {
//   $(function() {
//     var settings = {
//       async: true,
//       crossDomain: true,
//       url:
//         'https://visual-crossing-weather.p.rapidapi.com/forecast?unitGroup=us&location=Washington%252CDC%252CUSA&aggregateHours=24',
//       method: 'GET',
//       headers: {
//         'x-rapidapi-host': 'visual-crossing-weather.p.rapidapi.com',
//         'x-rapidapi-key': '8b22cbce7cmshd9d57f6945aae0cp15e50bjsncbbfa08e9fde'
//       }
//     };

//     $.ajax(settings).done(function(response) {
//       console.log(response);
//     });
//   });
// })(jQuery);

// document.addEventListener('DOMContentLoaded', function() {
//   window.onload = function() {
//     var settings = {
//       async: true,
//       crossDomain: true,
//       url:
//         'https://community-open-weather-map.p.rapidapi.com/weather?callback=test&id=2172797&units=%2522metric%2522%20or%20%2522imperial%2522&mode=xml%252C%20html&q=London%252Cuk',
//       method: 'GET',
//       headers: {
//         'x-rapidapi-host': 'community-open-weather-map.p.rapidapi.com',
//         'x-rapidapi-key': '8b22cbce7cmshd9d57f6945aae0cp15e50bjsncbbfa08e9fde'
//       }
//     };

//     $.ajax(settings).done(function(response) {
//       console.log(response);
//     });
//     // );
//     // });
//   };
// });

// $.ajax({
//   url: 'https://api.weatherstack.com/current',
//   data: {
//     access_key: 'babf8076a76f7ef2f6e2f93f91328a0c',
//     query: 'New York'
//   },
//   dataType: 'json',
//   success: function(apiResponse) {
//     console.log(
//       `Current temperature in ${apiResponse.location.name} is ${apiResponse.current.temperature}℃`
//     );
//   }
// });
