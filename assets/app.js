/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

// require jQuery normally
const $ = require("jquery");

// create global $ and jQuery variables
global.$ = global.jQuery = $;

$(document).ready(function() {
    var inputString = $("#userconnecetd").val();
    console.log(inputString);
    $.ajax({
        url: "/getAuth/"+inputString
    }).then(function(data) {
        $("#dir").text(data.dir);
        $("#directeur").val(data.dir);

        $("#rh").text(data.Rh);
        $("#rh1").val(data.Rh);
       console.log(data);
    });
});
 
/*let isValid = true;
$("input[type='checkbox']").each(function(value, index){
if(!$(this).is(":checked")){
    let x= $(this).attr('id');
    $("#"+x).show()


}else{
    $("#"+x).hide()
 
}
})*/




$('#test_redis_fileinputRedis').change(function (e) {
    e.preventDefault();  

    const fileInput = $('#test_redis_fileinputRedis')[0];  
    const files = fileInput.files;  
    console.log(files);

    if (files.length > 0) {
        const formData = new FormData();
        formData.append('file', files[0]); 

        $.ajax({
            url: '/update-file',  
            method: 'post',
            processData: false, 
            contentType: false,  
            data: formData,
            success: function(response) {
                alert('File updated!');
            },
            error: function() {
                alert('An error occurred while updating the file.');
            }
        });
    } else {
        alert('No file selected.');
    }
});

$("#btnform" ).on( "click", function() {
    $("input[type='checkbox']").each(function(value, index){
        console.log($(this).is(":checked"));
        if(!$(this).is(":checked")){
            $(this).parent().children('p').show();
        }else{
            $(this).parent().children('p').hide();
        }
    })
    isChecked();
  });

  $('#consumeUpdates').click(function () {
    $.ajax({
        url: '/consume-file-create-group', 
        method: 'POST', 
        success: function (response) {
            // alert(response.message || 'Updates consumed successfully!');
        },
        error: function (xhr) {
            // alert('An error occurred: ' + (xhr.responseText || 'Unknown error'));
        }
    });
});



$(function () {
    $('#test_redis_ingenieurautocomplete')
      .autocomplete(
        {
          hint: true,
          minLength: 1,
          delay: 1000,
        },
        {
          source: function (query, response) {
            var url = '/search?query=' + query.term;
            $.ajax({
              url: url,
              cache: false,
              success: function (data) {
                response(data);
                data.forEach(element => {
                    // $('#test_redis_ingenieurautocomplete').append(element);
                });
              },
              error: function (data) {
                alert(data.statusText);
              },
            });
          },
          select: function (event, ui) {
         
          },
        },
      )
      .on('autocomplete:selected', function (event, suggestion, dataset, context) {
        alert(event, suggestion, dataset, context);
      });
  });

  
$('#ConsumerName').click(function () {
    $.ajax({
        url: '/fetchstream',
        method: 'GET',
        success: function (response) {
            console.log(response); // Debugging output
            alert(response.message || 'Messages processed successfully!');
        },
        error: function (xhr) {
            console.error(xhr.responseText);
            alert('An error occurred: ' + (xhr.responseText || 'Unknown error'));
        }
    });
});


  function isChecked(){
    $("input[type='checkbox']").on('click', function($event){
        if(!$(this).is(":checked")){
            $(this).parent().children('p').show();
        }else{
            $(this).parent().children('p').hide();
        }
    })
  }

  function fetchStreamData() {
    $.ajax({
        url: '/redis-api', 
        method: 'GET',
        success: function (response) {
            if (response.length > 0) {
                response.forEach(entry => {
                    console.log(entry);
                    // let row = `<tr>
                    //     <td>${entry.id}</td>
                    //     <td>${entry.data.matricule || ''}</td>
                    //     <td>${entry.data.firstname || ''}</td>
                    //     <td>${entry.data.lastname || ''}</td>
                    //     <td>${entry.data.email || ''}</td>
                    //     <td>${entry.data.updated_at || ''}</td>
                    // </tr>`;
                    // $('#stream-data tbody').append(row);
                });
            } else {
                console.log('No new entries found.');
            }
        },
        error: function (error) {
            console.error('Error fetching stream data:', error);
        }
    });
}
// Fetch data periodically
// setInterval(fetchStreamData, 20000); // Every 2 seconds




