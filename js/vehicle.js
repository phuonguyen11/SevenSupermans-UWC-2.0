var selected_element_style = 'selected shadow fw-bold';
var display_none_style = 'd-none';

var $vehicle_listing_elements = $('.vehicle-listing .vehicle-listing-element');
var $set_schedule_button = $('.btn-set-sched');
var $remove_schedule_button = $('.btn-remove-sched');
var $confirm_action_button = $('#confirmation-button-yes')

var $currently_chosen_vehicle = null;
var todo = null;

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

$vehicle_listing_elements.click(function(e) {
    $currently_chosen_vehicle = $(this);
    var already_selected = $(this).hasClass(selected_element_style);

    $vehicle_listing_elements.removeClass(selected_element_style);
    if (!already_selected)
    {
        $(this).addClass(selected_element_style);
        $('.card.vehicle-information').removeClass(display_none_style);
        update_sched_button_state(vehicle_listing_element_state($(this)))
    }
    else
    {
        $('.card.vehicle-information').addClass(display_none_style);
        update_sched_button_state("");
        currently_chosen_vehicle = null;
    }
});

$remove_schedule_button.click(function(e) {
    todo = "remove";
});

$set_schedule_button.click(function(e) {
    todo = "set";
});

$confirm_action_button.click(function(e) {
    if ($currently_chosen_vehicle === null)
        return;

    if (todo === "remove")
    {
        $currently_chosen_vehicle.find('.vehicle-state-icon img')
            .attr('src', '../../img/icon-warning.svg')
            .attr('class', 'warning-icon');
    }
    else if (todo === "set")
    {
        $currently_chosen_vehicle.find('.vehicle-state-icon img')
            .attr('src', '../../img/icon-checkmark.svg')
            .attr('class', 'checkmark-icon');
    }
    else
    {
        console.log("Unknown operation");
    }
    update_sched_button_state(vehicle_listing_element_state($currently_chosen_vehicle));
});

$('form #vehicle-filter-option').on('change', function(e) {
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

update_sched_button_state("");
$vehicle_listing_elements.removeClass(selected_element_style);
