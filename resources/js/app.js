require('./bootstrap');

const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function(){
  alert('ciao');
  $('#filter-button').click(function(){
    var nome = $('#nome').val();
    var azienda = $('#azienda').val();
    var ruolo = $('#ruolo').val();
    var eta = $('#eta').val();
    var genere= $('#genere').val();

    var data = {
      'nome': nome,
      'azienda': azienda,
      'ruolo': ruolo,
      'eta': eta,
      'genere': genere
    };

    for (var key in data) {
      if (data[key].length == 0) {
        delete data[key];
      }
    }

    console.log(data);

    $.ajax(
      {
        'url': 'http://127.0.0.1:8000/api/students/filter',
        'method': 'POST',
        'data': data,
        'success': function(data){

          console.log(data);

          // $('.students').html('');

         //  var source = $("#entry-template").html();
         //  var template = Handlebars.compile(source);
         //  for (var i = 0; i < data.length; i++) {
         //   var element = data[i];
         //   var html = template(element);
         //   $('.students').append(html);
         // }
        },
        'error': function() {
          console.log('error');

        }
      }
    );
  });
});
