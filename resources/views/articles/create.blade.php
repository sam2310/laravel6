@extends('layout')

@section('content')

        <div id="wrapper">
            <div id="page" class="container">

                <h1 class="heading has-text-weight-bold">New Articles</h1>

            <form action="">
                <div class="field">

                    <label for="label" for="title">Title</label>

                        <div>
                            <input class ="input" type="text" name="" id="">
                        </div>

                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div>
                        <textarea class="textarea" name="" id=""></textarea>
                    </div>

                </div>

                <div class="field">
                   <label class="label" for="body">Body</label>

                    <div>
                      <textarea class="textarea" name="" id=""></textarea>
                    </div>

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
