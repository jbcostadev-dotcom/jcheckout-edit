"use strict";

document.addEventListener("DOMContentLoaded", () => {
    const signupButton = document.querySelector("#signupButton");
    const closeButton = document.querySelector("#close");
    const toast = document.querySelector("#toast");
    const toastText = document.querySelector("#toastMessage");
    const divLoading = document.querySelector("#divLoading");
    const formSignup = document.querySelector("#formSignup");

    //reusable toast function for displaying message
    //handles redirection if redirectUrl is provided
    //default mode is error
    const showToast = (message, type, redirectUrl = null) => {
        // Set the message and add the relevant styles based on the type
        toastText.textContent = message;
        toast.classList.add("active");

        if (type === "success") {
            toast.classList.add("toastsucesso");
        }

        // Hide the toast after 3 seconds
        setTimeout(() => {
            toast.classList.remove("active");
            if (redirectUrl) {
                window.location.href = redirectUrl;
            }
        }, 3000);
    };

    const handleSignup = async (e) => {
        e.preventDefault();

        const formData = new FormData(formSignup);
        const { email, password, cpassword } = Object.fromEntries(
            formData.entries()
        );

        console.log({ email, password, cpassword });

        if (!email || !password || !cpassword) {
            showToast("Um ou mais campos estão vazios");
            return;
        }

        if (password !== cpassword) {
            showToast("As senhas não correspondem");
            return;
        }

        try {
            // Show loading
            divLoading.classList.add("bar");

            // Sending to existing login endpoint
            //need to implement the signup endpoint and logic in the backend
            const response = await fetch("/autenticaUsuario", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    usuario: email,
                    senha: password,
                }),
            });

            const data = await response.json();

            if (data.status === 200) {
                //show success toast and redirect
                showToast("As senhas não correspondem", "success", "/gestor");
                return;
            }

            //error message for other statuses
            showToast("Ooops... Algo deu errado!");
        } catch (error) {
            console.error("Erro ao autenticar o usuário:", error);
            showToast("Ooops... Algo deu errado!");
        } finally {
            // Hide loading
            divLoading.classList.remove("bar");
        }
    };

    // Attach the event listener for signup button
    signupButton.addEventListener("click", handleSignup);

    // Handle closing the toast
    closeButton.addEventListener("click", function () {
        this.classList.remove("active");
    });
});
