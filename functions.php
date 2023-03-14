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
    // echo json_encode(count($results));
    for ($i = 0; $i < count($results); $i++) {
        echo json_encode($results[0]);}
    
  
    // echo '
    //     <div class="cards col-xl-2 col-lg-3 col-md-4 col-sm-6">
    //         <div class="card h-100">
    //             <div class="t-icon">
    //                 <div class="discount"></div>
    //                 <div class="favourite">
    //                     <i class="bi bi-heart"></i>
    //                 </div>
    //             </div>
    //             <div class="card-image" data-name="p-8">
    //                 <img src="images/8.jpg" class="card-img-top" alt="...">
    //             </div>
    //             <div class="card-body">
    //                 <h5 class="card-title text-center">Card title</h5>
    //                 <h4 class="tag mx-auto">750I </h4>
    //                 <div class="price">
    //                     <span>
    //                         <h4>62:34/kg</h4>
    //                         <h4>Price Per Item:5:01/kg</h4>
    //                     </span>
    //                     <span>
    //                         <h4 class="discount-price">50:-</h4>
    //                         <h4 class="real-price">100:-</h4>
    //                     </span>
    //                 </div>
    //                 <div class="card-counter d-flex">
    //                     <a><i class="bi bi-dash-circle-fill minus"></i></a>
    //                     <input type="number" class="st" value="0" size="2">
    //                     <a><i class="bi bi-plus-circle-fill plus"></i></a>
    //                     <div class="first-btn">
    //                         <p>KOP</p>
    //                     </div>
    //                 </div>
    //             </div>
    //         </div>
    //     </div>';
}


?>