

servicesToggle = () => {
    let services = document.getElementById('pink');
    services.classList.toggle("services-clicked");

    let info = document.getElementById('services-info');
    

    if(info.style.display === "block") {
    
        info.style.display = "none";
    } else {
        info.style.display = "block"
       
    }
};

galleryToggle = () => {
    let gallery = document.getElementById('pleat');
    gallery.classList.toggle("gallery-clicked");

    let container = document.getElementById('container');
    

    if(container.style.display === "flex") {
    
        container.style.display = "none";
    } else {
        container.style.display = "flex"
       
    }
};

contactToggle = () => {

    let contact = document.getElementById('form-contact');
    contact.classList.toggle("contact-clicked") ;


    let form = document.querySelector('form');
    

    if(form.style.display === "block") {
    
        form.style.display = "none";
    } else {
        form.style.display = "block"
       
    }

    let close = document.getElementById('close-tab');

    if(close.style.display === "block") {
    
        close.style.display = "none";
    } else {
        close.style.display = "block"
       
    }
    
};


