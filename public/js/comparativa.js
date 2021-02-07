 /* Comprativa Anual */ 

        // Comparativa Anual Izq
        $("#hotel1").change(event =>{
            $.get(`anios/${event.target.value}`,function(res,sta){
                console.log(res);
                $("#anio1").empty();
                $("#anio1").append(`<option disabled selected value = "">Selecciona un año</option>`);
                res.forEach(element => {
                    $("#anio1").append(`<option value = ${element.fecha}> ${element.fecha}</option>`);
                });                
            });            
        });

        // Comparativa Anual Der
        $("#hotel1").change(event =>{
            $.get(`anios/${event.target.value}`,function(res,sta){
                console.log(res);
                $("#anio2").empty();
                $("#anio2").append(`<option disabled selected value = "">Selecciona un año</option>`);
                res.forEach(element => {
                    $("#anio2").append(`<option value = ${element.fecha}> ${element.fecha}</option>`);
                });                
            });            
        });
        
        /* Comparativa Mensual*/

        // Comparativa Izq
        $("#hotel2").change(event =>{
            $.get(`anios/${event.target.value}`,function(res,sta){
                console.log(res);
                $("#anio3").empty();
                $("#mes1").empty();
                $("#anio3").append(`<option value = "">Selecciona un año</option>`);
                $("#mes1").append(`<option value = "">Selecciona un mes</option>`);
                res.forEach(element => {
                    $("#anio3").append(`<option value = ${element.fecha}> ${element.fecha}</option>`);
                });                
            });            
        });
        $("#anio3").change(event =>{
            $.get(`meses/${event.target.value}`,function(res,sta){
                console.log(res);
                $("#mes1").empty();
                $("#mes1").append(`<option value = "">Selecciona un mes</option>`);
                res.forEach(element => {
                    var mesNum = element.mes;
                    var mes = "";
                    switch (mesNum) {
                        case 1:
                            mes = 'Enero';
                            break;
                        case 2:
                            mes = 'Febrero';
                            break;
                        case 3:
                            mes = 'Marzo';
                            break;
                        case 4:
                            mes = 'Abril';
                            break;
                        case 5:
                            mes = 'Mayo';
                            break;
                        case 6:
                            mes = 'Junio';
                            break;
                        case 7:
                            mes = 'Julio';
                            break;
                        case 8:
                            mes = 'Agosto';
                            break;
                        case 9:
                            mes = 'Septiembre';
                            break;
                        case 10:
                            mes = 'Octubre';
                            break;
                        case 11:
                            mes = 'Noviembre';
                            break;
                        case 12:
                            mes = 'Diciembre';
                            break;                            
                      
                        default:
                          console.log('default');
                      }
                    $("#mes1").append(`<option value =${element.mes}> ${mes}</option>`);
                });
            });
        });

        // Comparativa Anual Izq
        $("#hotel2").change(event =>{
            $.get(`anios/${event.target.value}`,function(res,sta){
                console.log(res);
                $("#anio4").empty();
                $("#mes2").empty();
                $("#anio4").append(`<option value = "">Selecciona un año</option>`);
                $("#mes2").append(`<option value = "">Selecciona un mes</option>`);
                res.forEach(element => {
                    $("#anio4").append(`<option value = ${element.fecha}> ${element.fecha}</option>`);
                });                
            });            
        });
        $("#anio4").change(event =>{
            $.get(`meses/${event.target.value}`,function(res,sta){
                console.log(res);
                $("#mes2").empty();
                $("#mes2").append(`<option value = "">Selecciona un mes</option>`);
                res.forEach(element => {
                    var mesNum = element.mes;
                    var mes = "";
                    switch (mesNum) {
                        case 1:
                            mes = 'Enero';
                            break;
                        case 2:
                            mes = 'Febrero';
                            break;
                        case 3:
                            mes = 'Marzo';
                            break;
                        case 4:
                            mes = 'Abril';
                            break;
                        case 5:
                            mes = 'Mayo';
                            break;
                        case 6:
                            mes = 'Junio';
                            break;
                        case 7:
                            mes = 'Julio';
                            break;
                        case 8:
                            mes = 'Agosto';
                            break;
                        case 9:
                            mes = 'Septiembre';
                            break;
                        case 10:
                            mes = 'Octubre';
                            break;
                        case 11:
                            mes = 'Noviembre';
                            break;
                        case 12:
                            mes = 'Diciembre';
                            break;                            
                      
                        default:
                          console.log('default');
                      }
                    $("#mes2").append(`<option value =${element.mes}> ${mes}</option>`);
                });
            });
        });