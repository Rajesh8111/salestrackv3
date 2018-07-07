var options = [];

$('.dropdown-menu a').on('click', function(event) {

    var $target = $(event.currentTarget),
        val = $target.attr('data-value'),
        $inp = $target.find('input'),
        idx;

    if ((idx = options.indexOf(val)) > -1) {
        options.splice(idx, 1);
        setTimeout(function() { $inp.prop('checked', false) }, 0);
    } else {
        options.push(val);
        setTimeout(function() { $inp.prop('checked', true) }, 0);
    }

    $(event.target).blur();

    console.log(options);
    return false;
});


$(document).ready(function() {
    // // Setup - add a text input to each footer cell
    // $('#example tfoot th').each(function() {
    //     var title = $(this).text();
    //     $(this).html('<input type="text" placeholder="Search ' + title + '" />');
    // });

    // DataTable
    $.noConflict();
    var table = $('#example').DataTable({
        "searching": true,
        dom: 'Bfrtip',
        buttons: [{
            text: 'Edit',
            style: 'btn btn-primary',
            action: function(e, dt, node, config) {
                alert('Button activated');
            }
        }]
    });



    $('#searchText').on('keyup', function(e) {
        let column = $('#column').val();
        let value = this.value;
        // alert(column);
        if (column != -1) {
            table
                .columns(column)
                .search(value)
                .draw();
        } else {
            table
                .search(value)
                .draw();
        }
    });


    $(".check").change(function() {
        $(".check").prop('checked', false);
        $(this).prop('checked', true);
    });
});