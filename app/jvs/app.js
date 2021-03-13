// var CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/lallama-a/upload ';
// var CLOUDINARY_UPLOAD_PRESET = 'h0u7venz';

// var imgPreview = document.getElementById('img-preview');
// var fileUpload = document.getElementById('file-upload');

// fileUpload.addEventListener('change', function(event) {
//   // console.log(event);
//   var file = event.target.files[0];
//   // console.log(file);
//   var formData = new FormData();
  
//   formData.append('file', file);  //firnData.append('key', object);
//   formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);
  
//   axios({
    
//     url: CLOUDINARY_URL,
//     method: 'POST',
//     header: {
//       'Content-Type': 'application/x-www0-form-urlencoded' 
//     },    
//     data: formData

//   }).then(function(res) {
    
//     imgPreview.src = res.data.secure_url;

//   }).catch(function(err){
    
//     console.error(err);

//   });

// });


// upload images 
$(document).ready(function(){

  load_images();
  
  function load_images()
  {
      $.ajax({
          url:"../lib/fetch_images.php",
          success:function(data)
          {
              $('#images_list').html(data);
          }
      });
  }
  
  $('#event-form').on('add', function(event){
      event.preventDefault();
      var image_name = $('#image').val();
      if(image_name == '')
      {
          alert("Please Select Image");
          return false;
      }
      else
      {
          $.ajax({
              url:"../lib/insert_images.php",
              method:"POST",
              data: new FormData(this),
              contentType:false,
              cache:false,
              processData:false,
              success:function(data)
              {
                  $('#image').val('');
                  load_images();
              }
          });
      }
  });
  
  });  
