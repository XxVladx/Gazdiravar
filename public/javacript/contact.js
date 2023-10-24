function openEmailClient() {
    const firstName = document.getElementById("fname").value;
    const lastName = document.getElementById("lname").value;
    const email = document.getElementById("eaddress").value;
    const phone = document.getElementById("tele").value;
    const over18 = document.getElementById("over18").value;
    const message = document.getElementById("message").value;
    const subject = "Message from Website";
    const body = `First Name: ${firstName}%0D%0ALast Name: ${lastName}%0D%0AEmail: ${email}%0D%0APhone: ${phone}%0D%0AOver 18: ${over18}%0D%0AMessage: ${message}`;
    const mailtoUrl = `mailto:g.angelika2001@gmail.com?subject=${subject}&body=${body}`;
    window.location.href = mailtoUrl;
}
