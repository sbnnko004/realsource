// Call the dataTables jQuery plugin
$(document).ready(function() {
    var table = $(".table").dataTable({
        aaSorting: [[0, 'asc']],
        bPaginate: false,
        bFilter: false,
        bInfo: false,
        bSortable: true,
        bRetrieve: true,
        aoColumnDefs: [
            {
                bSortable: false,
                aTargets: [ -1 ]
            }
        ]
    });

    

    $(document).on('click', '.row_data.editable', function(event) 
    {
        event.preventDefault(); 

        if($(this).attr('edit_type') == 'button' )
        {
            return false; 
        }

        //make div editable
        $(this).closest('div').attr('contenteditable', 'true');
        //add bg css
        $(this).addClass('bg-warning').css('padding','5px');

        $(this).focus();
    });	

    $(document).on('click', '.btn_edit', function(event) 
    {
        event.preventDefault();
        var tbl_row = $(this).closest('tr');

        var row_id = tbl_row.attr('row_id');

        tbl_row.find('.btn_update').show();
        tbl_row.find('.btn_cancel').show();

        //hide edit button
        tbl_row.find('.btn_edit').hide(); 

        //make the whole row editable
        tbl_row.find('.row_data')
        .attr('contenteditable', 'true')
        .attr('edit_type', 'button')
        .addClass('bg-warning')
        .css('padding','3px')

        //--->add the original entry > start
        tbl_row.find('.row_data').each(function(index, val) 
        {  
            //this will help in case user decided to click on cancel button
            $(this).attr('original_entry', $(this).html());
        }); 		
        //--->add the original entry > end

    });
    //--->button > edit > end

     //--->button > cancel > start	
    $(document).on('click', '.btn_cancel', function(event) 
    {
        event.preventDefault();

        var tbl_row = $(this).closest('tr');

        var row_id = tbl_row.attr('row_id');

        //hide save and cacel buttons
        tbl_row.find('.btn_update').hide();
        tbl_row.find('.btn_cancel').hide();

        //show edit button
        tbl_row.find('.btn_edit').show();

        //make the whole row editable
        tbl_row.find('.row_data')
        .attr('edit_type', 'click')	 
        .removeClass('bg-warning')
        .css('padding','') 

        tbl_row.find('.row_data').each(function(index, val) 
        {   
            $(this).html( $(this).attr('original_entry') ); 
        });  
    });
    //--->button > cancel > end

    // onclick add button
    $(document).on('click', '.btn_add', function(event)
    {
        event.preventDefault();
        //console.log("delete button clicked");

    
    });

    // onclick delete button
    $(document).on('click', '.btn_delete', function(event)
    {
        event.preventDefault();
        //console.log("delete button clicked");

        var tbl_row = $(this).closest('tr');
        var row_id = tbl_row.attr('row_id');

        //--->get row data > start
        var arr = {}; 
        var table_name = $(this).closest('table').attr('table_name');

        console.log('delete');
        $( "#dialog-confirm" ).dialog({
            resizable: false,
            height: "auto",
            width: 400,
            modal: true,
            buttons: {
              "Delete": function() {
                    //use the "arr"	object for your ajax call
                    $.extend(arr, {row_id:row_id, operation:"delete",table_name:table_name});
                    sendData(arr);
                    tbl_row.remove();
                    
                    $( this ).dialog( "close" );
              },
              Cancel: function() {
                $( this ).dialog( "close" );
              }
            }
          });

    });

    $(document).on('click', '.btn_update', function(event) 
    {
        event.preventDefault();
        var tbl_row = $(this).closest('tr');

        var row_id = tbl_row.attr('row_id');

        
        //hide save and cacel buttons
        tbl_row.find('.btn_update').hide();
        tbl_row.find('.btn_cancel').hide();

        //show edit button
        tbl_row.find('.btn_edit').show();


        //make the whole row editable
        tbl_row.find('.row_data')
        .attr('edit_type', 'click')	
        .removeClass('bg-warning')
        .css('padding','') 

        //--->get row data > start
        var arr = {}; 
        var table_name = $(this).closest('table').attr('table_name');

        tbl_row.find('.row_data').each(function(index, val) 
        {   
            var col_name = $(this).attr('col_name');  
            var col_val  =  $(this).html();
            arr[col_name] = col_val;
        });
        //--->get row data > end

        //use the "arr"	object for your ajax call
        $.extend(arr, {row_id:row_id, operation:"edit",table_name:table_name});

        //out put to show
        //$('.post_msg').html( '<pre class="bg-success">'+JSON.stringify(arr, null, 2) +'</pre>')
        sendData(arr);
        

    });

    //--->save single field data > start
    $(document).on('focusout', '.row_data', function(event) 
    {
        event.preventDefault();

        if($(this).attr('edit_type') == 'button')
        {
            return false; 
        }

        var row_id = $(this).closest('tr').attr('row_id'); 
        
        var row_div = $(this)			
        .removeClass('bg-warning') //add bg css
        .css('padding','')

        var col_name = row_div.attr('col_name'); 
        var col_val = row_div.html(); 

        
        //--->get row data > start
        var arr = {}; 
        
        var table_name = $(this).closest('table').attr('table_name');
        
        var tbl_row = $(this).closest('tr');

        tbl_row.find('.row_data').each(function(index, val) 
        {   
            var col_name = $(this).attr('col_name');  
            var col_val  =  $(this).html();
            arr[col_name] = col_val;
        });
        //--->get row data > end

        //use the "arr"	object for your ajax call
        $.extend(arr, {row_id:row_id, operation:"edit",table_name:table_name});

        //out put to show
        //$('.post_msg').html( '<pre class="bg-success">'+JSON.stringify(arr, null, 2) +'</pre>');
        sendData(arr);

        
    })	
    //--->save single field data > end


    // sending data to server
    function sendData(data_array) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var jsondata = JSON.stringify(data_array);

        //console.log(data_array);
        $.ajax({
            url: 'admin',
            type: 'POST',
            data: {_token: CSRF_TOKEN, message: jsondata},
            dataType: 'JSON',
            success: function(response, textStatus, jqXHR) {
                //console.log(response);
            },
            error: function(jqXHR, textStatus, errorThrown){
                //console.log(jqXHR.responseText)               
            }
        });
    }
});
