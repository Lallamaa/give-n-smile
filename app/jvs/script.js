// import * as React from "react"; 
  
// const App = () => { 
//   /** "selected" here is state variable which will hold the 
//    * value of currently selected dropdown. 
//    */
//   const [selected, setSelected] = React.useState(""); 
  
//   /** Function that will set different values to state variable 
//    * based on which dropdown is selected 
//    */
//   const changeSelectOptionHandler = (event) => { 
//     setSelected(event.target.value); 
//   }; 
  
//   /** Different arrays for different dropdowns */
//   const algorithm = [ 
//     "Searching Algorithm", 
//     "Sorting Algorithm", 
//     "Graph Algorithm", 
//   ]; 
//   const language = ["C++", "Java", "Python", "C#"]; 
//   const dataStructure = ["Arrays", "LinkedList", "Stack", "Queue"]; 
  
//   /** Type variable to store different array for different dropdown */
//   let type = null; 
  
//   /** This will be used to create set of options that user will see */
//   let options = null; 
  
//   /** Setting Type variable according to dropdown */
//   if (selected === "Algorithm") { 
//     type = algorithm; 
//   } else if (selected === "Language") { 
//     type = language; 
//   } else if (selected === "Data Structure") { 
//     type = dataStructure; 
//   } 
  
//   /** If "Type" is null or undefined then options will be null, 
//    * otherwise it will create a options iterable based on our array 
//    */
//   if (type) { 
//     options = type.map((el) => <option key={el}>{el}</option>); 
//   } 
//   return ( 
//     <div 
//       style={{ 
//         padding: "16px", 
//         margin: "16px", 
//       }} 
//     > 
//       <form> 
//         <div> 
//           {/** Bind changeSelectOptionHandler to onChange method of select. 
//            * This method will trigger every time different 
//            * option is selected. 
//            */} 
//           <select onChange={changeSelectOptionHandler}> 
//             <option>Choose...</option> 
//             <option>Algorithm</option> 
//             <option>Language</option> 
//             <option>Data Structure</option> 
//           </select> 
//         </div> 
//         <div> 
//           <select> 
//             { 
//               /** This is where we have used our options variable */
//               options 
//             } 
//           </select> 
//         </div> 
//       </form> 
//     </div> 
//   ); 
// }; 
  
// export default App

$(document).ready(function() {

  $("#state").chosen();

  $("#state").change(function() {
     var state = $(this).val();
    $("#city").load("getCities.php?state=" + $("#dest_state").val()).prop('disabled', false);
    $('#city').trigger('chosen:updated');
  });

   $("#city").hover(function() {

      $("#city").chosen();
  }); 
});



// Profile-process script
function triggerClick() {
  document.querySelector('#userImage').click();
}

function showImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#imgDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}

// Admin Site
$(function () {
  $('.navbar-toggle-sidebar').click(function () {
    $('.navbar-nav').toggleClass('slide-in');
    $('.side-body').toggleClass('body-slide-in');
    $('#search').removeClass('in').addClass('collapse').slideUp(200);
  });

  $('#search-trigger').click(function () {
    $('.navbar-nav').removeClass('slide-in');
    $('.side-body').removeClass('body-slide-in');
    $('.search-input').focus();
  });
});


//cart javascript

$(document).ready(function() {
  alldeleteBtn = document.querySelectorAll('.delete')
  alldeleteBtn.forEach(onebyone => {
     onebyone.addEventListener('click',deleteINsession)
  })

function deleteINsession(){
removable_id = this.id;
$.ajax({
         url:'cart.php',
         method:'POST',
         dataType:'json',
         data:{ 
               id_to_remove:removable_id,
               action:'remove' 
         },
         success:function(data){
                 $('#displayCheckout').html(data);
    alldeleteBtn = document.querySelectorAll('.delete')
  alldeleteBtn.forEach(onebyone => {
     onebyone.addEventListener('click',deleteINsession)
  })
               }
       }).fail( function(xhr, textStatus, errorThrown) {
 alert(xhr.responseText);
});

}


 $('.add').click(function() { 
     id = $(this).data('id');
     name = $('#name' + id).val();
     price = $('#price' + id).val();
     quantity = $('#quantity' + id).val();
       $.ajax({
         url:'cart.php',
         method:'POST', 
         dataType:'json',
         data:{
               cart_id : id,
               cart_name : name,
               cart_price : price,
               cart_quantity : quantity,
               action:'add' 
         },
         success:function(data){
                 $('#displayCheckout').html(data);
                 alldeleteBtn = document.querySelectorAll('.delete')
  alldeleteBtn.forEach(onebyone => {
     onebyone.addEventListener('click',deleteINsession)
  })
               }
       }).fail( function(xhr, textStatus, errorThrown) {
 alert(xhr.responseText);
});
 
 })
})

//country javascript
// $(document).ready(function(){
//   $('select#org_state').on('change', function(){
//       var state = $(this).val();
//       if(state){
//           $.ajax({
//               type:'POST',
//               url:'org_edit.php',
//               data:{org_state:state},
//               success:function(response){
//                 console.log(response);
//               }
              
//           }).done(function(data){
//             $("#org_city").html(data);
//           }); 
//       }
//   });
  
// });



//payment javascript

