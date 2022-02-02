@component('mail::message')
# Introduction

Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur odit voluptate deserunt error totam est alias quos deleniti quo. Dolores, voluptatum vitae pariatur maiores ut delectus eos repudiandae impedit esse.

<img src="http://justbetter.cl/img/logo.png" alt="" style="max-width: 40%; background-color: black;">    

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
