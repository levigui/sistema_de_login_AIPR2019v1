<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
            
            <title>Sistema de Login TNX Systems</title>
    
        </head>
        <body class="bg-dark" >

            <main class="container mt-4" >
            
                <section class="row" >
                <div class="col-lg-4 offset-lg-4" id="alerta">



                      <div class="alert alert-success text-center">

                                 <strong id="resultado"> Maravilhoso Mundo Sem o Sublime! </strong>
                            
                    
                      </div>
               
                </div>
                
                
                </section>
                

                <!-- formulario de login -->
            
                    <section class="row">
                
                    <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaLogin">
                        
                                    
                                  <h2 class="text-center mt-2">Entrada no sistema</h2>
                                   
                                    <form action="#" id="formLogin" class="p-2">

                                            <div class="form-group">
                                            <input type="text" name="ususario" id="nomeUsusario" class="form-control" placeholder="Nome de Usuario" required >
                                            </div>
                                            
                                            <div class="form-group">

                                            <input type="password" name="senhaUsuario" id="senhaUsuario" class="form-control" placeholder="Senha" required >
                                            </div>



                                            <div class="form-group">
                                            
                                                    <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="lembra" id="lembrar" class="custom-control-input">
                                                            <label for="lembrar" class=custom-control-label>   Lembrar de Mim </label>
                                                  
                                                            <a href="#" id="btnEsquci" class="float-right" > 
                                                            
                                                                    Esqueceu a Senha?
                                                            
                                                            </a>

                                                    </div>
                                            
                                            </div>
                                            
                                            <div class="form-group">
                                            
                                                <input type="subimit" value="::Entrar::" name="btnEntrar" id="btnEntrar" class="btn btn-primary btn-block" >
                                            
                                            </div>
                                            
                                            <div class="form-group">
                                            
                                                            <p  class="center">Novo usuário ?  </p>
                                                            <a href="#" id="btnCadastrar"> Registre-se Aqui </a>
                                            </div>

                                    </form>

                        </div>

                    </section>
            
            </main>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

        </body>

    </html>