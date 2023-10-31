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

var map = L.map('map').setView([46.06129659340145, 19.254196476672355], 15);
var currentLayer;

// Create map, satellite, and labels tile layers
var mapLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
var satelliteLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    attribution: '© Esri'
});
var labelsLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/Reference/World_Boundaries_and_Places/MapServer/tile/{z}/{y}/{x}', {
    attribution: '© Esri'
});

// Create a layer group for the satellite and labels layers
var satelliteGroup = L.layerGroup([satelliteLayer, labelsLayer]);

// Add the map layer by default
currentLayer = mapLayer;
currentLayer.addTo(map);

// Function to switch to the map view
document.getElementById("mapButton").addEventListener("click", function() {
    if (currentLayer !== mapLayer) {
        map.removeLayer(currentLayer);
        currentLayer = mapLayer;
        currentLayer.addTo(map);
    }
});

// Function to switch to the satellite view with labels
document.getElementById("satelliteButton").addEventListener("click", function() {
    if (currentLayer !== satelliteGroup) {
        map.removeLayer(currentLayer);
        currentLayer = satelliteGroup;
        currentLayer.addTo(map);
    }
});

// Add a marker at the default location
var marker = L.marker([45.5152143398142, -73.67840005850364]).addTo(map);

// You can customize the marker icon, popup, and other properties
marker.bindPopup("926 Sainte Croix Ave Unit 201, Saint-Laurent, QC H4L 3Y6").openPopup();

$recaptchaSecret = 'YOUR_SECRET_KEY';
$recaptchaResponse = $_POST['g-recaptcha-response'];

// Make a POST request to the Google reCAPTCHA API
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
$responseKeys = json_decode($response, true);

// Check if the verification was successful
if(intval($responseKeys["success"]) !== 1) {
    //echo 'Please complete the reCAPTCHA.';
} else {
    // reCAPTCHA was completed successfully
}
