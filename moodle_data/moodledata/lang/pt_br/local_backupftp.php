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
 * Strings for component 'local_backupftp', language 'pt_br', version '4.1'.
 *
 * @package     local_backupftp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_course'] = '<a style="color:#a41d1d" target="_blank" href="{$a->course_url}">Acessar o curso</a>';
$string['add_backup'] = 'Para adicionar um backup, acesse';
$string['add_restore'] = 'Para adicionar restaurações, acesse';
$string['adding_to_category'] = 'Será adicionado à categoria {$a->categoria}';
$string['already_added_status'] = 'Já adicionado e o status é {$a->status}';
$string['backup_courses_and_categories'] = 'Backup: Cursos e categorias';
$string['backup_creation_parameters'] = 'O backup será criado com os seguintes parâmetros';
$string['backup_end'] = 'Backup finalizado em';
$string['backup_end_time'] = 'Horário de término do backup';
$string['backup_report'] = 'Relatório de backup';
$string['backup_start'] = 'Backup iniciado em';
$string['backup_start_time'] = 'Horário de início do backup';
$string['backupftp:manage'] = 'Gerenciar backup';
$string['categories'] = 'Categorias';
$string['category_created_successfully'] = '==> Categoria {$a->categoria_nome} criada com sucesso';
$string['category_link'] = 'Categoria <a href="{$a}" target="blank">Categoria raiz</a>';
$string['click_here'] = 'Clique aqui';
$string['course'] = 'Curso';
$string['course_added_to_backup_queue'] = 'Curso {$a->course_id} adicionado à fila de backup';
$string['course_already_exists'] = 'Curso já existe';
$string['courses'] = 'Cursos';
$string['courses_and_categories'] = 'Cursos e Categorias';
$string['created_at'] = 'Criado em';
$string['created_on'] = 'Criado em';
$string['created_on_time'] = 'Criado em {$a->modify}';
$string['cron'] = 'o CRON';
$string['cron_task'] = 'Tarefa do CRON';
$string['error_creating_folder'] = '<span style="color:#d10707">Erro ao criar pasta</span> "<b>{$a->ftppasta}</b>" no FTP com erro "<b>{$a->errormsg}</b>"!';
$string['error_downloading_file'] = 'Erro ao baixar o arquivo MBZ, com erro "<b>{$a->error}</b>"';
$string['error_extracting_mbz'] = 'Erro ao extrair o arquivo MBZ';
$string['file_added_to_restore_queue'] = 'Arquivo {$a->file} adicionado à fila de restauração';
$string['file_found_and_downloaded'] = 'Arquivo localizado e baixado';
$string['file_size'] = 'com tamanho {$a->size}';
$string['file_uploaded'] = 'Arquivo "<b>{$a->file}</b>" enviado para "<b>{$a->remote_file}</b>"!';
$string['ftp_error_connecting'] = 'Erro ao conectar ao FTP';
$string['ftp_error_login'] = 'Não foi possível conectar com {$a->username}@{$a->url}';
$string['ftp_files'] = 'Arquivos no FTP';
$string['ftp_remote_file_size'] = 'O FTP retornou que o arquivo remoto tem "<b>{$a->size} bytes</b>"';
$string['logs'] = 'Logs';
$string['mbz_extracted_successfully'] = 'MBZ extraído com sucesso';
$string['modulename'] = 'Backup FTP';
$string['nothing_to_execute'] = 'Nada a executar';
$string['pluginname'] = 'Backup FTP';
$string['pre_check_failure'] = 'Verificação prévia falhou';
$string['privacy:metadata'] = 'O plugin local_backupftp não coleta nem armazena dados pessoais ou qualquer outro dado sensível. Ele apenas utiliza as configurações de FTP fornecidas para realizar backups, sem registrar ou reter informações relacionadas a usuários ou aos dados transferidos.';
$string['processing_file'] = 'Processando: <b>{$a->remote_file}</b> com {$a->size}';
$string['remote_file'] = 'Arquivo Remoto';
$string['report'] = 'Relatório';
$string['reports'] = 'Relatórios';
$string['restore_course_already_exists'] = '<a style="color:#a41d1d" target="_blank" href="{$a->course_url}">Curso já existe</a>';
$string['restore_courses_and_categories'] = 'Restaurar: Cursos e Categorias';
$string['restore_report'] = 'Relatório de Restauração';
$string['run_cron'] = 'Executar o';
$string['runtask_backup'] = 'Para executar o backup';
$string['runtask_click_here'] = 'Clique aqui';
$string['runtask_execute_five_courses'] = 'Executar apenas 5 cursos por vez';
$string['runtask_execute_one_course'] = 'Executar apenas 1 curso por vez';
$string['runtask_execute_ten_courses'] = 'Executar apenas 10 cursos por vez';
$string['runtask_restore'] = 'Para executar a restauração';
$string['select_deselect_all'] = 'Marcar/Desmarcar Tudo';
$string['send'] = 'Enviar';
$string['settings_categorystart'] = 'ID da Categoria Raiz';
$string['settings_categorystart_desc'] = 'O ID da categoria raiz para iniciar a restauração dos cursos';
$string['settings_error'] = 'e erro';
$string['settings_error_sending_backup'] = 'Erro ao enviar backup para';
$string['settings_file_size'] = 'com tamanho de arquivo';
$string['settings_ftpenable'] = 'Enviar para FTP';
$string['settings_ftpnames'] = 'Usar o nome do curso como nome do arquivo de backup';
$string['settings_ftpnames_desc'] = 'Se marcado, o nome do arquivo enviado será o nome do curso. Caso contrário, será o nome atribuído pelo Moodle, semelhante a backup-moodle2-course-21-nome-20240208.mbz';
$string['settings_ftporganize'] = 'Organizar backups no FTP por categorias';
$string['settings_ftporganize_desc'] = 'O arquivo será salvo como Categoria/Categoria/curso.mbz';
$string['settings_ftppassword'] = 'Senha do FTP';
$string['settings_ftppasta'] = 'Pasta Remota do FTP';
$string['settings_ftppasta_desc'] = 'A pasta de destino deve começar com / e não terminar com / (ex.: /backup, /save/backup)';
$string['settings_ftppasv'] = 'Enviar arquivo em modo passivo?';
$string['settings_ftppasv_desc'] = 'O modo padrão do FTP no PHP é o modo ativo. O modo ativo raramente funciona devido a firewalls/NATs/proxies. Portanto, quase sempre é necessário usar o modo passivo.';
$string['settings_ftpurl'] = 'URL do FTP';
$string['settings_ftpurl_desc'] = 'Digite o endereço IP ou o nome do host do servidor FTP desejado. Se a porta do servidor FTP for diferente de 21, especifique-a adicionando dois-pontos (:) seguidos do número da porta, ex.: 127.0.0.1:29. Se seu FTP usar SSL, adicione ftps:// antes do domínio.';
$string['settings_ftpusername'] = 'Login do FTP';
$string['settings_integrations'] = 'Integrações';
$string['settings_mbz_settings'] = 'Configurações de Geração do MBZ';
$string['settings_restore_settings'] = 'Configurações de Restauração';
$string['settings_rootsettinganonymize'] = 'Anonimizar Usuários Root';
$string['settings_rootsettingusers'] = 'Configuração de Usuários Root';
$string['status'] = 'Status';
$string['submit'] = 'Enviar';
$string['temporary_files_deleted'] = 'Arquivos temporários excluídos';
$string['total_files'] = 'Total de arquivos:';
$string['total_in_category'] = 'Total dentro desta categoria: {$a->total}';
$string['view_backup_report'] = 'Para acompanhar os backups, acesse o';
$string['view_restore_report'] = 'Para acompanhar as restaurações, acesse o';
