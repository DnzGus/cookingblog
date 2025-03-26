<form action="/post" method="POST">
 @csrf
  <label for="title">Title</label><br>
  <input type="text" id="title" name="title"><br>
  <label for="description">Description</label><br>
  <input type="text" id="description" name="description"><br><br>
  <input type="submit" value="Submit">
</form>