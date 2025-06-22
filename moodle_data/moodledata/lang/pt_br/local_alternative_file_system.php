<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_alternative_file_system', language 'pt_br', version '4.1'.
 *
 * @package     local_alternative_file_system
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['instruction_install'] = 'Você precisa adicionar o código abaixo ao config.php:<pre>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</pre>';
$string['instruction_title'] = 'Instruções de Instalação';
$string['migrate_link'] = '<p><a class="btn btn-success" href="?execute=1">Executar agora (pode levar um tempo)</a></p>';
$string['migrate_title'] = 'Migrar Local para Armazenamento Remoto';
$string['migrate_total'] = '<p>Você tem <strong>{$a->missing}</strong> arquivos locais aguardando migração, enquanto <strong>{$a->sending}</strong> arquivos já foram migrados para o ambiente remoto.</p>';
$string['pluginname'] = 'Sistema de Arquivos Alternativo';
$string['privacy:no_data_reason'] = 'O plugin Sistema de Arquivos Alternativo não armazena nenhum dado pessoal.';
$string['settings_bucketname'] = 'Nome do Bucket {$a->local}';
$string['settings_bucketnamedesc'] = 'O nome único atribuído ao bucket no {$a->local}.';
$string['settings_destino'] = 'Destino de Armazenamento';
$string['settings_destinodesc'] = 'Escolha o destino de armazenamento e salve para carregar dados relacionados ao armazenamento.';
$string['settings_gcs_keyfile'] = 'Conteúdo do Google-storage.json';
$string['settings_gcs_keyfiledesc'] = 'Cole aqui o conteúdo do arquivo "google-storage.json".';
$string['settings_local'] = 'Arquivos locais no Moodle';
$string['settings_migrate'] = 'Use o serviço <a target="_blank" href="{$a->url}">move-to-external.php</a> para migrar dados locais para {$a->local}.';
$string['settings_path'] = 'Caminho do Objeto {$a->local}';
$string['settings_pathdesc'] = 'O caminho dentro do bucket onde os objetos serão armazenados. Somente letras e números são aceitos.';
$string['settings_s3_credentials_key'] = 'Chave de Acesso {$a->local}';
$string['settings_s3_credentials_keydesc'] = 'A chave de acesso usada para autenticar no serviço {$a->local}.';
$string['settings_s3_credentials_secret'] = 'Chave Secreta {$a->local}';
$string['settings_s3_credentials_secretdesc'] = 'A chave secreta usada para autenticar no serviço {$a->local}.';
$string['settings_s3_region'] = 'Região {$a->local}';
$string['settings_s3_regiondesc'] = 'A região onde o bucket {$a->local} está localizado, por exemplo, "{$a->ex_region}".';
$string['settings_success'] = '<h2>Os dados estão corretos.</h2>Por favor, tenha cautela ao modificar as configurações, pois qualquer alteração incorreta pode resultar na inacessibilidade dos arquivos armazenados.';
