
let productType = document.querySelector("select");
productType.addEventListener("click", function () {


    let f = document.querySelector("form");

        if(productType.value.includes('book')){

            f.insertAdjacentHTML("beforeend",

                '<div class="md-3 row">'+
                ' <label class="col-sm-2 col-form-label">Weight</label>'+
                ' <div class=col-sm-3>'+
                '<input type="text" name="weight" class="form-control"/>'+
                '</div>'+
                '</div>'
            );
            productType.remove();
        }
        if(productType.value.includes('dvd')){

            f.insertAdjacentHTML("beforeend",
                '<div class="mb-3 row">'+
                ' <label class="col-sm-2 col-form-label">Size</label>'+
                ' <div class="col-sm-3">'+
                '<input type="number" name="size" min="0" class="form-control" />'+
                '</div>'+
                ' </div>'

            );
            productType.remove();
        }
        if(productType.value.includes('furniture')){

            f.insertAdjacentHTML("beforeend",
                ' <div class="mb-3 row">'+
                '<label class="col-sm-2 col-form-label">Height (SM)</label>'+
                ' <div class="col-sm-3">'+
                ' <input type="number" name="height" min="0" class="form-control" />'+
                '</div>'+
                ' </div>'+
                ' <div class="mb-3 row">'+
                '<label class="col-sm-2 col-form-label">Width (SM)</label>'+
                ' <div class="col-sm-3">'+
                ' <input type="number" name="width" min="0" class="form-control" />'+
                '</div>'+
                ' </div>'+
                ' <div class="mb-3 row">'+
                '<label class="col-sm-2 col-form-label">Length (CM)</label>'+
                ' <div class="col-sm-3">'+
                ' <input type="number" name="length" min="0" class="form-control" />'+
                '</div>'+
                ' </div>'

            );
            productType.remove();
        }
        let led=document.querySelector("#leb");
        led.remove();

});

function send() {
    let f = document.querySelector("form");
    f.submit();

}

