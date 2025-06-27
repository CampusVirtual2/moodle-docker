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
 * Strings for component 'local_o365', language 'pt_br', version '4.1'.
 *
 * @package     local_o365
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acp_coursesynccustom'] = 'Customização de sincronização do curso';
$string['acp_coursesynccustom_bulk'] = 'Operações em lote';
$string['acp_coursesynccustom_bulk_disable'] = 'Desabilitar sincronização do curso nesta página';
$string['acp_coursesynccustom_bulk_enable'] = 'Habilitar sincronização do curso nesta página';
$string['acp_coursesynccustom_confirm_all_action'] = 'Você tem certeza que quer mudar o status de sincronização de todos os cursos? Esta ação não pode ser desfeita.';
$string['acp_coursesynccustom_controlled_per_course'] = 'Permitir configuração de sincronização no curso';
$string['acp_coursesynccustom_controlled_per_course_desc'] = 'Se habilitado, usuários inscritos em cursos Moodle, que são elegíveis para atuar como donos de Equipe (possuindo "Team owner"[local/o365:temaowner] capability) serão capazes de controlar a sincronização do curso a partir do bloco Microsoft no curso.';
$string['acp_coursesynccustom_disable_all'] = 'Desabilitar sincronização em todos os cursos';
$string['acp_coursesynccustom_enable_all'] = 'Habilitar sincronização em todos os cursos';
$string['acp_coursesynccustom_enabled'] = 'Habilitado';
$string['acp_coursesynccustom_new_course'] = 'Habilitado, padrão para cursos novos';
$string['acp_coursesynccustom_new_course_desc'] = 'Se habilitado, todos os novos cursos criados terão sincronização habilitada por padrão.';
$string['acp_coursesynccustom_off'] = 'Desabilitado<br /> Desabilita a criação de Teams para todos os cursos.';
$string['acp_coursesynccustom_onall'] = 'Todas as funções habilitadas<br />Habilita a criação de Teams para todos os cursos.';
$string['acp_coursesynccustom_oncustom'] = 'Customizar<br />Permite que usuários autorizados selecionem para quais cursos Teams serão criados, permitindo Customizar a sincronização de curso';
$string['acp_coursesynccustom_savemessage'] = 'Alterações salvas.';
$string['acp_coursesynccustom_sds_course'] = 'Bloqueado para curso SDS.';
$string['acp_coursesynccustom_searchwarning'] = 'Nota: As pesquisas irão perder qualquer progresso não salvo. Pressione salvar mudanças para garantir que suas alterações serão salvas.';
$string['acp_coursesynccustom_settings_header'] = 'Opções de sincronização';
$string['acp_healthcheck'] = 'Verificação de integridade';
$string['acp_maintenance'] = 'Ferramentas de manutenção';
$string['acp_maintenance_cleandeltatoken'] = 'Limpar Delta Tokens de Sincronização do usuário';
$string['acp_maintenance_cleandeltatoken_completed'] = 'Delta Token do usuário e Skip Delta Token foram limpos.';
$string['acp_maintenance_cleandeltatoken_desc'] = 'Um Delta Token velho pode causar problemas na sincronização do usuário, fazendo com que seu funcionamento completo seja comprometido após atualizar suas configurações de sincronização do usuário. A limpeza deste token forçará sua remoção em uma próxima sincronização quando esta estiver em execução.';
$string['acp_maintenance_debugdata'] = 'Gerar pacote de dados de depuração';
$string['acp_maintenance_debugdata_desc'] = 'Isso irá gerar um pacote contendo várias informações sobre seu servidor Moodle e também sobre o ambiente Microsoft 365, ajudando os desenvolvedores a solucionar quaisquer problemas que encontrarem. Se solicitado por um desenvolvedor, execute esta ferramenta e envie o arquivo resultante baixado. Nota: Embora este pacote não contenha tokens de dados sensíveis, pedimos que não publique este arquivo publicamente ou o envie para um pessoas não confiáveis.';
$string['acp_maintenance_desc'] = 'Estas ferramentas pode te ajudar a resolver problemas comuns.';
$string['acp_maintenance_recreatedeletedgroups'] = 'Recriar grupos do Microsoft 365 apagados';
$string['acp_maintenance_recreatedeletedgroups_all_groups_exist'] = 'Existem todos os grupos ligados ao curso Moodle e aos grupos de cursos.';
$string['acp_maintenance_recreatedeletedgroups_course'] = 'Curso';
$string['acp_maintenance_recreatedeletedgroups_course_group'] = 'Grupo de curso';
$string['acp_maintenance_recreatedeletedgroups_desc'] = 'Isso irá verificar quaisquer grupos do Microsoft Teams que tenham sido deletados manualmente e irá recriá-los.';
$string['acp_maintenance_recreatedeletedgroups_group_type'] = 'Objeto do tipo Moodle';
$string['acp_maintenance_recreatedeletedgroups_group_type_course'] = 'Curso';
$string['acp_maintenance_recreatedeletedgroups_group_type_course_group'] = 'Grupo de curso';
$string['acp_maintenance_recreatedeletedgroups_status'] = 'Estado';
$string['acp_maintenance_recreatedeletedgroups_status_created_fail'] = 'Recriação de grupo falhou';
$string['acp_maintenance_recreatedeletedgroups_status_created_success'] = 'Grupo recriado';
$string['acp_maintenance_recreatedeletedgroups_status_sync_disabled'] = 'Sincronização de curso desabilitada';
$string['acp_maintenance_resyncgroupusers'] = 'Ressincronizar usuários de grupos do Microsoft 365 nos cursos';
$string['acp_maintenance_resyncgroupusers_course_output'] = 'Saída da ressincronização';
$string['acp_maintenance_resyncgroupusers_desc'] = 'Isso irá ressincronizar a associação do usuário para todos os grupos do Microsoft 365 criados para todos os cursos Moodle. Isso garantirá que todos e apenas os usuários matriculados em um curso Moodle estejam em um grupo do Microsoft 365.<br /><b>Note:</b>Se você tiver adicionado um usuário qualquer(não matriculado no curso Moodle associado) a mais em um Grupo do Microsoft 365, ele será removido.';
$string['acp_maintenance_resyncgroupusers_no_course'] = 'Nenhum curso conectado ao Microsoft 365';
$string['acp_maintenance_warning'] = 'Aviso: Estas são ferramentas avançadas. Por favor, use-as apenas se você tiver entendimento do que esta fazendo.';
$string['acp_parentsite_desc'] = 'Site para dados compartilhados de cursos Moodle.';
$string['acp_parentsite_name'] = 'Moodle';
$string['acp_teamconnection'] = 'Gerenciar conexão da Equipe';
$string['acp_teamconnections'] = 'Gerenciar conexões da Equipe';
$string['acp_teamconnections_actions'] = 'Ações';
$string['acp_teamconnections_cache_last_updated'] = 'O cache do Teams teve sua última atualização em {$a->lastupdated}. Clique <a href="{$a->updateurl}">aqui</a> para atualizar o cache.';
$string['acp_teamconnections_cache_never_updated'] = 'O cache do Teams nunca foi atualizado. Clique <a href="{$a->updateurl}">aqui</a> para atualizar.';
$string['acp_teamconnections_connected_team'] = 'Equipe conectada';
$string['acp_teamconnections_connection_completed'] = 'Conexão bem sucedida entre curso e Equipe.';
$string['acp_teamconnections_course_connected'] = 'A conexão do curso com a Equipe foi realizada com sucesso.';
$string['acp_teamconnections_current_connection'] = 'CONEXÃO ATUAL';
$string['acp_teamconnections_exception_course_not_exist'] = 'O curso a ser conectado não existe.';
$string['acp_teamconnections_exception_invalid_team_id'] = 'ID de Equipe inválido';
$string['acp_teamconnections_exception_no_unified_token'] = 'Falha ao obter token unificado para realizar chamadas a API.';
$string['acp_teamconnections_exception_not_configured'] = 'Microsoft 365 não está completamente configurado.';
$string['acp_teamconnections_exception_team_already_connected'] = 'Este Teams está conectado a outro curso.';
$string['acp_teamconnections_exception_team_creation'] = 'Ocorreu um erro na tentativa de criação de uma Equipe. Detalhes: {$a}';
$string['acp_teamconnections_exception_team_no_owner'] = 'Não foi encontrado nenhum Team owner adequado.';
$string['acp_teamconnections_form_connect_course'] = 'Gerenciar conexão da Equipe para o curso {$a}';
$string['acp_teamconnections_form_sds_warning'] = 'NOTA: A conexão manual entre um curso Moodle e uma Equipe criada por um Student Data Sync (SDS) pode resultar em comportamento inesperado em ambas as sincronizações, portanto, isso deve ser proibido.';
$string['acp_teamconnections_form_team'] = 'Selecionar Equipe';
$string['acp_teamconnections_group_only'] = '(Apenas grupo)';
$string['acp_teamconnections_invalid_connection'] = 'Conexão inválida';
$string['acp_teamconnections_no_owner'] = 'Adicionar donos ao Teams.';
$string['acp_teamconnections_not_connected'] = 'Não conectado';
$string['acp_teamconnections_sync_disabled'] = 'A sincronização do curso precisa ser habilitada antes de se fazer o gerenciamento das conexões Teams.';
$string['acp_teamconnections_table_cannot_create_team_from_group'] = 'Impossível criar uma Equipe de um grupo - sem proprietário';
$string['acp_teamconnections_table_connect'] = 'Conectar';
$string['acp_teamconnections_table_connect_to_different_team'] = 'Conectar com uma Equipe diferente';
$string['acp_teamconnections_table_missing_team'] = 'O curso está conectado a uma equipe inexistente. Tente atualizar o cache dos Teams.';
$string['acp_teamconnections_table_update'] = 'Atualizar';
$string['acp_teamconnections_team_already_connected'] = 'O curso já está conectado a uma Equipe.';
$string['acp_teamconnections_team_created'] = 'Equipe foi criada com sucesso para o curso.';
$string['acp_teamconnections_team_exists_but_not_connected'] = 'O curso está configurado para permitir conexão somente com um Grupo, no entanto, existe uma Equipe conectada ao Grupo.';
$string['acp_teamconnections_team_missing'] = '(Equipe vazia)';
$string['acp_teamconnections_teams_cache_updated'] = 'Cache do Teams atualizado com sucesso.';
$string['acp_tenants_actions'] = 'Ações';
$string['acp_tenants_add'] = 'Adicionar novo locatário';
$string['acp_tenants_additional_tenants'] = 'Locatários adicionais';
$string['acp_tenants_delete'] = 'Apagar';
$string['acp_tenants_errornotsetup'] = 'Por favor, complete o processo de configuração do plugin antes de adicionar locatários adicionais.';
$string['acp_tenants_hosttenant'] = 'Locatário anfitrião: {$a}';
$string['acp_tenants_intro'] = '<b>Como funciona a multilocação:<b><br />A multilocação permite que vários locatários do Microsoft 365 acessem seu site do Moodle.<br /><br />
Veja como configurar:
<ol>
<li>Faça login no Moodle como um usuário administrador do site que não está usando o plug-in de autenticação OpenID Connect.</li>
<li>Verifique se as configurações de Ponto de Extremidade de <b>Autorização e Ponto de Extremidade</b> de <b>Token</b> do plug-in de autenticação do OpenID Connect estão usando as configurações específicas padrão de não locatário.</li>
<li>Desative o plug-in de autenticação OpenID Connect no Moodle. (Use <a href="{$a}/admin/settings.php?section=manageauths">a página de administração de plugins de autenticação</a>.)</li>
<li>Navegue até o Azure AD e localize o aplicativo que você configurou para o Moodle.</li>
<li>Habilite a multilocação no aplicativo Azure AD e salve as alterações.</li>
<li>Conceda pelo menos uma das seguintes permissões delegadas de gráfico ao aplicativo: Directory.Read.All, Domain.Read.All ou <b>Domain.ReadWrite.All</b><b>.</b><b></b> O consentimento do administrador para a sua organização não é necessário.</li>
<li>Se você já estiver conectado usando sua conta da Microsoft do locatário adicional, faça logout completamente e logon novamente.</li>
<li>Para cada locatário que você deseja habilitar, clique em "Adicionar Novo Locatário" e faça logon com uma conta de administrador do locatário que você deseja habilitar.</li>
<li>Depois de adicionar todos os locatários desejados, reative o plug-in de autenticação OpenID Connect no Moodle.</li>
<li>Fim! Para adicionar mais locatários posteriormente, basta clicar no botão "Adicionar novo locatário" e fazer login com uma conta de administrador desse locatário.</li>
</ol>
<b>Observação importante:</b> A multilocação do Azure AD permite que todos os locatários do Microsoft 365 acessem seu aplicativo quando habilitado. Adicionar os locatários aqui nos permite restringir o acesso do Moodle aos locatários que você configurar. <b>Se você remover todos os locatários dessa lista antes de desabilitar a multilocação no Azure AD ou habilitar a autenticação do OpenID Connect no Moodle com uma lista vazia, seu site do Moodle estará aberto para todos os locatários do Microsoft 365.</b>';
$string['acp_tenants_legacy_tenants'] = 'Locatários legados (ação requerida)';
$string['acp_tenants_legacy_tenants_help'] = 'Os locatários adicionais abaixo adicionados anteriormente podem não funcionar no fluxo de trabalho de multilocação atualizado e precisam ser corrigidos.<br/>
Use o botão "Adicionar novo locatário" acima para adicionar novamente.';
$string['acp_tenants_none'] = 'Você não tem nenhum locatário configurado. Se você tiver habilitado a multilocação no Azure AD, seu site Moodle pode estar aberto para todos os usuários do Microsoft 365.';
$string['acp_tenants_revokeaccess'] = 'Acesso revogado';
$string['acp_tenants_tenant'] = 'Locatário';
$string['acp_tenants_title'] = 'Multilocação';
$string['acp_tenants_title_desc'] = 'Esta página ajuda você a configurar o acesso de multilocação ao Moodle a partir do Microsoft 365.';
$string['acp_tenantsadd_desc'] = 'Para garantir acesso a um locatário adicional, clique no botão abaixo e faça log in no Microsoft 365 usando uma conta de administrador do novo locatário. Você obterá como retorno uma lista com os locatários adicionais, onde o novo locatário será listado. Então, você será capaz de usar o Moodle com o novo locatário.';
$string['acp_tenantsadd_linktext'] = 'Seguir para a página de login do Microsoft 365';
$string['acp_userconnections'] = 'Gerenciar conexões dos usuários';
$string['acp_userconnections_column_actions'] = 'Ações';
$string['acp_userconnections_column_muser'] = 'Usuário Moodle';
$string['acp_userconnections_column_o365user'] = 'Usuário Micrososft 365';
$string['acp_userconnections_column_status'] = 'Status da conexão';
$string['acp_userconnections_column_usinglogin'] = 'Usando Login';
$string['acp_userconnections_filtering_muserfullname'] = 'Nome completo do usuário Moodle';
$string['acp_userconnections_filtering_musername'] = 'Nome de usuário Moodle';
$string['acp_userconnections_filtering_o365username'] = 'Nome de usuário do Microsoft 365';
$string['acp_userconnections_manualmatch_details'] = 'Esta página permite que você vincule um usuário do Moodle com um usuário do Microsoft 365.';
$string['acp_userconnections_manualmatch_error_muserconnected'] = 'O usuário Moodle já está conectado a um usuário Microsoft 365';
$string['acp_userconnections_manualmatch_error_muserconnected2'] = 'O usuário Moodle já está conectado a um usuário Microsoft 365 (2)';
$string['acp_userconnections_manualmatch_error_musermatched'] = 'O usuário Moodle já está vinculado a um usuário Microsoft 365';
$string['acp_userconnections_manualmatch_error_o365userconnected'] = 'O usuário Microsoft 365 já está conectado a outro usuário Moodle';
$string['acp_userconnections_manualmatch_error_o365usermatched'] = 'O usuário Microsoft 365 já está vinculado a outro usuário Moodle';
$string['acp_userconnections_manualmatch_musername'] = 'Usuário Moodle';
$string['acp_userconnections_manualmatch_o365username'] = 'Nome de usuário Microsoft 365';
$string['acp_userconnections_manualmatch_title'] = 'Vincular usuário manualmente';
$string['acp_userconnections_manualmatch_uselogin'] = 'Faça logon com o Microsoft 365';
$string['acp_userconnections_resync_nodata'] = 'Não foi encontrada nenhuma informação armazenada para este usuário';
$string['acp_userconnections_resync_notconnected'] = 'Este usuário não está conectado ao Microsoft 365';
$string['acp_userconnections_table_connected'] = 'Conectado';
$string['acp_userconnections_table_disconnect'] = 'Desconectado';
$string['acp_userconnections_table_disconnect_confirmmsg'] = 'Isto irá desconectar o usuário Moodle "{$a}" do Microsoft 365. Clique no link abaixo para prosseguir.';
$string['acp_userconnections_table_match'] = 'Vincular';
$string['acp_userconnections_table_matched'] = 'Vinculado com o usuário existente.<br />Aguardando conclusão.';
$string['acp_userconnections_table_noconnection'] = 'Sem conexão';
$string['acp_userconnections_table_resync'] = 'Sincronizar novamente';
$string['acp_userconnections_table_synced'] = 'Sincronizado a partir do Azure AD.<br />Esperando logon inicial.';
$string['acp_userconnections_table_unmatch'] = 'Desvincular';
$string['acp_userconnections_table_unmatch_confirmmsg'] = 'Isto irá desvincular o usuário Moodle "{$a}" do Microsoft 365. Clique no link abaixo para prosseguir.';
$string['acp_usermatch'] = 'Vinculando usuário';
$string['acp_usermatch_desc'] = 'Esta ferramenta permite que você associe usuários Moodle com usuários Microsoft 365. Você irá carregar um arquivo contendo os usuários Moodle e usuários do Microsoft 365 vinculados, e uma tarefa cron vai verificar os dados e configurar a vinculação.';
$string['acp_usermatch_matchqueue'] = 'Passo 2: Vínculo enfileirado';
$string['acp_usermatch_matchqueue_clearall'] = 'Limpar tudo';
$string['acp_usermatch_matchqueue_clearerrors'] = 'Limpar erros';
$string['acp_usermatch_matchqueue_clearqueued'] = 'Limpar fila';
$string['acp_usermatch_matchqueue_clearsuccess'] = 'Limpeza realizada com sucesso';
$string['acp_usermatch_matchqueue_column_muser'] = 'Nome de usuário Moodle';
$string['acp_usermatch_matchqueue_column_o365user'] = 'Nome de usuário Microsoft 365';
$string['acp_usermatch_matchqueue_column_openidconnect'] = 'OpenID conectado';
$string['acp_usermatch_matchqueue_column_status'] = 'Status';
$string['acp_usermatch_matchqueue_desc'] = 'Esta tabela mostra o status atual da operação de vinculação. Toda vez que a tarefa agendada da <b>Fila de Processos de Vinculação</b> for executada, um lote com os usuários será processado.<br /><b>Note:</b> Esta página não será atualizada automaticamente, recarregue a página para ver o status atual.';
$string['acp_usermatch_matchqueue_empty'] = 'A fila de vinculação está atualmente vazia. Carregue um arquivo de dados usando o file picker acima para adicionar usuários à fila.';
$string['acp_usermatch_matchqueue_status_error'] = 'Erro: {$a}';
$string['acp_usermatch_matchqueue_status_queued'] = 'Enfileirado';
$string['acp_usermatch_matchqueue_status_success'] = 'Bem-sucedido';
$string['acp_usermatch_upload'] = 'Passo 1: Carregar novos vínculos';
$string['acp_usermatch_upload_desc'] = 'Carregue um arquivo de dados contendo nomes de usuário do Moodle e Microsoft 365 para vincular usuários do Moodle a usuários do Microsoft 365.<br />
<br />
Esse arquivo deve ser um arquivo CSV de texto simples contendo três itens por linha:
<ul>
<li>o nome de usuário do Moodle,</li>
<li>o nome de usuário do Microsoft 365,</li>
<li>1 ou 0, enquanto 1 significa alterar o método de autenticação do usuário para OpenID Connect e 0 significa manter o método de autenticação existente e usá-lo como uma conta vinculada.</li>
</ul>
Não inclua cabeçalhos ou dados adicionais.<br />
Por exemplo: <pre>moodleuser1,bob.smith@example.onmicrosoft.com,1<br />moodleuser2,john.doe@example.onmicrosoft.com,0</pre>';
$string['acp_usermatch_upload_err_badmime'] = 'O tipo {$a} não é suportado. Por favor, carregue um arquivo CSV de texto simples.';
$string['acp_usermatch_upload_err_data'] = 'A linha #{$a} contém dados inválidos. Cada linha no arquivo CSV deve ter dois itens: O nome de usuário Moodle e o nome de usuário Microsoft 365.';
$string['acp_usermatch_upload_err_fileopen'] = 'Não foi possível abrir o arquivo para processamento. As permissões de seu diretório Moodledata estão configuradas corretamente?';
$string['acp_usermatch_upload_err_nofile'] = 'Nenhum arquivo foi recebido para ser adicionado a fila.';
$string['acp_usermatch_upload_submit'] = 'Adicionar arquivo de dados à fila de vinculação';
$string['assignment'] = 'Tarefa';
$string['cachedef_groups'] = 'Armazena os dados do grupo Microsoft 365';
$string['calendar_event'] = 'Ver detalhes';
$string['calendar_setting'] = 'Habilitar sincronização de calendário do Outlook';
$string['calendar_site'] = 'Celendário do site';
$string['calendar_user'] = 'Calendário pessoal (usuário)';
$string['course_assignment_submitted_due'] = 'Curso - {$a->course} &nbsp; |  &nbsp; atribuído -{$a->assignment} <br />
       Enviado para - {$a->submittedon} &nbsp; |  &nbsp; Data de vencimento - {$a->duedate}';
$string['course_selector_label'] = 'Selecionar curso existente';
$string['due_date'] = 'Data de vencimento - {$a}';
$string['error_missing_app_id'] = 'Configuração de ID do aplicativo ausente.';
$string['error_missing_bot_settings'] = 'O recurso Bot está habilitado, mas as configurações do bot estão ausentes.';
$string['erroracpapcantgettenant'] = 'Não foi possível obter o locatário do Azure AD, por favor, insira-o manualmente.';
$string['erroracpauthoidcnotconfig'] = 'Por favor, configure primeiro as credenciais da aplicação em auth_oidc.';
$string['erroracpcantgettenant'] = 'Não foi possível obter a URL do OneDrive, por favor, insira manualmente.';
$string['erroracplocalo365notconfig'] = 'Por favor, configure local_o365 primeiro.';
$string['errorchecksystemapiuser'] = 'Não foi possível obter o token de usuário da API do sistema por favor execute a verificação de integridade, garanta que seu cron do Moodle está em execução e recarregue o usuário da API do sistema, se necessário.';
$string['errorcouldnotrefreshtoken'] = 'Não foi possível recarregar o token';
$string['errorhttpclientbadtempfileloc'] = 'Não foi possível abrir o diretório temporário para armazenar o arquivo.';
$string['errorhttpclientnofileinput'] = 'Nenhum parâmetro de arquivo em httpclient::put';
$string['errornodirectaccess'] = 'O acesso direto a página é proibido';
$string['erroro365apibadcall'] = 'Erro na chamada da API.';
$string['erroro365apibadcall_message'] = 'Erro na chamada da API: {$a}';
$string['erroro365apibadpermission'] = 'Permissão não encontrada';
$string['erroro365apicouldnotcreatesite'] = 'Problema ao criar site.';
$string['erroro365apicoursenotfound'] = 'Curso não encontrado.';
$string['erroro365apiinvalidmethod'] = 'httpmethod inválido passado ao apicall';
$string['erroro365apiinvalidtoken'] = 'Token inválido ou expirado.';
$string['erroro365apinoparentinfo'] = 'Não foi possível localizar informações da pasta pai';
$string['erroro365apinotimplemented'] = 'Isso deve ser substituído.';
$string['erroro365apinotoken'] = 'Não tinha um token para o determinado recurso e usuário, e não foi possível obter um. O token de atualização do usuário expirou?';
$string['erroro365apisiteexistsnolocal'] = 'O site já existe, mas não foi possível encontrar seu registro local.';
$string['errorprovisioningapp'] = 'Não foi possível alimentar o aplicativo Moodle no Time.';
$string['errorusermatched'] = 'A conta do Microsoft 365 "{$a->aadupn}" já é correspondente com o usuário do Moodle "{$a->username}". Para concluir a conexão, faça login como usuário do Moodle primeiro e siga as instruções no bloco da Microsoft.';
$string['eventapifail'] = 'Falha de API';
$string['eventcalendarsubscribed'] = 'Usuário inscrito ao calendário';
$string['eventcalendarunsubscribed'] = 'Usuário desinscrito ao calendário';
$string['grade_date'] = 'Nota - {$a->grade} &nbsp; | &nbsp; Data - {$a->date}';
$string['healthcheck_fixlink'] = 'Clique aqui para consertar.';
$string['healthcheck_ratelimit_result_disabled'] = 'Os recursos de limitação de taxa foram desabilitados.';
$string['healthcheck_ratelimit_result_notice'] = 'Uma ligeira limitação foi habilitada para lidar com o aumento de carga do Moodle. <br /><br />Todos os recursos do Microsoft 365 são funcionais, isso apenas espaça ligeiramente as solicitações para evitar a interrupção dos serviços do Microsoft 365. Quando a atividade do Moodle for reduzida, tudo voltará ao normal. <br />(Level {$a->level} / iniciado {$a->timestart})';
$string['healthcheck_ratelimit_result_passed'] = 'Chamadas de API do Microsoft 365 estão sendo executadas em sua velocidade máxima.';
$string['healthcheck_ratelimit_result_warning'] = 'O aumento da limitação foi habilitado para lidar com a carga do Moodle. <br /><br />Todos os recursos do Microsoft 365 ainda estão funcionais, mas as solicitações do Microsoft 365 podem levar mais tempo para serem concluídas. Assim que a atividade do Moodle for reduzida, tudo voltará ao normal. <br />(Level {$a->level} / iniciado {$a->timestart})';
$string['healthcheck_ratelimit_title'] = 'Limitação de API';
$string['healthcheck_systemapiuser_title'] = 'Sistema de API de usuário';
$string['healthcheck_systemtoken_result_badtoken'] = 'Houve um problema de comunicação com o Microsoft 365 como usuário da API do sistema. Normalmente, isso pode ser resolvido ao redefinir o usuário da API do sistema.';
$string['healthcheck_systemtoken_result_noclientcreds'] = 'Não há credenciais da aplicação presente no plugin OpenID Connect. Sem essas credenciais, o Moodle não pode se comunicar com o Microsoft 365. Clique aqui para visitar a página de configurações e inserir suas credenciais.';
$string['healthcheck_systemtoken_result_notoken'] = 'O Moodle não tem um token para se comunicar com o Microsoft 365 como usuário da API do sistema. Isso geralmente pode ser resolvido redefinindo o usuário da API do sistema.';
$string['healthcheck_systemtoken_result_passed'] = 'O Moodle pode se comunicar com o Microsoft 365 como usuário da API do sistema.';
$string['help_message'] = 'Olá! Eu sou seu assistente no Moodle. Você pode me fazer as seguintes perguntas:';
$string['help_user_appassign'] = 'Associar usuários à Ajuda do aplicativo';
