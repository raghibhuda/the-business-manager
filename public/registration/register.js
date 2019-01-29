(function($){
    
    var checkUserType;
    var selectCompanyUI;
    selectCompanyUI = function () {
        var companyHtml ='';
        companyHtml += '<select name="company_name">';
        companyHtml +=    '<option disabled="disabled" selected="selected">Company Name</option>';
        companyHtml +=    '<option>Link3</option>';
        companyHtml +=    '<option>Samsung</option>';
        companyHtml +=    '<div class="select-dropdown"></div>';
        companyHtml += '</select>';
        
        $('#companySelector').html(companyHtml);
    }

    checkUserType = function(){

        if(window.location.href === "http://127.0.0.1:8000/register/project-manager"){
            $('#type').val("project-manager");
        }else{
            selectCompanyUI();
            $('#type').val("employee");
        }
    }

    $(document).ready(function(){
        checkUserType();
        
    }); 
}(jQuery));