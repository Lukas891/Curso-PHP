<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Doces Dona Nita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <style>
        a {
            float: right;
        }

        .card {
            float: left;
            margin: 10px;
            width: 300px;
        }

        h2 {
            text-align: center;
        }

        #carrinho-principal {
            position: fixed;
            right: 10px;
            bottom: 10px;
        }

        .up,
        .down {
            cursor: pointer;
        }
        p{
            color: green;
        }
    </style>
    <div class="container"><br>
        <h2>🌎Global Sports🌍</h2><br>
        <div class="card">
            <img src="https://imgcentauro-a.akamaihd.net/900x900/97264605/camisa-barcelona-i-22-23-torcedor-nike-masculina-img.jpg"
                alt="" class="card-img-top">
            <div class="card-body">
                <h4 class="card-title">Blusa Barcelona 22/23</h4>
                <p class="card-text">R$ 250,00<a href="#" onclick="addItem(0)" class="btn btn-outline-info">🛒</a></p>
            </div>
        </div>
        <div class="card">
            <img src="https://static.netshoes.com.br/produtos/chuteira-nike-mercurial-superfly-9-club-campo/14/JD8-1691-014/JD8-1691-014_zoom1.jpg?ts=1674566730"
                alt="" class="card-img-top">
            <div class="card-body">
                <h4 class="card-title">Chuteira Nike Mercurial</h4>
                <p class="card-text">R$ 499,00<a href="#" onclick="addItem(1)" class="btn btn-outline-info">🛒</a></p>
            </div>
        </div>
        <div class="card">
            <img src="https://pbs.twimg.com/media/FAw8DgsWUAAgf29.jpg:large"
                alt="" class="card-img-top">
            <div class="card-body">
                <h4 class="card-title">Chuteira Nike Total 90</h4>
                <p class="card-text">R$ 399,00<a href="#" onclick="addItem(2)" class="btn btn-outline-info">🛒</a></p>
            </div>
        </div>
        <div class="card">
            <img src="https://17889.cdn.simplo7.net/static/17889/sku/masculino-acessorios-bola-adidas-a020006-champions-leage-futsal--p-1565993154128.jpg" alt=""
                class="card-img-top">
            <div class="card-body">
                <h4 class="card-title">Bola Adidas Falcon</h4>
                <p class="card-text">R$ 149,90<a href="#" onclick="addItem(3)" class="btn btn-outline-info">🛒</a></p>
            </div>
        </div>
    </div>

    <a href="#" id="carrinho-principal" class="btn btn-primary btn-lg" onclick="carrinho()" data-bs-toggle="modal"
        data-bs-target="#myModal">🛒</a>


    <!-- Modelo -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modelo de Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Produdos para encomenda</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modelo de body -->
                <div class="modal-body" id="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th class="col-1">Valor</th>
                                <th class="col-1">Quantidade</th>
                            </tr>
                        </thead>
                        <tbody id="tb-corpo">
                            <!-- <tr>
                                <td>Chocolate Oreo</td>
                                <td>45,00</td>
                                <td>
                                    <span class="up" onclick="mudarQt(0,1)">🔼</span>
                                    <span class="qt">1</span>
                                    <span class="down" onclick="mudarQt(0,-1)">🔽</span>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>

                <!-- Modelo de footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="enviarEncomenda()">Enviar Encomenda</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>

    <script>
        lsCarrinho = [];
        valorEncomenda = 0;
        function addItem(i) {
            if (lsCarrinho[i] != true) {
                lsCarrinho[i] = true;
                document.getElementsByClassName("btn")[i].classList.remove("btn-outline-info");
                document.getElementsByClassName("btn")[i].classList.add("btn-info");
            } else {
                lsCarrinho[i] = false;
                document.getElementsByClassName("btn")[i].classList.remove("btn-info");
                document.getElementsByClassName("btn")[i].classList.add("btn-outline-info");
            }
        }
        lsProduto = [];
        function carrinho() {
            valorEncomenda = 0;
            lsProduto = [];
            for (const i in lsCarrinho) {
                if (lsCarrinho[i]) {
                    p = {};
                    console.log(i);
                    p.id = i;
                    p.nome = document.getElementsByClassName("card-title")[i].innerHTML;
                    p.valor = document.getElementsByClassName("card-text")[i].innerHTML;
                    n = p.valor.indexOf("<");
                    p.valor = p.valor.substring(3, n);
                    p.valor = p.valor.replace(",", ".")
                    p.quantidade = 1;
                    console.log(p);
                    lsProduto.push(p);
                }
            }

            tbCorpo = "";
            for (const i in lsProduto) {
                p = lsProduto[i];
                p.valorUnitario = p.valor;
                tbCorpo += `
                <tr>
                    <td>${p.nome}</td>
                    <td class="valor">${p.valor}</td>
                    <td>
                        <span class="up" onclick="mudarQt(${i},1)">🔼</span>
                        <span class="qt">${p.quantidade}</span>
                        <span class="down" onclick="mudarQt(${i},-1)">🔽</span>
                    </td>
                </tr>
                `;
                valorEncomenda += Number(p.valor);
            }
            tbCorpo += `<tr>
                            <td>Valor da Encomenda</td>
                            <td colspan="2" id="vlEncomenda">${valorEncomenda}</td>
                        </tr>`;
            document.getElementById("tb-corpo").innerHTML = tbCorpo;
        }
        function mudarQt(i, qt) {
            console.log(i);
            console.log(qt);
            p = lsProduto[i];
            p.quantidade += qt;
            if (p.quantidade <= 0) {
                addItem(p.id);
                document.getElementsByTagName("tr")[i + 1].style.display = "none";
                p.valor = 0;
                atualizaValorEncomenda();
                return;
            }
            p.valor = p.quantidade * p.valorUnitario;
            document.getElementsByClassName("qt")[i].innerHTML = p.quantidade;
            document.getElementsByClassName("valor")[i].innerHTML = p.valor;
            atualizaValorEncomenda()
        }
        function atualizaValorEncomenda() {
            valorEncomenda = 0;
            for (p of lsProduto) {
                valorEncomenda += Number(p.valor);
            }
            document.getElementById("vlEncomenda").innerHTML = valorEncomenda;
        }

        function enviarEncomenda() {
            fone = "5561985607460";
            if(valorEncomenda <= 0){
                alert("A encomenda deve ter ao menos 1 produto.");
                return;
            }

            msg = "Gostaria de fazer a seguinte encomenda: \n";
            for (p of lsProduto) {
                if(p.quantidade > 0){
                    msg += `${p.nome} Qt. ${p.quantidade} = ${p.valor} \n`;
                }
            }
            msg += `Valor da Encomenda = ${valorEncomenda}`;
            msg = encodeURI(msg);
            url = `https://api.whatsapp.com/send?phone=${fone}&text=${msg}`;

            window.open(url,'_blank');
        }
    </script>

</body>

</html>