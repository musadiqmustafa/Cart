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
        </div>  <header id="home" class="sticky top-0 shadow-lg z-30" style="z-index: 2;">
        <div class="top-header text-black bg-white">
            <div class="lg:flex lg:justify-between lg:items-center  max-w-7xl mx-auto px-[16px] py-[12px]">
                <div class="flex justify-center items-center lg:block">

                    <div class="side-nav lg:hidden absolute left-4 cursor-pointer">
                        <input type="checkbox" name="" onclick="FuncClick()" id="shopping-cart-checkbox" class=""
                            autocompleted="">
                        <label for="shopping-cart-checkbox" class="uncheck-label text-black trans"><i
                                class="fas fa-bars text-2xl"></i></label>
                    </div>
                    <div class="side-nav-f fixed top-0 bottom-0 w-full max-w-[17rem] z-10 bg-[#000000] trans -left-[17rem]"
                        id="SideNav" style="transition: 0.5s ease-in-out;">
                        <div class="w-full py-5 flex justify-between items-center px-4">

                            <img src="https://livsham.softwarebyte.co/frontend/images/logo.png" alt="logo"
                                class="w-[100px]">
                            <label for="shopping-cart-checkbox"
                                class=" transform hover:scale-150 transition duration-500 ease-in-out"
                                onclick="FuncClick()">
                                <i class="bi bi-x-circle text-gray-500 hover:text-white px-[3px] rounded-md"></i>
                                </label>
                        </div>
                        <div class="text-white">
                            <ul>
                                <li
                                    class="border-t-2 border-gray-600 py-2 px-10 hover:px-10 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Logga in</a></li>
                                <li
                                    class="border-t-2 border-gray-600 py-2 px-10 hover:px-10 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Bli Medlem</a></li>
                                <li
                                    class="border-t-2 border-gray-600 py-2 px-10 hover:px-10 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Hem</a>
                                
                                </li>

                                <li
                                    class="border-t-2 border-gray-600 py-2 px-10 hover:px-10 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Handla om</a></li>
                                <li
                                    class="border-t-2 border-gray-600 py-2 px-10 hover:px-10 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Kontakter</a></li>

                                <li
                                    class="border-t-2 border-gray-600  py-2 transition-all ease-in-out hover:text-green-600 font-bold">

                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                                <button style="background-color: black; color: white;" class="nav-accordion-button accordion-button " type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapse1">
                                                    Fruit & Vegitable
                                                </button>
                                            </h2>
                                            <div style="visibility: visible;" id="panelsStayOpen-collapse1" class="accordion-collapse"
                                                aria-labelledby="panelsStayOpen-heading1">
                                                <div style="background-color: black;" class="accordion-body">
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Fruit & Vegitable
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink" >
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Vegetables <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Fruit<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Potatoes & Onions <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Bear <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Cabbage plants <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Sponge <span>(45)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                              Dairy, cheese & juice
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="fruit.html">Ost <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">juice & drinks<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Milk <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Cheese <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Yogurt <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Plant based <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">snackes & dessert <span>(18)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Bread & bakery
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Bread <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Crackers & crusts<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Biscuits & cookies <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">hamburger bread <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Coffee bread & cakes <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Snack <span>(45)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Drink
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Soda <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Coffee<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Juice and still drink <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Mineral water <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">oil <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cider, must & drinkmixer <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Functional drinks <span>(18)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </li>

                                <li
                                    class="border-t-2 border-gray-600  py-2 transition-all ease-in-out hover:text-green-600 font-bold">

                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-heading2">
                                                <button style="background-color: black; color: white;" class="nav-accordion-button accordion-button " type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapse2" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapse2">
                                                    Fruit & Vegitable
                                                </button>
                                            </h2>
                                            <div style="visibility: visible;" id="panelsStayOpen-collapse2" class="accordion-collapse"
                                                aria-labelledby="panelsStayOpen-heading2">
                                                <div style="background-color: black;" class="accordion-body">
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Fruit & Vegitable
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink" >
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Vegetables <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Fruit<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Potatoes & Onions <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Bear <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Cabbage plants <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Sponge <span>(45)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                              Dairy, cheese & juice
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="fruit.html">Ost <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">juice & drinks<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Milk <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Cheese <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Yogurt <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Plant based <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">snackes & dessert <span>(18)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Bread & bakery
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Bread <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Crackers & crusts<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Biscuits & cookies <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">hamburger bread <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Coffee bread & cakes <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Snack <span>(45)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Drink
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Soda <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Coffee<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Juice and still drink <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Mineral water <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">oil <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cider, must & drinkmixer <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Functional drinks <span>(18)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </li>

                                <li
                                    class="border-t-2 border-gray-600  py-2 transition-all ease-in-out hover:text-green-600 font-bold">

                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-heading3">
                                                <button style="background-color: black; color: white;" class="nav-accordion-button accordion-button " type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapse3" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapse3">
                                                    Fruit & Vegitable
                                                </button>
                                            </h2>
                                            <div style="visibility: visible;" id="panelsStayOpen-collapse3" class="accordion-collapse"
                                                aria-labelledby="panelsStayOpen-heading3">
                                                <div style="background-color: black;" class="accordion-body">
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Fruit & Vegitable
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink" >
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Vegetables <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Fruit<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Potatoes & Onions <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Bear <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Cabbage plants <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Sponge <span>(45)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                              Dairy, cheese & juice
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="fruit.html">Ost <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">juice & drinks<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Milk <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Cheese <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Yogurt <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Plant based <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">snackes & dessert <span>(18)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Bread & bakery
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Bread <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Crackers & crusts<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Biscuits & cookies <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">hamburger bread <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Coffee bread & cakes <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Snack <span>(45)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Drink
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Soda <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Coffee<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Juice and still drink <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Mineral water <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">oil <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cider, must & drinkmixer <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Functional drinks <span>(18)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </li>


                                <!-- <li
                                    class="border-t-2 border-gray-600  py-2 transition-all ease-in-out hover:text-green-600 font-bold">

                                    <div class="accordion-item">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-collapseTwo">
                                                <button style="background-color: black; color: white;" class="nav-accordion-button accordion-button collapsed " type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapseTwo">
                                                    Dairy, cheese & juice
                                                </button>
                                            </h2>
                                            <div style="visibility: visible;" id="panelsStayOpen-collapseTwo" class="accordion-collapse"
                                                aria-labelledby="panelsStayOpen-collapseTwo">
                                                <div style="background-color: black;" class="accordion-body">
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Fruit & Vegitable
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" >
                                                                <li><a class="dropdown-item" href="#">Vegetables <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Fruit<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Potatoes & Onions <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Bear <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cabbage plants <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Sponge <span>(45)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                              Dairy, cheese & juice
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Ost <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">juice & drinks<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Milk <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cheese <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Yogurt <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Plant based <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">snackes & dessert <span>(18)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Bread & bakery
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Bread <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Crackers & crusts<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Biscuits & cookies <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">hamburger bread <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Coffee bread & cakes <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Snack <span>(45)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Drink
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Soda <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Coffee<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Juice and still drink <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Mineral water <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">oil <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cider, must & drinkmixer <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Functional drinks <span>(18)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li
                                    class="border-t-2 border-gray-600  py-2 transition-all ease-in-out hover:text-green-600 font-bold">

                                    <div class="accordion-item">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-collapseThree">
                                                <button style="background-color: black; color: white;" class="nav-accordion-button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapseThree">
                                                    Fruit & Vegitable
                                                </button>
                                            </h2>
                                            <div style="visibility: visible;" id="panelsStayOpen-collapseThree" class="accordion-collapse"
                                                aria-labelledby="panelsStayOpen-collapseThree">
                                                <div style="background-color: black;" class="accordion-body">
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Fruit & Vegitable
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" >
                                                                <li><a class="dropdown-item" href="#">Vegetables <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Fruit<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Potatoes & Onions <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Bear <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cabbage plants <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Sponge <span>(45)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                              Dairy, cheese & juice
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Ost <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">juice & drinks<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Milk <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cheese <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Yogurt <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Plant based <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">snackes & dessert <span>(18)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Bread & bakery
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Bread <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Crackers & crusts<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Biscuits & cookies <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">hamburger bread <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Coffee bread & cakes <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Snack <span>(45)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Drink
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Soda <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Coffee<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Juice and still drink <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Mineral water <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">oil <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cider, must & drinkmixer <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Functional drinks <span>(18)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->


                               
                            </ul>
                        </div>

                        
                    </div>

                    <h1 class="p-3 lg:pb-0"><a href="home cards.html">
                            <picture>
                                <img src="images/logo.png" alt="" class=""
                                    width="160px"></picture>
                        </a></h1>

                </div>

                <form class="nav-search" action="" method="POST">
                    <div
                        class="search-bar flex items-center  border-2 border-green-700 bg-white text-black  overflow-hidden ">

                        <div class="flex items-center justify-center pr-[16px]">
                            <i class="fa fa-search"></i>
                        </div>
                        <input type="hidden" name="_token" value="iiEynT7XUYtwhb4BoR4zQ66K8q1K3t0BqlDABV0l">
                        <div class="w-full py-[14px]" id="searchWrapper">

                            <input id="SearchInput" type="search" name="searchbar" type="text"
                             class="w-full focus:outline-none" placeholder="Here you search for products and recipes">

                             <ul class="drop-down-box" id="drop-down-box">
                                <li>some-content</li>
                                <li>some-content</li>
                                <li>some-content</li>
                                <li>some-content</li>
                            </ul>
                           
                        </div>

                        <button type="submit"
                            class="hidden lg:block hover:bg-green-900 bg-green-700 text-white h-[40px] px-10 rounded-md">Search
                        </button>

                        <!-- <div class="wrapper">
                            <ul class="drop-down-box" id="drop-down-box">
                                <li>some-content</li>
                                <li>some-content</li>
                                <li>some-content</li>
                                <li>some-content</li>
                            </ul>
                        </div> -->

                    </div>
                </form>
                <div class="lg:flex items-center hidden lg:inline-block">

                    <span class="mr-1">
                        <a href="login.html"><i class="fa fa-user mr-2  login-icon">
                        </i>Log In</a>
                    </span>
                </div>
            </div>
        </div>
        <div class="bottom-header whitespace-nowrap bg-green-700 text-white">
            <div class="max-w-7xl hidden lg:flex items-center justify-between py-0 mx-auto">
                <div class="flex items-center space-x-12">
                    <div class="antialiased">
                        <div class="">
                            <div class="group inline-block relative">
                                <a href="home cards.html"
                                    class="bg-green-700 text-white font-semibold py-2 px-4 rounded inline-flex items-center" style="font-size: 18px; font-weight: 600;">
                                    <span class="">Home</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="antialiased">
                        <div class="">
                            <div class="group inline-block relative">
                                <a
                                    class="bg-green-700 text-white font-semibold  py-4 px-4 rounded inline-flex items-center cursor-pointer" style="font-size: 18px; font-weight: 600;">
                                    <span class="">Category</span>

                                </a>
                                <div
                                    class="absolute  hidden text-gray-700 group-hover:block bg-white p-8 pb-10 rounded-b-[60px] overflow-hidden" style="box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.06);">
                                    <div class="flex space-x-4">
                                        <ul class="drop-down-link pr-16 border-r-2 border-gray-300">
                                            <li><a
                                                    href="fruit-and-vegitable.html">Fruit
                                                    &amp; Vegetables</a>
                                            </li>
                                            <li>
                                                <a href="Dairy chees and juice.html">Dairy, Cheese & Juice</a>
                                            </li>
                                            <li>
                                                <a href="bakery and bread.html">Bread & bakery</a>
                                            </li>
                                            <li>
                                                <a href="drinks.html">Drinks</a>
                                            </li>
                                            <li>
                                                <a href="pantery.html">Pantery</a>
                                            </li>
                                            <li>
                                                <a href="fish and shell fish.html">Fish Shellfish</a>
                                            </li>

                                            <li>
                                                <a href="meat.html">Meat</a>
                                            </li>
                                        </ul>
                                        <ul class="drop-down-link pr-16 border-r-2 border-gray-300">
                                            <li>
                                                <a href="ready meal.html">Ready meals & snacks</a>
                                            </li>

                                            <li>
                                                <a href="baby accessories.html">baby food & accessories</a>
                                            </li>

                                            <li>
                                                <a href="spices and flavouring.html">spices & Flavorings</a>
                                            </li>

                                            <li>
                                                <a href="pet food.html">Pet food & accessories</a>
                                            </li>

                                        </ul>

                                        <ul class="pr-16 border-r-2 border-gray-300">
                                            <li><a href="fruit-and-vegitable.html">Fruit
                                                    &amp; Vegetables</a></li>
                                            <li><a
                                                    href="">Milk</a>
                                            </li>
                                            <li><a
                                                    href="">Bread</a>
                                            </li>

                                        </ul>
                                       
                                        <!-- <div class="space-y-2">
                                            <div class="bg-green-300 w-36 h-8">
                                            </div>
                                            <div class="bg-red-300 w-36 h-8">
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="antialiased">
                        <div class="">
                            <div class="group inline-block relative">
                                <a
                                    class="bg-green-700 text-white font-semibold  py-4 px-4 rounded inline-flex items-center cursor-pointer" style="font-size: 18px; font-weight: 600;">
                                    <span class="">Offers
                                    </span>

                                </a>
                                <!-- <div
                                    class="absolute hidden text-gray-700 group-hover:block bg-white p-8 pb-10 rounded-b-[60px] overflow-hidden mt-0">
                                    <div class="flex space-x-4">


                                        <ul class="pr-16 border-r-2 border-gray-300">
                                            <li><a
                                                    href="https://livsham.softwarebyte.co/product/category?offer=1">Wheat</a>
                                            </li>
                                            <li><a
                                                    href="https://livsham.softwarebyte.co/product/category?offer=3">Fruits</a>
                                            </li>
                                            <li><a href="https://livsham.softwarebyte.co/product/category?offer=5">Fruit
                                                    &amp; Vegetables</a></li>
                                        </ul>
                                        <ul class="pr-16 border-r-2 border-gray-300">
                                            <li><a
                                                    href="https://livsham.softwarebyte.co/product/category?offer=7">Bread</a>
                                            </li>
                                            <li><a href="https://livsham.softwarebyte.co/product/category?offer=8">Pasta
                                                    &amp; Pasta Sauce</a></li>

                                        </ul>
                                        <hr>
                                        <hr>
                                        <div class="space-y-2">
                                            <div class="bg-green-300 w-36 h-8">
                                            </div>
                                            <div class="bg-red-300 w-36 h-8">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">

                    <div class="antialiased hidden">
                        <div class="">
                            <div class="group inline-block relative">
                                <a
                                    class="bg-green-700 text-white font-semibold py-2 px-4 rounded inline-flex items-center">
                                    <span class="mr-1"></span></a><a href="https://livsham.softwarebyte.co/register">Ny
                                    kund</a>
                            </div>
                        </div>
                    </div>
                    <div class="antialiased">
                        <div class="">
                            <div class="group inline-block relative">
                                <a
                                    class="bg-green-700 text-white font-semibold py-2 px-4 rounded inline-flex items-center">
                                    <input type="checkbox" name="Shopping-cartbtn" id="Shopping-cartbtn"
                                        onclick="FuncClick2()" value="false" class="hidden">
                                    <label for="Shopping-cartbtn">
                                        <h1
                                            class="cart-open h-[40px] px-16 border-2 border-white bg-white font-extrabold rounded-md pb-[1px] whitespace-nowrap flex justify-center items-center cursor-pointer tracking-wider">
                                            <img style="width: 100px;" src="images/logo.png"
                                            alt="logo" class="w-8 mr-2">
                                        </h1>
                                    </label>
                                    <div class="px-2 py-1 bg-red-500 border-2 border-white text-white rounded-full text-xs font-semibold tracking-wider -mt-9 -ml-4 hidden"
                                        id="">
                                        0
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <div class="down-nav">
        <div class="d-nav-icons">
            <span><a href="home cards.html">
                <i class="bi bi-house-door-fill"></i>
                <p>Home</p>
            </a></span>

            <span><a href="catagories.html">
                <i class="bi bi-list"></i>
                <p>Catrgory</p>
            </a></span>

            <span><a href="favoutite.html">
                <i class="bi bi-heart-fill"></i>
                <p>Favourite</p>
            </a></span>

            <span class="cart-open-1 cursor-pointer">
                <i class="bi bi-cart-fill"></i>
                <p>Cart</p>
            </span>
        </div>
    </div>


        <a class="to-top" href="#">
            <i class="fa fa-chevron-up"></i>
        </a>
    <!-- ----------------green----------- -->

    <div class="green">
        <div class="container">
            <div class="row">
                <div class="green-box col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row">

                                <div class="green-box-1 col-lg-6 mx-auto">
                                    <div class="green-img">
                                        <img src="images/price.svg" alt="">
                                    </div>

                                    <div class="green-content">
                                        <h2>Now lower prices</h2>
                                        <p>We've reduced the price <br> of lots of favorite items</p>
                                    </div>
                                </div>

                                <div class="green-box-2 col-lg-6 mx-auto">
                                    <div class="green-img">
                                        <img src="images/truck.svg" alt="">
                                    </div>

                                    <div class="green-content">
                                        <h2>Now lower prices</h2>
                                        <p>We've reduced the price <br> of lots of favorite items</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------carousel----------- -->

    <div class="carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 mx-auto">

                    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/slider-3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/grocries.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slider-1.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ---------------card-slider------------>

    <div class="card-slider col-lg-10 mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto d-flex" style="justify-content: space-between; align-items: center;">
                    <div class="slider-heading">
                        <h1>This week's extra prices</h1>
                    </div>

                    <div class="slider-btn">
                        <h3>Visa alla</h3>

                        <div class="custom-btn">

                            
                        </div>
                    </div>
                </div>
            </div>


            <!-- <div class="card-slides owl-carousel owl-theme"  style="z-index: 0;">


                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-7">
                                <img src="images/7.webp" class="card-img-top" alt="...">
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
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">

                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-8">
                                <img src="images/8.jpg" class="card-img-top" alt="...">
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
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>


                            <div class="card-image" data-name="p-9">
                                <img src="images/9.jpeg" class="card-img-top" alt="...">
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
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-10">
                                <img src="images/10.webp" class="card-img-top" alt="...">
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
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">

                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-11">
                                <img src="images/11.jpg" class="card-img-top" alt="...">
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
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
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
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card" >

                            <div class="t-icon">
                                <div class="discount">

                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>

                            <div class="card-image" data-name="p-8">
                                <img src="images/8.jpg" class="card-img-top" alt="...">
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
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item home-cards">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="t-icon">
                                <div class="discount">
                                    <i class="fa fa-certificate"></i>
                                    <h5>20%</h5>
                                </div>

                                <div class="favourite">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>


                            <div class="card-image" data-name="p-9">
                                <img src="images/9.jpeg" class="card-img-top" alt="...">
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
                                        <p>KOP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <!-- -----------------cards---------- -->

   

    <!-- ---------------------card-pop-up----------------------- -->

    <div class="products-preview">

        <div class="preview" data-target="p-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/1.PNG" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>';
    }
    echo $html;
}
    
  

        




?>