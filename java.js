console.log("Hello World")

const Contact = document.querySelector('#Contact')
Contact.onclick = Contact;

function Contact(){
    Contact.innerText = "Go to Contact";
}