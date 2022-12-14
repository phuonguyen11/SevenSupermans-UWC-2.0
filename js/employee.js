var selected_element_style = 'selected shadow fw-bold';
var display_none_style = 'd-none';

var $employee_listing_elements = $('.employee-listing .employee-listing-element');


function generate_employee_html_element(employee_object)
{
    const template_element_html = `
    <div class="card employee-listing-element mb-2">
        <div class="card-body d-flex justify-content-start align-items-center">
            <span class="id" style="display:none">To be changed</span>
            <span class="card-text employee-name"> Staff #number </span>
            <span class="address" style="display:none">To be changed</span>
            <span class="contact" style="display:none">To be changed</span>
            <span class="rela" style="display:none">To be changed</span>
            <span class="dayOfWork" style="display:none">xxx</span>
        </div>
    </div> `;

    let $new_elem = $(template_element_html);

    $new_elem.find(".id").html(employee_object["id"]);
    $new_elem.find(".address").html(employee_object["address"]);
    $new_elem.find(".contact").html(employee_object["contact"]);
    $new_elem.find(".rela").html(employee_object["rela"]);
    $new_elem.find(".datOfWork").html(employee_object["dayOfWork"]);
    

    return $new_elem;
}
function display_employee()
{
    if (query_result.errno === null)
    {
        // result is not a error
        // generate and append all returned employee object
        for (let employee_object of query_result.result)
        {
            let $new_elem = generate_employee_html_element(employee_object)
            $(".employee-listing .col").append($new_elem);
        }

        // create a list of all employee (needed for other function)
        $employee_listing_elements = $('.employee-listing .employee-listing-element');
        // attach click event for each employee
    }
}
