@extends('index')

@section('content')

<h1>Product Show:</h>

      <div class="container">
        <div class="row">
            <a href="{{url('products/create')}}" class="button button-outline float-left">Create New</a>
        </div>

    <div id="loader" class="loading d-none">
    </div>
    
            <div class="container">
                <div class="row">
                    <table>
                        <thead>
                            <th>  Name</th>
                            <th>  Descrition</th>
                            <th>  Price</th>
                            <th>  Stock</th>
                            <th>  Image</th>
                            <th>  Edit</th>
                            <th>  Delete</th>
                        </thead>
                        <tbody id="itemList">
                        
                        </tbody>
                    </table>
                </div>
            </div>

  

        <script>
            async function getList(){
            let res=await axios.get("/products");
            res.data.forEach(function (item,index){
                    document.getElementById('itemList').innerHTML+=(`
                        <tr>
                            <td>${item['name']}</td>
                            <td>${item['description']}</td>
                            <td>${item['Price']}</td>
                            <td>${item['stock']}</td>
                            <td>${item['image']}</td>
                            <td><button>Edit</button></td>
                            <td><button>Delete</button></td>
                            
                        </tr>
                        `)

                })
            }

            getList()

        </script>


@endsection



