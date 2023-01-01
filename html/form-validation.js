window.addEventListener('load', function() {
  // Get the form element
  var form = document.getElementById('comment-form');

  // Get the name and comment elements
  var name = document.getElementById('name');
  var comment = document.getElementById('comment');

  // Add a submit event listener to the form
  form.addEventListener('submit', function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Validate the name and comment
    if (name.value == '' || comment.value == '') {
      alert('Please fill out all fields');
      return;
    }

    // If the form is valid, submit it
    form.submit();
  });
});