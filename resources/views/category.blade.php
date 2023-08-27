<!-- Admin dashboard content -->
<h1>Welcome to the Admin Dashboard</h1>

<!-- Display categories -->
<h2>Categories:</h2>
@foreach ($categories as $categoryId => $categoryData)
    <h3>Category: {{ $categoryData['name'] }}</h3>
    <p>Description: {{ $categoryData['description'] }}</p>
@endforeach

<!-- Display books -->
<h2>Books:</h2>
@foreach ($books as $bookId => $bookData)
    <h3>Title: {{ $bookData['name'] }}</h3>
    <p>Author: {{ $bookData['name_auther'] }}</p>
@endforeach
