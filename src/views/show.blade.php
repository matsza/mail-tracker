@extends(config('mail-tracker.admin-template.name'))
@section(config('mail-tracker.admin-template.styles_section'))
<style>
    table {
    width: 100%;
    }

    th {
    height: 50px;
    text-align: left;
    }
    .button {
       border: 1px solid #0a3c59;
       background: #3e779d;
       background: -webkit-gradient(linear, left top, left bottom, from(#65a9d7), to(#3e779d));
       background: -webkit-linear-gradient(top, #65a9d7, #3e779d);
       background: -moz-linear-gradient(top, #65a9d7, #3e779d);
       background: -ms-linear-gradient(top, #65a9d7, #3e779d);
       background: -o-linear-gradient(top, #65a9d7, #3e779d);
       background-image: -ms-linear-gradient(top, #65a9d7 0%, #3e779d 100%);
       padding: 10.5px 21px;
       -webkit-border-radius: 6px;
       -moz-border-radius: 6px;
       border-radius: 6px;
       -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
       -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
       box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
       text-shadow: #7ea4bd 0 1px 0;
       color: #06426c;
       font-size: 14px;
       font-family: helvetica, serif;
       text-decoration: none;
       vertical-align: middle;
       }
    .button:hover {
       border: 1px solid #0a3c59;
       text-shadow: #1e4158 0 1px 0;
       background: #3e779d;
       background: -webkit-gradient(linear, left top, left bottom, from(#65a9d7), to(#3e779d));
       background: -webkit-linear-gradient(top, #65a9d7, #3e779d);
       background: -moz-linear-gradient(top, #65a9d7, #3e779d);
       background: -ms-linear-gradient(top, #65a9d7, #3e779d);
       background: -o-linear-gradient(top, #65a9d7, #3e779d);
       background-image: -ms-linear-gradient(top, #65a9d7 0%, #3e779d 100%);
       color: #fff;
       }
    .button:active {
       text-shadow: #1e4158 0 1px 0;
       border: 1px solid #0a3c59;
       background: #65a9d7;
       background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#3e779d));
       background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
       background: -moz-linear-gradient(top, #3e779d, #65a9d7);
       background: -ms-linear-gradient(top, #3e779d, #65a9d7);
       background: -o-linear-gradient(top, #3e779d, #65a9d7);
       background-image: -ms-linear-gradient(top, #3e779d 0%, #65a9d7 100%);
       color: #fff;
       }
</style>
@endsection
@section(config('mail-tracker.admin-template.section'))
        <h1>Mail Tracker</h1>
        <br><br>
        <a href='{{route('mailTracker_NewEmail')}}' class='button'>New Mail</a>
        <br><hr>
        <a href="{{route('mailTracker_Index')}}" class='button'>All Sent Emails</a>
        <hr>
        <h3>Email ID {{$email->id}}</h3>
        Recipient: {{$email->recipient}} <br>
        Subject: {{$email->subject}} <br>
        Sent At: {{$email->created_at->format(config('mail-tracker.date-format'))}}
        <br><br>
@endsection
        {!!$email->content!!}
