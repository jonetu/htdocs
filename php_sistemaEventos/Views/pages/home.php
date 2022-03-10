<main role="main">

    <section class=" text-center bg-light">
        <div class="container">
            <h1 class="display-4">Decorações</h1>
        </div>
    </section>

    <?php
    //resgatar as informacoes de todas as montagens
    $montagem = array_reverse($parameter['montagem']);
    ?>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php
                foreach ($montagem as $key => $value) {
                    echo "<div class='col-md-4'>";
                    echo "<div class='card mb-4 box-shadow'>";
                    echo "<img class='card-img-top' style='height: 100%; width: 100%; display: block;' src='uploads/" . $montagem[$key]['foto'] . "' data-holder-rendered='true'>";
                    echo "<div class='card-body'>";
                    echo "<h4 class='jumbotron-heading'>" . $montagem[$key]['nome'] . "</h4>";
                    echo "<p class='card-text'>" . $montagem[$key]['descricao'] . "</p>";
                    echo "<div class='d-flex justify-content-between align-items-center'>";
                    echo "<div class='btn-group'>";
                    echo "<button type='button' class='btn btn-sm btn-outline-info'>Selecionar</button>";
                    echo "<button type='button' class='btn btn-sm btn-outline-dark'>Editar</button>";
                    echo "</div>";
                    echo "<small class='text-muted'>Preço base: R$" . $montagem[$key]['preco'] . "</small>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana P</h4>
                            <p class="card-text">Decoracao pequena de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$300</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana G</h4>
                            <p class="card-text">Decoracao grande de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$500</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana M</h4>
                            <p class="card-text">Decoracao media de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$400</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana M</h4>
                            <p class="card-text">Decoracao media de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$400</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana M</h4>
                            <p class="card-text">Decoracao media de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$400</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana M</h4>
                            <p class="card-text">Decoracao media de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$400</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana M</h4>
                            <p class="card-text">Decoracao media de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$400</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana M</h4>
                            <p class="card-text">Decoracao media de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$400</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 100%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana M</h4>
                            <p class="card-text">Decoracao media de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$400</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana P</h4>
                            <p class="card-text">Decoracao pequena de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$300</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana G</h4>
                            <p class="card-text">Decoracao grande de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$500</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana M</h4>
                            <p class="card-text">Decoracao media de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$400</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana M</h4>
                            <p class="card-text">Decoracao media de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$400</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana M</h4>
                            <p class="card-text">Decoracao media de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$400</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana M</h4>
                            <p class="card-text">Decoracao media de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$400</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana M</h4>
                            <p class="card-text">Decoracao media de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$400</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" style="height: 99%; width: 100%; display: block;" src="uploads/622129bec9a357.91982964.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <h4 class="jumbotron-heading">Savana M</h4>
                            <p class="card-text">Decoracao media de savana</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-info">Selecionar</button>
                                    <button type="button" class="btn btn-sm btn-outline-dark">Editar</button>
                                </div>
                                <small class="text-muted">Preço base: R$400</small>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

</main>