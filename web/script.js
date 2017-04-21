$('.dropdown-button').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrainWidth: false, // Does not change width of dropdown to that of the activator
    hover: false, // Activate on hover
    gutter: 0, // Spacing from edge
    belowOrigin: false, // Displays dropdown below the button
    alignment: 'left', // Displays dropdown with edge aligned to the left of button
    stopPropagation: false // Stops event propagation
});


$(document).ready(function() {

    $('.modal').modal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        inDuration: 300, // Transition in duration
        outDuration: 200, // Transition out duration
        startingTop: '4%', // Starting top style attribute
        endingTop: '10%', // Ending top style attribute
        // ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        //   alert("Ready");
        //   console.log(modal, trigger);
        // },
        // complete: function() { alert('Closed'); } // Callback for Modal close
    });

});

(function(e, t, n) {
    var r = e.querySelectorAll("html")[0];
    r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
})
(document, window, 0);



window.onload = function() {
    var c = document.getElementById('wilder')
    c.onchange = function() {
        if (c.checked == true) {
            document.getElementById('answer').style.display = 'inline';
        } else {
            document.getElementById('answer').style.display = '';
        }
    }
}



$(document).ready(
    function() {
        $("#file-1").click(function() {
            $("#avatar").show("slow");
        });
    });



$(document).ready(
    function() {
        $("#wilder").click(function() {
            $("#situation").hide();
        });
    });


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#avatar').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#file-1").change(function() {
    readURL(this);
});