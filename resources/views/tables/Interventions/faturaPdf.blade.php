<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FATURA</title>
</head>

<body>
    <div>
        <div style="background-color: #888888; color:white;">
            <h1>FATURA</h1>
        </div>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>DATA</td>
                    <td>{{ $fatura->data_criacao }}</td>
                </tr>
                <tr>
                    <td>NOME DO CLIENTE</td>
                    <td></td>
                </tr>
                <tr>
                    <td>NUMERO VAT</td>
                    <td></td>
                </tr>
                <tr>
                    <td>PAÍS</td>
                    <td>Portugal</td>
                </tr>
                <tr>
                    <td>DESCONTO</td>
                    <td>{{ $fatura->desconto }}</td>
                </tr>
                <tr>
                    <td>OBSERVAÇÕES</td>
                    <td>{{ $fatura->observacoes }}</td>
                </tr>
                <tr>
                    <td>PREÇO</td>
                    <td>{{ $fatura->preco }}</td>
                </tr>
                <tr>
                    <td>DATA DE EXPIRAÇÃO</td>
                    <td>{{ $fatura->data_expeiracao }}</td>
                </tr>
            </tbody>
        </table>
        
    </div>
</body>

</html>
