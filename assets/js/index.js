document.addEventListener('DOMContentLoaded', async () => {
    document.querySelector('#form').addEventListener('submit', async (e) => {
        e.preventDefault();
        const usuario = document.querySelector('#usuario').value;
        const password = document.querySelector('#password').value;

        const respuesta = await fetch("/phonecalls/api/auth/index.php")

    })
})