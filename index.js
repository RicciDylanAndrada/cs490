

let form = document.getElementById("login_form")

form.addEventListener("submit",(e)=>{

    e.preventDefault()
    console.log("submmited")

    var userName=document.getElementById("username").value
    console.log(userName)
    var password=document.getElementById('password').value
    console.log(password)

    (async() =>{
        try{
            var headers = new Headers();
            headers.append("Content-Type", "application/x-www-form-urlencoded");
            const response = await fetch('http://localhost/example/php/example.php', {
              method: 'POST', // or other
              headers,
              body: args
            });
            print(response)
        }
        catch(err){
            console.log(err)
        }
    })

    const res =new XMLHttpRequest();
    let newForm = new FormData(form)
    res.open("POST","http://127.0.0.1:5500//login.php",true)

    res.onload= ()=>{
        if (this.status==200){
            console.log(res.responseText);
            const response = JSON.parse(this.responseText);

            if(response['role']== 0){
            }
            else if (response['role' ==1]) {
            }

        }
    }
    res.setRequestHeader('Content-type', 'http://127.0.0.1:5500/login.php');

    res.send(newForm);

})
