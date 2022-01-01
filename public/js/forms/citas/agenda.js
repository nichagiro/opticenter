const formy = document.getElementById('formy');
const button = document.getElementById('btn-agenda');


formy.addEventListener('submit', (e) => {
    e.preventDefault();
    button.setAttribute('display', true);
    const data = new FormData(formy);
    fetch('emailCitas',{
        body: data,
        method: 'POST',
        // headers: {
        //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        // }
    })
    .then(response => response.json())
    .then(data => {
        if(data){           
            ShowAlert('success');
            formy.reset();
        }
        else{
            ShowAlert('danger');
            button.removeAttribute('display');
        }
    });
})

const ShowAlert = color => {
    const msg = color == 'success' ? 'Se envio con exito' : 'llene todos los campos'
    const alert =   
        `<div id="alert" class="alert alert-${color} fixed-top role="alert">
            ${msg}
        </div>`

    document.body.innerHTML += alert;
    setTimeout(() => {
        document.getElementById('alert').remove()
    }, 4000);

}

