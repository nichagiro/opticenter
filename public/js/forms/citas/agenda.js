const formy = document.getElementById('formy');
formy.addEventListener('submit', (e) => {
    e.preventDefault();
    const data = new FormData(formy);
    fetch('email',{
        body: data,
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        alert('se envio el correo')
        formy.reset();
    });
})

