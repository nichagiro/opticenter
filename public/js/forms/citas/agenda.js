const formy = document.getElementById('formy');
formy.addEventListener('submit', (e) => {
    e.preventDefault();
    const button = document.getElementById('btn-agenda');
    button.setAttribute('disabled', true);
    button.innerText = 'Cargando...'
    const data = new FormData(formy);
    fetch('emailCitas',{
        body: data,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if(data){           
            ShowAlert('success');
            formy.reset();
            SetDisplayButton(true)
        }
        else{
            ShowAlert('danger');
            SetDisplayButton(false)
        }
    });
})

const ShowAlert = color => {
    const msg = color == 'success' ? 'Se envio con exito' : 'llene todos los campos'
    const notify = document.getElementById('notify')
    const alert =   
        `<div id="alert" class="alert alert-${color} fixed-top" role="alert">
            ${msg}
        </div>`

    notify.innerHTML += alert;
    setTimeout(() => {
        document.getElementById('alert').remove()
    }, 4000);
}

const SetDisplayButton = (disabled) => {
    const button = document.getElementById('btn-agenda');
    if(disabled){
        button.innerText = 'ENVIADO'
    } 
    else{
        button.removeAttribute('disabled');
        button.innerText = 'ENVIA MENSAJE'
    }
}

