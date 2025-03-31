<!-- <div class="alert alert-success" role="alert">
    {{ $message }} (Task ID: {{ $taskId }})
</div> -->

<!-- <div class="alert alert-success" role="alert">
    {{ $message }} (Task ID: {{ $taskId }})
    <script>
        setTimeout(function() {
            $('.alert').fadeOut();
        }, 5000);
    </script>
</div> -->

<div class="alert alert-success" role="alert">
    {{ $message }}
    @if($taskId)
        (Task ID: {{ $taskId }})
    @endif
    <script>
    $(document).ready(function() {
        setTimeout(function() {
            $('.alert').fadeOut();
        }, 5000);
    });
</script>
</div>