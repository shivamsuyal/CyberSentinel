// mail.onclick = ()=>{
//     document.location.href = `mailto:me@domain.com?subject=${encodeURIComponent(subject.value)}&body=${encodeURIComponent(fname.value + ' ' + lname.value + '\n' + msg.value)}`
// }
const apiURL = "./mail"

function disError(err){
    console.log(err)
}

const validateEmail = (email) => {
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
};

function mail1(){
    var data = Object.fromEntries(new FormData(cfContent).entries())
    
    // fname
    var re = RegExp("^[a-zA-Z]+$")
    if(!re.test(data['fname'])){
        return disError("fname") 
    }

    // lname
    if(!re.test(data['lname'])){
        return disError("lname")
    }
    
    // phone NUM
    re = RegExp("^[0-9]{10}$")
    if(!re.test(data['pNO'])){
        return disError("Phone Number")
    }

    // EMAIL
    if(!validateEmail(data['email'])){
        return disError("Email")
    }
    // re = RegExp("^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$")
    // if (!re.test(data['email'])){
    //     console.log(data['email'])
    //     return disError("Email")
    // }

    // msg
    if(data['msg'].length > 200){
        return disError("Message")
    }



    $.ajax({
        url : apiURL,
        method : 'POST',
        type : 'POST',
        data : data,
        success : (data)=>{
            console.log(data)
            cfContent.reset()
        }
    })
}



window.onload = ()=>{
    cfContent.reset()
    // cfContent.reset()
}



