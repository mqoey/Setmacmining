@extends('app')
@section('content')
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Support</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Support</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding faq-page-section">
        <div class="container">
            <div class="row">
                <div class="col col-lg-10 col-lg-offset-1">
                    <div class="section-title">
                        <span>Support</span>
                        <h2>Important question, <span>ask by client</span></h2>
                    </div>
                    <div class="faq-section">
                        <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">
                            @foreach ($supports as $support)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse-{{ $support->id }}"
                                            aria-expanded="true">{{ $support->name }}</a>
                                    </div>
                                    <div id="collapse-{{ $support->id }}" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>{{ $support->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
