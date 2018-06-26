// Self Calling Function
(function(){
    
    $('.modal-body button').on('click',function(){
        let btn = $(this);
        let btnTxt = btn.text();
        let tarea = $("#"+$(this).data("id"));
        let tappend = $("#"+$(this).data("append")).val();
        // function to append text
        if(btnTxt=="Append"){
        tarea.val(tappend+"\n"+tarea.val());
        $("#"+$(this).data("append")).val("");
        }

        // function to edit
        else if(btnTxt == "Edit"){
            tarea.removeAttr('readonly');
            tarea.toggleClass('cursor-disabled');
            btn.text("Lock");
        }

        // function to Lock        
        else if(btnTxt == "Lock"){
            tarea.attr('readonly');
            tarea.toggleClass('cursor-disabled');            
            btn.text("Edit");
        }
    });


})()