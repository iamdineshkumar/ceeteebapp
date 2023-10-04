$(document).ready(function(){

    $(".did-floating-label-content").css('pointer-events','none');
    $("#tbl_labour_estimate").css('pointer-events','none');
    $("#tbl_material_estimate").css('pointer-events','none');
     $(".savebtn").hide();
    //  $(".add_item_button").hide();
    $(".btn-sm").hide();
     $(".cancelbtn").hide();
     $("#btn_mduplicate").hide();
     $("#btn_lduplicate").hide();
     $("#btn_mcreate").hide();
     $("#btn_lcreate").hide();
     $("#btn_mdelete").hide();
     $("#btn_create").hide();
     $("#btn_delete").hide();
     $("#btn_ldelete").hide();
     $("#btn_sundries").hide();
     $("#btn_sundrydelete").hide();
     $(".nextbtn").show();
     $(".editbtn").show();
    })


function editdata()
{
    if($('[name="slct_fstatus"] option:selected').val()=='Rejected' || $('[name="slct_fstatus"] option:selected').val()=='Open')
    {
        $(".did-floating-label-content").css('pointer-events','auto');
    $("#tbl_labour_estimate").css('pointer-events','auto');
    $("#tbl_material_estimate").css('pointer-events','auto');
     $(".savebtn").show();
    //  $(".add_item_button").hide();
    $(".btn-sm").show();
     $(".cancelbtn").show();
     $(".nextbtn").hide();
    
     $(".editbtn").hide();

     $("#btn_mduplicate").show();
     $("#btn_lduplicate").show();
     $("#btn_mcreate").show();
     $("#btn_lcreate").show();
     $("#btn_mdelete").show();
     $("#btn_ldelete").show();
     $("#btn_create").show();
     $("#btn_delete").show();
     $("#btn_sundries").show();
     $("#btn_sundrydelete").show();
    }
    else
    {
        alert('You can edit only rejected forms! Kindly reject the form to edit!')

        $(".did-floating-label-content").css('pointer-events','none');
    $("#tbl_labour_estimate").css('pointer-events','none');
    $("#tbl_material_estimate").css('pointer-events','none');
    $("#btn_mduplicate").hide();
     $("#btn_lduplicate").hide();
     $("#btn_mcreate").hide();
     $("#btn_lcreate").hide();
     $("#btn_mdelete").hide();
     $("#btn_ldelete").hide();
     $("#btn_create").hide();
     $("#btn_delete").hide();
     $("#btn_sundries").hide();
     $("#btn_sundrydelete").hide();
        $(".savebtn").show();
        $(".cancelbtn").show();

        $(".editbtn").hide();
        $('.first_approval').css('pointer-events','auto');
    }

}

 // Cancel edit option
 function canceleditdata()
{
    $(".did-floating-label-content").css('pointer-events','none');
    $("#tbl_labour_estimate").css('pointer-events','none');
    $("#tbl_material_estimate").css('pointer-events','none');
     $(".savebtn").hide();
    //  $(".add_item_button").hide();
    $(".btn-sm").hide();
     $(".cancelbtn").hide();
     $(".nextbtn").show();
     $(".editbtn").show();

     $("#btn_mduplicate").hide();
     $("#btn_lduplicate").hide();
     $("#btn_mcreate").hide();
     $("#btn_lcreate").hide();
     $("#btn_mdelete").hide();
     $("#btn_ldelete").hide();
     $("#btn_create").hide();
     $("#btn_delete").hide();
     $("#btn_sundries").hide();
     $("#btn_sundrydelete").hide();
}


