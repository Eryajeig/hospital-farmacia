<script src="<?=base_url();?>plantillas/js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url();?>plantillas/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>plantillas/jquery-ui/jquery-ui.js"></script>
<script src="<?=base_url();?>plantillas/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>plantillas/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$('#example1').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }
    });
	});
</script>

<script>
    $(document).ready(function(){
        var base_url="<?php echo base_url();?>"
        $(".btn-remove").on("click", function(e){
            e.preventDefault();
            var ruta = $(this).attr("href");
            //alert(ruta);
            $.ajax({
                url: ruta,
                type: "POST",
                success:function(resp){
                    window.location.href = base_url + resp;
                }
            });
        });
        $("#articulo").autocomplete({
            source:function(request, response){
                $.ajax({
                    url: base_url+"nueva_salida/getarticulos",
                    type: "POST",
                    dataType: "json",
                    data: {valor:request.term},
                    success:function(data){
                        response(data);
                    }
                });
            },
            minLength:2,
            select:function(event, ui){
                data = ui.item.idarticulos + "*"+ ui.item.clavecorta + "*"+ ui.item.label + "*"+ ui.item.presentacion + "*"+ ui.item.stock;
                $("#btn-agregar").val(data);
            },
        });
        $("#btn-agregar").on("click",function(){
            data = $(this).val();
            if (data !='') {
                infoarticulo = data.split("*");
                html = "<tr>";
                html += "<td><imput type='hidden' name='idarticulo[]' value='"+infoarticulo[0]+"'>"+infoarticulo[1]+"</td>";
                html += "<td>"+infoarticulo[2]+"</td>";
                html += "<td>"+infoarticulo[3]+"</td>";
                html += "<td>"+infoarticulo[4]+"</td>";
                html += "<td><input type='text' name='cantidadsolicitada[]' value='1'></td>";
                html += "<td><input type='text' name='cantidadentregada[]' value='1'></td>";
                html += "<td><button type='button' class='btn btn-danger btn-remove-articulo'><span class='glyphicon glyphicon-remove'></span></button></td>";
                html += "</tr>";
                $("#tbarticulos tbody").append(html);

            } else {
                alert("Seleccione un articulo...")
            }
        });

        $(document).on("click",".btn-remove-articulo",function(){
            $(this).closest("tr").remove();
        });
    });
</script>