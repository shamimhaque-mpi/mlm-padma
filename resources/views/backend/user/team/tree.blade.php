@extends('backend.user.layouts.master')

@section('content')
    <div class="container-fluid">
        <h2 class="mt-4">Member Tree</h2>
        <ol class="breadcrumb mb-4 rounded-0">
            <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('user.team.all')}}">My Team</a></li>
            <li class="breadcrumb-item active">View Tree</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body" style="overflow: auto;">


<div class="organogram">
    <ul>
        <li>
            <a href="#" title="It's Your">{{ Auth::guard('user')->user()->name }}</a>
            @if(isset($tree->gn1))
            <ul>
                {{-- First Client --}}
                @foreach($tree->gn1 as $key=>$gn1c)
                    @php($gn1c=(object)$gn1c)
                    <li>
                        <a href="{{ route('user.team.view', $gn1c->id) }}" title="G1 | Go To Her Profile">{{ $gn1c->name }}</a>
                        @if(isset($gn1c->gn2))
                            <ul>
                                {{-- Second Client --}}
                                @foreach($gn1c->gn2 as $gn2c)
                                @php($gn2c=(object)$gn2c)
                                <li>
                                    <a href="{{ route('user.team.view', $gn2c->id) }}" title="G2 | Go To Her Profile">{{ $gn2c->name }}</a>
                                    @if(isset($gn2c->gn3))
                                        <ul>
                                            {{-- Therd Client --}}
                                            @foreach($gn2c->gn3 as $gn3c)
                                            @php($gn3c=(object)$gn3c)
                                            <li>
                                                <a href="{{ route('user.team.view', $gn3c->id) }}" title="G3 | Go To Her Profile">{{ $gn3c->name }}</a>
                                                @if(isset($gn3c->gn4))
                                                    <ul>
                                                        {{-- Fourth Client --}}
                                                        @foreach($gn3c->gn4 as $gn4c)
                                                        @php($gn4c=(object)$gn4c)
                                                        <li>
                                                            <a href="{{ route('user.team.view', $gn4c->id) }}" title="G4 | Go To Her Profile">{{ $gn4c->name }}</a>
                                                            @if(isset($gn4c->gn5))
                                                                <ul>
                                                                    {{-- Fifth Client --}}
                                                                    @foreach($gn4c->gn5 as $gn5c)
                                                                    @php($gn5c=(object)$gn5c)
                                                                    <li>
                                                                        <a href="{{ route('user.team.view', $gn5c->id) }}" title="G5 | Go To Her Profile">{{ $gn5c->name }}</a>
                                                                        @if(isset($gn5c->gn6))
                                                                            <ul>
                                                                                {{-- Sixth client --}}
                                                                                @foreach($gn5c->gn6 as $gn6c)
                                                                                @php($gn6c=(object)$gn6c)
                                                                                <li>
                                                                                    <a href="{{ route('user.team.view', $gn6c->id) }}" title="G6 | Go To Her Profile">{{ $gn6c->name }}</a>
                                                                                    @if(isset($gn6c->gn7))
                                                                                        <ul>
                                                                                            {{-- Seventh Client --}}
                                                                                            @foreach($gn6c->gn7 as $gn7c)
                                                                                            @php($gn7c=(object)$gn7c)
                                                                                            <li>
                                                                                                <a href="{{ route('user.team.view', $gn7c->id) }}" title="G7 | Go To Her Profile">{{ $gn7c->name }}</a>                        
                                                                                                @if(isset($gn7c->gn8))
                                                                                                    <ul>
                                                                                                        {{-- Eighth Client --}}
                                                                                                        @foreach($gn7c->gn8 as $gn8c)
                                                                                                        @php($gn8c=(object)$gn8c)
                                                                                                        <li>
                                                                                                            <a href="{{ route('user.team.view', $gn8c->id) }}" title="G8 | Go To Her Profile">{{ $gn8c->name }}</a>
                                                                                                            @if(isset($gn8c->gn9))
                                                                                                                <ul>
                                                                                                                    {{-- Ninth Client --}}
                                                                                                                    @foreach($gn8c->gn9 as $gn9c)
                                                                                                                    @php($gn9c=(object)$gn9c)
                                                                                                                    <li>
                                                                                                                        <a href="{{ route('user.team.view', $gn9c->id) }}" title="G9 | Go To Her Profile">{{ $gn9c->name }}</a>
                                                                                                                        @if(isset($gn9c->gn10))
                                                                                                                        {{-- Tenth Client --}}
                                                                                                                            <ul>
                                                                                                                            @foreach($gn9c->gn10 as $gn10c)
                                                                                                                            @php($gn10c=(object)$gn10c)
                                                                                                                                <li><a href="{{ route('user.team.view', $gn10c->id) }}" title="G10 | Go To Her Profile">{{ $gn10c->name }}</a></li>
                                                                                                                            @endforeach
                                                                                                                            </ul>
                                                                                                                        @endif
                                                                                                                    </li>
                                                                                                                    @endforeach
                                                                                                                </ul>
                                                                                                            @endif
                                                                                                        </li>
                                                                                                        @endforeach
                                                                                                    </ul>
                                                                                                @endif
                                                                                            </li>
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    @endif
                                                                                </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        @endif
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
            @endif
        </li>
    </ul>
</div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('styles')
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        body {
             font-family: sans-serif;
             font-size: 15px;
        }
         .organogram ul {
             position: relative;
             padding: 1em 0;
             white-space: nowrap;
             margin: 0 auto;
             text-align: center;
        }
         .organogram ul::after {
             content: '';
             display: table;
             clear: both;
        }
         .organogram li {
             display: inline-block;
             vertical-align: top;
             text-align: center;
             list-style-type: none;
             position: relative;
             padding: 1em 0.5em 0 0.5em;
        }
         .organogram li::before, .organogram li::after {
             content: '';
             position: absolute;
             top: 0;
             right: 50%;
             border-top: 1px solid #ccc;
             width: 50%;
             height: 1em;
        }
         .organogram li::after {
             right: auto;
             left: 50%;
             border-left: 1px solid #ccc;
        }
         .organogram li:only-child::after, .organogram li:only-child::before {
             display: none;
        }
         .organogram li:only-child {
             padding-top: 0;
        }
         .organogram li:first-child::before, .organogram li:last-child::after {
             border: 0 none;
        }
         .organogram li:last-child::before {
             border-right: 1px solid #ccc;
             border-radius: 0 5px 0 0;
        }
         .organogram li:first-child::after {
             border-radius: 5px 0 0 0;
        }
         .organogram ul ul::before {
             content: '';
             position: absolute;
             top: 0;
             left: 50%;
             border-left: 1px solid #ccc;
             width: 0;
             height: 1em;
        }
         .organogram li a {
             border: 1px solid #ccc;
             padding: 0.5em 0.75em;
             text-decoration: none;
             display: inline-block;
             border-radius: 5px;
             color: #333;
             position: relative;
             top: 1px;
        }
         .organogram li a:hover, .organogram li a:hover + ul li a {
             background: #e9453f;
             color: #fff;
             border: 1px solid #e9453f;
        }
         .organogram li a:hover + ul li::after, .organogram li a:hover + ul li::before, .organogram li a:hover + ul::before, .organogram li a:hover + ul ul::before {
             border-color: #e9453f;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endpush
