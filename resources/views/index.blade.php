@extends('layouts.app')
@section('title', 'Home')

@section('content')

  <section class="upper-wrapper bg-elderberry">

    <section class="spacer"><!-- SPACER --></section>

    <section class="container">
      <section id="intro-section">

        <section id="slogan" class="center">
          <h1>
            Chat anonymously and securely with Trale
          </h1>
          <h3>
            secure and private chatting for individuals and teams
          </h3>
        </section>

        <section id="navigation-buttons" class="center">
          <button class="default-btn">
            start now
          </button>
          <button class="mirrored-btn">
            how it works
          </button>
        </section>

      </section>
    </section>

    <section class="spacer"><!-- SPACER --></section>

    <section>
      <!-- TODO place background tiles here -->
      <section class="container">
        <section id="preview">
          <section class="row">
            <section class="col s7 valign-wrapper" id="screenshot">
              <section style="width: 100%">
                <!-- TODO replace with correct image -->
                <img src="https://cdn.code-lake.com/socialstuff/img/screenshot.png" alt="" id="screenshot-img">
              </section>
            </section>

            <section class="col s5" id="chatview">

              <section>
                <div class="message bubble-foreign">
                  <section class="message-container">
                    Hi Phil,
                    <br><br>
                    this is Anthony, duis autem vel eum iriure dolor in hendrerit in vulputate?
                    <br><br>
                    Best regards
                    <br>
                    P
                  </section>
                </div>
              </section>

              <section>
                <div class="message bubble-own">
                  <section class="message-container">
                    Hi Anthony,
                    <br><br>
                    sea takimata sanctus est Lorem ipsum dolor sit amet. At vero eos et accusam et justo duo dolores
                    et
                    ea
                    rebum.
                  </section>
                </div>
              </section>

              <section>
                <div class="message bubble-own">
                  <section class="message-container">
                    velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis
                  </section>
                </div>
              </section>

            </section>
          </section>
        </section>

        <section class="spacer"><!-- SPACER --></section>

        <section id="usps">
          <div class="row center">
            <div class="col s4">
              <div class="col s10 offset-s1">
                <div class="row">
                  <i class="material-icons feature-icon-large">code</i>
                </div>
                <div class="row usp-description">
                  100% open-source for a secure, transparent and trustworthy environment
                </div>
                <div class="row">
                  <button
                    onclick="window.location='{{ url("https://github.com/socialstuff-org") }}'"
                    class="default-btn feature-btn"
                  >
                    View source-code
                  </button>
                </div>
              </div>
            </div>
            <div class="col s4">
              <div class="col s10 offset-s1">
                <div class="row">
                  <i class="material-icons feature-icon-large">lock</i>
                </div>
                <div class="row usp-description">
                  Fully end-to-end encrypted using elliptic curve algorithms for asymmetric encryption
                </div>
                <div class="row">
                  <button class="default-btn feature-btn">
                    Learn more
                  </button>
                </div>
              </div>
            </div>
            <div class="col s4">
              <div class="col s10 offset-s1">
                <div class="row">
                  <i class="material-icons feature-icon-large">devices</i>
                </div>
                <div class="row usp-description">
                  Modern and easy-to-use chat clients for Windows, macOS, Linux, iOS and Android.
                </div>
                <div class="row">
                  <button
                    onclick="window.location='{{ url("/downloads") }}'"
                    class="default-btn feature-btn"
                  >
                    Downloads
                    <i class="material-icons left">get_app</i>
                  </button>
                </div>
              </div>
            </div>

            <div class="col s4">
              <div class="col s10 offset-s1">
                <div class="row">
                  <img src="{{asset('img/decentralized.svg')}}" alt="" width="20%">
                </div>
                <div class="row usp-description">
                  Fully decentralized, independent from any company and government.
                </div>
                <div class="row">
                  <button
                    onclick="window.location='{{ url("https://github.com/socialstuff-org") }}'"
                    class="default-btn feature-btn"
                  >
                    Learn more
                  </button>
                </div>
              </div>
            </div>

            <div class="col s4">
              <div class="col s10 offset-s1">
                <div class="row">
                  <img src="{{asset('img/data-protection.svg')}}" alt="" width="20%">
                </div>
                <div class="row usp-description">
                  Continuous updates for security enhancements
                </div>
                <div class="row">
                  <button
                    onclick="window.location='{{ url("https://github.com/socialstuff-org") }}'"
                    class="default-btn feature-btn"
                  >
                    Contribution policy
                  </button>
                </div>
              </div>
            </div>

          </div>
        </section>

        <div class="row"><!-- SPACER --></div>
        <div class="row"><!-- SPACER --></div>
        <div class="row"><!-- SPACER --></div>

        <section id="referrals" class="center">
          <h1>Referrals</h1>

          <div class="row"><!-- SPACER --></div>
          <div class="row"><!-- SPACER --></div>
          <div class="row"><!-- SPACER --></div>

          <section class="row">

            <section class="col s12 m6">
              <div class="row">
                <div class="col s3">
                  <section class="referral-image" style="width: 100%; height: auto; border-radius: 100%;">
                    <img src="{{asset('img/avatar.png')}}" alt="IMG unavailable" width="100%" height="auto"
                         style="border-radius: 100%;">
                  </section>
                </div>
                <div class="col s9 left-align">
                  <section class="referral-quote">
                    “Trale provides an awesome new way of communicating privately and securely”
                  </section>
                  <section class="referral-person" style="margin-top: 10px;">
                    Max Mustermann
                  </section>
                  <section class="referral-person-job">
                    Job Title
                  </section>
                </div>
              </div>
              <div class="row"><!-- SPACER --></div>
              <div class="row">
                <div class="col s3">
                  <section class="referral-image" style="width: 100%; height: auto; border-radius: 100%;">
                    <img src="{{asset('img/avatar.png')}}" alt="IMG unavailable" width="100%" height="auto"
                         style="border-radius: 100%;">
                  </section>
                </div>
                <div class="col s9 left-align">
                  <section class="referral-quote">
                    “Trale provides an awesome new way of communicating privately and securely”
                  </section>
                  <section class="referral-person" style="margin-top: 10px;">
                    Max Mustermann
                  </section>
                  <section class="referral-person-job">
                    Job Title
                  </section>
                </div>
              </div>
            </section>

            <section class="col s12 m6">
              <div class="row">
                <div class="col s3">
                  <section class="referral-image" style="width: 100%; height: auto; border-radius: 100%;">
                    <img src="{{asset('img/avatar.png')}}" alt="IMG unavailable" width="100%" height="auto"
                         style="border-radius: 100%;">
                  </section>
                </div>
                <div class="col s9 left-align">
                  <section class="referral-quote">
                    “Trale provides an awesome new way of communicating privately and securely”
                  </section>
                  <section class="referral-person" style="margin-top: 10px;">
                    Max Mustermann
                  </section>
                  <section class="referral-person-job">
                    Job Title
                  </section>
                </div>
              </div>
              <div class="row"><!-- SPACER --></div>
              <div class="row">
                <div class="col s3">
                  <section class="referral-image" style="width: 100%; height: auto; border-radius: 100%;">
                    <img src="{{asset('img/avatar.png')}}" alt="IMG unavailable" width="100%" height="auto"
                         style="border-radius: 100%;">
                  </section>
                </div>
                <div class="col s9 left-align">
                  <section class="referral-quote">
                    “Trale provides an awesome new way of communicating privately and securely”
                  </section>
                  <section class="referral-person" style="margin-top: 10px;">
                    Max Mustermann
                  </section>
                  <section class="referral-person-job">
                    Job Title
                  </section>
                </div>
              </div>
            </section>

          </section>
        </section>

        <div class="row"><!-- SPACER --></div>
        <div class="row"><!-- SPACER --></div>
        <div class="row"><!-- SPACER --></div>

        <section id="why-use-trale" class="center">
          <div class="row">
            <h1>Why use Trale?</h1>
            <h3>Explore below to see why Trale is a simple, powerful, and secure messenger</h3>
          </div>

          <div class="row left-align">
            <div class="col s12 m6">
              <section id="no-ads" class="col s10">
                <h2>No ads. No trackers.<br>No compromise.</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, beatae cum cumque deleniti
                dignissimos ea eius eligendi enim esse explicabo facere hic magnam nostrum nulla possimus quas quisquam
                reprehenderit voluptatibus.
              </section>
            </div>
            <div class="col s12 m6 center">
              <section>
                <span class="material-icons" style="font-size: 10em">gps_off</span>
              </section>
            </div>
          </div>
          <div class="row left-align">
            <div class="col s12 m6 center">
              <section>
                <span class="material-icons" style="font-size: 12em">money_off</span>
              </section>
            </div>
            <div class="col s12 m6">
              <section id="no-ads" class="col s10">
                <h2>Free for Everyone.<br>Forever.</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, beatae cum cumque deleniti
                dignissimos ea eius eligendi enim esse explicabo facere hic magnam nostrum nulla possimus quas quisquam
                reprehenderit voluptatibus.
              </section>
            </div>
          </div>

        </section>

        <!-- TODO paste more content here -->

      </section>
    </section>

    <section class="spacer"><!-- SPACER --></section>


  </section>

@endsection
