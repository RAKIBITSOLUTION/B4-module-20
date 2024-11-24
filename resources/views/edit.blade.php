@extends('index')

@section('content')

<h1>Product Edit Page</h>

        

<div class="container">
        
        <label>Product ID:</label><br>
        <input type="text" id="productid" name="id" ><br>
    
        <label>Product Name:</label><br>
        <input type="text" id="name" name="name" ><br>
        
        <label>Product Discription:</label><br>
        <textarea id ="discription" name="discription" rows="5" cols="25">
        </textarea><br>

        <label>Product Price:</label><br>
        <input type="number" id="price" name="Price" ><br>

        <label>Product Stock:</label><br>
        <input type="number" id="stock" name="stock" ><br>
      
        <div>
			<label for="photo">Choose Photo:</label>
			<input type="file" name="photo" id="photo">
		</div> </br>
                   
        <div>
            <button onclick="UpdateData()">Submit</button>
        </div>
        
 
</div>
    


    <script>

        // Fill existing Data

    fillExistingData();

    async function fillExistingData(){
    const urlParams= new URLSearchParams(window.location.search);
    const id= urlParams.get('id')
    alert(id);

    let res=await axios.get("/products");
    res.data.forEach(function (item){

        document.getElementById('productid').value=item['id'];
        
        document.getElementById('name').value=item['name'];
        document.getElementById('discription').value=item['description'];
        document.getElementById('price').value=item['Price'];
        document.getElementById('stock').value=item['stock'];
        document.getElementById('image').value=item['image'];
    })


    // Update Data

    async function UpdateData(){

let ProductID=document.getElementById('productid').value;
alert(productit);
let ProductName=document.getElementById('name').value;
let ProductDescription=document.getElementById('description').value;
let UnitPrice=document.getElementById('Price').value;
let ProductStock=document.getElementById('stock').value;
let ProductImg=document.getElementById('image').value;


let Obj={
        "product_id ":ProductID,
        "name":ProductName,
        "description":ProductDescription,
        "Price":UnitPrice,
        "stock":ProductStock,
        "image":ProductImg,
}
        
            let res=await axios.put('/products/${id}',Obj);
                        window.location=`/products`

}


    
     
}
    </script>


@endsection