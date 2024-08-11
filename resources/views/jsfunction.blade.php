<script>           
    function sendmessage() {
        let message = $('#message').val();
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      });
      
      $.ajax({
        type: "POST",
        url: "{{ url('/send_message')}}",
        data: {message:message},
        success: function(response) {
          console.log(response);
          $('#message').val('');
          Swal.fire(
            '',
            'Inserted!',
            'success'
          );
        },
      });
    }
    </script>

    