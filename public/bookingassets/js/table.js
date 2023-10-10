function table() {
    var table = $('#table').val()
    $('#name-val').html(table);
    $('#table').val('')
    $('#nale').append('<tr><td>' + table + '</td></tr>');

}

function email() {
    var email = $('#mail').val()
    $('#lies').html(email);
    $('#mail').val('')
    $('#jhn').append('<tr><td>' + email + '</td></tr>');


   
        Swal.fire(
            'Good job!',
            'Added successfully!',
            'success'
        )

}