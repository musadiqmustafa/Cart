

const cardCounter = document.getElementsByClassName('card-counter')
// console.log(cardCounter)
for (let i = 0; i < cardCounter.length; i++) {
    const element = cardCounter[i];
    console.log(element.getElementsByClassName('minus'))
    const minus = element.getElementsByClassName('minus')[0]
    const plus = element.getElementsByClassName('plus')[0]
    const st = element.getElementsByClassName('st')[0]
    const firstbtn = element.getElementsByClassName('first-btn')[0]
    minus.style.display = 'none' 
    st.style.display = 'none'
    // firstbtn.style.display = 'none'
    plus.style.display = 'none'
    element.style.backgroundColor = 'white' 

    if(firstbtn){
        firstbtn.addEventListener('click', ()=>{
            
            st.value = parseInt(st.value) + 1
            if(minus.style.display == 'none'){
                minus.style.display = 'block'
                firstbtn.style.display = 'none'
                element.style.backgroundColor = 'rgb(232, 232, 232)'
                plus.style.display = 'block'

            }
            if(st.style.display == 'none'){
                st.style.display = 'block'
            }   
        })

        
    }   


    if(minus){
        minus.addEventListener('click', ()=>{
            
            if(st.value < 2){
                st.value = 0
                minus.style.display = 'none' 
                st.style.display = 'none' 
                element.style.backgroundColor = 'white'
                firstbtn.style.display = 'block'
                plus.style.display = 'none'
            }else{st.value = st.value - 1}
        })

        
    }   
    if(plus){
        plus.addEventListener('click', ()=>{
            st.value = parseInt(st.value) + 1
            if(minus.style.display == 'none'){
                minus.style.display = 'block'
                element.style.backgroundColor = 'rgb(232, 232, 232)'
            }
            if(st.style.display == 'none'){
                st.style.display = 'block'
            }
        })
    }

    
}

// ---------------cart-card-Counter----------------

const cartcardCounter = document.getElementsByClassName('cart-card-counter')
// console.log(cardCounter)
for (let i = 0; i < cartcardCounter.length; i++) {
    const element = cartcardCounter[i];
    console.log(element.getElementsByClassName('minus'))
    const minus = element.getElementsByClassName('minus')[0]
    const plus = element.getElementsByClassName('plus')[0]
    const st = element.getElementsByClassName('st')[0]
    minus.style.display = 'block' 
    st.style.display = 'block'
    plus.style.display = 'block'
    // element.style.backgroundColor = 'white' 

        if(plus){
            plus.addEventListener('click', ()=>{
                
                st.value = parseInt(st.value) + 0
                if(minus.style.display == 'none'){
                    minus.style.display = 'block'
                    element.style.backgroundColor = 'rgb(232, 232, 232)'
                    plus.style.display = 'block'

                }
                if(st.style.display == 'none'){
                    st.style.display = 'block'
                }   
            })

            
        }   


    if(minus){
        minus.addEventListener('click', ()=>{
            
            if(st.value < 2){
                st.value = 0
                minus.style.display = 'block' 
                st.style.display = 'block' 
                // element.style.backgroundColor = 'white'
                plus.style.display = 'block'
            }else{st.value = st.value - 1}
        })

        
    }   
    if(plus){
        plus.addEventListener('click', ()=>{
            st.value = parseInt(st.value) + 1
            if(minus.style.display == 'none'){
                minus.style.display = 'block'
                // element.style.backgroundColor = 'rgb(232, 232, 232)'
            }
            if(st.style.display == 'none'){
                st.style.display = 'block'
            }
        })
    }

    
}


// ------------preview-----------

let previewContainer = document.querySelector('.products-preview');
let previewBox = previewContainer.querySelectorAll('.preview');

document.querySelectorAll('.home-cards .card-image').forEach(product =>{
    product.onclick = () =>{
        previewContainer.style.display = 'flex'
        let name = product.getAttribute('data-name');
        previewBox.forEach(preview =>{
            let target = preview.getAttribute('data-target');
            if(name == target){
                preview.classList.add('active');
            }
        })
    }
});


previewBox.forEach(close =>{
    close.querySelector('.bi-x').onclick = () =>{
        close.classList.remove('active');
        previewContainer.style.display = 'none'
    };
});


// ---------------navbar--------------


const chc = document.querySelector('#shopping-cart-checkbox');
var element = document.getElementById("SideNav");
function FuncClick(){
    if(chc.checked){
        element.classList.remove("-left-[17rem]");
        element.classList.add("left-0");
    }else{
        element.classList.remove("left-0");
        element.classList.add("-left-[17rem]");
        }
}
const chka = document.querySelector('#Shopping-cartbtn');
var element2 = document.getElementById("Shopping-cart-menu");
function FuncClick2(){
    if(chka.checked){
        element2.classList.add("shop-visible");
        element2.classList.remove("hide-visible");
    }else{
        element2.classList.add("hide-visible");
        element2.classList.remove("shop-visible");
        }
}


var count = 1;
function Decrement(element){
    var x = element.nextElementSibling;
    count = x.innerHTML;
    if(count > 1){
        count--;
        x.innerHTML = count;
        let cart_count_input = element.parentElement.querySelector("#cart_count_input");
        cart_count_input.setAttribute('value',count);
      
        cartfun();
    }
};
function Increment(element){
    var x = element.previousElementSibling;
    count = x.innerHTML;
    if(count < 10){
        count++;
        x.innerHTML = count;
        let cart_count_input = element.parentElement.querySelector("#cart_count_input");
        cart_count_input.setAttribute('value',count);
        cartfun();
    } 
};

// ---------------load more--------------

$(document).ready(function(){
    $(".cards") .slice(0, 6).fadeIn();
    $(".load-more").click(function(){
        $(".cards").slice(0, 16).fadeIn();
        $(this).fadeOut();
    });
});

// ---------------add to cart--------------

const cart = document.getElementsByClassName('cart')[0]
const continueShopping = document.getElementById('continue-shopping')

if(continueShopping){
    continueShopping.addEventListener('click', ()=>{
        cart.style.right = '-900px'
    })
}

const cartOpen = document.getElementsByClassName('cart-open')[0]

if(cartOpen){
    cartOpen.addEventListener('click', ()=>{
        cart.style.right = '0px'
    })
}

// ---------down-nav-add to cart----------------
const cartOpen1 = document.getElementsByClassName('cart-open-1')[0]
const cartOpen2 = document.getElementById('cart-open-1')


if(cartOpen1){
    cartOpen1.addEventListener('click', ()=>{
        cart.style.right = '0px'
    })
    
}

if(cartOpen2){
    continueShopping.addEventListener('click', ()=>{
        cart.style.right = '-900px'
    })
}


// ------------------------filter-----------------------


const filterbox = document.getElementsByClassName('filter-box')[0]
const cancel = document.getElementById('cancel')

if(cancel){
    cancel.addEventListener('click', ()=>{
        filterbox.style.left = '-900px'
    })
}

const filterOpen = document.getElementsByClassName('filter')[0]

if(filterOpen){
    filterOpen.addEventListener('click', ()=>{
        filterbox.style.left = '0px'
    })
}


// -------------------scroll----------------------

const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () =>{
    if(window.pageYOffset > 100){
        toTop.classList.add("active");
    }else{
        toTop.classList.remove("active");
    }
})


// ------------------side-form---------------------

const slideform = document.getElementsByClassName('slide-form')[0]
const formcancel = document.getElementById('form-cancel')

if(formcancel){
    formcancel.addEventListener('click', ()=>{
        slideform.style.right = '-900px'
    })
}

const formopen = document.getElementsByClassName('form-open')[0]

if(formopen){
    formopen.addEventListener('click', ()=>{
        slideform.style.right = '0px'
    })
}

// -----------------search-bar-suggetions--------------------


window.onload=function(){
    var searchResult = document.getElementById("drop-down-box");
    document.onclick = function(event){
        if(event.target.id !== 'drop-down-box'){
            searchResult.style.display = "block";
        }

        if(event.target.id !== 'SearchInput'){
            searchResult.style.display = "none";
        }
    }
}
// ----------------------------------------------

(function($bs) {
    const CLASS_NAME = 'has-child-dropdown-show';
        $bs.Dropdown.prototype.toggle = function(_orginal) {
            return function() {
                document.querySelectorAll('.' + CLASS_NAME).forEach(function(e) {
                    e.classList.remove(CLASS_NAME);
                });
                let dd = this._element.closest('.dropdown').parentNode.closest('.dropdown');
                for (; dd && dd !== document; dd = dd.parentNode.closest('.dropdown')) {
                    dd.classList.add(CLASS_NAME);
                }
                return _orginal.call(this);
            }
        }($bs.Dropdown.prototype.toggle);

        document.querySelectorAll('.dropdown').forEach(function(dd) {
            dd.addEventListener('hide.bs.dropdown', function(e) {
                if (this.classList.contains(CLASS_NAME)) {
                    this.classList.remove(CLASS_NAME);
                    e.preventDefault();
                }
                if(e.clickEvent && e.clickEvent.composedPath().some(el=>el.classList && el.classList.contains('dropdown-toggle'))){
                    e.preventDefault();
                }
                e.stopPropagation(); // do not need pop in multi level mode
            });
        });

        // for hover
        function getDropdown(element) {
            return $bs.Dropdown.getInstance(element) || new $bs.Dropdown(element);
        }

        document.querySelectorAll('.dropdown-hover, .dropdown-hover-all .dropdown').forEach(function(dd) {
            dd.addEventListener('mouseenter', function(e) {
                let toggle = e.target.querySelector(':scope>[data-bs-toggle="dropdown"]');
                if (!toggle.classList.contains('show')) {
                    getDropdown(toggle).toggle();
                }
            });
            dd.addEventListener('mouseleave', function(e) {
                let toggle = e.target.querySelector(':scope>[data-bs-toggle="dropdown"]');
                if (toggle.classList.contains('show')) {
                    getDropdown(toggle).toggle();
                }
            });
        });
    })(bootstrap);




    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  } 
// ______________________MY TASK____________________
function Products(){
    $.ajax({
        type: "POST",
        url: "functions.php",
        data: { function: "Products" },
        success: function (data) {
            // data = JSON.parse(data);
            document.getElementById('div').innerHTML=data
            console.log(data);
        }
    });
}     