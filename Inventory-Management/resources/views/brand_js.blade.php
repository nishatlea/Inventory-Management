
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
    $(document).ready(function(){
        $(document).on('click', '.add_brand', function(e){
            e.preventDefault();
            let name = $('#brand_name').val();
            console.log(name);

            $.ajax({
                url: "{{ route('add-brand') }}",
                method: 'POST',
                data: { name : name }, // Use 'name' variable here

    beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
                
                success: function(res){
                    // Handle success response
                    console.log(data);
                },
                error: function(err){
                    if(err.responseJSON && err.responseJSON.errors) {
                        let errors = err.responseJSON.errors;
                        let errMsgContainer = $('.error-messages'); // Replace this with your error messages container selector

                        $.each(errors, function(index, value) {
                            errMsgContainer.append('<span class="text-danger">' + value + '</span><br>');
                        });
                    }
                }
            });
        });
    });
</script>
