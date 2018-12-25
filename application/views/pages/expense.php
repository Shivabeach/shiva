<div class="container mt-4">
  <div id="demo12"></div>
    <h1 class="display-4 text-center">
      <i class="fas fa-book-open text-primary"></i> My<span class="text-primary">Book</span>List</h1>
      <form id="book-form">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" id="title" class="form-control">
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input type="text" id="author" class="form-control">
        </div>
        <div class="form-group">
          <label for="isbn">ISBN#</label>
          <input type="text" id="isbn" class="form-control">
        </div>
        <input type="submit" value="Add Book" class="btn btn-primary btn-block">
      </form>
      <table class="table table-striped mt-5">
        <thead>
          <tr>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN#</th>
            <th></th>
          </tr>
        </thead>
        <tbody id="book-list"></tbody>
      </table>
  </div>
