var userTypeSelect = document.getElementById("user-type");
var roleSelection = document.getElementById("role-selection");
var typeSelection = document.getElementById("type-selection");

userTypeSelect.addEventListener("change", function () {
    var userType = userTypeSelect.value;

    if (userType === "docente" || userType === "alumno" || userType === "padre") {
        roleSelection.style.display = "block";
    } else {
        roleSelection.style.display = "none";
    }

    if (userType === "docente") {
        var selectedRole = document.querySelector('input[name="role"]:checked');

        if (selectedRole && selectedRole.value === "secundaria") {
            typeSelection.style.display = "block";
        } else {
            typeSelection.style.display = "none";
        }
    } else {
        typeSelection.style.display = "none";
    }
});

document.querySelectorAll('input[name="role"]').forEach(function (roleRadio) {
    roleRadio.addEventListener("change", () => {
        var userType = userTypeSelect.value;
        // console.log("Tipo de usuario para tipo",userType, roleRadio.value)

        if (userType === "docente" && roleRadio.value === "secundaria") {
            typeSelection.style.display = "block";
        } else {
            typeSelection.style.display = "none";
        }
    });
});

// Formulario
const formulario = document.getElementById("formulario").addEventListener("submit", (e) => {
    if (e) e.preventDefault();

    //Obtener tipo de usuario 
    const userType = document.getElementById("user-type").value;

    //obtener grado
    var grade = document.querySelector('input[name="role"]:checked') ? document.querySelector('input[name="role"]:checked').value : null;

    //tipo de secundaria
    var type = document.querySelector('input[name="type"]:checked') ? document.querySelector('input[name="type"]:checked').value : null;

    // validando salidas
    if (userType && grade) {
        if (userType === "docente" && grade === "secundaria") {
            if (type) {
                const data = {
                    userType,
                    grade,
                    type
                }

                //Peticion a php
                fetch("http://localhost:8000/Tabs/SubMediaDUR/php/login.php", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                  // Manipular los datos de respuesta en formato JSON
                  console.log(data);
                })
                .catch(error => {
                  // Manejar el error
                  console.log(error);
                });
            } else {
                alert("selecciona todos los campos.");
            }
        } else {
            const data = {
                userType,
                grade
            }

            //Peticion a php
            fetch("http://localhost:8000/Tabs/SubMediaDUR/php/login.php", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
                .then(response => response.text())
                .then(data => {
                    // Manipular los datos de respuesta en formato JSON
                    console.log(data);
                })
                .catch(error => {
                    // Manejar el error
                    console.log("error")
                    console.log(error);
                });
        }
    } else {
        alert("selecciona todos los campos.");
    }

})
