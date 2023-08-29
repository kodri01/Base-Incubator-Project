@extends('layouts.master')

@section('content')
    <style>
        body {
            overflow-x: hidden;
        }

        .navbar .navbar-nav .nav-link {
            color: rgb(0, 0, 0);
        }
    </style>
    @if ($message = Session::get('success'))
        <script>
            swal("Thanks for Your Opinions.", " ", "success");
        </script>
    @endif

    <section class="contact" style="margin-bottom: 3rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <form class="form" id="contact-form" method="post" action="{{ route('opinis.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="controls">
                            <div class="">
                                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                                    <h4><span>Your</span> Opinion</h4>
                                    <p>Berikan komentar anda tentang perusahaan kami dan pelayanan kami</p>
                                </div>
                                <div class="card">
                                    <div class="form-group">
                                        <label class="control-label col-sm-6" for="fname">Your
                                            Opini:</label>
                                        <input type="hidden" name="user_id" value=" {{ auth()->user()->id }}">
                                        <div class="col-sm-11">
                                            <textarea class=" form-control-plaintext" name="opinion" placeholder="Ketikan Komentar Anda" id=""
                                                cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-5">
                                        <div class="row">
                                            <a href="/profile/{{ auth()->user()->id }}"
                                                class="butn butn-bg"><span>Back</span></a>
                                            <button type="submit" class="butn butn-bg"><span>Send Opini</span></button>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
