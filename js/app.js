
let productType = document.querySelector("select");
let tForm = document.getElementById("product_form")


if(productType!=null){
    productType.addEventListener('click' ,fillForm,true);
};

function fillForm() {
    Book();
    Dvd();
    Furniture();
    let leb=document.querySelector("#leb");
    if(leb!=null){
        leb.remove();
   };
};

function Book(){

    if(productType.value.includes('book')){

        tForm.insertAdjacentHTML("beforeend",

            '<div class="md-3 row">'+
            ' <label class="col-sm-2 col-form-label">Weight</label>'+
            ' <div class=col-sm-3>'+
            '<input type="text" name="weight" id="weight" class="form-control"/>'+
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
            '<input type="number" name="size" id="size" min="0" class="form-control" />'+
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
            ' <input type="number" name="height" id="height" min="0" class="form-control" />'+
            '</div>'+
            ' </div>'+
            ' <div class="mb-3 row">'+
            '<label class="col-sm-2 col-form-label">Width (SM)</label>'+
            ' <div class="col-sm-3">'+
            ' <input type="number" name="width" id="width" min="0" class="form-control" />'+
            '</div>'+
            ' </div>'+
            ' <div class="mb-3 row">'+
            '<label class="col-sm-2 col-form-label">Length (CM)</label>'+
            ' <div class="col-sm-3">'+
            ' <input type="number" name="length" id="length" min="0" class="form-control" />'+
            '</div>'+
            ' </div>'

        );
        productType.remove();
    }
};

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
    let cards = document.getElementsByClassName('card');
    let checkedCard = [];
    let checkboxes = document.getElementsByClassName('delete-checkbox');
    for (let i = 0; i < checkboxes.length; i++) {

        if (checkboxes[i].checked == true) {

            checkedCard.push(i);
        }
    }

    return  checkedCard;
}
