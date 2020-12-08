@extends('layouts.app')
@section('title', 'Downloads')

@section('content')
  <section class="upper-wrapper bg-elderberry">
    <section class="container">

      <div class="row"><!-- SPACER --></div>

      <div class="row center">
        <h4>Downloads</h4>
      </div>

      <div class="row center clear-margin">
        <section class="col s12 m6 l4">
          <section class="download-section" id="windows">
            <div class="row">
              <img class="os-icon" src="{{@asset('/img/windows.svg')}}" alt="windows image unavailabe">
            </div>
            <h5>windows</h5>
            <div class="row">
              <button class="default-btn">
                download
              </button>
            </div>
          </section>
        </section>

        <section class="col s12 m6 l4">
          <section class="download-section" id="macOS">
            <div class="row">
              <img class="os-icon" src="{{@asset('/img/apple.svg')}}" alt="apple image unavailabe">
            </div>
            <h5>macOS</h5>
            <div class="row">
              <button class="default-btn">
                download
              </button>
            </div>
          </section>
        </section>

        <section class="col s12 m6 l4">
          <section class="download-section" id="linux">
            <div class="row">
              <img class="os-icon" src="{{@asset('/img/linux.svg')}}" alt="linux image unavailabe">
            </div>
            <h5>Linux</h5>
            <div class="row">
              <button class="default-btn">
                download
              </button>
            </div>
          </section>
        </section>


        <section class="col s12 m6 l4">
          <section class="download-section" id="iOS">
            <div class="row">
              <img class="os-icon" src="{{@asset('/img/apple.svg')}}" alt="apple image unavailabe">
            </div>
            <h5>iOS</h5>
            <div class="row">
              <button class="default-btn">
                download
              </button>
            </div>
          </section>
        </section>

        <section class="col s12 m6 l4">
          <section class="download-section" id="Android">
            <div class="row">
              <img class="os-icon" src="{{@asset('/img/android.svg')}}" alt="android image unavailabe">
            </div>
            <h5>Android</h5>
            <div class="row">
              <button class="default-btn">
                download
              </button>
            </div>
          </section>
        </section>
      </div>

    </section>
  </section>
@endsection
