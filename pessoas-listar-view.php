
<div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Cadastro de Pessoas</h5>
                            <div class="ibox-tools">
                              
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="ibox-content">

                            
                           <table>
                                <th>Nome: </th>
                                <th>Telefone: </th>

                                <?php 
                                    $listas = $pessoas->listar_pessoas();

                                    foreach ($listas as $key ) {

                                ?>

                                <?php //for ($i=0; $i < count($listas); $i++) { 
                                ?>            
                                    <tr>
                                        <td><?php echo $key["Nome"];?></td>
                                        <td><?php echo $key["Telefone"];?></td>
                                    </tr>
                                
                                    <?php } ?>
                           </table>
                        </div>
                    </div>
                </div>