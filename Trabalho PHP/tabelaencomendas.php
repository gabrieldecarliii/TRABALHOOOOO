<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="financeiro.css">
    <title>Tabela de Encomendas</title>

</head>
<body>

    <header>
        <h1>Resgistro de Encomendas</h1>
    </header>

    <section>
        <h2>Status de Encomenda</h2>

        <table>
            <thead>
                <tr>
                    <th>Nome do Morador</th>
                    <th>Unidade</th>
                    <th> Situação de Retirada</th>
                    
                </tr>
            </thead>
            <tbody id="tabelaMoradores">
                <!-- Dados dinâmicos serão inseridos aqui -->
            </tbody>
        </table>

        <button>
            <a href="encomendas.php" class="submit" vaule="Boleto">Gerar Encomenda</a>
        </button>
       

    </section>

    <script>
        // Dados de exemplo (pode ser substituído por dados dinâmicos provenientes de um banco de dados)
        const moradores = [
            { nome: 'João', unidade: '101', pago: true },
            { nome: 'Maria', unidade: '102', pago: false },
            { nome: 'Carlos', unidade: '103', pago: true },
        ];

        // Função para popular a tabela com os dados dos moradores
        function popularTabela() {
            const tabelaMoradores = document.getElementById('tabelaMoradores');

            moradores.forEach(morador => {
                const row = tabelaMoradores.insertRow();
                row.insertCell(0).textContent = morador.nome;
                row.insertCell(1).textContent = morador.unidade;
                
                const statusCell = row.insertCell(2);
                statusCell.textContent = morador.pago ? 'Entregue' : 'Pendente';
                statusCell.className = morador.pago ? 'Entregue' : 'pendente';
            });
        }

        // Chama a função para popular a tabela ao carregar a página
        window.onload = popularTabela;
    </script>


</body>
</html>
