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