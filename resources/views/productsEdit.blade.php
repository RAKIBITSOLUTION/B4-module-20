@extends('layout')

@section('content')

<h1>Product Edit Page</h>

<form>
    
        <label>Product Name:</label><br>
        <input type="text" id="name" name="name" ><br>
        
        <label>Product Discription:</label><br>
        <textarea name="discription" rows="5" cols="25">
        </textarea><br>

        <label>Product Price:</label><br>
        <input type="text" id="name" name="Price" ><br>

        <label>Product Stock:</label><br>
        <input type="text" id="name" name="stock" ><br>
      
        <div>
			<label for="photo">Choose Photo:</label>
			<input type="file" name="photo" id="photo">
		</div> </br>
                   
        <input type="submit" value="Submit">

    </form>


@endsection