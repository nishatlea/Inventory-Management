
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
    // Handling form submission for adding a brand
    $('#addBrandForm').on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission
        $('#addModal').modal('show');
        // Get form data
        var formData = $(this).serialize();

        // AJAX POST request to add brand
        $.ajax({
            url: '/add-brand',
            method: 'POST',
            data: formData,
            dataType: 'JSON',
            success: function(response) {
                // Handle success
                if(response.status == 'success') {
                    $('#addModal').modal('hide');
                    $('.table').load(location.href + ' .table');
                }
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(error);
            }
        });
    });

    // Handling click event to populate update modal
    $(document).on('click', '.update_brand_form', function(e) {
        e.preventDefault();
        $('#updateModal').modal('show');
        let brandId = $(this).data('id');
        let brandName = $(this).data('name');

        $('#up_id').val(brandId);
        $('#up_name').val(brandName);
    });

    // Handling form submission for updating a brand
    $(document).on('submit', '#update_brand', function(e) {
        e.preventDefault();

        var up_id = $('#up_id').val();
        var up_name = $('#up_name').val();

        $.ajax({
            url: '/update-brand',
            method: 'POST', // Change the method to POST
            data: { up_id: up_id, up_name: up_name },
            dataType: 'JSON',
            success: function(response) {
                if (response.status == 'success') {
                    $('#updateModal').modal('hide');
                    $('.table').load(location.href + ' .table');
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});
</script>

