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
 * Strings for component 'tool_lifecycle', language 'pt_br', version '4.1'.
 *
 * @package     tool_lifecycle
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abortdisableworkflow'] = 'Desabilitar fluxo de trabalho (abortar processos, talvez inseguro!)';
$string['abortdisableworkflow_confirm'] = 'O fluxo de trabalho será desativado e todos os processos em execução desse fluxo de trabalho serão interrompidos. Tem certeza?';
$string['abortprocesses'] = 'Abortar processos em execução (talvez inseguros!)';
$string['abortprocesses_confirm'] = 'Todos os processos em execução deste fluxo de trabalho serão interrompidos. Tem certeza?';
$string['activateworkflow'] = 'Ativar';
$string['active_automatic_workflows_heading'] = 'Fluxos de trabalho automáticos ativos';
$string['active_manual_workflows_heading'] = 'Fluxos de trabalho manuais ativos';
$string['active_processes_list_header'] = 'Processos ativos';
$string['active_workflow_not_changeable'] = 'A instância do fluxo de trabalho já foi ativada. Não é mais possível alterar nenhuma de suas etapas.';
$string['active_workflow_not_removeable'] = 'A instância do fluxo de trabalho está ativa. Não é possível removê-lo.';
$string['active_workflows_list'] = 'Listar fluxos de trabalho ativos e definições de fluxo de trabalho';
$string['add_new_step_instance'] = 'Adicionar nova instância de etapa...';
$string['add_new_trigger_instance'] = 'Adicionar nova instância do gatilho...';
$string['add_workflow'] = 'Adicionar fluxo de trabalho';
$string['adminsettings_edit_step_instance_heading'] = 'Instância da etapa para o fluxo de trabalho \'{$a}\'';
$string['adminsettings_edit_trigger_instance_heading'] = 'Gatilho para fluxo de trabalho \'{$a}\'';
$string['adminsettings_edit_workflow_definition_heading'] = 'Definição de fluxo de trabalho';
$string['adminsettings_heading'] = 'Configurações de fluxo de trabalho';
$string['adminsettings_workflow_definition_steps_heading'] = 'Etapas do fluxo de trabalho';
$string['all_delays'] = 'Todos os atrasos';
$string['anonymous_user'] = 'Usuário anônimo';
$string['apply'] = 'Aplicar';
$string['backupcreated'] = 'Criado em';
$string['backupworkflow'] = 'Backup do fluxo de trabalho';
$string['cannot_trigger_workflow_manually'] = 'O fluxo de trabalho solicitado não pôde ser acionado manualmente.';
$string['config_backup_path'] = 'Caminho da pasta de backup do ciclo de vida';
$string['config_backup_path_desc'] = 'Esta configuração define o local de armazenamento dos backups criados pela etapa de backup.
O caminho deve ser especificado como um caminho absoluto em seu servidor.';
$string['config_delay_duration'] = 'Duração padrão de um atraso no curso';
$string['config_delay_duration_desc'] = 'Esta configuração define a duração do atraso padrão de um fluxo de trabalho
caso um de seus processos seja revertido ou finalizado.
A duração do atraso determina quanto tempo um curso será isento de ser processado novamente em qualquer um dos casos.';
