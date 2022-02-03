

let form = document.getElementById("login_form")

form.addEventListener("submit",(e)=>{

    e.preventDefault()
    console.log("submmited")

    var userName=document.getElementById("username").value
    console.log(userName)
    var password=document.getElementById('password').value
    console.log(password)

    const res =new XMLHttpRequest();
    let newForm = new FormData(form)
    res.open("POST","http://127.0.0.1:5500//login.php",true)

    res.onload= ()=>{
        if (this.status==200){
            console.log(res.responseText);
            const response = JSON.parse(this.responseText);

            if(response['role']== 0){
                //set to user html
            }
            else if (response['role' ==1]) {
                //set to teacher html
            }

        }
    }
    res.setRequestHeader('Content-type', 'http://127.0.0.1:5500/login.php');

    res.send(newForm);

})
