<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvedores Projeto Painel de informações</title>
    <link rel="stylesheet" href="css/style-desenvolvedores.css">
</head>
<body>

    <?php 
        session_start();
        if(isset($_SESSION['acesso'])==true) {
         include("modelos/headerLog.php");
          
        } else{
          include("modelos/header.php");
        }
    ?>
 
 <h1 id="dev-titulo">Sobre Nós</h1>
</br>
                         <!-- Davi -->

        <section class="dev-container">
                <div class="dev-davi">
                    <img class="foto" src="img/Davi.png" alt="Davi">
                    <p>Davi</p>            
                    <p>20 anos</p> 
                    <p>Desenvolvedor Back-end </br> responsável pelas funcionalidades do app.</p>

                    <div class="logo-tipo">
                        <li><a href="https://github.com/Davi-FSilva-78" class="git"> <img src="img/git.png" alt="git" > </a></li>                     
                        <li><a href="#" class="linkedin"> <img src="img/linkedin.png" alt="linkedin"></a></li>
                    </div>
                </div>

                        <!-- Cristhyan -->
                <div class="dev-cris">
                    <img class="foto" src="img/Cris.png" alt="Cristhyan">
                    <p>Cristhyan</p>
                    <p>18 anos</p>
                    <p>Desenvolvedor Back-end </br>auxiliou nas funcionalidades do app.</p>

                    <div class="logo-tipo">
                        <li><a href="https://github.com/CristhyanG" class="git"> <img src="img/git.png" alt="git" > </a></li>
                        <li><a href="#" class="linkedin"> <img src="img/linkedin.png" alt="linkedin"> </a></li>
                    </div>
                </div>
                <div class="dev-giovanni">
                    <img class="foto" src="img/giovanni.jpg" alt="Giovanni">
                    <p>Giovanni Seloto</p>
                    <p>18 anos</p>
                    <p>Desenvolvedor full-stack </br>responsável pelo designe e banco de dados do app.</p>

                    <div class="logo-tipo">
                        <li><a href="https://github.com/GiovanniSeloto" class="git"> <img src="img/git.png" alt="git" > </a></li>
                        <li><a href="#" class="linkedin"> <img src="img/linkedin.png" alt="linkedin"> </a></li>
                    </div>
                </div>

                <div class="dev-caua">
                    <img class="foto" src="img/Caua.png" alt="Caua">
                    <p>Cauã</p>
                    <p>19 anos</p>
                    <p>Desenvolvedor front-end <br>auxiliou no estilo do aplicativo.</p>

                    <div class="logo-tipo">
                        <li><a href="https://github.com/CauaCristalino" class="git"> <img src="img/git.png" alt="git" > </a></li>
                        <li><a href="#" class="linkedin"> <img src="img/linkedin.png" alt="linkedin"> </a></li>
                    </div>
                </div>

               
                </div>

        </section>





























    <!-- <section>

       <
        
        <div class="sec1"> 
                <img class="foto1" src="img/Davi.png" alt="1º">               
                    <div class="sobre1">               
                        <p>Davi</p>            
                        <p>22 anos</p> 
                        <p>Atuou na criação da página "cadastro" </br> e criou o header.</p>               
                        <div class="logo-tipo">                      
                        <li><a href="#" class="git"> <img src="img/git.png" alt="git" > </a></li>                     
                        <li><a href="#" class="linkedin"> <img src="img/linkedin.png" alt="linkedin"></a></li>          
                 </div>
            </div>
        </div>

                <img class="foto2" src="img/Cris.png" alt="Cristhyan">  
                    <div class="sobre1">
                        <p>Cristhyan</p>
                        <p>17 anos</p>
                        <p>Atuoou na criação da página de "contato" </br>utilizando banco de dados.</p>
                        <div class="logo-tipo">
                        <li><a href="#" class="git"> <img src="img/git.png" alt="git" > </a></li>
                        <li><a href="#" class="linkedin"> <img src="img/linkedin.png" alt="linkedin"> </a></li>
            </div>
        </div> 
        </div>


    </div>
            
    </div>

    <div class="sec1">
        <div class="desenvolvedores">
                <img class="foto3" src="img/careca.webp" alt="Giovanni">
                  <div class="sobre1">
                    <p>Giovanni Seloto</p>
                    <p>18 anos</p>
                    <p>Atuou na criação da página "desenvolvedores" </br>e criou o footer.</p>
                    <div class="logo-tipo">    
                    <li><a href="#" class="git"> <img src="img/git.png" alt="git" > </a></li>
                    <li><a href="#" class="linkedin"> <img src="img/linkedin.png" alt="linkedin"> </a></li>
                    </div>
                  </div>  
        </div>
            
        <div class="desenvolvedores">
                <img class="foto4" src="img/Caua.png" alt="Caua">   
            <div class=" sobre1">
                    <p>Cauã</p>
                    <p>19 anos</p>
                    <p> Auxiliou na criação da página index e no CSS.</p>
                <div class="logo-tipo">    
                    <li><a href="#" class="git"> <img src="img/git.png" alt="git" > </a></li>
                    <li><a href="#" class="linkedin"> <img src="img/linkedin.png" alt="linkedin"> </a></li>
                </div>  
            </div>
        </div>

                
                

    </div>
    </section>
     -->
    <?php 
        include("modelos/footer.php")
    ?>
</body>
</html>