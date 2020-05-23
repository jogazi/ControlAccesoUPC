function confirmDelete(item_id) {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover it!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                $('#'+item_id).submit();
            } else {
                  swal("Cancelled", "Action canceled", "error");
            }
        });
}

function confirmstate(item_id) {
    swal({
        title: "Are you sure?",
        text: "Once activated, the user will have access to the system!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                $('#'+item_id).submit();
            } else {
                  swal("Cancelled", "Action canceled", "error");
            }
        });
}