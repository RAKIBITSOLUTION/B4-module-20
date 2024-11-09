@extends('index')

@section('content')
<h1>Create A New Product:</h>

<form>
        <label>Product ID:</label><br>
        <input type="text" id="name" name="product_id" ><br>

        <label>Product Name:</label><br>
        <input type="text" id="name" name="name" ><br>
        
        <label>Product Discription:</label><br>
        <textarea name="discription" rows="5" cols="25">
        
        </textarea><br>

        <label>Product Price:</label><br>
        <input type="number" id="name" name="Price" ><br>

        <label>Product Stock:</label><br>
        <input type="number" id="name" name="stock" ><br>
      
        <div>
			<label for="photo">Choose Photo:</label>
			<input type="file" name="photo" id="photo">
		</div> </br>
                   
        <input type="submit" value="Submit">

    </form>

@endsection