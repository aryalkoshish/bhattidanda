@component('mail::message')
<strong>To:</strong>{{$data['email']}}
<strong>Subject</strong>{{$data['subject']}}</br>
<strong>Message</strong>{{$data['message']}}</br>
@endcomponent
