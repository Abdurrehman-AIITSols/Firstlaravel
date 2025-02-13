<div>
<div>
    <button wire:click="toHome" class="btn2 btn-home">Home</button>
    <br>
    <button wire:click="toService" class="btn2 btn-service">Service</button>
    <br>
    <button wire:click="toContact" class="btn2 btn-contact">Contact us</button>
    <br>
    <button wire:click="toAbout" class="btn2 btn-about">About</button>
    <br>
</div>
<div class="list">
    <p class="Head">Category:</p>
    <li>Category One</li>
    <li>Category two</li>
    <li>Category three</li>
    <li>Category four</li>
</div>

<!-- Inline CSS for the Livewire component -->
<style>
    .btn2 {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        color: white;
        margin-bottom:20px;
        width:100%;
    }

    .btn-home {
        background-color:rgba(0, 0, 0, 0); /* Green */
    }

    .btn-home:hover {
        background-color: #45a049;
    }

    .btn-service {
        background-color:rgba(33, 149, 243, 0); /* Blue */
    }

    .btn-service:hover {
        background-color: #0b7dda;
    }

    .btn-contact {
        background-color:rgba(244, 67, 54, 0); /* Red */
    }

    .btn-contact:hover {
        background-color: #da190b;
    }

    .btn-about {
        background-color:rgba(155, 39, 176, 0); /* Purple */
    }

    .btn-about:hover {
        background-color: #8e24aa;
    }
    .Head{
        font-size:25px;
        padding:5px 10px;
        border-left:2px solid white;
    }
    .list li{
        cursor:pointer;
        padding: 10px 25px;
        transition: 0.4s all ease;

    }
    .list li:hover{
        border-left:1px solid white;
        transform: translateX(20px);
        transition: 0.4s all ease;
    }
</style>
</div>