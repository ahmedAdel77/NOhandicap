@extends('layouts.app')

@section('content')

    <div class="section">
            <div class="col s12 m6">
            <div class="card  darken-1">
                <div class="card-content">
                <span class="card-title  center">Your Profile</span>

                @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    <div class="row">
    <div class="col l3 ">
            <a href="/profile/{{ $user->id }}/edit" class="btn blue btn"><span>Edit</span>
                <i class="material-icons left">edit</i></a>

    </div>
    <div class="col l4 right" style="padding: ;margin-left: ;">
            <div class="right">
                    <form action="{{url("users/".$user->id)}}" method="POST" enctype="multipart/form-data" >
                        @method("DELETE")
                        @csrf

                        @if (Auth::user()->isAdmin == 0)

                        <a class="waves-effect waves-red red darken-1 btn modal-trigger" href="#modal1">
                            <span>Delete Account</span>
                            <i class="material-icons left">delete_forever</i>
                        </a>
                        @endif


                            <!-- Modal Structure -->
                            <div id="modal1" class="modal">
                                <div class="modal-content center">
                                <h5>Are you sure you want to delete your account ? </h5>
                                <i class="material-icons red-text ">notification_important</i>

                                <p><span style="font-size: 25px; font-weight: 400">
                                        Note:
                                </span>
                                    <br>
                                    <br>
                                    By deleting your account the following consequences apply
                                    <br>
                                    <ol>
                                        <li>
                                            Your posted Ads will be deleted automatically and no longer available on the website.
                                        </li>
                                        <li>
                                            You will be no longer able to access My Ads
                                            features which allows you to:
                                            <ul>
                                                <li class=""><span style="font-weight: bolder">-</span> Place an Ad on the platform.</li>
                                                <li class=""><span style="font-weight: bolder">-</span> Edit or delete your Ads.</li>
                                                <li class=""><span style="font-weight: bolder">-</span> Check responses for your Ads.</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </p>
                                </div>
                                <div class="modal-footer red darken-1">
                                <button type="submit" class="modal-close btn white black-text darken-2 waves-effect">
                                        <span>Yes, delete it</span>
                                </button>
                                </div>
                            </div>
                    </form>
                </div>
        </div>
    </div>

                <div class="container ">
                    <div class="row section">
                        <div class="col l12">
                            <h5 class="infostyle">Name</h5>
                            <p>{{ $user->name }}</p>
                        </div>

                        <div class="col l12">
                            <h5 class="infostyle">Email</h5>
                            <p>{{ $user->email }}</p>
                        </div>

                        <div class="col l12">
                            <h5 class="infostyle">Phone Number</h5>
                            <p>{{ $user->phone }}</p>
                        </div>

                    </div>
                </div>

                <div class="section">
                </div>

            </div>
        </div>

          </div>
        </div>
      </div>

@endsection
