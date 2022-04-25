document.addEventListener('DOMContentLoaded', async () => {
    document.querySelector('#form').addEventListener('submit', async (e) => {
        e.preventDefault();
        const usuario = document.querySelector('#usuario').value;
        const password = document.querySelector('#password').value;
        const body = JSON.stringify({ usuario, password })
        try {
            const respuesta = await fetch("/phonecalls/api/auth/index.php", {
                method: 'POST',
                body,
            })


            switch (respuesta.status) {
                case 200:
                    const { user } = await respuesta.json();
                    swal.fire({
                        title: "Exito",
                        text: `Bienvenido ${user.nombre}`,
                        icon: "success",
                    })
                        .then(click => window.location.href = '/phonecalls/dashboard.php')
                    break;
                default:
                    const { message } = await respuesta.json();
                    swal.fire({
                        title: "Oops...",
                        text: message,
                        icon: "warning",
                    })
                    break;
            }
        } catch (err) {
            console.log(err)
        }
    })
})