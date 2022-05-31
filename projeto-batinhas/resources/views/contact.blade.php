<?php include('C:/xampp/htdocs/projeto-laravel/projeto-batinhas/resources/views/partes/header.blade.php'); ?>
<?php include('C:/xampp/htdocs/projeto-laravel/projeto-batinhas/resources/views/partes/navbar.blade.php'); ?>
    <div class="container-fluid" style="padding-right: 0; padding-left: 0; height: 10vh;">
        <h1 class="text-white d-flex justify-content-center align-center py-3" style="background-color: blueviolet;">Contact</h1>
    </div>
    <div class="container py-2 d-flex w-50">
        <div class="col py-3 rounded" style="background-color: lightgray;"> 
            <h3 class="text-center py-2">Github</h3>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Gabriel</button>
                <button class="btn btn-primary" type="button">Airon</button>
            </div>
        </div>
        <!-- ver depois pq ta juntando !-->
    </div>
    <div class="container py-2 d-flex w-50">
        <div class="col py-3 rounded" style="background-color: lightgray;">
            <h3 class="text-center py-2">Whatsapp</h3>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button">Airon</button>
                <button class="btn btn-primary" type="button">Gabriel</button>
            </div>
        </div>
    </div>
    <div class="container py-2 d-flex w-50">
        <div class="col py-3 rounded" style="background-color: lightgray;">
            <h3 class="text-center py-2">Clonar seu Cartão</h3>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-danger" type="button">MasterCard</button>
                <button class="btn btn-danger" type="button">BancoDoBatasil</button>
            </div>
        </div>
    </div>
    <div class="container py-2 d-flex w-50">
        <div class="col py-3 rounded" style="background-color: lightgray;">
            <h3 class="text-center py-2">Venda seu rim aqui!</h3>
            <div class="d-grid gap-2 col-6 mx-auto align-center d-flex justify-content-center text-center">
                <form action="#" method="#">
                    <input type="checkbox" id="myCheck" onclick="myFunction()">    Você aceita os termos de uso?
                    <script>
                    function myFunction() {
                    var checkBox = document.getElementById("myCheck");
                    var text = document.getElementById("butao");
                    if (checkBox.checked == true){
                        text.style.display = "block";
                    } else {
                        text.style.display = "none";
                    }
                    }
                    </script>
                    <div class="d-grid gap-2" style="width: 450px">
                        <button class="btn btn-success text-center" type="button" id="butao" style="display: none" onclick="alert('Parabéns você vendeu seu rim!\nViu como é facil vender seu rim? Agora da proxima vez você já pode vender o outro!!!')">Efetuar venda!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include('C:/xampp/htdocs/projeto-laravel/projeto-batinhas/resources/views/partes/footer.blade.php'); ?>