require('./bootstrap');

const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function(){
  // alert('ciao');
  $('#filter-button').click(function(){
    var name = $('#name').val();
    var company = $('#company').val();
    var role = $('#role').val();
    var age = $('#age').val();
    var gender = $('#gender').val();

    var data = {
      'name': name,
      'company': company,
      'role': role,
      'age': age,
      'gender': gender
    };

    for (var key in data) {
      if (data[key].length == 0) {
        delete data[key];
      }
    }

    console.log(data);

    $.ajax(
      {
        'url': 'http://127.0.0.1:88/api/students/filter',
        'method': 'POST',
        'data': data,
        'success': function(data){
        },
        'error': function() {
          console.log('error');

        }
      }
    );
  });
});
