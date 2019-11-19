$.extend( true, $.fn.dataTable.defaults, {
    searching: false,
    ordering: false,
    paging:   true,
    responsive: true,
    processing: true,
    searchHighlight: true,
    lengthMenu: [ [15, 30, 45, -1], [15, 30, 45, "All"] ],
    orderCellsTop: true,
    bPaginate: false,
    bLengthChange: false,
    bFilter: true,
    bInfo: false,
    bAutoWidth: false,
} );

$(document).ready( function () {
        
    var tablagenerica = $('#tablagenerica').DataTable({   
        
        oLanguage: {
            "sSearch": "Buscar:",
            "sLengthMenu": "Mostrar  _MENU_  entradas",
            "sZeroRecords": "No hay registros para mostrar",
            "sInfoEmpty": "No hay registros para mostrar",
            "sInfo": "Hay  _TOTAL_ entradas para mostrar (_START_ a _END_)",
            "previous": "Anterior",
            "sNext": "Siguiente",
            "sLast": "Última página",
            "sFirst": "Primera página",  
        },     
    } );
    
    
    //#endregion

$("#tablagenerica_previous").children(":first").text("Anterior");
$("#tablagenerica_next").children(":first").text("Siguiente");
});
