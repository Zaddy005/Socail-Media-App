let getprofile = document.getElementById("profile"),
    getprofiledropdown = document.getElementById("profile-dropdown"),
    getresources = document.getElementById("resources"),
    getresourcemenu = document.getElementById("resources-menu");


getprofile.addEventListener("click",function(){
    getprofiledropdown.classList.toggle("hidden");
});

getresources.addEventListener("click",function(){
    getresourcemenu.classList.toggle("hidden");
});
