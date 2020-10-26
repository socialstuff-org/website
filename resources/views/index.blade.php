@extends('layouts.app')
@section('title', 'Home')

@section('content')

  <section id="upper-wrapper" class="bg-elderberry">

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
                <!-- TODO replace this section with actual image -->
                this is the screenshot area
              </section>
            </section>
            <section class="col s5" id="chatview">

              <section>
                <section class="sender-acronym">
                  PR
                </section>
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
                <div class="row">
                  100% open-source for a secure, transparent and trustworthy environment
                </div>
                <div class="row">
                  <button class="default-btn feature-btn">
                    view source-code
                  </button>
                </div>
              </div>
            </div>
            <div class="col s4">
              <div class="col s10 offset-s1">
                <div class="row">
                  <i class="material-icons feature-icon-large">lock</i>
                </div>
                <div class="row">
                  Fully end-to-end encrypted using elliptic curve and double asymmetric encryption
                </div>
                <div class="row">
                  <button class="default-btn feature-btn">
                    learn more
                  </button>
                </div>
              </div>
            </div>
            <div class="col s4">
              <div class="col s10 offset-s1">
                <div class="row">
                  <i class="material-icons feature-icon-large">devices</i>
                </div>
                <div class="row">
                  Modern and easy-to-use chat clients for Windows, macOS, Linux, iOS and Android.
                </div>
                <div class="row">
                  <button class="default-btn feature-btn">
                    downloads
                    <i class="material-icons left">get_app</i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- TODO paste more content here -->

      </section>
    </section>

    <section class="spacer"><!-- SPACER --></section>


  </section>

@endsection
