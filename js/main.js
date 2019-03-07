function generarMeses(mes, frecuencia){


    //En el caso de que la frencuencia de pago sea mensual
    if(frecuencia==="Mensual"){

        switch (mes) {


            case "Diciembre":

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

            case "Enero":

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

            case "Febrero":

                $("#mes1txt").text("MAR 2018");
                $("#mes2txt").text("ABR 2018");  
                $("#mes3txt").text("MAY 2018");  
                $("#mes4txt").text("JUN 2018");  
                $("#mes5txt").text("JUL 2018");  
                $("#mes6txt").text("AGO 2018");  
                $("#mes7txt").text("SEP 2018");  
                $("#mes8txt").text("OCT 2018");  
                $("#mes9txt").text("NOV 2018");  
                $("#mes10txt").text("DIC 2018");  
                $("#mes11txt").text("ENE 2019");  
                $("#mes12txt").text("FEB 2019");  
                break;
        
                case "Marzo":

                $("#mes1txt").text("ABR 2018");
                $("#mes2txt").text("MAY 2018");  
                $("#mes3txt").text("JUN 2018");  
                $("#mes4txt").text("JUL 2018");  
                $("#mes5txt").text("AGO 2018");  
                $("#mes6txt").text("SEP 2018");  
                $("#mes7txt").text("OCT 2018");  
                $("#mes8txt").text("NOV 2018");  
                $("#mes9txt").text("DIC 2018");  
                $("#mes10txt").text("ENE 2019");  
                $("#mes11txt").text("FEB 2019");  
                $("#mes12txt").text("MAR 2019");  
                break;
        
            default:

                break;
        }





    //En caso de que la frecuencia de pago sea Bimestral
    }else if(frecuencia==="Bimestral"){

        switch(mes){

            case "Diciembre":

                $("#mes1txt").text("AGO 18 AL OCT 18");
                $("#mes2txt").hide();
                $("#mes2").hide();
                $("#mes3txt").text("JUN 18 AL AGO 18");
                $("#mes4txt").hide();
                $("#mes4").hide();
                $("#mes5txt").text("ABR 18 AL JUN 18");
                $("#mes6txt").hide();
                $("#mes6").hide();
                $("#mes7txt").text("FEB 18 AL ABR 18");
                $("#mes8txt").hide();
                $("#mes8").hide();
                $("#mes9txt").text("DIC 17 AL FEB 18");
                $("#mes10txt").hide();
                $("#mes10").hide();
                $("#mes11txt").text("OCT 17 AL DIC 17");
                $("#mes12txt").hide();
                $("#mes12").hide();

            break;

            case "Enero":

                $("#mes1txt").text("SEP 18 AL NOV 18");
                $("#mes2txt").hide();
                $("#mes2").hide();
                $("#mes3txt").text("JUL 18 AL SEP 18");
                $("#mes4txt").hide();
                $("#mes4").hide();
                $("#mes5txt").text("MAY 18 AL JUL 18");
                $("#mes6txt").hide();
                $("#mes6").hide();
                $("#mes7txt").text("MAR 18 AL MAY 18");
                $("#mes8txt").hide();
                $("#mes8").hide();
                $("#mes9txt").text("ENE 18 AL MAR 18");
                $("#mes10txt").hide();
                $("#mes10").hide();
                $("#mes11txt").text("NOV 17 AL ENE 18");
                $("#mes12txt").hide();
                $("#mes12").hide();

            break;

            case "Febrero":

                $("#mes1txt").text("OCT 18 AL DIC 18");
                $("#mes2txt").hide();
                $("#mes2").hide();
                $("#mes3txt").text("AGO 18 AL OCT 18");
                $("#mes4txt").hide();
                $("#mes4").hide();
                $("#mes5txt").text("JUN 18 AL AGO 18");
                $("#mes6txt").hide();
                $("#mes6").hide();
                $("#mes7txt").text("ABR 18 AL JUN 18");
                $("#mes8txt").hide();
                $("#mes8").hide();
                $("#mes9txt").text("FEB 18 AL ABR 18");
                $("#mes10txt").hide();
                $("#mes10").hide();
                $("#mes11txt").text("DIC 17 AL FEB 18");
                $("#mes12txt").hide();
                $("#mes12").hide();

            break;

            case "Marzo":

                $("#mes1txt").text("NOV 18 AL ENE 19");
                $("#mes2txt").hide();
                $("#mes2").hide();
                $("#mes3txt").text("SEP 18 AL NOV 18");
                $("#mes4txt").hide();
                $("#mes4").hide();
                $("#mes5txt").text("JUL 18 AL SEP 18");
                $("#mes6txt").hide();
                $("#mes6").hide();
                $("#mes7txt").text("MAY 18 AL JUL 18");
                $("#mes8txt").hide();
                $("#mes8").hide();
                $("#mes9txt").text("MAR 18 AL MAY 18");
                $("#mes10txt").hide();
                $("#mes10").hide();
                $("#mes11txt").text("ENE 18 AL MAR 18");
                $("#mes12txt").hide();
                $("#mes12").hide();

            break;
        }

    }

}

