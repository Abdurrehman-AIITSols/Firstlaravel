<div>
    <div class="hamburg" id="hamburg">
    <div class="div2"></div>
<div class="div2"></div>
<div class="div2"></div>

    </div>

<style>
    .hamburg{
        position:relative;
        left:22%;
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
        width:50px;
        cursor:pointer;
        height:50px;
        transition:0.2s all ease;
        border-radius:5px;
    }
    .hamburg:hover {
transition:0.2s all ease;
border:1px solid grey;
    }
    .div2{
        width:30px;
        margin-bottom:3px;
        height:5px;
        background:black;
    }
</style>
<script>
    document.getElementById('hamburg').addEventListener('click', function(){
        const a = document.querySelector('aside');
        const b = document.querySelector('#main-header');
        if (a.style.transform==='translateX(-100%)'){
            a.style.transform='translateX(0px)';
           a.style.width='20%';
       
        }
        else{
            a.style.transform='translateX(-100%)';
            a.style.width='0%';

            a.style.transition='0.2s all';
        }
    }
    
    );
   
</script>
</div>
