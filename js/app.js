
let productType = document.querySelector("select");
let tForm = document.getElementById("product_form")


if(productType!=null){
    productType.addEventListener('click' ,fillForm,true);
};
function toProduct(){
    document.location.href='addProduct.php';
}
function fillForm() {
    Book();
    Dvd();
    Furniture();
    let leb=document.querySelector("#leb");
    if(leb!=null){
        leb.remove();
   };
    writeMessage();

};

function Book(){

    if(productType.value.includes('book')){

        tForm.insertAdjacentHTML("beforeend",

            '<div class="md-3 row">'+
            ' <label class="col-sm-2 col-form-label">Weight</label>'+
            ' <div class=col-sm-3>'+
            '<input type="text" name="weight" id="weight" pattern="^[ 0-9]+$" class="form-control" />'+
            '</div>'+
            '</div>'
        );
        productType.remove();
    }
};
function Dvd(){
    if(productType.value.includes('dvd')){

        tForm.insertAdjacentHTML("beforeend",
            '<div class="mb-3 row">'+
            ' <label class="col-sm-2 col-form-label">Size</label>'+
            ' <div class="col-sm-3">'+
            '<input type="text" name="size" id="size" pattern="^[ 0-9]+$"  class="form-control" />'+
            '</div>'+
            ' </div>'

        );
        productType.remove();
    }
};
function Furniture(){
    if(productType.value.includes('furniture')){

        tForm.insertAdjacentHTML("beforeend",
            ' <div class="mb-3 row">'+
            '<label class="col-sm-2 col-form-label">Height (SM)</label>'+
            ' <div class="col-sm-3">'+
            ' <input type="text" name="height" id="height" pattern="^[ 0-9]+$"  class="form-control" />'+
            '</div>'+
            ' </div>'+
            ' <div class="mb-3 row">'+
            '<label class="col-sm-2 col-form-label">Width (SM)</label>'+
            ' <div class="col-sm-3">'+
            ' <input type="text" name="width" id="width" pattern="^[ 0-9]+$"  class="form-control" />'+
            '</div>'+
            ' </div>'+
            ' <div class="mb-3 row">'+
            '<label class="col-sm-2 col-form-label">Length (CM)</label>'+
            ' <div class="col-sm-3">'+
            ' <input type="text" name="length" id="length" pattern="^[ 0-9]+$"  required class="form-control" />'+
            '</div>'+
            ' </div>'

        );
        productType.remove();
    }
};


function writeMessage(){
    if(productType.value.includes('book')){

        tForm.insertAdjacentHTML("beforeend", '<h4>Please provide the weight in KG</h4>' );

    }
    if(productType.value.includes('dvd')){

        tForm.insertAdjacentHTML("beforeend", '<h4>Please provide the size in MB</h4>' );

    }
    if(productType.value.includes('furniture')){

        tForm.insertAdjacentHTML("beforeend", '<h4>Please provide height,width,length in mm</h4>' );

    }

}
function valideteForm(){
    let input=document.querySelector('input');
    console.log(input);
    console.log('display type:'+input.type);
    console.log('display value '+input.value);
    if(input.type='number'){
        console.log('display from if'+input.value.toString());
    }
}
function addProduct(){
    tForm.submit();

};
//----------------------------------------------------------------
function redirect(){
   document.location.href='index.php';
}
function deleteProducts() {
    arr = selectCards().toString();
    console.log(arr);
    $.get('products.php?Delete&arr='+arr,redirect);

}

function selectCards(){
    let cards = document.getElementsByClassName('mycard');
    let checkedCard = [];
    let checkboxes = document.getElementsByClassName('delete-checkbox');
    for (let i = 0; i < checkboxes.length; i++) {

        if (checkboxes[i].checked == true) {

            checkedCard.push(i);
        }
    }

    return  checkedCard;
}
