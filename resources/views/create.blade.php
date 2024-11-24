@extends('index')

@section('content')
<h1>Create A New Product:</h>

<div>
    <form>
        <label class="form-label">Product ID:</label>
        <input type="text" class="form-control" id="productName">

        <label class="form-label">Product Name:</label>
        <input type="text" class="form-control" id="productName" >
        
        <label class="form-label">Product Discription:</label><br>
        <textarea class="form-control" rows="5" cols="15"> 
        </textarea><br>

        <label class="form-label">Product Price:</label><br>
        <input type="number" id="name" class="form-control">

        <label class="form-label">Product Stock:</label><br>
        <input type="number" id="name" class="form-control">
      
                          
        <div>
        <br/>
        <img class="w-15" id="newImg" src="{{asset('images/default.jpg')}}"/>
        <br/>

        <label class="form-label">Image</label>
        <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="productImg">
        </div>

    <div>
        <input type="submit" value="Submit">
    </div>

    </form>
</div>
        

@endsection