<!DOCTYPE html>
<html>
    <head>
        <title>Todo List</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid text-center">
          <h1><b>Todo List</b></h1>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-offset-2 col-md-8  well well-sm">
              <form class="formtodo" action="/">
                <div class="form-group">
                    <div class="col-sm-10 col-xs-8">
                      <input type="text" name="todo" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-default">Add Todo</button>
              </form>
              <div class="col-xs-12">
                <h5>Type in a new todo...</h5>
              </div>
              <div class="col-xs-12">
                <ul class="list-group list">
                </ul>
              </div>
              <div class="col-xs-12">
                <button type="button" class="btn btn-danger deleteselected">Delete Selected</button>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/query.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
