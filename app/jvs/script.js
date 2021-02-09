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

//Feedback-page

// Init function
$.fn.feedbackInit = function(config) {

    // Init each widget return by the selector
    for (widget of $(this)) {
        var feedbackWidget = $(widget);
        //// Get datas ////
        // Icon +
        if (feedbackWidget.data("iconGood") == null) {
            feedbackWidget.data("iconGood", config.iconGood != null ? config.iconGood : "fa-star");
        };

        // Icon -
        if (feedbackWidget.data("iconBad") == null) {
            feedbackWidget.data("iconBad", config.iconBad != null ? config.iconBad : "fa-star-o");
        };

        // Max mark
        if (feedbackWidget.data("maxMark") == null) {
            feedbackWidget.data("maxMark", config.maxMark != null ? config.maxMark : 5);
        }

        // Clear the widget
        feedbackWidget.html("");

        // Init icons
        for (i = 1; i <= feedbackWidget.data("maxMark"); i++) {
            if (i <= feedbackWidget.data("currentRating")) {
                feedbackWidget.append('<i class=" ' + feedbackWidget.data("iconGood") + ' magic-rating-icon" aria-hidden="true" data-default=true data-rating=' + i + '></i>');
            } else {
                feedbackWidget.append('<i class=" ' + feedbackWidget.data("iconBad") + ' magic-rating-icon" aria-hidden="true" data-default=false data-rating=' + i + '></i>');
            }
        }

        // Init reset handler
        feedbackWidget.on("mouseleave", function() {
            var widget = $(this);

            widget.children().each(function() {
                var icon = $(this);
                if (icon.data("default") && !icon.hasClass("fa-star")) {
                    icon.removeClass(widget.data("iconBad"));
                    icon.addClass(widget.data("iconGood"));
                } else if (!icon.data("default") && !icon.hasClass("fa-star-o")) {
                    icon.removeClass(widget.data("iconGood"));
                    icon.addClass(widget.data("iconBad"));
                }
            });
        });

        // Init click handler
        feedbackWidget.on("click", ".magic-rating-icon", function() {
            // Get rating
            var icon = $(this);
            var widget = icon.parent();
            var rating = icon.data("rating");

            widget.children().each(function() {
                if ($(this).data("rating") <= rating) {
                    if (!$(this).hasClass(widget.data("iconGood"))) {
                        $(this).removeClass(widget.data("iconBad"));
                        $(this).addClass(widget.data("iconGood"));
                    };
                    $(this).data("default", true);
                } else {
                    if (!$(this).hasClass(widget.data("iconBad"))) {
                        $(this).removeClass(widget.data("iconGood"));
                        $(this).addClass(widget.data("iconBad"));
                    }
                    $(this).data("default", false);
                }
            });

            var callbackSuccess = config.success.bind(null, widget, rating);
            callbackSuccess();
        });

        // Init hover icons
        feedbackWidget.on("mouseenter", ".magic-rating-icon", function() {
            var icon = $(this);
            var rating = icon.data("rating");
            var widget = icon.parent();

            widget.children().each(function() {
                if ($(this).data("rating") <= rating) {
                    if (!$(this).hasClass(widget.data("iconGood"))) {
                        $(this).removeClass(widget.data("iconBad"));
                        $(this).addClass(widget.data("iconGood"));
                    };
                } else {
                    if (!$(this).hasClass(widget.data("iconBad"))) {
                        $(this).removeClass(widget.data("iconGood"));
                        $(this).addClass(widget.data("iconBad"));
                    }
                }
            });
        });
    }
};

//end feedback-page

// Update for hover icons