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
 * Strings for component 'enrol_dynamicrule', language 'pt_br', version '4.1'.
 *
 * @package     enrol_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ação';
$string['actiondisableenrolment'] = 'Desabilitar inscrição';
$string['actiondisableenrolmentremoveroles'] = 'Desabilitar inscrição e remover papéis';
$string['actionunenrol'] = 'Desinscrever usuário do curso';
$string['duration'] = 'Duração';
$string['dynamicrule:config'] = 'Configurar instâncias de inscrição dynamicrule';
$string['dynamicrule:enrol'] = 'Inscrever usuário usando ação de inscrição em curso';
$string['dynamicrule:unenrol'] = 'Desinscrever usuário usando a ação de desinscrição de curso ou manualmente';
$string['enddate'] = 'Data de término';
$string['errorinvalidaction'] = 'Ação inválida';
$string['errorinvalidcoursetoenrol'] = 'Curso inválido para inscrever';
$string['errorinvalidcoursetounenrol'] = 'Curso inválido para desinscrever';
$string['errorinvaliddurationandenddate'] = 'Você deve escolher a data de término da inscrição OU a duração, não ambas.';
$string['errorinvalidrole'] = 'Papel inválido';
$string['group'] = 'Nome do grupo';
$string['group_help'] = 'O nome do grupo que os usuários serão adicionados como membros.';
$string['noavailablecoursesenrol'] = 'Nenhum curso onde você possa inscrever usuários usando o método de inscrição com regras dinâmicas.';
$string['noavailablecoursesunenrol'] = 'Nenhum curso onde você possa cancelar a inscrição de usuários usando o método de inscrição com regras dinâmicas.';
$string['outcomecourseenrol'] = 'Inscrever usuários em um curso';
$string['outcomecourseenroldescription'] = 'Inscrito no curso \'{$a->coursename}\'<br />
Papel: {$a->role}<br />
Grupo: {$a->groupname}';
$string['outcomecourseunenrol'] = 'Cancelar inscrição de usuários em um curso';
$string['pluginname'] = 'Regras dinâmicas';
$string['privacy:metadata'] = 'O plugin de regras dinâmicas não armazena nenhum dado pessoal sobre nenhum usuário.';
$string['userwithoutcapability'] = 'Você deve ter capacidade para cancelar a inscrição dos métodos \'{$a}\' no curso selecionado';
