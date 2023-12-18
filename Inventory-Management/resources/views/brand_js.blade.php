
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script>
    $(document).ready(function() {
        $('#addBrandForm').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            // Get form data
            var formData = $(this).serialize();

            // AJAX POST request
            $.ajax({
                url: '/add-brand',
                method: 'POST',
                data: formData,
                dataType: 'JSON',
                success: function(response) {
                    // Handle success
                    if(response.status == 'success')
                    {
                        $('#addModal').modal('hide');
                        // $('#addBrandForm')[0].reset();
                        $('.table').load(location.href+ ' .table');
                    }
                },
                error: function(xhr, status, error) {
                    // Handle error
                    // console.log(error);
                }
            });
        });
    });
</script>

