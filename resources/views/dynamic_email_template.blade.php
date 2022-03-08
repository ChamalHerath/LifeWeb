<h5>Hi, I am {{ $data['name'] }},</h5><br>
<h5 style="font-weight: 700; text-transform: uppercase">This inquiry about {{ $data['subject'] }}</h5>
<hr style="height:2px;border-width:0;color:gray;background-color:gray"><br>
<p>{{ $data['message'] }}.</p><br>
<p>It would be appriciative, if you gone through my feedback.</p>
<p style="color: blue">Don't hesitate to contact me via Email: {{ $data['email'] }}</p>
