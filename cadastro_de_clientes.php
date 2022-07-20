<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif,;
            background-color: black;
            margin: 0;
            
            
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: black;
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
            font-size: 20px;
            
        }
        fieldset{
            border: 5px solid cyan;
        }
        img{
            width: 100vw;
            height: 100vh;
            background-size: cover;
        }
        .inputbox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;

        }
        .inputUser:focus~ .labelinput,
        .inputUser:valid~ .labelinput{
            top: -20px;
            font-size: 15px;
            color: cyan;
        }
       

       #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            
        }
        
        
    
    #submit{
        top: 50%;
        color: aliceblue;
        font-size: 20px;
        padding: 15px;
        width: 100%;
        border: none;
        cursor: pointer;
        background-image: linear-gradient(to right, rgb(0,80,150),rgb(70,10,150));
        border-radius: 15px;
        right: 50%;
    }
    #submit:hover{
        background-image: linear-gradient(to right, rgb(0,100,200),rgb(95,20,220));
    } 
    </style>
    
</head>
<body>
<img src="src/005.jpg" alt="imagem de fundo">
   <div class="box">
    <form action="">
        <fieldset>
            <legend><b>Cadastro de Clientes</b></legend>
            <br>
            <div class="inputbox">
                <input type="text" nome="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelinput">Nome Completo</label>
            </div>
            <br>
            <div class="inputbox">
                <input type="text" nome="endereco" id="endereco" class="inputUser" required>
                <label for="nome" class="labelinput">Endereço</label>
            </div>
            <br>
            <div class="inputbox">
                <input type="cpf" nome="cpf" id="cpf" class="inputUser" required>
                <label for="nome" class="labelinput">CPF</label>
            </div>
            <br>
            <div class="inputbox">
                <input type="tel" nome="telefone" id="telefone" class="inputUser" required>
                <label for="nome" class="labelinput">Telefone</label>
            </div>
            <br>
            <div class="inputbox">
                <input type="text" nome="cidade" id="cidade" class="inputUser" required>
                <label for="nome" class="labelinput">Cidade</label>
            </div>
            <br>
            
            <div class="nascimento">

                <label for="nome"><b>Data de Nascimento :</b></label>
                <input type="date" nome="data_nascimento" id="data_nascimento" required>
                
            </div>
            <br>

            
                <input type="submit" nome="submit" id="submit">
           
            
        </fieldset>
        </form>
            
</body>
</html>