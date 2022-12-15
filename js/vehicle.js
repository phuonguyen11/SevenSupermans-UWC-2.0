var selected_element_style = 'selected shadow fw-bold';
var display_none_style = 'd-none';

var $vehicle_listing_elements = $('.vehicle-listing .vehicle-listing-element');
var $set_schedule_button = $('.btn-set-sched');
var $remove_schedule_button = $('.btn-remove-sched');
var $confirm_action_button = $('#confirmation-button-yes')
var $vehicle_info = $('.vehicle-information .text-description');

var $currently_chosen_vehicle = null;
var todo = null;
var query_result = null;

var query_addr = "http://localhost:8020/SevenSupermans-UWC-2.0/controllers/query_db.php";
var sql_query = "select * from vehicles";

function query_db(queryString, url, successCallBack, failCallBack)
{
    let queryObject = { queryString: queryString };
    let queryObjectJSON = JSON.stringify(queryObject);

    $.ajax({
        url: url,
        type: 'POST',
        data: queryObjectJSON,
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function(queryResult) {
            query_result = queryResult;
            console.log(query_result); // debug
            if (successCallBack !== null)
                successCallBack();
        },
        error: function() {
            if (failCallBack !== null)
                failCallBack();
        }
    });
}

function callback_notify(mess)
{
    return function() { window.alert(mess); }
}

function generate_vehicle_html_element(vehicle_object)
{
    const template_element_html = `
    <div class="card vehicle-listing-element mb-2">
        <div class="card-body d-flex justify-content-start align-items-center">
            <span class="vehicle-icon me-2">
                <img src="../../img/icon-truck.svg" class="truck-icon">
            </span>
            <span class="card-text vehicle-name"> Truck #number </span>
            <span class="vehicle-listing-element-space flex-grow-1"></span>
            <span class="vehicle-state-icon">
                <img src="../../img/icon-checkmark.svg" class="checkmark-icon">
            </span>
            <span class="id" style="display:none">To be changed</span>
            <span class="type" style="display:none">To be changed</span>
            <span class="status" style="display:none">To be changed</span>
        </div>
    </div> `;

    let $new_elem = $(template_element_html);

    $new_elem.find(".id").html(vehicle_object["id"]);
    $new_elem.find(".type").html(vehicle_object["type"]);
    $new_elem.find(".status").html(vehicle_object["status"]);

    switch (parseInt(vehicle_object["status"]))
    {
        case -1:
            // vehicle need maintanence
            $new_elem.find(".vehicle-state-icon img")
                .attr("src", "../../img/icon-dangerous.svg")
                .attr("class", "dangerous-icon");
            break;
        case 0:
            // vehicle is unplanned
            $new_elem.find(".vehicle-state-icon img")
                .attr("src", "../../img/icon-warning.svg")
                .attr("class", "warning-icon");
            break;
        case 1:
            // vehicle is planned
            $new_elem.find(".vehicle-state-icon img")
                .attr("src", "../../img/icon-checkmark.svg")
                .attr("class", "checkmark-icon");
            break;
        default:
            break;
    }

    return $new_elem;
}

function vehicle_element_onclick()
{
    $currently_chosen_vehicle = $(this);
    var already_selected = $(this).hasClass(selected_element_style);

    $vehicle_listing_elements.removeClass(selected_element_style);
    if (!already_selected)
    {
        $(this).addClass(selected_element_style);
        $vehicle_info.find('span.id').html($(this).find('span.id').html());
        $vehicle_info.find('span.type').html($(this).find('span.type').html());
        $('.card.vehicle-information').removeClass(display_none_style);
        update_sched_button_state(vehicle_listing_element_state($(this)))
    }
    else
    {
        $('.card.vehicle-information').addClass(display_none_style);
        update_sched_button_state("");
        currently_chosen_vehicle = null;
    }
}

function display_vehicle()
{
    if (query_result.errno === null)
    {
        // result is not a error
        // generate and append all returned vehicle object
        for (let vehicle_object of query_result.result)
        {
            let $new_elem = generate_vehicle_html_element(vehicle_object)
            $(".vehicle-listing .col").append($new_elem);
        }

        // create a list of all vehicle (needed for other function)
        $vehicle_listing_elements = $('.vehicle-listing .vehicle-listing-element');
        // attach click event for each vehicle
        $vehicle_listing_elements.click(vehicle_element_onclick);
    }
}

function load_vehicle_and_display()
{
    query_db(sql_query, query_addr, display_vehicle, callback_notify("Error loading vehicle"));
}

function vehicle_listing_element_state(e)
{
    if (e.find('.vehicle-state-icon .checkmark-icon').length !== 0)
        return "normal";
    else if (e.find('.vehicle-state-icon .warning-icon').length !== 0)
        return "warning";
    else if (e.find('.vehicle-state-icon .dangerous-icon').length !== 0)
        return "danger";
    else
        return "unknown";
}

function update_sched_button_state(e_state)
{
    if (e_state === "normal")
    {
        $set_schedule_button.prop('disabled', true);
        $remove_schedule_button.prop('disabled', false);
    }
    else if (e_state === "warning")
    {
        $set_schedule_button.prop('disabled', false);
        $remove_schedule_button.prop('disabled', true);
    }
    else if (e_state === "danger")
    {
        $set_schedule_button.prop('disabled', true);
        $remove_schedule_button.prop('disabled', true);
    }
    else
    {
        $set_schedule_button.prop('disabled', true);
        $remove_schedule_button.prop('disabled', true);
    }
}

load_vehicle_and_display();
update_sched_button_state("");
$vehicle_listing_elements.removeClass(selected_element_style);

$remove_schedule_button.click(function(e) {
    todo = "remove";
});

$set_schedule_button.click(function(e) {
    todo = "set";
});

function change_vehicle_status(e_state)
{
    if (e_state === "normal")
    {
        $currently_chosen_vehicle.find('.vehicle-state-icon img')
            .attr('src', '../../img/icon-checkmark.svg')
            .attr('class', 'checkmark-icon');
    }
    else if (e_state === "warning")
    {
        $currently_chosen_vehicle.find('.vehicle-state-icon img')
            .attr('src', '../../img/icon-warning.svg')
            .attr('class', 'warning-icon');
    }
    else if (e_state === "danger")
    {
        $currently_chosen_vehicle.find('.vehicle-state-icon img')
            .attr('src', '../../img/icon-dangerous.svg')
            .attr('class', 'dangerous-icon');
    }
    else
    {
        // should not reach this
        console.log("Invalid target vehicle state to change");
    }
}

$confirm_action_button.click(function(e) {
    if ($currently_chosen_vehicle === null)
        return;

    let vehicle_id = $currently_chosen_vehicle.find('span.id').html();
    let query = "update vehicles set status=<> where id=" + vehicle_id;

    if (todo === "remove")
    {
        query_db(
            query.replace("<>", 0),
            query_addr,
            () => {
                change_vehicle_status("warning");
                update_sched_button_state(vehicle_listing_element_state($currently_chosen_vehicle));
            },
            callback_notify("Error updating vehicle status")
        );
    }
    else if (todo === "set")
    {
        query_db(
            query.replace("<>", 1),
            query_addr,
            () => {
                change_vehicle_status("normal");
                update_sched_button_state(vehicle_listing_element_state($currently_chosen_vehicle));
            },
            callback_notify("Error updating vehicle status")
        );
    }
    else
    {
        console.log("Unknown operation");
    }
});

$('form #vehicle-filter-option').on('change', function(e) {
    // clear all selection
    update_sched_button_state("");
    $vehicle_listing_elements.removeClass(selected_element_style);

    let selected_value = $(this).val();

    if (selected_value === "all")
    {
        $vehicle_listing_elements.removeClass(display_none_style);
    }
    else if (selected_value === "unplanned")
    {
        $vehicle_listing_elements.addClass(display_none_style);
        $vehicle_listing_elements.filter(function() {
            if ($(this).find('.vehicle-state-icon .warning-icon').length !== 0)
                return true;
            else
                return false;
        }).removeClass(display_none_style);
    }
    else if (selected_value === "maintanence")
    {
        $vehicle_listing_elements.addClass(display_none_style);
        $vehicle_listing_elements.filter(function() {
            if ($(this).find('.vehicle-state-icon .dangerous-icon').length !== 0)
                return true;
            else
                return false;
        }).removeClass(display_none_style);
    }
    else
    {
        console.log("Unknown selection option");
    }
});
