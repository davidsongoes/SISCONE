<?php
include(__DIR__ . '/../layout/header.php');
use components\Helper;
use models\Efetivo;
use models\base\AbstractModel;

$foto = Efetivo::verificaFoto($efetivo->id);
?>
    <div class="row">
        <div class="col-lg-2">
            <?php include(__DIR__ . '/../layout/menu.php'); ?>
        </div>
        <div class="container-fluid margem_direita">
            <div class="col-lg-10">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.php?c=efetivo&acao=listarMilitares">Lista do Efetivo</a>
                    </li>
                    <li class="breadcrumb-item active">Editar Dados
                        - <?php echo (!empty($efetivo->id)) ? Efetivo::buscaPostoGraduacao($efetivo->posto_graduacao) . ' ' . utf8_encode($efetivo->nome_guerra) : "Novo Cadastro"; ?></li>
                </ol>
                <h1>Editar Dados</h1>
                <form class="form-horizontal" role="form" method="post" action="index.php?c=efetivo&acao=editarMilitar"
                      enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $efetivo->id ?>"/>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="saram" class="col-sm-2 control-label">Saram</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="saram" placeholder="Saram" name="saram"
                                           required="required" value="<?= $efetivo->saram ?>">
                                </div>
                            </div>
                            <!--                Posto/Graduação-->
                            <div class="form-group">
                                <label for="posto_graduacao" class="col-sm-2 control-label">Posto<br>Graduação</label>
                                <div class="col-sm-5">
                                    <select type="text" class="form-control" id="posto_graduacao" name="posto_graduacao"
                                            required="required">
                                        <option value="<?php echo $efetivo->posto_graduacao ?>"><?php echo Efetivo::buscaPostoGraduacao($efetivo->posto_graduacao) ?></option>
                                        <?php foreach (Efetivo::allPostoGraduacao() as $posto_graduacao): ?>
                                            <option value="<?= $posto_graduacao['id_posto_grad'] ?>"><?= $posto_graduacao['posto_grad'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <!--                Quadro-->
                            <div class="form-group">
                                <label for="quadro" class="col-sm-2 control-label">Quadro</label>
                                <div class="col-sm-5">
                                    <select type="text" class="form-control" id="quadro" name="quadro"
                                            required="required">
                                        <option value="<?php echo $efetivo->quadro ?>"><?php echo Efetivo::buscaQuadro($efetivo->quadro) ?></option>
                                        <?php foreach (Efetivo::allQuadro() as $quadro): ?>
                                            <option value="<?= $quadro['id_quadro'] ?>"><?= $quadro['quadro'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="especialidade" class="col-sm-2 control-label">Especialidade</label>
                                <div class="col-sm-5">
                                    <select type="text" class="form-control" id="especialidade" name="especialidade"
                                            required="required">
                                        <option value="<?php echo $efetivo->especialidade ?>"><?php echo Efetivo::buscaEspecialidade($efetivo->especialidade) ?></option>
                                        <?php foreach (Efetivo::allEspecialidade() as $especialidade): ?>
                                            <option value="<?= $especialidade['id_esp'] ?>"><?= $especialidade['especialidade'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nome_completo" class="col-sm-2 control-label">Nome Completo</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nome_completo"
                                           placeholder="Nome Completo"
                                           name="nome_completo"
                                           required="required"
                                           value="<?php echo utf8_encode($efetivo->nome_completo) ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nome_guerra" class="col-sm-2 control-label">Nome de Guerra</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nome_guerra"
                                           placeholder="Nome de Guerra"
                                           name="nome_guerra"
                                           required="required" value="<?php echo utf8_encode($efetivo->nome_guerra) ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="situacao" class="col-sm-2 control-label">Situação</label>
                                <div class="col-sm-5">
                                    <select type="text" class="form-control" id="situacao" name="situacao"
                                            required="required">
                                        <option value="<?php echo $efetivo->situacao ?>"><?php echo Helper::$situacao[$efetivo->situacao] ?></option>
                                        <?php foreach (Helper::$situacao as $chave => $secao): ?>
                                            <option value="<?= $chave; ?>"><?= $secao ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data_nascimento" class="col-sm-2 control-label">Data Nascimento</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" id="data_nascimento"
                                           placeholder="data_nascimento" name="data_nascimento" required="required"
                                           value="<?php echo AbstractModel::desformataData($efetivo->data_nascimento) ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data_ultima_promocao" class="col-sm-2 control-label">Data Ultima
                                    Promoção</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" id="data_ultima_promocao"
                                           placeholder="data_ultima_promocao" name="data_ultima_promocao"
                                           required="required"
                                           value="<?php echo AbstractModel::desformataData($efetivo->data_ultima_promocao) ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="secao" class="col-sm-2 control-label">Seção</label>
                                <div class="col-sm-5">
                                    <select type="text" class="form-control" id="secao" name="secao"
                                            required="required">
                                        <option value="<?php echo $efetivo->secao ?>"><?php echo Efetivo::buscaSecao($efetivo->secao) ?></option>
                                        <?php foreach (Efetivo::allSecao() as $secao): ?>
                                            <option value="<?= $secao['id_secao'] ?>"><?= $secao['secao'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ramal" class="col-sm-2 control-label">Ramal</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="ramal" placeholder="Ramal" name="ramal"
                                           required="required" value="<?php echo $efetivo->ramal ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rtcaer" class="col-sm-2 control-label">RTCAER</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="rtcaer" placeholder="RTCAER"
                                           name="rtcaer"
                                           value="<?php echo $efetivo->rtcaer ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">E-mail</label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="email" placeholder="exemplo@fab.mil.br"
                                           name="email" required="required" value="<?php echo $efetivo->email ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="antiguidade_turma" class="col-sm-2 control-label">Antiguidade Turma</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="antiguidade_turma" placeholder=""
                                           name="antiguidade_turma" required="required"
                                           value="<?php echo $efetivo->antiguidade_turma ?>">
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-7">
                            <strong>Foto do Militar</strong>
                            <br>
                            <!-- markup -->
                            <!-- note: your server code `avatar_upload.php` will receive `$_FILES['avatar']` on form submission -->
                            <!-- the avatar markup -->
                            <!--                            <form class="form form-vertical" action="index.php?c=efetivo&acao=salvaFoto" method="post"-->
                            <!--                                  >-->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="kv-avatar center-block text-center" style="width:200px">
                                        <br>
                                        <input id="avatar-1" name="avatar-1" type="file" class="file-loading"
                                               value="<?php echo Efetivo::verificaFoto($efetivo->id); ?>">
                                        <div class="help-block">
                                            <small>Selecione um arquivo < 2000 KB</small>
                                            <small>Extensões: jpg, png ou gif.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
                        </div>
                        <!-- the fileinput plugin initialization -->
                        <script>
                            var foto = "<?=$foto?>";
                            //                            var btnCust = '<button type="button" class="btn btn-default" title="Add picture tags" ' +
                            //                                'onclick="alert()">' +
                            //                                '<i class="glyphicon glyphicon-tag"></i>' +
                            //                                '</button>';
                            $("#avatar-1").fileinput({
                                overwriteInitial: true,
                                maxFileSize: 2000,
                                showClose: false,
                                showCaption: false,
                                browseLabel: '',
                                removeLabel: '',
                                browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
                                removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
                                removeTitle: 'Cancel or reset changes',
                                elErrorContainer: '#kv-avatar-errors-1',
                                msgErrorClass: 'alert alert-block alert-danger',
                                defaultPreviewContent: '<img id="foto" style="width:160px">',
                                layoutTemplates: {main2: '{preview} ' + ' {remove} {browse}'},
                                allowedFileExtensions: ["jpg", "png", "gif"]
                            });
                            $("#foto").attr({
                                src: foto,
                                title: "Efetivo",
                                alt: "Foto Militar"
                            });
                        </script>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-10">
                <button type="submit" class="btn btn-warning"><span
                            class="glyphicon glyphicon-pencil"></span>
                    Editar
                </button>
            </div>
        </div>
    </div>
    </form>
    </div>
    </div>

<?php include(__DIR__ . '/../layout/footer.php'); ?>