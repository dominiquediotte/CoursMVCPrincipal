function deleteUser(id_user){
    $.ajax({
        method: "DELETE",
        url: "/user/delete_user/"+id_user,
    })
    .done(function( msg ) {
        alert( "Delete attempt " + msg );
        $('#user'+id_user).remove();
    });
}