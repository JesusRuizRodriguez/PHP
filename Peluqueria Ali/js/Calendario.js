
// creamos una variable con la extension mysql de node

const mysql = require('mysql');

// creamos una variable que guarda los datos para la conexion mediante la extension previa

const conexion = mysql.createConnection({
    host:'localhost',
    user:'test',
    password:'aa',
    database:'peluqueria'

})

// nos conectamos a la base de datos soltando un error en caso de fallo
conexion.connect((err)=>{
    if(err) throw err
    
})

// obtiene todos los datos de los usuarios, y los muestra como una promesa
// en caso de fallo mostrara el error

function cambiarColor(){
    let boton = document.getElementsByTagName("div");

    boton.addEventListener("click",()=>{
        let id = boton.getAttribute('id')
        let insert = "INSERT INTO Cita (fecha_hora, disponible) VALUES (id, 1)  "; 

        conexion.query(insert, (err,rows) =>{
            if(err) throw err
        })
    })
    
}

// se cierra la conexion
conexion.end()

