<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<>
    
    <div class="container pt-4">
        <div class="row  p-0 mt-4">
          <div class="col-lg-4 mx-auto shadow p-0">
            <div class="alert alert-info">
              <h2>Add New TODO</h2>
            </div>
<form action="{{route('submit')}}" method="post">
    @csrf
        <input type="checkbox" name="answerss[]" value="bbbb"> aaaa<br>
        <input type="checkbox" name="answerss[]" value="cccc">zzzz <br>
        <input type="checkbox" name="answerss[]" value="dddd">ssss <br>
        <input type="checkbox" name="answerss[]" value="eeee">jjjjj <br>
        <input type="text" name="message" placeholder="any message? (optional)"><br>
        <input type="submit" value="SUBMIT">
    </form>
          </div>
        </div>
    </div>

</body>
</html>