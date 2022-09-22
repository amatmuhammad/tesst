<?php





?>


<?php
                                            if (isset($_GET['edit'])){
                                                echo "<button type='submit' name='btnproses' value='edit' class='btn btn-outline-success' >Simpan Perubahan</button>";
                                            }else {
                                                echo "<button type='submit' name='btnproses' value='tambah' class='btn btn-outline-success' >Tambah data</button>";
                                            }
                                            
                                            ?>
                                        