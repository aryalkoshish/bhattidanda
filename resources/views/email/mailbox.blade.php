@component('mail::message')
<strong>To:</strong>{{$data['to']}}
<strong>Subject</strong>{{$data['subject']}}</br>
<strong>Message</strong>{{$data['message']}}</br>
@endcomponent
