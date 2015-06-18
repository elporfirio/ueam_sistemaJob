var objetos = [
    {
        nombre : "bar",
        rasgos : [
            {
                nombre : "color",
                tipo : "kvalente",
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
                comparacion: "similaridad"
            },
            {
                nombre : "edad",
                tipo : "real",
                valores: [
                    {
                        viniciocerrado : true,
                        valorinicio : 10,
                        valorfinal : 99,
                        vfinalcerrado: false,
                        conjunto : 'A'
                    }
                ],
                comparacion: "similaridad por intervalos"
            },
            {
                nombre : "sexo",
                tipo : "boolean",
                valores: [
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
                comparacion: "disimilaridad"
            }
        ]
    }
];