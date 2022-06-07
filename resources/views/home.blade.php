@extends('layouts.app')

@section('content')
<div class='container'>
    <p>
        Server Ip:
        <b id='serverIp' style='color:red;'></b>
    </p>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$( document ).ready(function() {
    showServerIp();  
});

var intervalId = window.setInterval(function(){
    showServerIp();
}, 30000);

  
function showServerIp() {
    $.ajax({
        type:"get",
        url:"{{route('showServerIp')}}",
        success:function(answer){
            var ip = answer.ip;
            $('#serverIp').text(ip);            
        }, error: function(e){
            alert(e);
        }
    });
}
</script>
@endsection
