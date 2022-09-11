const formy = document.getElementById('formy');
formy.addEventListener('submit', async (e) => {
    e.preventDefault();
    const button = document.getElementById('btn-agenda');
    button.setAttribute('disabled', true);
    button.innerText = 'Cargando...'
    const data = new FormData(formy);
    
    await fetch('emailCitas',{
        body: data,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        ShowAlert('success', 'SE ENVIO CON EXITO');
        formy.reset();      
    })
    .catch( e => {
        console.log(e)
        ShowAlert('danger', 'HA OCURRIDO UN ERROR');
    })
    SetDisplayButton(false)
})

const ShowAlert = (color, data) => {
    const notify = document.getElementById('notify')
    const alert =   
        `<div id="alert" class="alert alert-${color} fixed-top" role="alert">
            ${data}
        </div>`

    notify.innerHTML += alert;
    setTimeout(() => {
        document.getElementById('alert').remove()
    }, 5000);
}

const SetDisplayButton = () => {
    const button = document.getElementById('btn-agenda');   
    button.removeAttribute('disabled');
    button.innerText = 'ENVIAR NUEVAMENTE'
}

