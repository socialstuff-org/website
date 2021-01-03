@extends('layouts.app')
@section('title', 'Support')

@section('content')


  <section class="bg-elderberry">

    <section class="row"><!-- SPACER --></section>

    <div class="row center clear-margin">
      <div class="col s12 m6 offset-m3 l4 offset-l4">
        <section class="col s12 m12 l10 offset-l1 xl8 offset-xl2 left-align">
          <h2>Support</h2>
          <p>
            Dear user,<br>
            if anything is unclear or something is not working properly please reach out to our support center at:
          </p>
          <section class="center" style="background-color: #C72C41; border-radius: 3px; width: auto; padding: 10px;">
            <span style="font-weight: bold;"><a href="mailto:support@trale.org" style="color: #ffffff;">support@trale.org</a></span>
          </section>
          <p>
            If you are a developer and want to report a security issue or bug please create an issue on our GitHub repository at:
          </p>
          <section class="center" style="background-color: #C72C41; border-radius: 3px; width: auto; padding: 10px;">
            <span style="font-weight: bold;"><a href="https://github.com/trale-org" style="color: #ffffff;">github.com/trale.org</a></span>
          </section>
        </section>
      </div>
    </div>

    <section class="row clear-margin bg-elderberry" style="margin-top: 40px;"><!-- SPACER --></section>

  </section>

@endsection
