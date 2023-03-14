<?PHP
if ($_POST['function'] == "Products") {
    Products();
}

function Products() {
     $jsonData = file_get_contents('products.json');
    $data = json_decode($jsonData, true);
    $results = array();
    foreach ($data['data'][0] as $key => $value) {
        array_push($results, $value);
      
    }
    
    $html="";
    for ($i = 0; $i <count($results); $i++) {
        $html .= '<div class="cards col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="card h-100">
                <div class="t-icon">
                    <div class="discount">
                        <i class="fa fa-certificate"></i>
                        <h5>'.$results[$i]['id'].'</h5>
                    </div>
                    <div class="favourite">
                        <i class="bi bi-heart"></i>
                    </div>
                </div>
                <div class="card-image" data-name="p-12">
                    <img src="images/12.webp" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <h4 class="tag mx-auto">750I </h4>
                    <div class="price">
                        <h4>118:-50/kg <br>Price Per Item:15:10/lit</h4>
                        <h4>72</h4>
                    </div>
                    <div class="card-counter d-flex">
                        <a><i class="bi bi-dash-circle-fill minus"></i></a>
                        <input type="number" class="st" value="0" size="2">
                        <a><i class="bi bi-plus-circle-fill plus"></i></a>
                        <div class="first-btn">
                            <p>Add</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
    echo $html;
}
    
  

        




?>