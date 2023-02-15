// var plus = document.getElementById(plus);
// var minus = document.getElementById(minus);
// var hasil = document.getElementById(hasil);
// var no = 1;

// plus.onclick = function(event){
//   event.preventDefault();
//     hasil.innerHTML = no++;    
//     console.log('tes')
// }

// function add(event){
//   event.preventDefault();
// }

// minus.onclick = function(event){
//   event.preventDefault();
//     hasil.innerHTML = no--;    
//     console.log('tes')
// }




// add and minus button

// $('.add').on('click', function(e) {
//     e.preventDefault();
//     var target = $(this).data('target');
//     var value = $(`#${target}`).val();
//     value++
//     $(`#${target}`).val(value);
//     $(`#min-${target}`).show();
// });

// $('.min').on('click', function(e) {s
//     e.preventDefault();
//     var target = $(this).data('target');
//     var value = $(`#${target}`).val();
//     value--
//     if(value >= 0){
//         $(`#${target}`).val(value);
//     } 
//     if(value <= 0){
//         $(`#min-${target}`).hide();
//     }
// });


$(document).ready(function(){
    $(".preset").on("change", function(e) {
      const isOn = e.currentTarget.checked;
  
      if (isOn) {
          $(".hideset").show();
      } else {
          $(".hideset").hide();
      }
    });
});

//conversi
$(document).ready(function () {
    var a = 0;
    $("#add-conversi").click(function(e){
        a++;
        e.preventDefault()
        $(".exp").append(`
        <div class="form-group px-2 p-2 conversi">
            <div class="row">
                <div class="col-sm-6 bahanbaku">
                    <select class="form-select  " aria-label="Default select example">
                        <option hidden>Pilih Produk Jadi</option>
                        <option value="1">EGGBRO FORMULA 100 GR</option>
                        <option value="2">SPIRASAN PLUS 100 GR</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <p class="stok-tersedia" >00</p>
                </div>
                <div class="col-sm-4 d-flex">
                    <div class="col-sm-5">
                        <input type="text" class="form-control dropdown-toggle" id="conversi" placeholder="0" value="">
                    </div>
                    <div class="col-sm-7">
                        <a href="#" id="min-conversi" class="min-conversi" data-id='${a}'  data-target="conversi"><i class="fas fa-minus p-2"></i></a> 
                        <a href="#" id="add-conversi" class="add-conversi" data-target="conversi"><i class="fas fa-plus p-2"></i></a> 
                    </div> 
                </div>
            </div>
        </div>`);
        
        $(this).remove();
    });

    $('div').on('click', '.add-conversi', function(e) {
        e.preventDefault();
        a++;
        console.log('hehee')
        // $(".exp").append(`
        // <div class="form-group px-2 p-2 conversi">
        //     <div class="row">
        //         <div class="col-sm-6 bahanbaku">
        //             <select class="form-select  " aria-label="Default select example">
        //                 <option hidden>Pilih Produk Jadi</option>
        //                 <option value="1">EGGBRO FORMULA 100 GR</option>
        //                 <option value="2">SPIRASAN PLUS 100 GR</option>
        //             </select>
        //         </div>
        //         <div class="col-sm-2">
        //             <p class="stok-tersedia" >00</p>
        //         </div>
        //         <div class="col-sm-4 d-flex">
        //             <div class="col-sm-5">
        //                 <input type="text" class="form-control dropdown-toggle" id="conversi" placeholder="0" value="">
        //             </div>
        //             <div class="col-sm-7">
        //                 <a href="#" id="add-conversi" class="add-conversi" data-target="conversi"><i class="fas fa-plus p-2"></i></a> 
        //                 <a href="#" id="min-conversi" class="min-conversi" data-id='${a}'  data-target="conversi"><i class="fas fa-minus p-2"></i></a> 
        //             </div> 
        //         </div>
        //     </div>
        // </div>`);      
    });
   
});


$(document).on('click','.min',function(e){
    e.preventDefault();
    var id = $(this).data('id');
    $(`.form-${id}`).remove();
});


//bahanbaku
$(document).ready(function () {
    $("#add-bahanbaku").click(function(e){
        e.preventDefault()
        $(".bahanbaku").append(`
        <div class="form-group row p-3 bahanbaku">
        <label for="NamaSet" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected hidden>Pilih Produk</option>
                    <option value="1">SPIRASAN PLUS 100A GR</option>
                    <option value="2">EGGBRO FORMULA 100 GR</option>
                </select>
            </div>
            <label for="NamaSet" class="col-sm-2 col-form-label labeljumlah">Jumlah Digunakan*</label>
            <div class="col-sm-2">
                <input type="text" class="form-control dropdown-toggle" id="bahanbaku" placeholder="0">
            </div>
            <div class="col-sm-1">
                <a href="#" id="min-bahanbaku" class="min-bahanbaku" style="display: none;" data-target="bahanbaku"><i class="fas fa-minus p-2"></i></a>
                <a href="#" id="add-bahanbaku" class="add-bahanbaku" data-target="bahanbaku"><i class="fas fa-plus p-2"></i></a>  
            </div>
        </div>`);   
        $(this).remove();
    });

    $('div.bahanbaku').on('click', '.add-bahanbaku', function(e) {
        e.preventDefault();
        a++;
        console.log('hehee')
        $(".exp").append(`
        <div class="form-group px-2 p-2 conversi">
            <div class="row">
                <div class="col-sm-6 bahanbaku">
                    <select class="form-select  " aria-label="Default select example">
                        <option hidden>Pilih Produk Jadi</option>
                        <option value="1">EGGBRO FORMULA 100 GR</option>
                        <option value="2">SPIRASAN PLUS 100 GR</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <p class="stok-tersedia" >00</p>
                </div>
                <div class="col-sm-4 d-flex">
                    <div class="col-sm-5">
                        <input type="text" class="form-control dropdown-toggle" id="conversi" placeholder="0" value="">
                    </div>
                    <div class="col-sm-7">
                        <a href="#" id="add-bahanbaku" class="add-bahanbaku" data-target="bahanbaku"><i class="fas fa-plus p-2"></i></a> 
                        <a href="#" id="min-bahanbaku" class="min-bahanbaku" data-id='${a}'  data-target="bahanbaku"><i class="fas fa-minus p-2"></i></a> 
                    </div> 
                </div>
            </div>
        </div>`);      
    });
});


//produkjadi
$(document).ready(function () {
    $("#add-produkjadi").click(function(e){
        e.preventDefault()
        $(".produkjadi").append(`
        <div class="form-group row p-3">
        <label for="NamaSet" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-4">
            <select class="form-select" aria-label="Default select example">
                <option selected hidden>Pilih Produk</option>
                <option value="1">OVL-005 | MEDIVAK ND AI EMULSION 500 DS</option>
            </select>
            </div>
            <label for="NamaSet" class="col-sm-2 col-form-label labeljumlah">Jumlah Dihasilkan*</label>
            <div class="col-sm-2">
                <input type="text" class="form-control dropdown-toggle" id="produkjadi" placeholder="0">
            </div>
            <div class="col-sm-1">
                <a href="#" id="add-produkjadi" class="add" data-target="produkjadi"><i class="fas fa-plus p-2"></i></a> 
                <a href="#" id="min-produkjadi" class="min" style="display: none;" data-target="produkjadi"><i class="fas fa-minus p-2"></i></a> 
            </div>
        </div>
      `);      
    });

    $('.min').on('click', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        var value = $(`#${target}`).val();
        value--
        if(value >= 0){
            $(`#${target}`).val(value);
        } 
        if(value <= 0){
            $(`#min-${target}`).hide();
        }
    });
});


// format rupiah
$("#nominal").on({
    keyup: function () {
        formatCurrency($(this));
    },
    blur: function () {
        formatCurrency($(this), "blur");
    },
});

function formatNumber(n) {
    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function formatCurrency(input, blur) {
    var input_val = input.val();

    if (input_val === "") {
        return;
    }

    var original_len = input_val.length;

    var caret_pos = input.prop("selectionStart");

    if (input_val.indexOf(".") >= 0) {
        var decimal_pos = input_val.indexOf(".");

        var left_side = input_val.substring(0, decimal_pos);
        var right_side = input_val.substring(decimal_pos);

        left_side = formatNumber(left_side);

        right_side = formatNumber(right_side);

        if (blur === "blur") {
            right_side += "00";
        }

        right_side = right_side.substring(0, 2);

        input_val = "Rp " + left_side + "." + right_side;
    } else {
        input_val = formatNumber(input_val);
        input_val = "Rp " + input_val;

        if (blur === "blur") {
            input_val += ".000";
        }
    }

    input.val(input_val);

    var updated_len = input_val.length;
    caret_pos = updated_len - original_len + caret_pos;
    input[0].setSelectionRange(caret_pos, caret_pos);
}
