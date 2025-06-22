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
 * Strings for component 'diary', language 'pt_br', version '4.1'.
 *
 * @package     diary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Acesso negado';
$string['additionallinks'] = 'Links adicionais para esta atividade e curso:';
$string['addtofeedback'] = 'Adicionar ao feedback.';
$string['alias'] = 'Palavra chave';
$string['aliases'] = 'Palavras chave';
$string['aliases_help'] = 'Cada registro do diário pode ter uma lista associada de palavras-chave (ou aliases).

Digite cada palavra-chave em uma nova linha (não separadas por vírgulas).';
$string['alwaysopen'] = 'Sempre aberto';
$string['alwaysshowdescription'] = 'Sempre mostrar a descrição.';
$string['alwaysshowdescription_help'] = 'Se desabilitado, a descrição do diário acima só ficará visível para os alunos na data de "Abertura".';
$string['and'] = 'e';
$string['attachment'] = 'Anexo';
$string['attachment_help'] = 'Você pode, opcionalmente, anexar um ou mais arquivos a um registro do diário.';
$string['autorating'] = 'Avaliação automática';
$string['autorating_descr'] = 'Se ativado, a avaliação de uma entrada será calculada automaticamente com base nas configurações de contagem Mín/Máx.';
$string['autorating_help'] = 'Essa configuração, junto com as contagens Mín/Máx, define os padrões para a avaliação automática em todos os novos diários.';
$string['autorating_title'] = 'Habilitar avaliação automática';
$string['autoratingbelowmaxitemdetails'] = 'A avaliação automática requer {$a->one} ou mais {$a->two} com uma possível penalidade de {$a->three}% para cada um faltante.<br>Você tem {$a->four}. Você precisa de {$a->five}. A penalidade possível é de {$a->six} pontos.';
$string['autoratingitempenaltymath'] = 'A fórmula da penalidade para a avaliação automática do item é (max({$a->one} - {$a->two}, 0)) * {$a->three} = {$a->four}.<br> Nota: max impede números negativos causados pela quantidade superior ao necessário.';
$string['autoratingitempercentset'] = 'Configurações de percentual da avaliação automática: {$a}%';
$string['autoratingovermaxitemdetails'] = 'O limite de avaliação automática é no máximo {$a->one} {$a->two}, com uma possível penalidade de {$a->three}% para cada um extra.<br>Você tem {$a->four}, o que é {$a->five} a mais. A penalidade possível é de {$a->six} pontos.';
$string['availabilityhdr'] = 'Disponibilidade';
$string['avgsylperword'] = 'Média de sílabas por palavra {$a}';
$string['avgwordlenchar'] = 'Comprimento médio das palavras: {$a} caracteres';
$string['avgwordpara'] = 'Média de palavras por parágrafo: {$a}';
$string['blankentry'] = 'Campo em branco';
$string['calendarend'] = '{$a} encerrado';
$string['calendarstart'] = '{$a} aberto';
$string['cancel'] = 'Cancelar transferẽncia';
$string['chars'] = 'Caracteres:';
$string['charspersentence'] = 'Caracteres  por sentença';
$string['clearfeedback'] = 'Limpar feedback';
$string['commonerrorpercentset'] = 'Configuração de percentual de erro comum: {$a}%';
$string['commonerrors'] = 'Erros Comuns';
$string['commonerrors_help'] = 'Os erros comuns são definidos no "Glossário de erros" associado a esta questão.';
$string['configdateformat'] = 'Isso define como as datas são exibidas nos relatórios do diário. O valor padrão, "M d, Y G:i", é o formato de mês, dia, ano e hora no formato de 24 horas. Consulte a documentação do PHP sobre Data para mais exemplos e constantes de data predefinidas.';
$string['created'] = 'Criado há {$a->one} dias e {$a->two} horas.';
$string['createnewprompt'] = 'Criar novo prompt';
$string['crontask'] = 'Processamento em segundo plano para o módulo de Diário';
$string['csvexport'] = 'Exportar para .csv';
$string['currententry'] = 'Entradas atuais do diário:';
$string['currpotrating'] = 'Sua avaliação potencial atual é: {$a->one} pontos, ou {$a->two}%.';
$string['datechanged'] = 'Data alterada';
$string['dateformat'] = 'Formato de data padrão';
$string['datestart'] = 'Definir data para começar a usar o ID do prompt {$a}:';
$string['datestop'] = 'Definir data para encerrar o uso do ID de prompt {$a}:';
$string['daysavailable'] = 'Dias disponíveis';
$string['daysavailable_help'] = 'Se estiver usando o formato Semanal, você pode definir por quantos dias o diário ficará disponível para uso.';
$string['deadline'] = 'Dias Abertos';
$string['delete'] = 'Excluir';
$string['deleteallratings'] = 'Excluir todas as avaliações';
$string['deleteexconfirm'] = 'Confirme que você está prestes a excluir o prompt de escrita ID';
$string['deletenotenrolled'] = 'Excluir registros de usuários não inscritos';
$string['details'] = 'Detalhes:';
$string['detectcommonerror'] = 'Detectado pelo menos {$a->one}, {$a->two}. Eles são: {$a->three}
<br>Caso permitido, você deve corrigir e reenviar.';
$string['diary:addentries'] = 'Adicionar registros no diário';
$string['diary:addinstance'] = 'Adicionar instâncias de diário';
$string['diary:manageentries'] = 'Gerenciar registros do diário';
$string['diary:rate'] = 'Avaliar registros do diário';
$string['diaryclosetime'] = 'Hora de encerramento';
$string['diaryclosetime_help'] = 'Se habilitado, você pode definir uma data para o diário ser encerrado e não estar mais disponível para uso.';
