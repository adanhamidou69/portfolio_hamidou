fetch("my_cinema.php")
.then(response => { 

    if(!response.ok){
            throw new Error("fetch échoué");

    }
    return response.json();
})
.then(data => console.log(data))
.catch(error=>console.error(error));






