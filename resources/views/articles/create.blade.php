@extends('layout')

@section('head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css"

@endsection

@section('content')

        <div id="wrapper">
            <div id="page" class="container">

                <h1 class="heading has-text-weight-bold is-size-4" >New Articles</h1>

            <form method="POST" action="/articles">
                @csrf
                <div class="field">

                    <label for="label" for="title">Title</label>

                        <div>
                            <input class ="input @error('title') is-danger @enderror" }}" type="text" name="title" id="title" value="{{ old('title') }}">

                            @if('title')
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                            @endif
                        </div>

                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div>

                        <textarea class="textarea @error('excerpt') is-danger @enderror" }}" name="excerpt" id="excerpt" value="{{ old('title') }}" ></textarea>

                        @if('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                        @endif

                    </div>

                </div>

                <div class="field">
                   <label class="label" for="body">Body</label>

                    <div>
                      <textarea class="textarea @error('body') is-danger @enderror" }}" name="body" id="body"  value="{{ old('title') }}"></textarea>
                    </div>

                    @if('body')
                            <p class="help is-danger">{{ $errors->first('body') }}</p>
                    @endif

                </div>

                <div class="field is-group">

                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>

                </div>


            </form>

            </div>

        </div>

@endsection
