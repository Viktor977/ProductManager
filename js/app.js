
let productType = document.querySelector("select");
let tForm = document.getElementById("product_form")

function fillForm() {
    Book();
    Dvd();
    Furniture();
    document.querySelector("#leb").remove();
};
productType.addEventListener("click" ,fillForm);
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
    if(document.location.href.indexOf('index.php') === -1) {
    }
}


function deleteProducts(){

}

