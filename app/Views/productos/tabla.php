<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h4>
            Tabla de productos:
        </h4>
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="far fa-plus-square"></i>  Crear
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulario de cuestionario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form class="row g-3">
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label"><i class="fab fa-slack-hash"></i> Nombre</label>
                <input type="text" class="form-control" id="validationDefault01" placeholder="Gaseosa" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label"><i class="far fa-registered"></i> Marca </label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="Coca Cola" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label"><i class="fas fa-hourglass-end"></i> Contacto</label>
                <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                <input type="text" class="form-control" id="validationDefaultUsername" placeholder="ejmplo@gmail.com" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationDefault03" class="form-label"><i class="fab fa-slack-hash"></i> Precio (S/.)</label>
                <input type="text" class="form-control" id="validationDefault03" required placeholder=1,00">
            </div>
            <div class="col-md-3">
                <label for="validationDefault03" class="form-label"><i class="fas fa-truck-loading"></i> Cantidad</label>
                <input type="text" class="form-control" id="validationDefault03" required placeholder="100 ml - 6 Unidades">
            </div>
            <div class="col-md-3">
                <label for="validationDefault05" class="form-label"><i class="fas fa-hourglass-start"></i> Fecha de emision</label>
                <input type="text" class="form-control" id="validationDefault05" required placeholder="12-12-12">
            </div>
            <div class="col-md-3">
                <label for="validationDefault05" class="form-label"> <i class="fas fa-hourglass-end"></i> Fecha de vencimiento</label>
                <input type="text" class="form-control" id="validationDefault05" required placeholder="11-11-11">
            </div>
            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Marcar como exclusivo
                </label>
                </div>
            </div>
            
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-dark">Guardar producto</button>
            </div>
            </div>
        </div>
        </div>

</div>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">

    <p>En esta seccion encontrara toda la infoamcon que requeira del producto</p>

</div>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 col-light" style="margin-left:80px">
    <table id="example" class="table table-light" style="width:100%,">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Peso</th>
                    <th>Fecha de emision</th>
                    <th>Fecha de vencimiento</th>
                    <th>Precio (S/.)</th>
                    <th>Contacto</th>
                    <th>Editar / Borrar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Shampoo</td>
                    <td>Head & Shoulders</td>
                    <td>150 gr</td>
                    <td>20-11-2020</td>
                    <td>20-11-2025</td>
                    <td>1,00</td>
                    <td>H&S@gmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Amoniaco</td>
                    <td>Ajax</td>
                    <td>500 ml</td>
                    <td>23-03-2019</td>
                    <td>23-02-2021</td>
                    <td>3,00</td>
                    <td>Ajax@gmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Palta / Aguacate</td>
                    <td>Prohass</td>
                    <td>150 - 300 gr</td>
                    <td>15-02-2019</td>
                    <td>15-02-2020</td>
                    <td>3,00</td>
                    <td>Paltitas@outlook.es</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Avena</td>
                    <td>3 Ositos</td>
                    <td>300 gr</td>
                    <td>16-12-2018</td>
                    <td>16-12-2019</td>
                    <td>1,50</td>
                    <td>3_ositos@hotmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Avena</td>
                    <td>Quaker</td>
                    <td>200 gr</td>
                    <td>25-08-2017</td>
                    <td>25-02-2018</td>
                    <td>3,00</td>
                    <td>Quaker@outlook.es</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Mani / Cacahuetes</td>
                    <td>Manisel</td>
                    <td>250 gr</td>
                    <td>23-04-2020</td>
                    <td>20-04-2024</td>
                    <td>10,00</td>
                    <td>manisel@gmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Fresas</td>
                    <td>Gloria</td>
                    <td>800 gr</td>
                    <td>18-03-2018</td>
                    <td>18-04-2018</td>
                    <td>15,00</td>
                    <td>gloria_s_a@hotmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Frutos secos</td>
                    <td>Nestle</td>
                    <td>400 gr</td>
                    <td>18-08-2019</td>
                    <td>18-08-2021</td>
                    <td>3,00</td>
                    <td>nestle@outlook.es</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Huevo</td>
                    <td>Granjas el Pollon</td>
                    <td>12 unidades</td>
                    <td>14-06-2019</td>
                    <td>14-07-2019</td>
                    <td>8,00</td>
                    <td>granjas_el_pollon@gmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Huevo</td>
                    <td>San Fernando</td>
                    <td>12 unidades</td>
                    <td>23-06-2019</td>
                    <td>23-07-2019</td>
                    <td>6,00</td>
                    <td>san_fernando@hotmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Shampoo</td>
                    <td>Clear</td>
                    <td>500 ml</td>
                    <td>14-06-2018</td>
                    <td>16-06-2021</td>
                    <td>15,00</td>
                    <td>clear@outlook.es</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Chocolate</td>
                    <td>Estrella del Cusco</td>
                    <td>300 gr</td>
                    <td>12-07-2015</td>
                    <td>12-05-2020</td>
                    <td>5,00</td>
                    <td>estrrla_del_cusco@gmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Pan</td>
                    <td>Bimbo</td>
                    <td>400 gr</td>
                    <td>18-04-2019</td>
                    <td>18-06-2019</td>
                    <td>6,00</td>
                    <td>bimbo@hotmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Bizcocho</td>
                    <td>Bimbo</td>
                    <td>800 gr</td>
                    <td>13-05-2021</td>
                    <td>13-07-2021</td>
                    <td>12,00</td>
                    <td>bimbo@hotmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Cafe</td>
                    <td>Nescafe</td>
                    <td>220 gr</td>
                    <td>12-05-2019</td>
                    <td>12-05-2020</td>
                    <td>4,00</td>
                    <td>nescafe@outlook.es</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Cocoa</td>
                    <td>Winter's</td>
                    <td>150 gr</td>
                    <td>16-04-2019</td>
                    <td>16-04-2021</td>
                    <td>1,00</td>
                    <td>winter@outlook.es</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Rasurador</td>
                    <td>Gillette</td>
                    <td>12 unidades</td>
                    <td>17-07-2017</td>
                    <td>17-07-2025</td>
                    <td>25,00</td>
                    <td>gillette@gmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Papas fritas</td>
                    <td>Free pap</td>
                    <td>100 gr</td>
                    <td>11-10-2019</td>
                    <td>11-10-2020</td>
                    <td>0,50</td>
                    <td>free_pap@gmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Hojas</td>
                    <td>Artesco</td>
                    <td>5000 gr</td>
                    <td>12-08-2015</td>
                    <td>12-08-2030</td>
                    <td>19,00</td>
                    <td>artesco@hotmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Mantequilla</td>
                    <td>Nestle</td>
                    <td>350 gr</td>
                    <td>16-03-2018</td>
                    <td>16-03-2019</td>
                    <td>3,00</td>
                    <td>nestle@hotmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Yoghurt</td>
                    <td>Bella Holandesa</td>
                    <td>1000 ml</td>
                    <td>19-07-2020</td>
                    <td>19-08-2020</td>
                    <td>16,00</td>
                    <td>bella_holandesa@outlook.es</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Lejia</td>
                    <td>Clorox</td>
                    <td>500 ml</td>
                    <td>13-11-2018</td>
                    <td>05-06-2030</td>
                    <td>2,00</td>
                    <td>clorox@hotmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
                <tr>
                    <td>Conserva de durazno en lata</td>
                    <td>Aconcagua</td>
                    <td>500 gr</td>
                    <td>13-05-2017</td>
                    <td>14-02-2018</td>
                    <td>7,00</td>
                    <td>aconcagua@hotmail.com</td>
                    <td style="text-align:center"><button type="button" class="btn btn-dark"><i class="fas fa-edit"></i></button>  <button type="button" class="btn btn-secondary"><i class="fas fa-times"></i></button></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Peso</th>
                    <th>Fecha de emision</th>
                    <th>Fecha de vencimiento</th>
                    <th>Precio (S/.)</th>
                    <th>Contacto</th>
                    <th>Editar / Borrar</th>
                </tr>
            </tfoot>
        </table>
</div>



<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );

</script>