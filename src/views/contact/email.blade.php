<x-mail::message>
# Introduction

There is a new qeuery from {{ $name }}
<BR>
Message : {{$message}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
