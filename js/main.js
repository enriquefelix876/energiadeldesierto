function generarMeses(mes){

    switch (mes) {

        case "Enero":

        console.log(mes);

            $("#mes1txt").text("ENE 2018");
            $("#mes2txt").text("FEB 2018");
            $("#mes3txt").text("MAR 2018");
            $("#mes4txt").text("ABR 2018");  
            $("#mes5txt").text("MAY 2018");  
            $("#mes6txt").text("JUN 2018");  
            $("#mes7txt").text("JUL 2018");  
            $("#mes8txt").text("AGO 2018");  
            $("#mes9txt").text("SEP 2018");  
            $("#mes10txt").text("OCT 2018");  
            $("#mes11txt").text("NOV 2018");  
            $("#mes12txt").text("DIC 2018");  
            
            break;

        case "Febrero":

            $("#mes1txt").text("FEB 2018");
            $("#mes2txt").text("MAR 2018");  
            $("#mes3txt").text("ABR 2018");  
            $("#mes4txt").text("MAY 2018");  
            $("#mes5txt").text("JUN 2018");  
            $("#mes6txt").text("JUL 2018");  
            $("#mes7txt").text("AGO 2018");  
            $("#mes8txt").text("SEP 2018");  
            $("#mes9txt").text("OCT 2018");  
            $("#mes10txt").text("NOV 2018");  
            $("#mes11txt").text("DIC 2018");  
            $("#mes12txt").text("ENE 2019");  
            break;
    
            case "Marzo":

            $("#mes1txt").text("MAR 2018");
            $("#mes2txt").text("ABR 2018");  
            $("#mes3txt").text("MAY 2018");  
            $("#mes4txt").text("JUN 2018");  
            $("#mes5txt").text("JUL 2018");  
            $("#mes6txt").text("AGO 2018");  
            $("#mes7txt").text("SEP 2018");  
            $("#mes8txt").text("OCT 2018");  
            $("#mes9txt").text("NOV 2018");  
            $("#mes10txt").text("DIC 2019");  
            $("#mes11txt").text("ENE 2019");  
            $("#mes12txt").text("FEB 2019");  
            break;
    
        default:

            break;
    }

}