<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/buttonNewChar.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/teste.css">
    <link rel="stylesheet" href="js/teste.js">
    <link rel="stylesheet" href="css/style.css">

    <title>tela joão</title>
</head>

<body>


    <!------------------------------------------- Side Bar -------------------------->
    <div class="primary-nav">
        <nav role="navigation" class="menu">
            <a style="text-align: center;" class="logotype"><span>PERSONAGENS</span></a>
            <div class="overflow-container">
                <ul class="menu-dropdown">
                    <li><a href="#">Personagem 1</a><span class="icon"><i class="fa-solid fa-user"></i></span></li>
                    <li><a href="#">Personagem 2</a><span class="icon"><i class="fa-solid fa-user"></i></span></li>
                    <li style="position: absolute; bottom: 0px;">
                        <button class="buttonNewChar" id="formularioShow">Novo Personagem</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--------------------------------------- Fim Side Bar ------------------------->
    <div style="margin-left: 50px;">
        <!--------------------------------------- Header personagem ------------------------->
        <header>
            <div class="centralizarHeader">
                <div class="userIcon">
                    <p><i class="fa-solid fa-user"></i></p>
                </div>
                <div>
                    <div class="nomePersonagem">
                        <p class="nomePersonagem">Nome do personagem</p>
                    </div>
                    <div class="CharInfo">
                        <p>Gênero</p>
                        <p>Raça</p>
                        <p>Classe</p>
                        <p style="margin-top: -22px; color: rgb(190, 68, 68);">Lvl</p>
                    </div>
                    <div class="lvlChar">
                        <p>Nível Lvl</p>
                    </div>

                </div>
            </div>
            <a class="logOutButton">
                <p>Log out</p>
                <i style="padding-left: 10px;" class="fa-solid fa-right-from-bracket"></i>
            </a>

        </header>
        <div class="container">
            <main>
                <section class="container">
                    <div class="popup">
                        <div class="fecharBtn">&times;</div>
                        <!-- Formulario -->
                        <form action="#">
                            <div class="form_primario" id="form_primario">
                                <div class="detalhe pessoal">
                                    <span class="titulo"> Informações da Ficha: </span>
                                    <div class="row">

                                    </div>
                                    <div class="fields">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <label for="Nome">Nome do Personagem:</label>
                                                    <input type=" text" placeholder="Digite o nome:" required>
                                                </div>

                                                <div class="input-field">
                                                    <label for="Nome">Nome do Jogador: </label>
                                                    <input type=" text" placeholder="Digite o nome do jogador:"
                                                        required>
                                                </div>

                                                <div class="input-field">
                                                    <label for="Nome">Classe de personagem: </label>
                                                    <input type="text" id="classe" placeholder="Classe do personagem:"
                                                        required>
                                                </div>

                                                <div class="input-field">
                                                    <label for="Nome">Nivel </label>
                                                    <input type="number" id="nivel" placeholder="Digite seu nivel:"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <label for="Nome">Raça de personagem: </label>
                                                    <input type=" text" placeholder="Raça do personagem:" required>
                                                </div>

                                                <div class="input-field">
                                                    <label for="Nome">Antecedentes:</label>
                                                    <input type="text" placeholder=" Antecedente do personagem:"
                                                        required>
                                                </div>

                                                <div class="input-field">
                                                    <label for="Nome">Alinhamento </label>
                                                    <input type=" text" placeholder="Alinhamento do personagem: "
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Atributos Input -->
                                <div class="detalhe ID">
                                    <span class="titulo">Atributos do Personagem</span>
                                    <div class="fieldsInput">
                                        <div style="padding-left: 50px;" class="row">
                                            <div style="padding-right: 100px;" class="col-md-6">
                                                <div class="input-field">
                                                    <label for="Nome">Força </label><br>
                                                    <input type="number" class="nivel-forca" placeholder="LVL:"
                                                        required>
                                                </div>

                                                <div class="input-field">
                                                    <label for="Nome">Destreza </label><br>
                                                    <input type="number" class="nivel-forca" placeholder="LVL:"
                                                        required>
                                                </div>

                                                <div class="input-field">
                                                    <label for="Nome">Constituição </label>
                                                    <input type="number" class="nivel-forca" placeholder="LVL:"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <label for="Nome">Inteligência </label><br>
                                                    <input type="number" class="nivel-forca" placeholder="LVL:"
                                                        required>
                                                </div>

                                                <div class="input-field">
                                                    <label for="Nome">Sabedoria </label><br>
                                                    <input type="number" class="nivel-forca" placeholder="LVL:"
                                                        required>
                                                </div>

                                                <div class="input-field">
                                                    <label for="Nome">Carisma </label><br>
                                                    <input type="number" class="nivel-forca" placeholder="LVL:"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="nextBtn" id="next1">
                                        <span class="btnText" id="next1">Próximo</span>
                                    </button>
                                </div>
                            </div>

                            <div class="form_segundario" id="form_segundario">
                                <div class="detalhes atributos">
                                    <span class="titulo">Salvaguardas:</span>
                                    <div class="fields">
                                        <div class="input-field-salva">
                                            <ul class="lista-salva">
                                                <li><input type="number" class="salvaguarda" placeholder="Força"
                                                        required> Força</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Destreza"
                                                        required> Destreza</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Constituição"
                                                        required> Constituição</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Inteligência"
                                                        required> Inteligência</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Sabedoria"
                                                        required> Sabedoria</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Carisma"
                                                        required> Carisma </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="detalhes pericias">
                                    <span class="titulo">Pericias:</span>
                                    <div class="fields">
                                        <div class="input-field-salva">
                                            <ul class="lista-salva">
                                                <li><input type="number" class="salvaguarda" placeholder="Força"
                                                        required> Acrobacia </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Destreza"
                                                        required> Arcanismo </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Constituição"
                                                        required> Atletismo</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Força"
                                                        required> Atuação </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Destreza"
                                                        required> Enganação </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Constituição"
                                                        required> Furtividade</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Força"
                                                        required> Historia </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Destreza"
                                                        required> Intimidação </li>
                                            </ul>
                                        </div>
                                        <div class="input-field-salva">
                                            <ul class="lista-salva">
                                                <li><input type="number" class="salvaguarda" placeholder="Constituição"
                                                        required> intuição </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Força"
                                                        required> investigação </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Destreza"
                                                        required> Lidar com animais </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Constituição"
                                                        required> Medicina</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Destreza"
                                                        required> Natureza </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Constituição"
                                                        required> Percepção </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Força"
                                                        required> Prestigitação </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Destreza"
                                                        required> Religião </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Constituição"
                                                        required> Sobrevivencia </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="buttons">
                                    <div class="backBtn">
                                        <span class="btnText" id="back1">Retorno</span>
                                    </div>
                                    <button class=".nextBtn-1">
                                        <span class="btnText" id="next2">Próximo</span>
                                    </button>
                                </div>

                            </div>

                            <div class="form_terceiario" id="form_terceiario">
                                <div class="detalhe pessoal">
                                    <span class="titulo"> Informações da Ficha: </span>
                                    <div class="fields">
                                        <div class="input-field">
                                            <label for="Nome">Classe de armadura:</label>
                                            <input type="number" class="mod-combate"
                                                placeholder="Digite o valor da classe:" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Iniciativa: </label>
                                            <input type="number" class="mod-combate"
                                                placeholder="Digite o valor de iniciativa:" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Deslocamento: </label>
                                            <input type="number" id="classe" class="mod-combate"
                                                placeholder="Deslocamento:" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="detalhe pessoal">
                                    <span class="titulo"> Proficiencias e linguagens: </span>
                                    <div class="fields">
                                        <div class="input-field">
                                            <label for="Nome">Pericias em armaduras: </label>
                                            <input type="text" id="classe" class="mod-area"
                                                placeholder="Pericias em armaduras:">
                                        </div>
                                        <div class="input-field">
                                            <label for="Nome">Pericias em armas: </label>
                                            <input type="text" id="classe" class="mod-area"
                                                placeholder="Pericias em armas:">
                                        </div>
                                        <div class="input-field">
                                            <label for="Nome">Pericias em Ferramentas: </label>
                                            <input type="text" id="classe" class="mod-area"
                                                placeholder="Pericias em Ferramentas:">
                                        </div>
                                        <div class="input-field">
                                            <label for="Nome">Linguagens: </label>
                                            <input type="text" id="classe" class="mod-area"
                                                placeholder="Pericias em Linguagens:">
                                        </div>

                                    </div>
                                    <div class="buttons">
                                        <div class="backBtn">
                                            <span class="btnText" id="back2">Retorno</span>
                                        </div>
                                        <button class=".nextBtn-1">
                                            <span class="btnText" id="next3">Próximo</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </section>
            </main>
        </div>
        <!--FIM DO FORMULARIO-->
        <div class="row">
            <!-- Main stats -->
            <div style="margin-top: 80px;" class="col-md-6 atributos">
                <div class="row">
                    <ul class="cards">
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">FORÇA</div>
                                    <p class="contabilizador_atributo">-1</p>
                                    <div class="card_valor_atributo">8</div>
                                </div>
                            </div>
                        </li>
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">DEXTREZA</div>
                                    <p class="contabilizador_atributo">+2</p>
                                    <div class="card_valor_atributo">14</div>
                                </div>
                            </div>
                        </li>
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">CONSTITUIÇÃO</div>
                                    <p class="contabilizador_atributo">+1</p>
                                    <div class="card_valor_atributo">13</div>
                                </div>
                            </div>
                        </li>
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">INTELIGÊNCIA</div>
                                    <p class="contabilizador_atributo">+3</p>
                                    <div class="card_valor_atributo">16</div>
                                </div>
                            </div>
                        </li>
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">SABEDORIA</div>
                                    <p class="contabilizador_atributo">+1</p>
                                    <div class="card_valor_atributo">12</div>
                                </div>
                            </div>
                        </li>
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">CARISMA</div>
                                    <p class="contabilizador_atributo">+2</p>
                                    <div class="card_valor_atributo">14</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Phys stats -->
            <div style="margin-top: 80px;" class="col-md-6">
                <div class="row">
                    <ul class="cards">
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">PROFICIÊNCIA</div>
                                    <p class="contabilizador_atributo">+2</p>
                                    <div class="card_valor_atributo">BONUS</div>
                                </div>
                            </div>
                        </li>
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">ANDAR</div>
                                    <p class="contabilizador_atributo">30</p>
                                    <div class="card_valor_atributo">VELOCIDADE</div>
                                </div>
                            </div>
                        </li>
                        <li class="cards__item">
                            <ul style=" list-style-type: none; margin-left: -35px;">
                                <li>
                                    <div style="height: 80px; margin-bottom: 1rem;" class="card">
                                        <div class="card__content">
                                            <p style="font-size: 2rem; margin-top: -3px;"
                                                class="contabilizador_atributo"><i class="fa-solid fa-sun"></i></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card_valor_atributo">INSPIRAÇÃO</div>
                                </li>
                            </ul>
                        </li>
                        <li class="cards__item">
                            <div style="width: 340px;" class="card">
                                <div class="card__content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="col card_titulo_atributo">CURA</div>
                                            <p class="col contabilizador_atributo">+2</p>
                                            <div class="col card_titulo_atributo">DANO</div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="col card_titulo_atributo">ATUAL</div>
                                            <p class="col contabilizador_atributo">10</p>
                                        </div>
                                        <div class="col-sm-1 card_barra">
                                            /
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="col card_titulo_atributo">MAX</div>
                                            <p class="col contabilizador_atributo">10</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <div style="font-size: 1rem; font-weight: bold;"
                                                class="col contabilizador_atributo">TEMP</div>
                                            <p style="font-size: 1rem;" class="col card_titulo_atributo">--</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p style="font-size: 1rem; margin-top: -20px; margin-left: -10px;"
                                            class="col contabilizador_atributo">HIT POINTS</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Left side -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Saving Throws -->
                        <li class="cards__item">
                            <div style="width: 420px;" class="card">
                                <div class="card__content">
                                    <table>
                                        <tr>
                                            <td style="padding-top: 10px;">FOR</td>
                                            <td style="padding-top: 10px;">-1</td>
                                            <td style="padding-top: 10px;">INT</td>
                                            <td style="padding-top: 10px;">+5</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 10px;">DEX</td>
                                            <td style="padding-top: 10px;">+2</td>
                                            <td style="padding-top: 10px;">SAB</td>
                                            <td style="padding-top: 10px;">+3</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 10px;">CON</td>
                                            <td style="padding-top: 10px;">+1</td>
                                            <td style="padding-top: 10px;">CAR</td>
                                            <td style="padding-top: 10px;">+2</td>
                                        </tr>
                                    </table>
                                    <p style="padding-top: 15px; margin-bottom: -5px;" class="card_valor_atributo">
                                        SAVING
                                        THROWS</p>
                                </div>
                            </div>
                        </li>
                        <!-- Senses -->
                        <li class="cards__item">
                            <div style="width: 420px;" class="card">
                                <div class="card__content">
                                    <table>
                                        <tr>
                                            <td style="padding-top: 10px; text-align: left;">PASSIVA SAB (PERCEPÇÃO)
                                            </td>
                                            <td style="padding-top: 10px; text-align: end;">13
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 10px; text-align: left;">PASSIVA INT (INVESTIGAÇÃO)
                                            </td>
                                            <td style="padding-top: 10px; text-align: end;">13
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 10px; text-align: left;">PASSIVA SAB (COMPREENSÃO)</td>
                                            <td style="padding-top: 10px; text-align: end;">13</td>
                                        </tr>
                                    </table>
                                    <p style="padding-top: 10px; margin-bottom: -5px;" class="card_valor_atributo">
                                        SENTIDOS
                                    </p>
                                </div>
                            </div>
                        </li>
                        <!-- Proficiencies & languages -->
                        <li class="cards__item">
                            <div style="width: 420px;" class="card">
                                <div style="height: 515px;" class="card__content">
                                    <table>
                                        <tr>
                                            <td style="font-size: 12px; padding-top: 15px; text-align: start; font-weight: normal;"
                                                class="card_titulo_atributo">ARMADURA</td>
                                        </tr>
                                        <tr>
                                            <td style="margin-bottom: -1px; margin-top: -7px; text-align: start; font-weight: normal;"
                                                class="card_valor_atributo">Nenhuma</td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; padding-top: 15px; text-align: start; font-weight: normal;"
                                                class="card_titulo_atributo">ARMAS</td>
                                        </tr>
                                        <tr>
                                            <td style="margin-bottom: -1px; margin-top: -7px; text-align: start; font-weight: normal;"
                                                class="card_valor_atributo">Besta, Isqueiro, Adaga, Dardos, Cajado,
                                                Sling</td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; padding-top: 15px; text-align: start; font-weight: normal;"
                                                class="card_titulo_atributo">FERRAMENTAS</td>
                                        </tr>
                                        <tr>
                                            <td style="margin-bottom: -1px; margin-top: -7px; text-align: start; font-weight: normal;"
                                                class="card_valor_atributo">Veículos (Terrestres)</td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; padding-top: 15px; text-align: start; font-weight: normal;"
                                                class="card_titulo_atributo">IDIOMAS</td>
                                        </tr>
                                        <tr>
                                            <td style="margin-bottom: -1px; margin-top: -7px; text-align: start; font-weight: normal;"
                                                class="card_valor_atributo">Comum, Élfico, Goblin, Halfling</td>
                                        </tr>
                                    </table>
                                    <p style="padding-top: 205px;" class="card_valor_atributo">PROFICIÊNCIAS & IDIOMAS
                                    </p>
                                </div>
                            </div>
                        </li>
                    </div>

                    <!-- Skills -->
                    <div class="col-md-6">
                        <li class="cards__item">
                            <div style="width: 400px;" class="card">
                                <div class="card__content">
                                    <table>
                                        <!--header table-->
                                        <tr>
                                            <td>MOD
                                                <hr>
                                            </td>
                                            <td>SKILL
                                                <hr>
                                            </td>
                                            <td>BONUS
                                                <hr>
                                            </td>
                                        </tr>
                                        <!--fim header table-->
                                        <tr>
                                            <td>DEX
                                                <hr>
                                            </td>
                                            <td>Acrobacías
                                                <hr>
                                            </td>
                                            <td>+2
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>WIS
                                                <hr>
                                            </td>
                                            <td>Domesticação de Animais
                                                <hr>
                                            </td>
                                            <td>+1
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>INT
                                                <hr>
                                            </td>
                                            <td>Arcana
                                                <hr>
                                            </td>
                                            <td>+5
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>STR
                                                <hr>
                                            </td>
                                            <td>Atleticismo
                                                <hr>
                                            </td>
                                            <td>-1
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CHA
                                                <hr>
                                            </td>
                                            <td>Fraude
                                                <hr>
                                            </td>
                                            <td>+2
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>INT
                                                <hr>
                                            </td>
                                            <td>História
                                                <hr>
                                            </td>
                                            <td>+5
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>WIS
                                                <hr>
                                            </td>
                                            <td>Compreensão
                                                <hr>
                                            </td>
                                            <td>+3
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CHA
                                                <hr>
                                            </td>
                                            <td>Intimidação
                                                <hr>
                                            </td>
                                            <td>+2
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>INT
                                                <hr>
                                            </td>
                                            <td>Investigação
                                                <hr>
                                            </td>
                                            <td>+3
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>WIS
                                                <hr>
                                            </td>
                                            <td>Medicina
                                                <hr>
                                            </td>
                                            <td>+1
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>INT
                                                <hr>
                                            </td>
                                            <td>Natureza
                                                <hr>
                                            </td>
                                            <td>+3
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>WIS
                                                <hr>
                                            </td>
                                            <td>Percepção
                                                <hr>
                                            </td>
                                            <td>+3
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CHA
                                                <hr>
                                            </td>
                                            <td>Performance
                                                <hr>
                                            </td>
                                            <td>+2
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CHA
                                                <hr>
                                            </td>
                                            <td>Persuasão
                                                <hr>
                                            </td>
                                            <td>+4
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>INT
                                                <hr>
                                            </td>
                                            <td>Religião
                                                <hr>
                                            </td>
                                            <td>+3
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>DEX
                                                <hr>
                                            </td>
                                            <td>Artimanha
                                                <hr>
                                            </td>
                                            <td>+4
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>DEX
                                                <hr>
                                            </td>
                                            <td>Furtividade
                                                <hr>
                                            </td>
                                            <td>+2
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>WIS</td>
                                            <td>Sobrevivência</td>
                                            <td>+1</td>
                                        </tr>
                                    </table>
                                    <p style="font-size: 12px; padding-top: 15px;" class="card_titulo_atributo">
                                        Skills Adicionais
                                        </p>
                                    <p style="margin-bottom: -1px; margin-top: -7px;" class="card_valor_atributo">SKILLS
                                    </p>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
            <!-- Right side -->
            <div class="col-lg-6">
                <div class="col-md-12 fis_stats">
                    <div class="row">
                        <ul class="cards">
                            <li class="cards__item">
                                <ul style=" list-style-type: none; margin-left: -35px;">
                                    <li>
                                        <div style=" margin-bottom: 10px;" class="card_valor_atributo">INICIATIVA</div>
                                    </li>
                                    <li>
                                        <div style="height: 80px;" class="card">
                                            <div class="card__content">
                                                <p style="font-size: 2rem; margin-top: -3px;"
                                                    class="contabilizador_atributo">+2</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="cards__item">
                                <div class="card">
                                    <div class="card__content">
                                        <div class="card_titulo_atributo">ARMADURA</div>
                                        <p style="padding-top: 5px;" class="contabilizador_atributo">30</p>
                                        <div class="card_titulo_atributo">CLASSE</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <li class="cards__item">
                        <div style="width: 865px;" class="card">
                            <div class="card__content">
                                <div style="display: flex; justify-content: space-around; height: 730px;" class="row">
                                    <p>história</p>
                                    <p>magias</p>
                                    <p>extras</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/arquivo.js"></script>

</body>

</html>