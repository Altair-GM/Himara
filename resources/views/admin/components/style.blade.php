<style>
    .nunito {
        font-family: 'nunito', font-sans;
    }
    
    .border-b-1 {
        border-bottom-width: 1px;
    }
    
    .border-l-1 {
        border-left-width: 1px;
    }
    
    hover\:border-none:hover {
        border-style: none;
    }
    
    #sidebar {
        transition: ease-in-out all .2s;
        z-index: 9999;
    }
    
    #sidebar span {
        opacity: 0;
        position: absolute;
        transition: ease-in-out all .5s;
    }
    
    #sidebar:hover {
        width: 150px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        /*shadow-2xl*/
    }
    
    #sidebar:hover span {
        opacity: 1;
    }
</style>