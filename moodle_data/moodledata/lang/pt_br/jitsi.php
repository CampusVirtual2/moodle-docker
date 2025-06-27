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
 * Strings for component 'jitsi', language 'pt_br', version '4.1'.
 *
 * @package     jitsi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Acessar Jitsi';
$string['accessto'] = 'Acesso a {$a}. Digite o nome a ser mostrado.';
$string['accesstotitle'] = 'Acesso a {$a}';
$string['accesstowithlogin'] = 'Acesso a {$a}.';
$string['account'] = 'Conta';
$string['accountconnected'] = 'Conta conectada com sucesso e colocada <b>em uso</b>.';
$string['accountinsufficientprivileges'] = 'A conta de transmissão configurada tem privilégios insuficientes. Entre em contato com o administrador.';
$string['accounts'] = 'Contas de Transmissão/Gravação';
$string['activatetooltip'] = 'Clique para colocar em uso';
$string['addaccount'] = 'Adicionar conta';
$string['addedtoqueue'] = 'Adicionado à fila';
$string['addtoqueue'] = 'Adicionar à fila';
$string['adminaccountex'] = 'É necessário pelo menos uma conta para transmitir/gravar sessões com o método "Moodle integrado" para streaming.
 </br>Apenas uma conta pode estar "<b>em uso</b>" e será usada para transmitir/gravar a próxima gravação solicitada por um professor.
 </br>Ao adicionar novas contas, é recomendável <b>nomeá-las com nomes reais de contas</b> porque no futuro pode ser necessário fazer login novamente para reautorizar a conta.
 </br>Apenas contas sem gravações relacionadas às atividades do Jitsi do professor e sem gravações pendentes para exclusão dos servidores de streaming podem ser removidas aqui usando o ícone de lixeira.
 </br>Novas contas sem credenciais podem aparecer aqui quando os backups de atividades do Jitsi de outro servidor forem restaurados neste com contas que não estavam presentes aqui.
 </br></br>NOVIDADE a partir da v3.3.3: uma nova coluna chamada "Na fila" permite usar todos os seus gravadores em rodízio. Você pode adicionar gravadores à fila clicando em "<b>+</b>" e removê-los da fila clicando em "<b>-</b>". Quando um gravador foi usado porque era o gravador "<b>em uso</b>" (ou o próximo a ser usado), a marcação "Em uso" será atribuída ao próximo gravador na fila. Este recurso permite que você use vários gravadores para evitar os limites de cota do YouTube, como o número de transmissões ao vivo permitidas por dia.';
$string['alertacceswithlogin'] = 'Você está acessando através de um link externo e está logado, por favor, acesse a partir do curso.';
$string['alias'] = 'Apelido';
$string['allow'] = 'Iniciar videoconferência';
$string['allowbreakoutrooms'] = 'Permitir salas de grupos';
$string['allowbreakoutroomsex'] = 'Permitir a criação de salas de grupos. O servidor precisa estar configurado para permitir salas de grupos.';
$string['apikeyid8x8'] = 'ID da Chave de API';
$string['apikeyid8x8ex'] = 'ID da Chave de API para usar com o servidor 8x8. Você pode obtê-lo na administração do servidor 8x8. (https://jaas.8x8.com/)';
$string['appaccessinfo'] = 'Se você quiser participar da reunião usando um dispositivo móvel, precisará do aplicativo móvel Jitsi Meet.';
$string['appid'] = 'App_ID';
$string['appidex'] = 'App ID para configuração de token';
$string['appinstalledtext'] = 'Se você já tem o aplicativo:';
$string['appnotinstalledtext'] = 'Se você ainda não tem o aplicativo:';
$string['attendeesreport'] = 'Relatório de participantes';
$string['authq'] = 'Entrar com esta conta para obter credenciais e colocá-la "em uso"?';
$string['blurbutton'] = 'Mostrar opções de fundo';
$string['blurbuttonex'] = 'Mostrar opções de fundo';
$string['buttondownloadapp'] = 'Baixar aplicativo';
$string['buttonopeninbrowser'] = 'Abrir no navegador';
$string['buttonopenwithapp'] = 'Participar desta reunião usando o aplicativo';
$string['calendarstart'] = 'A videoconferência \'{$a}\' começa';
$string['click'] = 'Clique';
$string['close'] = 'Encerrar a videoconferência';
$string['closebeforeopen'] = 'Não foi possível atualizar a sessão. Você especificou uma data de encerramento anterior à data de início.';
$string['completiondetail:minutes'] = 'Participar de {$a} minutos';
$string['completionminutesex'] = 'Minutos para participar';
$string['config'] = 'Configuração';
$string['confignewexpirationtime'] = 'Configurar novo tempo de expiração nas configurações';
$string['confirmdeleterecordinactivity'] = 'Confirme se deseja excluir esta gravação. Esta operação não pode ser desfeita.';
$string['connectedattendeesnow'] = 'Participantes conectados agora';
$string['copied'] = 'Link copiado para a área de transferência';
$string['crontaskdelete'] = 'Excluir gravações';
$string['deeplink'] = 'Link Direto';
$string['deeplinkex'] = 'Quando no aplicativo Moodle, permite transferir sessões do Jitsi para o aplicativo Jitsi.';
$string['deleteq'] = 'Excluir e desconectar esta conta?';
$string['deleterecord'] = 'Excluir registro';
$string['deletesourceq'] = 'Você tem certeza? A gravação será permanentemente excluída do servidor de vídeo e não poderá ser recuperada';
$string['deletesources'] = 'Gravações disponíveis para excluir';
$string['deletetooltip'] = 'Excluir';
$string['deprecated'] = 'Obsoleto';
$string['deprecatedex'] = 'Parâmetros obsoletos que provavelmente não funcionarão porque o Jitsi Meet alterou sua implementação';
$string['desktopaccessinfo'] = 'Se você quer entrar em uma reunião, clique no botão abaixo para abrir a Jitsi no seu navegador.';
$string['domain'] = 'Domínio';
$string['domainex'] = 'Domínio do servidor Jitsi a ser utilizado. O servidor padrão (<b>meet.jit.si</b>) tem um limite de tempo de 5 minutos por conferência.
 Você pode buscar no Google por servidores Jitsi públicos alternativos que possam ser mais próximos de seus usuários e com menor latência.
 Se você tiver seu próprio servidor Jitsi privado, informe-o aqui sem "https://".
 O servidor profissional 8x8 costuma ser (<b>8x8.vc</b>) e requer a configuração de suas credenciais na seção "Configuração de Token" abaixo.';
$string['editrecordname'] = 'Editar nome do registro';
$string['entersession'] = 'Entrar na sessão';
$string['error'] = 'Erro';
$string['errordeleting'] = 'Erro ao excluir';
$string['experimental'] = 'Experimental';
$string['experimentalex'] = 'Estas são opções que estamos experimentando e que podem desaparecer em versões futuras.';
$string['externalinvitations'] = 'Convites externos';
$string['externaltoken'] = 'Token externo';
$string['externaltoken_help'] = 'Use este link para convidados que não têm um usuário Moodle para acessar.';
$string['finish'] = 'A sessão terminou.';
$string['finishandreturn'] = 'Terminar e retornar';
$string['finishandreturnex'] = 'Retornar ao curso ao finalizar a sessão. Usando usuários públicos do Jitsi, retornar ao curso quando fecharem a publicidade.';
$string['finishinvitation'] = 'O link de convite expirará em';
$string['forkids'] = 'Para crianças';
$string['forkidsex'] = 'As gravações serão consideradas criadas para crianças.';
$string['guestform'] = 'Entrar no formulário de convidado.';
$string['hasentered'] = 'entrou na sua sessão privada do Jitsi';
$string['help'] = 'Ajuda';
$string['helpex'] = 'Texto de instrução para ser mostrado na atividade jitsi';
$string['here'] = 'aqui';
$string['identification'] = 'ID do usuário';
$string['identificationex'] = 'ID a ser mostrado na sessão';
$string['inqueue'] = 'Em fila';
$string['instruction'] = 'Clique no botão para acessar';
$string['integrated'] = 'Integrado ao Moodle';
$string['internalerror'] = 'Erro interno. Contate o administrador.';
$string['inuse'] = '<b>(em uso)</b>';
$string['invitations'] = 'Convites';
$string['invitationsnotactivated'] = 'O convite não está ativado';
$string['invitebutton'] = 'Opções de convite';
$string['invitebuttonex'] = 'Permitir que usuários com a capacidade mod/jitsi:createlink (professores) criem links de convite para usuários não matriculados no curso.';
$string['iscalling'] = 'está chamando você para entrar no seu Jitsi privado';
$string['jitsi'] = 'Jitsi';
$string['jitsi:addinstance'] = 'Adicionar uma nova Jitsi';
$string['jitsi:createlink'] = 'Visualizar e copiar links de convite para usuários convidados';
$string['jitsi:deleterecord'] = 'Excluir registro';
$string['jitsi:editrecordname'] = 'Editar nome do registro';
$string['jitsi:hide'] = 'Ocultar gravações';
$string['jitsi:moderation'] = 'Moderação da Jitisi';
$string['jitsi:record'] = 'Gravar sessão';
$string['jitsi:sharedesktop'] = 'Compatilhar tela ou ecrã';
$string['jitsi:view'] = 'Ver Jitsi';
$string['jitsi:viewexternallink'] = 'Ver link externo';
$string['jitsi:viewrecords'] = 'Ver registros';
$string['jitsi:viewusersonsession'] = 'Acesso aos relatórios de participantes';
$string['jitsiinterface'] = 'Interface do Jitsi';
$string['jitsiname'] = 'Nome de Sessão';
$string['latency'] = 'Latência';
$string['latencyex'] = 'Selecione o nível de latência para streaming.';
$string['link'] = 'link';
$string['linkexpiredon'] = 'Este link expirou em {$a}';
$string['livesessionsnow'] = 'Gravações no ar';
$string['loginq'] = 'Você deseja ativar esta conta?';
$string['logintooltip'] = 'Credenciais para esta conta são necessárias';
$string['messageprovider:callprivatesession'] = 'Chamar para Jitsi privado';
$string['messageprovider:onprivatesession'] = 'Usuário na sessão privada';
$string['minpretime'] = 'Minutos para o acesso';
$string['minpretime_help'] = 'Usuários com permissões de moderação poderão acessar estas minutas antes do início';
$string['minutesconnected'] = 'Você está conectado há {$a} minutos';
$string['minutestoday'] = 'Minutas de hoje';
$string['modulename'] = 'Jitsi';
$string['modulename_help'] = 'Utilize o módulo para videoconferência. Estas videoconferências utilizarão seu nome de usuário no Moodle, o qual será visualizado em seu nome de usuário e avatar.

JItsi-meet é uma solução de videoconferência de código aberto que permite construir e implementar facilmente soluções seguras de videoconferência.';
$string['modulenameplural'] = 'Jitsis';
$string['myprivatesession'] = 'Minha sessão privada';
$string['nameandsurname'] = 'Nome + Sobrenome';
$string['news'] = 'Novidades';
$string['news1'] = 'Se você atualizou recentemente,
 é recomendado que verifique o <a href="../mod/jitsi/CHANGES.md">CHANGES.md</a> para atualizações e defina seu idioma para Inglês para garantir que você leia as instruções atualizadas nesta tela de configuração.
 </br></br><b>AVISO IMPORTANTE</b>
 </br>Recentemente, os servidores públicos do meet.jit.si implementaram restrições para o modo de incorporação que limitam a 5 minutos por conferência
 (<a href="https://github.com/udima-university/moodle-mod_jitsi#important-announcement-from-meetjitsi-team">leia mais aqui</a>).
 </br>Se você deseja contratar serviços de hospedagem profissional para o Jitsi, recomendamos <a href="https://jaas.8x8.vc/">https://jaas.8x8.vc/</a>.
 É operado pelos desenvolvedores do Jitsi, eles têm <b>preços muito competitivos</b> e desta forma você ajuda a manter o Projeto Open Source do Jitsi ativo.
 Você pode <b>desfrutar de um desconto de 80%</b> nos primeiros 3 meses <b>usando o cupom MOODLE23</b> ao se inscrever para sua conta.
 </br></br><b>ISENÇÃO DE RESPONSABILIDADE</b></br>Este plugin é mantido pela Universidade UDIMA (<a href="https://www.udima.es">www.udima.es</a>) e não está relacionado nem é parceiro
 da 8x8 Inc nem com o "Jitsi as a service" (jaas).';
$string['newvaluefor'] = 'Novo valor para';
$string['noinviteaccess'] = 'Acesso de convidados não é permitido no momento.';
$string['nojitsis'] = 'Nenhuma atividade do Jitsi encontrada';
$string['norecords'] = 'Nenhuma gravação disponível';
$string['nostart'] = 'A sessão ainda não começou. Você pode acessar {$a}';
$string['notloggedin'] = 'Credenciais da conta necessárias';
$string['noviewpermission'] = 'Você não tem permissão para ver esta sessão Jitsi';
$string['numbervideosdeleted'] = 'Número de vídeos a serem excluídos';
$string['numbervideosdeletedex'] = 'Número de vídeos a serem excluídos em cada execução da tarefa cron';
$string['oauthid'] = 'ID OAuth2';
$string['oauthidex'] = 'Oauth2  - id da conta Google';
$string['oauthsecret'] = 'Segredo OAuth2';
$string['oauthsecretex'] = 'Segredo OAuth2 da conta Google';
$string['participantspane'] = 'Painel de participantes';
$string['participantspaneex'] = 'Mostra o painel de participantes para todos os usuários. Quando desmarcado, apenas usuários com a capacidade de moderação do Jitsi (mod/jitsi:moderation), geralmente professores, podem ver o painel.';
$string['participatingsession'] = 'Participando da sessão';
$string['password'] = 'Senha';
$string['passwordex'] = 'Senha para proteger suas sessões. Recomendado se você usar servidor público.';
$string['pluginadministration'] = 'Administração Jitsi';
$string['pluginname'] = 'Jitsi';
$string['preparing'] = 'Preparando. Por favor, aguarde...';
$string['presscambutton'] = 'Pressione o botão de câmera';
$string['pressdesktopbutton'] = 'Pressione o botão de área de trabalho';
$string['pressendbutton'] = 'Pressione o botão de término';
$string['pressmicrophonebutton'] = 'Pressione o botão do microfone';
$string['pressrecordbutton'] = 'Pressione o botão de gravação';
$string['privacy:metadata:jitsi'] = 'Para se integrar em uma sessão Jitsi, os dados dos usuários precisam ser compartilhados com este serviço.';
$string['privacy:metadata:jitsi:avatar'] = 'O avatar a ser enviado do Moodle para ser mostrado aos demais usuários da sessão Jitsi';
$string['privacy:metadata:jitsi:username'] = 'O nome de usuário a ser enviado do Moodle para ser mostrado aos demais usuários da sessão Jitsi';
$string['privatekey'] = 'Chave privada';
$string['privatekeyex'] = 'Chave privada para assinar o token com o servidor 8x8. Você pode obtê-la na administração do servidor 8x8. (https://jaas.8x8.com/).
Baixe o arquivo da chave privada e copie o conteúdo aqui.
</br><b>IMPORTANTE</b>: lembre-se de atualizar a configuração "Domínio" para algo como <b>8x8.vc</b>';
$string['privatesession'] = 'Sessão privada de {$a}';
$string['privatesessiondisabled'] = 'Sessões privadas estão desativadas';
$string['privatesessions'] = 'Sessões privadas';
$string['privatesessionsex'] = 'Adicione sessões privadas aos perfis de usuários';
$string['raisehand'] = 'Botão de levantar a mão';
$string['raisehandex'] = 'Mostra o botão de levantar a mão para todos os usuários. Quando os usuários levantam as mãos, eles podem acessar o painel de participantes. Se você ocultar o painel de participantes, talvez deva ocultar este botão.';
$string['reactions'] = 'Reações';
$string['reactionsex'] = 'Exibe emoticons sonoros de aplausos, surpresa, etc... É necessário que o botão "Levantar a mão" esteja ativado.';
$string['record'] = 'Gravar';
$string['recorders'] = 'Gravadores';
$string['recordex'] = 'Permitir opção de registro';
$string['recordingbloquedby'] = 'A gravação está bloqueada por';
$string['recordingwasbloquedby'] = 'O usuário que iniciou esta gravação não está mais participando da sessão. Você deseja parar esta gravação? Ela foi iniciada por';
$string['records'] = 'Gravações';
$string['recordsonair'] = 'Gravações no ar';
$string['recordtitle'] = 'Gravar';
$string['removedfromqueue'] = 'Removido da fila';
$string['removefromqueue'] = 'Remover da fila';
$string['searchrecords'] = 'Buscar gravações';
$string['secret'] = 'Segredo';
$string['secretex'] = 'Segredo para configuração de token';
$string['securitybutton'] = 'Botão de Segurança';
$string['securitybuttonex'] = 'Mostrar botão de segurança na sessão';
$string['separator'] = 'Separador';
$string['separatorex'] = 'Definir um símbolo de separação para o nome da sessão';
$string['sessiondeleted'] = 'Sessão compartilhada excluída';
$string['sessionisbeingrecorded'] = 'A sessão está sendo gravada';
$string['sessionisbeingrecordingby'] = 'A sessão está sendo gravada por {$a}';
$string['sessionnamefields'] = 'Nomes dos campos de sessão';
$string['sessionnamefieldsex'] = 'Campos que definem o nome da sessão';
$string['sessionshared'] = 'Sessão compartilhada com o curso "{$a}"';
$string['sharedsessionwithtoken'] = 'Sessão compartilhada com token. Selecione isso para inserir o token do outro curso';
$string['sharetoinvite'] = 'Compartilhe este link para convidar alguém para a sessão';
$string['showavatars'] = 'Mostrar avatares no Jitsi';
$string['showavatarsex'] = 'Mostrar o avatar do usuário no Jitsi. Se o usuário não tiver foto de perfil, será carregada a foto de perfil padrão do Moodle em vez das iniciais que o Jitsi exibe quando não há foto configurada.';
$string['simultaneouscameras'] = 'Câmeras simultâneas';
$string['simultaneouscamerasex'] = 'Máximo de câmeras simultâneas que os usuários podem ver. Isso pode ser substituído pelo seu servidor Jitsi com um valor inferior. Permitir muitas câmeras pode sobrecarregar os navegadores dos clientes.';
$string['startwithaudiomuted'] = 'Iniciar com áudio mudo';
$string['startwithaudiomutedex'] = 'Quando o usuário se conectar à sessão, o áudio estará mudo';
$string['startwithvideomuted'] = 'Iniciar com vídeo mudo';
$string['startwithvideomutedex'] = 'Quando o usuário se conectar à sessão, o vídeo estará mudo';
$string['staticinvitationlink'] = 'Opção de convites';
$string['staticinvitationlinkcapabilityex'] = 'Use esta opção para convidados que não possuem um usuário Moodle para acessar. Apenas se você tiver a capacidade mod/jitsi:createlink, poderá criar ou modificar o link de convite.';
$string['staticinvitationlinkex'] = 'Use esta opção para convidados que não possuem um usuário Moodle para acessar. Você pode ver e copiar o link na aba de convites.';
$string['staticinvitationlinkexview'] = 'Compartilhe este link para convidados que não possuem um usuário Moodle para acessar.';
$string['streamingandrecording'] = 'Transmitir & Gravar';
$string['streamingbutton'] = 'Transmissão pelo Youtube';
$string['streamingbuttonex'] = 'Ative os recursos de transmissão ao vivo para usuários com a capacidade mod/jitsi:record ativada (professores). Se ativado, provavelmente você desejará desativar a opção de "gravação" acima.';
$string['streamingconfig'] = 'Configuração de transmissão';
$string['streamingconfigex'] = 'A configuração padrão de streaming funciona "pronta para uso" e os usuários podem transmitir/gravar suas sessões com suas próprias contas de streaming em serviços de streaming (YouTube, Peertube...), mas o professor é responsável por publicar os links de visualização para os estudantes no curso. </br></br>Para uma melhor experiência, você pode habilitar o método "Integrado ao Moodle" para gravar em uma conta de streaming corporativa (apenas o YouTube disponível agora) e as gravações estarão automaticamente disponíveis para os estudantes.';
$string['streamingisstarting'] = 'A transmissão está começando. Por favor, aguarde...';
$string['streamingoption'] = 'Método de transmissão ao vivo';
$string['streamingoptionex'] = 'Escolha se deseja integração automática com transmissão do YouTube ou use a opção de transmissão da interface Jitsi';
$string['tablelistjitsis'] = 'Lista com todos os vídeos em seus provedores de conta de Transmissão/Gravação que estão disponíveis para exclusão porque não estão mais vinculados às atividades do Jitsi nesta instância do Moodle. Você pode excluí-los com segurança para liberar espaço no servidor de transmissão. A lista pode incluir vídeos que agora estão na "Lixeira" em algum curso. É recomendável excluir apenas gravações antigas que você sabe que não serão mais necessárias. </br></br> <b>¡¡¡ATENÇÃO!!!</b> Se você tiver instâncias de backup do Moodle, NÃO deve remover esses vídeos se eles estiverem vinculados a outras instâncias.';
$string['toenter'] = 'entrar';
$string['token'] = 'Compartilhe este token no outro curso';
$string['tokenconfiguration8x8ex'] = 'Se você usar servidores 8x8, será necessário configurar os seguintes parâmetros.';
$string['tokenconfigurationex'] = 'Se você estiver usando um servidor Jitsi configurado no "modo token", como por exemplo seu próprio servidor ou um servidor 8x8, preencha os seguintes parâmetros, dependendo do tipo de servidor que você estiver usando. Isso é necessário para promover seus usuários com a capacidade (mod/jitsi:moderation) ativada como moderadores nativos do Jitsi.';
$string['tokeninterno'] = 'Token da sessão principal';
$string['tokeninternocompartir'] = 'Token para compartilhar';
$string['tokeninternocompartir_help'] = 'Use este token para compartilhar a sessão com outros cursos. Insira este token nesta seção do outro curso.';
$string['tokeninvitacion'] = 'Insira aqui o token da sessão que você deseja ingressar';
$string['tokeninvitacion_help'] = 'Insira aqui o token da sessão que você deseja ingressar. Obtenha esse token no outro curso.';
$string['tokeninvitadovalidation'] = 'Token inválido';
$string['tokeninvitationnotvalid'] = 'O convite não pode expirar antes de agora';
$string['tokeninvitationvalidation'] = 'Token inválido. Não há nenhuma sessão com este token';
$string['tokennconfig'] = 'Configuração de token';
$string['tokennconfig8x8'] = 'Configuração de servidores 8x8';
$string['totalminutes'] = 'Total de minutos';
$string['updated'] = 'Atualizado';
$string['urlerror'] = 'A URL não é válida';
$string['urlinvitacion'] = 'URL de convite';
$string['usercall'] = '{$a} está chamando você para um Jitsi privado';
$string['userenter'] = '{$a} está na sua sala privada do Jitsi';
$string['username'] = 'Nome de usuário';
$string['validitytimevalidation'] = 'O convite não pode expirar antes da data de início da sessão ou após a data de término da sessão.';
$string['videoexpiry'] = 'Período de retenção';
$string['videoexpiryex'] = 'Tempo que um vídeo excluído ficará disponível no servidor de transmissão. Após esse tempo, o vídeo será excluído do servidor de transmissão.';
$string['warningprivate'] = 'Se você acessar, {$a} será notificado com uma notificação.';
$string['watermarklink'] = 'Link para marca d\'água';
$string['watermarklinkex'] = 'Link para marca d\'água';
$string['whiteboard'] = 'Quadro branco';
$string['whiteboardex'] = 'Mostrar o botão de quadro branco para todos os usuários. Atualmente, o Quadro Branco não está disponível em servidores Jaas.';
$string['youtubebutton'] = 'Opção de compartilhamento do Youtube';
$string['youtubebuttonex'] = 'Mostrar a opção de compartilhamento de vídeos do YouTube';
