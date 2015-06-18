/**
 * Created by elporfirio on 17/06/2015.
 */

var objetos = [
    //Cantida de objetos = elementos en el array
    {
        nombre : "bar",
        rasgos : [ //Cantidad de rasgos es el array
            {
                nombre : "color",
                tipo : "kvalente", //boolean, Kvalente, real
                valores : [
                    {
                        nombre : "verde",
                        conjunto : "primarios"
                    },
                    {
                        nombre: "azul",
                        conjunto: "primarios"
                    },
                    {
                        nombre: "magenta",
                        conjunto: "compuesto"
                    }
                ],
                comparacion: "similaridad" //similaridad, similaridad x conjunto, similaridad x umbral
            },
            {
                nombre : "edad",
                tipo : "real", //boolean, Kvalente, real
                valores: [
                    {
                        viniciocerrado : true,
                        valorinicio : 10,
                        valorfinal : 99,
                        vfinalcerrado: false,
                        conjunto : 'A'
                    }
                ],
                comparacion: "similaridad por intervalos" //x intervalos, similaridad MAX-MIN
            },
            {
                nombre : "sexo",
                tipo : "boolean", //boolean, Kvalente, real
                valores: [  //cantidad de valores admisibles
                    {
                        vtrue : true,
                        vfalse : false,
                        conjunto : 'A'
                    },
                    {
                        vtrue: "masculino",
                        vfalse: "femenino",
                        conjunto : 'B'
                    }
                ],
                comparacion: "disimilaridad" //similaridad, disimilaridad, similaridad x conjunto
            }
        ]
    }
];