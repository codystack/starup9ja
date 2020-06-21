// Registration Modal

if (queryParameters().success === "regsuccess"){
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Registration was successful!',
        showConfirmButton: false,
        timer: 3000
    });
    setTimeout(function(){
        let removePram = window.location.href;
        removePram = window.location.href.split("?")[0];
        window.location.assign(removePram);
    }, 2000);
    setTimeout(function(){
        window.location.href = 'login';
     }, 2000);
}

if (queryParameters().error === "regnotsuccess"){
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Already Registered!',
        showConfirmButton: false,
        timer: 3000
    });
    setTimeout(function(){
        let removePram = window.location.href;
        removePram = window.location.href.split("?")[0];
        window.location.assign(removePram);
    }, 3000);
}