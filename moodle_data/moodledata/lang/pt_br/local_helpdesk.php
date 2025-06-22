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
 * Strings for component 'local_helpdesk', language 'pt_br', version '4.1'.
 *
 * @package     local_helpdesk
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Adicionar Nova Categoria';
$string['addticket'] = 'Adicionar Chamado';
$string['attachment'] = 'Anexos';
$string['cancel'] = 'Cancelar';
$string['categories'] = 'Categorias de Chamado';
$string['categorieslist'] = 'Lista de Categorias';
$string['category'] = 'Categoria';
$string['category_role_description'] = 'Papel específico para controlar o acesso dos usuários à gestão de Chamados.';
$string['category_users_all'] = 'Todos os usuários do Moodle';
$string['category_users_info'] = 'Primeiro, salve a categoria antes de editar os usuários.';
$string['category_users_responses'] = 'Usuários que respondem a esta categoria';
$string['category_users_title'] = 'Define os usuários com permissão para responder e que receberão um e-mail sobre novos chamados';
$string['categoryadded'] = 'Categoria adicionada com sucesso';
$string['categorycreated'] = 'Categoria criada com sucesso';
$string['categorydeleted'] = 'Categoria deletada com sucesso';
$string['categorydescription'] = 'Descrição da Categoria';
$string['categoryname'] = 'Nome da Categoria';
$string['categorynotfound'] = 'Categoria não encontrada';
$string['categoryupdated'] = 'Categoria atualizada com sucesso';
$string['comments'] = 'Comentários';
$string['confirmdelete'] = 'Você tem certeza de que deseja excluir esta categoria?';
$string['confirmdeletecategory'] = 'Você tem certeza de que deseja excluir esta categoria?';
$string['createcategory'] = 'Criar Categoria';
$string['createcategoryfirst'] = 'Primeiro, crie uma categoria';
$string['createticket'] = 'Criar Chamado';
$string['deletecategory'] = 'Excluir Categoria';
$string['deletecategoryusedata'] = 'Esta categoria possui dados';
$string['deletesuccesscategory'] = 'Categoria deletada com sucesso';
$string['description'] = 'Descrição';
$string['editcategory'] = 'Editar Categoria';
$string['editticket'] = 'Editar Chamado';
$string['error:emptyname'] = 'O nome da categoria não pode estar vazio';
$string['erroraddcategory'] = 'Erro ao adicionar categoria';
$string['errordeletecategory'] = 'Erro ao excluir categoria';
$string['errorinsertingcategory'] = 'Erro ao adicionar categoria';
$string['errorinsertingticket'] = 'Erro ao inserir chamado';
$string['errorupdatecategory'] = 'Erro ao atualizar categoria';
$string['errorupdatingcategory'] = 'Erro ao atualizar categoria';
$string['errorupdatingticket'] = 'Erro ao atualizar chamado';
$string['findcourse'] = 'Selecione um Curso';
$string['findticket'] = 'Buscar em assunto e texto';
$string['finduser'] = 'Selecione um Usuário';
$string['geniai_btn_knowledgebase_create'] = 'Criar uma base de conhecimento com IA';
$string['geniai_btn_response_create'] = 'Criar uma resposta com IA';
$string['geniai_create_knowledgebase_desc'] = 'Descreva em detalhes o conteúdo que você deseja gerar. O GeniAI usará essas informações para criar um texto preciso e relevante para sua base de conhecimento.';
$string['geniai_create_knowledgebase_message'] = 'Criar uma mensagem com base no texto acima.';
$string['geniai_create_response_desc'] = 'Descreva o que você deseja gerar. O GeniAI usará todas as conversas como base para criar uma resposta, mas você precisa definir quais dados deseja escrever.';
$string['geniai_create_response_message'] = 'Criar uma mensagem com base no texto acima.';
$string['geniai_knowledgebase_prompt'] = 'Você é um chatbot especializado em criar bases de conhecimento para o Moodle. Seu objetivo é gerar conteúdo claro, bem estruturado e envolvente, utilizando um tom profissional e persuasivo na primeira pessoa. Cada resposta deve ser detalhada e completa, garantindo que qualquer usuário possa entender facilmente as informações fornecidas.

Agora, crie um artigo de base de conhecimento sobre:
Nome do Moodle: "{$a->site_fullname}"
URL do Moodle: "{$a->site_url}"
"{$a->message}"

Responda apenas no idioma "{$a->userlang}", sem títulos e apenas no formato MARKDOWN.';
$string['geniai_like_message'] = 'Gostou da mensagem? Clique aqui para fechar e enviá-la para o Editor.';
$string['geniai_missing'] = 'Instale e configure o plugin <a href="{$a}" target="_blank">GenIA</a> para habilitar respostas com IA.';
$string['geniai_ticket_prompt_1'] = 'Você é um chatbot que sugere respostas para tickets do Moodle para resolver problemas de cursos ou do Moodle de maneira animada, alegre e em primeira pessoa.
Você adora responder com mensagens inspiradoras, evitando listas, e fornecendo explicações detalhadas enquanto presta muita atenção aos detalhes.

A pergunta do usuário de {$a->userfullname}: "{$a->userticket}"

Agora, crie uma resposta explicando como resolver o seguinte problema usando as instruções fornecidas pelo Suporte:
"{$a->message}"

Retorne somente no idioma "{$a->userlang}" e somente em formato MARKDOWN.';
$string['geniai_ticket_prompt_2'] = 'Você é um chatbot que sugere respostas para tickets do Moodle para resolver problemas de cursos ou do Moodle de maneira animada, alegre e em primeira pessoa.
Você adora responder com mensagens inspiradoras, evitando listas, e fornecendo explicações detalhadas enquanto presta muita atenção aos detalhes.

Agora, crie uma resposta explicando como resolver o seguinte problema:

A pergunta do usuário de {$a->userfullname}: "{$a->userticket}"';
$string['geniai_ticket_prompt_3'] = 'Você é um chatbot que sugere respostas para tickets do Moodle para resolver problemas de cursos ou do Moodle de maneira animada, alegre e em primeira pessoa.
Você adora responder com mensagens inspiradoras, evitando listas, e fornecendo explicações detalhadas enquanto presta muita atenção aos detalhes.

Agora, com base neste histórico, crie uma resposta usando as instruções fornecidas pelo Suporte:
"{$a->message}"

Retorne somente no idioma "{$a->userlang}" e somente em formato MARKDOWN.';
$string['geniai_ticket_prompt_4'] = 'Você é um chatbot que sugere respostas para tickets do Moodle para resolver problemas de cursos ou do Moodle de maneira animada, alegre e em primeira pessoa.
Você adora responder com mensagens inspiradoras, evitando listas, e fornecendo explicações detalhadas enquanto presta muita atenção aos detalhes.

Agora, com base neste histórico, crie uma resposta e retorne somente no idioma "{$a->userlang}" e somente em formato MARKDOWN.';
$string['geniai_title'] = 'Inteligência Artificial';
$string['helpdesk:categorydelete'] = 'Permite excluir categorias.';
$string['helpdesk:categorymanage'] = 'Permite gerenciar as categorias do Helpdesk';
$string['helpdesk:knowledgebase_delete'] = 'Excluir artigos na base de conhecimento';
$string['helpdesk:knowledgebase_manage'] = 'Gerenciar artigos na base de conhecimento';
$string['helpdesk:knowledgebase_view'] = 'Visualizar artigos na base de conhecimento';
$string['helpdesk:ticketmanage'] = 'Permite gerenciar o Helpdesk, incluindo responder e fechar tickets.';
$string['helpdesk:view'] = 'Permite visualizar tickets do Helpdesk e criar tickets para si mesmo.';
$string['helpdesk_manage_users'] = 'Visualizar usuários com permissão para gerenciar esta categoria de papel';
$string['index_top_all_open_tickets'] = 'Todos os Tickets Abertos';
$string['index_top_completed_tickets'] = 'Tickets Concluídos';
$string['index_top_unanswered_tickets'] = 'Tickets Não Respondidos';
$string['index_top_urgent_tickets'] = 'Tickets Urgentes';
$string['integracaoroot'] = 'Integração';
$string['invalidpriority'] = 'Prioridade inválida selecionada.';
$string['knowledgebase_addnew'] = 'Adicionar nova base de conhecimento';
$string['knowledgebase_articlenotfound'] = 'Base de conhecimento não encontrada';
$string['knowledgebase_category'] = 'Categoria';
$string['knowledgebase_create'] = 'Criar base de conhecimento';
$string['knowledgebase_delete'] = 'Excluir base de conhecimento';
$string['knowledgebase_delete_confirm'] = 'Tem certeza de que deseja excluir a base de conhecimento <strong>{$a}</strong>';
$string['knowledgebase_delete_success'] = 'Base de conhecimento excluída com sucesso';
$string['knowledgebase_description'] = 'Conteúdo do conhecimento';
$string['knowledgebase_edit'] = 'Editar base de conhecimento';
$string['knowledgebase_name'] = 'Base de conhecimento';
$string['knowledgebase_prompt_short'] = 'Prompt muito curto';
$string['knowledgebase_title'] = 'Título do conhecimento';
$string['knowledgebase_update'] = 'Atualizar';
$string['lognewcategory'] = 'Categoria alterada para <strong>{$a}</strong>!';
$string['lognewpriority'] = 'Prioridade alterada para <strong>{$a}</strong>!';
$string['lognewstatus'] = 'Status alterado para <strong>{$a}</strong>!';
$string['lognowupdate'] = 'Nenhuma alteração realizada!';
$string['mailticket_create_message'] = '<p><strong>{[moodle.fullname]}</strong> >> <strong>{[event.helpdesk]}</strong> >> <strong>{[event.categorylink]}</strong> >> <strong>{[event.subjectlink]}</strong> - Ticket <strong>#{[event.tiketidlink]}</strong></p>
<p>Caro {[to.fullname]},</p>
<p>{[from.fullname]} criou o ticket #{[event.tiketidlink]}:</p>
<blockquote style="border-left: 4px solid #9E9E9E;padding-left: 7px;">
{[event.text]}
{[event.attachment]}
</blockquote>
<p>Atenciosamente,<br>
Equipe de Suporte</p>';
$string['mailticket_subject'] = '{[event.subjectname]} - Ticket: #{[event.tiketidname]}';
$string['mailticket_update_message'] = '<p><strong>{[moodle.fullname]}</strong> >> <strong>{[event.helpdesk]}</strong> >> <strong>{[event.categorylink]}</strong> >> <strong>{[event.subjectlink]}</strong> - Ticket <strong>#{[event.tiketidlink]}</strong></p>
<p>Caro {[to.fullname]},</p>
<p>Nossa equipe revisou o seu caso e adicionou novas informações:</p>
<blockquote style="border-left: 4px solid #9E9E9E;padding-left: 7px;">
{[event.text]}
{[event.attachment]}
</blockquote>
<p>Por favor, acesse o ticket #{[event.tiketidlink]} para visualizar a atualização e fornecer mais detalhes, se necessário. Estamos à disposição para continuar assistindo você e resolver sua solicitação o mais rápido possível.</p>
<p>Atenciosamente,<br>
Equipe de Suporte</p>';
$string['mailticket_user_message'] = '<p><strong>{[moodle.fullname]}</strong> >> <strong>{[event.tiketidlink]}</strong> >> <strong>{[event.categorylink]}</strong> >> <strong>{[event.subjectlink]}</strong> - Ticket <strong>#{[event.tiketidlink]}</strong></p>
<p>Caro {[to.fullname]},</p>
<p>Recebemos sua solicitação:</p>
<blockquote style="border-left: 4px solid #9E9E9E;padding-left: 7px;">
{[event.text]}
{[event.attachment]}
</blockquote>
<p>Se ainda não o fez, você pode adicionar mais detalhes ao seu ticket #{[event.tiketidlink]}, como logs, mensagens de erro, capturas de tela, descrições passo a passo ou etapas de replicação que possam ajudar o agente de suporte a atendê-lo de forma mais eficaz.</p>
<p>Nossa equipe está trabalhando na análise do seu problema e dará o devido acompanhamento. Agradecemos sua paciência e compreensão.</p>
<p>Atenciosamente,<br>
Equipe de Suporte</p>';
$string['markticketasclosed'] = 'Marcar Ticket como Fechado';
$string['markticketasresolved'] = 'Marcar Ticket como Resolvido';
$string['pluginname'] = 'Helpdesk';
$string['priority'] = 'Prioridade';
$string['priority_high'] = 'Alta';
$string['priority_low'] = 'Baixa';
$string['priority_medium'] = 'Média';
$string['priority_urgent'] = 'Urgente';
$string['privacy:metadata:category_user_userid'] = 'Identificador único do usuário atribuído a uma categoria específica dentro do sistema de tickets de suporte.';
$string['privacy:metadata:local_helpdesk_category_user'] = 'Informações sobre os usuários atribuídos a categorias de tickets para fins organizacionais e de gestão.';
$string['privacy:metadata:local_helpdesk_response'] = 'Informações sobre as respostas fornecidas aos tickets, incluindo o conteúdo da resposta e o usuário responsável por ela.';
$string['privacy:metadata:local_helpdesk_ticket'] = 'Informações sobre os tickets criados no sistema, incluindo dados do usuário, categoria, status e histórico de respostas.';
$string['privacy:metadata:response_userid'] = 'Identificador único do usuário que forneceu uma resposta a um ticket dentro do sistema de helpdesk.';
$string['privacy:metadata:ticket_userid'] = 'Identificador único do usuário que criou ou gerenciou um ticket no sistema de helpdesk.';
$string['replytoticket'] = 'Responder ao ticket';
$string['report_assignment_reports_page_description'] = 'Relatório sobre a distribuição de tickets e o desempenho dos agentes atribuídos.';
$string['report_assignment_reports_page_title'] = 'Relatórios de Atribuição';
$string['report_assignment_reports_tickets_by_agent_cat_title'] = 'Tickets por Agente';
$string['report_category_reports_most_demanded_categories_cat_title'] = 'Categorias Mais Demandadas';
$string['report_category_reports_page_description'] = 'Relatório sobre categorias de tickets, ajudando a identificar as áreas de suporte mais frequentes e problemas comuns.';
$string['report_category_reports_page_title'] = 'Relatórios de Categorias';
$string['report_general_reports_avg_resolution_time_avg_resolution_time_hours'] = 'Tempo médio de resposta';
$string['report_general_reports_avg_resolution_time_total_tickets'] = 'Total de tickets';
$string['report_general_reports_page_title'] = 'Relatórios Gerais';
$string['report_general_reports_tickets_created_by_period_cat_title'] = 'Tickets Criados por Período';
$string['report_general_reports_tickets_created_by_period_data_criacao'] = 'Data de criação';
$string['report_general_reports_tickets_created_by_period_total_tickets'] = 'Total de tickets';
$string['report_general_reports_tickets_resolved_by_period_cat_title'] = 'Tickets Resolvidos por Período';
$string['report_general_reports_tickets_resolved_by_period_period'] = 'Período';
$string['report_general_reports_tickets_resolved_by_period_total_resolved'] = 'Total de tickets resolvidos';
$string['report_response_reports_avg_responses_per_ticket_media_respostas_por_ticket'] = 'Média de respostas';
$string['report_response_reports_page_description'] = 'Relatório sobre as respostas fornecidas aos tickets, incluindo tempo de resposta e interações do agente.';
$string['report_response_reports_page_title'] = 'Relatórios de Respostas';
$string['report_status_priority_reports_page_description'] = 'Relatório sobre status e prioridade dos tickets, incluindo dados sobre tickets abertos, em progresso, resolvidos e fechados.';
$string['report_status_priority_reports_page_title'] = 'Relatórios de Status e Prioridade';
$string['report_status_priority_reports_priority_distribution_cat_title'] = 'Distribuição de Prioridade';
$string['report_status_priority_reports_tickets_by_status_cat_title'] = 'Tickets por Status';
$string['report_user_reports_avg_response_time_by_user_userid'] = 'ID do Usuário';
$string['report_user_reports_page_description'] = 'Relatório sobre os usuários que criaram mais tickets, incluindo dados sobre o número de tickets e o tempo de resposta associado.';
$string['report_user_reports_page_title'] = 'Relatórios de Usuários';
$string['report_user_reports_users_with_most_tickets_open_cat_title'] = 'Usuários com Mais Tickets Abertos';
$string['savecategory'] = 'Salvar Categoria';
$string['savechanges'] = 'Salvar Alterações';
$string['setting_course'] = 'Mostrar apenas dentro do curso';
$string['setting_knowledgebase_menu_description'] = 'Ativar esta opção para exibir o link da base de conhecimento no menu de navegação.';
$string['setting_knowledgebase_menu_title'] = 'Exibir Base de Conhecimento no Menu';
$string['setting_menu_description'] = 'Selecione se deseja mostrar o menu do HelpDesk no menu do sistema no topo do Moodle.';
$string['setting_menu_title'] = 'Mostrar no menu';
$string['setting_none'] = 'Não mostrar';
$string['setting_system'] = 'Mostrar em todo o sistema';
$string['status'] = 'Status';
$string['status_all'] = 'Todos os tickets';
$string['status_closed'] = 'Fechado';
$string['status_open'] = 'Aberto';
$string['status_progress'] = 'Em Progresso';
$string['status_resolved'] = 'Resolvido';
$string['subject'] = 'Assunto';
$string['ticketcategory'] = 'Categoria do Chamado';
$string['ticketclosed'] = 'O chamado está fechado.';
$string['ticketcreated'] = 'Chamado criado com sucesso';
$string['ticketcreatedat'] = 'Criado em';
$string['ticketdescription'] = 'Descrição detalhada do chamado';
$string['ticketid'] = 'Chamado';
$string['ticketmessage'] = 'Mensagem';
$string['ticketnotfound'] = 'Chamado não encontrado';
$string['ticketpriority'] = 'Prioridade do Chamado';
$string['ticketpriorityhigh'] = 'Alta';
$string['ticketprioritylow'] = 'Baixa';
$string['ticketprioritymedium'] = 'Média';
$string['ticketpriorityurgent'] = 'Urgente';
$string['ticketresponse'] = 'Responder ao chamado';
$string['ticketresponseandclose'] = 'Responder ao chamado e fechar';
$string['ticketresponseandresolved'] = 'Responder ao chamado e resolver';
$string['tickets'] = 'Todos os Chamados';
$string['ticketslist'] = 'Lista de Chamados';
$string['ticketstatus'] = 'Status do Chamado';
$string['ticketstatusclosed'] = 'Fechado';
$string['ticketstatusinprogress'] = 'Em Progresso';
$string['ticketstatusnotclosed'] = 'Todos exceto Fechados';
$string['ticketstatusopen'] = 'Aberto';
$string['ticketstatusresolved'] = 'Resolvido';
$string['ticketsubject'] = 'Assunto do Chamado';
$string['ticketupdated'] = 'Chamado atualizado com sucesso';
$string['updatecategory'] = 'Atualizar Categoria';
$string['userid'] = 'ID do Usuário';
$string['viewticket'] = 'Ver Chamado';
