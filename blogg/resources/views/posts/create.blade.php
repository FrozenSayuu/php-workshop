<h2>Create a blog post!</h2>
<a href="/posts">Back</a>
<form action="/posts" method="post">
    @csrf
    <label>Title:</label>
    <input type="text" name="title">
    <label>Content:</label>
    <input type="textarea" name="content">
    <input type="submit" value="Post">
</form>