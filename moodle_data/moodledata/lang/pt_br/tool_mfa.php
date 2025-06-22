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
 * Strings for component 'tool_mfa', language 'pt_br', version '4.1'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Peso alcançado';
$string['alltime'] = 'Tempo integral';
$string['areyousure'] = 'Tem certeza de que deseja revogar o fator?';
$string['combination'] = 'Combinação';
$string['connector'] = 'E';
$string['created'] = 'Criado';
$string['createdfromip'] = 'Criado a partir do IP';
$string['debugmode:currentweight'] = 'Peso atual: {$a}';
$string['debugmode:heading'] = 'Modo de depuração';
$string['devicename'] = 'Dispositivo';
$string['email:subject'] = 'Não foi possível fazer login em {$a}';
$string['enablefactor'] = 'Habilitar fator';
$string['error:actionnotfound'] = 'A ação "{$a}" não é suportada';
$string['error:directaccess'] = 'Esta página não deve ser acessada diretamente';
$string['error:factornotenabled'] = 'Fator MFA "{$a}" não ativado';
$string['error:factornotfound'] = 'Fator MFA "{$a}" não encontrado';
$string['error:home'] = 'Clique aqui para voltar à página inicial.';
$string['error:notenoughfactors'] = 'Não é possível autenticar';
$string['error:reauth'] = 'Não conseguimos confirmar sua identidade suficientemente para atender à política de segurança de autenticação deste site.<br>Isso pode ser devido a: <br> 1) Etapas bloqueadas - aguarde alguns minutos e tente novamente.
     <br> 2) Etapas falhadas - verifique os detalhes em cada etapa. <br> 3) Etapas puladas - recarregue esta página ou tente fazer login novamente.';
$string['error:revoke'] = 'Não é possível revogar o fator';
$string['error:setupfactor'] = 'Não é possível configurar o fator';
$string['error:support'] = 'Se você ainda não conseguir fazer login ou acreditar que isso seja um erro,
     envie um e-mail para o seguinte endereço para obter suporte:';
$string['error:wrongfactorid'] = 'ID do fator "{$a}" está incorreto';
$string['event:failfactor'] = 'Autenticação MFA falhou devido a um fator com falha.';
$string['event:faillockout'] = 'Autenticação MFA falhou devido a muitas tentativas.';
$string['event:failnotenoughfactors'] = 'Autenticação MFA falhou devido a fatores insuficientes satisfeitos.';
$string['event:userdeletedfactor'] = 'Fator excluído';
$string['event:userfailedmfa'] = 'Usuário falhou na autenticação MFA';
$string['event:userpassedmfa'] = 'Verificação aprovada';
$string['event:userrevokedfactor'] = 'Revogação do fator';
$string['event:usersetupfactor'] = 'Configuração do fator';
$string['factor'] = 'Fator';
$string['factorlocked'] = 'O fator "{$a}" foi bloqueado devido a tentativas falhas excedidas.';
$string['factorreport'] = 'Relatório de todos os fatores';
$string['factorreset'] = 'Seu MFA "{$a->factor}" foi redefinido por um administrador do site. Talvez seja necessário configurar esse fator novamente. {$a->url}';
$string['factorresetall'] = 'Todos os seus fatores MFA foram redefinidos por um administrador do site. Talvez seja necessário configurar esses fatores novamente. {$a}';
$string['factorrevoked'] = 'Fator "{$a}" revogado com sucesso.';
$string['factorsetup'] = 'Fator "{$a}" configurado com sucesso.';
$string['fallback'] = 'Fator de contingência';
$string['fallback_info'] = 'Este fator é um fallback se nenhum outro fator estiver configurado. Este fator sempre falhará.';
$string['gotourl'] = 'Acesse seu URL original:';
$string['guidance'] = 'Guia do usuário MFA';
$string['inputrequired'] = 'Entrada do usuário';
$string['ipatcreation'] = 'Endereço IP quando o fator foi criado';
$string['lastverified'] = 'Última verificação';
$string['lockedusersforallfactors'] = 'Usuários bloqueados: Todos os fatores';
$string['lockedusersforfactor'] = 'Usuários bloqueados: {$a}';
$string['lockoutnotification'] = 'Você tem {$a} tentativas de verificação restantes para este fator.';
$string['lookbackperiod'] = 'Mostrando informações do MFA a partir de {$a}.';
$string['mfa'] = 'MFA';
$string['mfa:mfaaccess'] = 'Interagir com MFA';
$string['mfareports'] = 'Relatórios de MFA';
$string['mfasettings'] = 'Gerenciar MFA';
$string['na'] = 'n/d';
$string['needhelp'] = 'Precisa de ajuda?';
$string['nologinusers'] = 'Não está logado';
$string['nonauthusers'] = 'MFA pendente';
$string['overall'] = 'Global';
$string['pending'] = 'Pendente';
$string['performbulk'] = 'Ação em lote';
$string['pluginname'] = 'Autenticação multifatorial';
$string['preferences:activefactors'] = 'Fatores ativos';
$string['preferences:availablefactors'] = 'Fatores disponíveis';
$string['preferences:header'] = 'Preferências de múltiplo fator de autenticação';
$string['preferenceslink'] = 'Clique aqui para ir para as preferências do usuário.';
$string['privacy:metadata:tool_mfa'] = 'Dados com fatores MFA configurados';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP de onde o fator foi configurado';
$string['privacy:metadata:tool_mfa:factor'] = 'Tipo de fator';
$string['privacy:metadata:tool_mfa:id'] = 'ID do registro';
$string['privacy:metadata:tool_mfa:label'] = 'Rótulo para a instância do fator, por exemplo, dispositivo ou e-mail';
$string['privacy:metadata:tool_mfa:lastverified'] = 'O horário em que o usuário foi verificado pela última vez com esse fator';
$string['privacy:metadata:tool_mfa:secret'] = 'Qualquer dado secreto para o fator';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Hora em que a instância do fator foi configurada';
$string['privacy:metadata:tool_mfa:timemodified'] = 'O horário que o fator foi modificado pela última vez';
$string['privacy:metadata:tool_mfa:userid'] = 'ID do usuário a quem pertence esse fator';
$string['privacy:metadata:tool_mfa_auth'] = 'Esta tabela do banco de dados armazena a última vez que uma autenticação MFA bem-sucedida foi registrada para um ID de usuário.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'O horário em que o usuário foi autenticado pela última vez com';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'O usuário a quem este registro de data e hora está associado.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Esta tabela do banco de dados armazena segredos temporários para autenticação do usuário.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'O fator a que este segredo está associado.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'O código de segurança secreto.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'O sessionid associado a este segredo.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'O usuário a quem este segredo está associado.';
$string['redirecterrordetected'] = 'Detectado redirecionamento não suportado, execução do script encerrada. Ocorreu um erro de redirecionamento entre MFA e {$a}.';
$string['resetconfirm'] = 'Resetar fator do usuário';
$string['resetfactor'] = 'Resetar fatores de autenticação do usuário';
$string['resetfactorconfirm'] = 'Tem certeza de que deseja redefinir este fator para {$a}?';
$string['resetfactorplaceholder'] = 'Nome de usuário ou e-mail';
$string['resetsuccess'] = 'Fator "{$a->factor}" redefinido com sucesso para o usuário "{$a->username}".';
$string['resetsuccessbulk'] = 'Fator "{$a}" redefinido com sucesso para os usuários fornecidos.';
$string['resetuser'] = 'Usuário:';
$string['revoke'] = 'Revogar';
$string['revokefactor'] = 'Revogar fator';
$string['selectfactor'] = 'Selecionar fator para redefinir:';
$string['selectperiod'] = 'Selecione um período de retrospecto para o relatório:';
$string['settings:combinations'] = 'Resumo das boas condições para o login';
$string['settings:debugmode'] = 'Habilitar modo de depuração';
$string['settings:debugmode_help'] = 'O modo de depuração exibirá um pequeno banner de notificação nas páginas de administração do MFA, bem como na página de preferências do usuário, com informações sobre os fatores atualmente habilitados.';
$string['settings:duration'] = 'Duração de validade do segredo';
$string['settings:duration_help'] = 'A duração que os segredos gerados são válidos.';
$string['settings:enabled'] = 'Plugin MFA habilitado';
$string['settings:enablefactor'] = 'Habilitar fator';
$string['settings:enablefactor_help'] = 'Marque este controle para permitir que o fator seja usado para autenticação MFA.';
$string['settings:general'] = 'Configurações gerais do MFA';
$string['settings:guidancecheck'] = 'Usar página de orientação';
$string['settings:guidancecheck_help'] = 'Adicionar um link para a página de orientação nas páginas de autenticação MFA e na página de preferências do MFA.';
$string['settings:guidancefiles'] = 'Arquivos da página de orientação';
$string['settings:guidancefiles_help'] = 'Adicione aqui qualquer arquivo para usar na página de informação e incorpore-o na página usando {{filename}} (caminho resolvido) ou {{{filename}}} (link HTML) no editor';
$string['settings:guidancepage'] = 'Conteúdo da página de orientação';
$string['settings:guidancepage_help'] = 'O HTML aqui será exibido na página de informação. Insira nomes de arquivo da área de arquivo para incorporar o arquivo com o caminho resolvido {{filename}} ou como um link HTML usando {{{filename}}}.';
$string['settings:lockout'] = 'Limite de bloqueio';
$string['settings:lockout_help'] = 'Quantidade de tentativas que um usuário tem para responder aos fatores de entrada antes de não ser mais permitido o login.';
$string['settings:redir_exclusions'] = 'URLs que não devem redirecionar a verificação do MFA';
$string['settings:redir_exclusions_help'] = 'Cada nova linha é um URL relativo à raiz do site para o qual a verificação do MFA não será redirecionada, por exemplo, /admin/tool/securityquestions/set_responses.php';
$string['settings:weight'] = 'Peso do fator';
$string['settings:weight_help'] = 'O peso deste fator se aprovado. Um usuário precisa de pelo menos 100 pontos para fazer login.';
$string['setup'] = 'Configuração';
$string['setupfactor'] = 'Configurar fator';
$string['setuprequired'] = 'Configuração do usuário';
$string['state:fail'] = 'Falha';
$string['state:locked'] = 'Bloqueado';
$string['state:neutral'] = 'Neutro';
$string['state:pass'] = 'Aprovar';
$string['state:unknown'] = 'Desconhecido';
$string['totalusers'] = 'Total de usuários';
$string['totalweight'] = 'Peso total';
$string['userempty'] = 'O usuário não pode estar vazio.';
$string['userlogs'] = 'Logs do usuário';
$string['usernotfound'] = 'Não é possível localizar o usuário.';
$string['usersauthedinperiod'] = 'Logado';
$string['verificationcode'] = 'Digite o código de verificação para confirmação';
$string['verificationcode_help'] = 'O código de verificação fornecido pelo fator de autenticação atual.';
$string['viewlockedusers'] = 'Ver usuários bloqueados';
$string['weight'] = 'Peso';
