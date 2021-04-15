<hmtl>
<head>
<title>Bienvenido al sistema</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajax({
        url: "Servicio/SCliente.php",
        data: {tipo:'lista', txtbus: ''},
        type: 'Get',
        dataType: '',
        success: function(resp){
            var tabla="";
            var JCli = resp;

            for(var i=0;i<JCli.length;i++){
                tabla+="<tr>";
                tabla+="<td>"+JCli[i]['cod']+"</td>";
                tabla+="<td>"+JCli[i]['nom']+"</td>";
                tabla+="<td>"+JCli[i]['ape']+"</td>";
                tabla+="<td>"+JCli[i]['dni']+"</td>";
                tabla+="<td>"+JCli[i]['cod_dist']+"</td>";
                tabla+="</tr>";
            }
            $('#TbLista').html(tabla);

        },error: function(mens){
            alert('Error 404:'+mens);
        }
    });
</script>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dni</th>
                <th>Distrito</th>

            </tr>
        </thead>
        <thead>
            <tbody id="TbLista"></tbody>
        </thead>
    </table>
</div>
</hmtl>