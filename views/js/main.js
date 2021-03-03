const pokemons = [{nombre: "JPR", puesto:"presi"},
                  {nombre: "JPC", puesto:"tesorero"},
                  {nombre: "ARIEL", puesto: "secretario"},
                 ]// ACA DEBO TRAER EL JSON DE LA API QUE TENEMOS EN EL MODELO

const form = document.querySelector("#search-form");
const button = document.querySelector("#search-btn");
const result = document.querySelector('#result')
const filter =()=>{
   
   result.innerHTML="";
   const txt = form.value.toLowerCase();
   for (let poke of pokemons){
        let pokeName = poke.nombre.toLowerCase();
        if (pokeName.indexOf(txt) !== -1){
            result.innerHTML+= '<h3>${poke.nombre} - Puesto: ${poke.puesto}</h3>' // REVISAR NO MUESTRA EL DATO
            
        }
   }
   if (result.innerHTML ===''){
       result.innerHTML+='<h3>NOT FOUND :(</h3>'
   }

}

button.addEventListener('click',filter)