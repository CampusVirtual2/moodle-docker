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
 * Strings for component 'block_xp', language 'pt_br', version '4.1'.
 *
 * @package     block_xp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['activityname'] = 'Nome da atividade';
$string['activityname_help'] = 'O texto que o nome da atividade deve conter ou ser igual. Não é sensível a maiúsculas.';
$string['activityoresourceis'] = 'A atividade ou recurso é {$a}';
$string['addacondition'] = 'Adicione uma condição';
$string['addarule'] = 'Adicione uma regra';
$string['addinstructions'] = 'Adicionar mais informações';
$string['additionalresources'] = 'Recursos adicionais';
$string['addlevel'] = 'Adicionar nível';
$string['addondeactivated'] = 'XP+ desativado';
$string['addondeactivatedinfo'] = 'Os plugins XP são incompatíveis entre si, o que resultou na desativação do XP+. A versão esperada do Level Up XP+ (local_xp) é {$a->localxpversion}.';
$string['addoninstallationerror'] = 'Foi encontrado um problema com o complemento (local_xp), que parece não estar instalado corretamente. O administrador deve finalizar a instalação.';
$string['addonnotactivated'] = 'O recurso complementar não está ativado.';
$string['addrulesformhelp'] = 'A última coluna define a quantidade de pontos de experiência ganhos quando um critério é satisfeito.';
$string['admindefaultrulesintro'] = 'As regras a seguir serão utilizadas como padrão para cursos onde o bloco for adicionado.';
$string['admindefaultsettingsintro'] = 'As configurações abaixo serão utilizadas como padrão quando o bloco for adicionado novamente a um curso.';
$string['admindefaultvisualsintro'] = 'As configurações seguintes serão utilizadas como padrão quando o bloco for adicionado novamente a um curso.';
$string['adminnoticeaddondeactivatedmessage'] = 'O Level Up XP+ foi desativado!

Você está recebendo este aviso porque o Level Up XP+ foi desativado para prevenir possíveis problemas. Os plugins Level Up XP (block_xp) e Level Up XP+ (local_xp) estão incompatíveis.

Essa incompatibilidade pode causar perda de funcionalidades, bugs e outros problemas. Para resolver, você deve atualizar o Level Up XP+.

- Versão do Level Up XP (block_xp): {$a->blockxpversion}
- Versão do Level Up XP+ (local_xp): {$a->localxpversion}
- Versão esperada do Level Up XP+: {$a->localxpversionexpected}

Recursos adicionais:

- [Documentação de atualização](https://docs.levelup.plus/xp/docs/upgrade)
- [Documentação sobre desativação do XP+](https://docs.levelup.plus/xp/docs/addon-deactivated)
- [Documentação de compatibilidade](https://docs.levelup.plus/xp/docs/requirements-compatibility)

--

Este aviso foi enviado a todos os administradores. Para desativar todos os avisos administrativos, visite as configurações administrativas do Level Up XP.';
$string['adminnoticeaddondeactivatedsubject'] = 'Plugin XP+ desativado!';
$string['adminnoticeoutofsyncmessage'] = 'Aviso de incompatibilidade entre Level Up XP e Level Up XP+!

Você está recebendo este aviso porque os dois plugins Level Up XP (block_xp) e Level Up XP+ (local_xp) estão "fora de sincronia" e incompatíveis entre si. Isso ocorre quando o XP é atualizado para uma nova versão principal enquanto o XP+ permanece desatualizado.

Essa incompatibilidade pode causar perda de funcionalidades, bugs e outros problemas. Para resolver, você deve atualizar o Level Up XP+.

**Importante!** No futuro, se os plugins estiverem fora de sincronia, o Level Up XP+ será desativado automaticamente. Para evitar isso, certifique-se de atualizar ambos juntos.

- Versão do Level Up XP (block_xp): {$a->blockxpversion}
- Versão do Level Up XP+ (local_xp): {$a->localxpversion}
- Versão esperada do Level Up XP+: {$a->localxpversionexpected}

Recursos adicionais:

- [Documentação de atualização](https://docs.levelup.plus/xp/docs/upgrade)
- [Documentação de compatibilidade](https://docs.levelup.plus/xp/docs/requirements-compatibility)

--

Este aviso foi enviado a todos os administradores. Para desativar todos os avisos administrativos, visite as configurações administrativas do Level Up XP.';
$string['adminnoticeoutofsyncsubject'] = 'Aviso de incompatibilidade dos plugins XP!';
$string['adminnotices'] = 'Avisos administrativos';
$string['adminnotices_desc'] = 'Quando habilitado, administradores do site podem receber notificações importantes sobre compatibilidade, segurança e disponibilidade de novas versões do Level Up XP+.';
$string['adminscanearnxp'] = 'Os administradores podem ganhar pontos';
$string['adminscanearnxp_desc'] = 'Por padrão, os administradores não estão incluídos no grupo de usuários que podem ganhar pontos. Isso ocorre porque os administradores sempre têm a permissão _block/xp:earnxp_, permitindo que eles continuem a coletar pontos em todos os lugares. Você pode usar esta configuração para permitir que os administradores também ganhem pontos.';
$string['allcoursesreset'] = 'Todos os cursos foram redefinidos.';
$string['anonymity'] = 'Anonimato';
$string['anonymity_help'] = 'Esta configuração controla se os participantes podem ver o nome e o avatar uns dos outros.';
$string['apply'] = 'Aplicar';
$string['awardaxpwhen'] = '<strong>{$a}</strong> pontos de experiência são ganhos quando:';
$string['badgeaward'] = 'Emblema para conceder';
$string['badgeawarddesc'] = 'Um emblema para conceder quando o usuário atinge o nível.';
$string['basepoints'] = 'Pontos base';
$string['basepointslineardesc'] = 'O incremento mínimo entre cada nível.';
$string['basepointsrelativedesc'] = 'O número de pontos para começar.';
$string['basexp'] = 'Algoritmo base';
$string['blockappearance'] = 'Aparência do bloco';
$string['blockappearancemovedtopluginsettings'] = 'As configurações de aparência do bloco foram movidas para a página de configurações do plugin.';
$string['cachedef_filters'] = 'Filtros de nível';
$string['cachedef_metadata'] = 'Metadados';
$string['cachedef_ruleevent_eventslist'] = 'Lista de alguns eventos';
$string['canjoinfromdatex'] = 'Você poderá participar a partir de {$a}.';
$string['cannotbesetindefaults'] = 'Isso não pode ser definido nos valores padrão.';
$string['cannotearnpoints'] = 'Não pode ganhar pontos.';
$string['cannotshowblockconfig'] = 'Normalmente mostro as configurações de aparência aqui, mas não consegui encontrar seu bloco. Para alterar a aparência do bloco, volte [aqui]({$a}) (ou onde você adicionou o bloco), ative o modo de edição e clique na opção "Configurar" na lista suspensa do bloco. Se você não conseguir encontrar o bloco, adicione-o novamente ao seu curso.';
$string['cannotshowblockconfigsys'] = 'Normalmente, mostro as configurações de aparência aqui, mas não consegui encontrar seu bloco. Pode estar faltando na
 [página inicial]({$a->fp}) e no [painel]({$a->mysys}) de seus usuários, ou presente em ambos. Para editar as configurações aqui, verifique se elas aparecem apenas em uma delas.';
$string['changecourse'] = 'Alterar curso';
$string['changelevelformhelp'] = 'Se você alterar o número de níveis, os emblemas personalizados de níveis serão temporariamente desabilitados para prevenir níveis sem emblemas. Se você alterar o número de níveis vá para a página \'Visuais\' para re-habilitar os emblemas personalizados uma vez que tenha salvo esse formulário.';
$string['changetocourse'] = 'Mudar para o curso';
$string['changetositewide'] = 'Voltar para o site';
$string['cheatguard'] = 'Proteção contra fraude';
$string['cheatguardsettingsmovednotice'] = 'As configurações do guardião de trapaças foram movidas para a [página de regras de eventos]({$a->url}).';
$string['checkaddoncompatibility'] = 'Compatibilidade do addon Level Up XP';
$string['chooseacondition'] = 'Escolher uma condição';
$string['clearfilter'] = 'Limpar filtro';
$string['clicktoselectcm'] = 'Clique para selecionar uma atividade ou recurso';
$string['cmselector'] = 'Seletor de módulo de curso';
$string['coefxp'] = 'Coeficiente do algoritmo';
$string['colon'] = '{$a->a}: {$a->b}';
$string['comparisonmethod'] = 'Método de comparação';
$string['compatibilitycheck'] = 'Verificação de compatibilidade';
$string['completionrules'] = 'Regras de conclusão';
$string['completionrules_help'] = 'As regras de conclusão são separadas em três categorias: conclusão de atividade, conclusão de seção e conclusão de curso. Adicionar condições às categorias determinará quando e quantos pontos serão concedidos.

As regras são avaliadas na ordem em que são apresentadas na tela. Assim que uma condição for atendida, os pontos correspondentes serão concedidos e as regras seguintes não serão avaliadas.

[Saiba mais](https://docs.levelup.plus/xp/docs/completion-rules?ref=blockxp_help)';
$string['completionrulesintro'] = 'Atribua pontos aos alunos à medida que eles concluem atividades, seções ou cursos.';
$string['completionruleslegacyusednotice'] = 'Você tem "Regras de evento" existentes usando condições de conclusão. Recomendamos fortemente removê-las em favor dos métodos abaixo, pois usar "Regras de evento" e "Regras de conclusão" pode duplicar os pontos atribuídos.';
$string['condition'] = 'Condição';
$string['configblockrankingsnapshot'] = 'Exibir amostra do ranking';
$string['configblockrankingsnapshot_help'] = 'A amostra do ranking exibe a classificação do usuário. Ele também tentará exibir as duas pessoas ao redor do usuário. Esse recurso requer que a tabela de classificação seja ativada e suas classificações sejam exibidas.';
$string['configdescription'] = 'Introdução';
$string['configdescription_help'] = 'Uma pequena mensagem de introdução exibida no bloco. Os estudantes podem descartar a mensagem e, nesse caso, eles não a verão novamente.';
$string['configheader'] = 'Configurações';
$string['configrecentactivity'] = 'Mostrar recompensas recentes';
$string['configrecentactivity_help'] = 'Quando ativado, o bloco exibirá uma pequena lista de eventos recentes que recompensaram o estudante com pontos.';
$string['configtitle'] = 'Título';
$string['configtitle_help'] = 'O título do bloco';
$string['congratulationsyouleveledup'] = 'Parabéns!';
$string['coolthanks'] = 'Muito bom, obrigado!';
$string['coursea'] = 'Curso "{$a}"';
$string['courselog'] = 'Registro';
$string['courselogintro'] = 'O registro exibe as ações observadas e quantos pontos foram concedidos.';
$string['coursereport'] = 'Relatório';
$string['coursereportintro'] = 'O relatório fornece detalhes sobre cada participante, e permite ações individualmente ou em massa.';
$string['courserules'] = 'Regras do curso';
$string['courseselectedcolon'] = 'Curso selecionado:';
$string['coursesettings'] = 'Configurações do curso';
$string['coursevisuals'] = 'Visuais do curso';
$string['currencysign'] = 'Símbolo de pontos';
$string['currencysign_help'] = 'Com essa configuração, você pode alterar o significado dos pontos. Será exibido ao lado da quantidade de pontos que cada usuário possui, substituindo a referência a _pontos de experiência_.

Escolha um dos símbolos fornecidos ou faça o upload do seu próprio!';
$string['currencysignxp'] = 'XP (Pontos de Experiência)';
$string['customizelevels'] = 'Personalizar os níveis';
$string['dangerzone'] = 'Zona de perigo';
$string['dataformat'] = 'Formato';
$string['defaultlevels'] = 'Níveis padrão';
$string['defaultrules'] = 'Regras padrão';
$string['defaultrulesformhelp'] = 'Essas são regras padrão fornecidas pelo plugin que atribuem pontos de experiência automaticamente e ignoram alguns eventos redundantes. Regras personalizadas têm precedência sobre elas.';
$string['defaultsettings'] = 'Configurações padrão';
$string['defaultvisuals'] = 'Aparência padrão';
$string['deletecondition'] = 'Condição de exclusão';
$string['deleterule'] = 'Regra de exclusão';
$string['description'] = 'Descrição';
$string['difference'] = 'Diferença';
$string['difficulty'] = 'Método de cálculo de pontos';
$string['difficultyflat'] = 'Igual';
$string['difficultyflatdesc'] = 'Todos os níveis exigem o mesmo número de pontos para serem alcançados.';
$string['difficultylinear'] = 'Crescente';
$string['difficultylineardesc'] = 'Os níveis demoram progressivamente mais para serem alcançados.';
$string['difficultylinearincrdesc'] = 'O número de pontos usado para a dificuldade progressiva.';
$string['difficultypointincrease'] = 'Aumento de pontos';
$string['difficultyrelative'] = 'Bola de neve';
$string['difficultyrelativedesc'] = 'Os níveis se tornam exponencialmente mais difíceis de alcançar.';
$string['difficultyrelativeincrdesc'] = 'A porcentagem de pontos a aumentar em relação ao nível anterior.';
$string['discoverlevelupplus'] = 'Descubra o Level Up XP+';
$string['dismissnotice'] = 'Ignorar aviso';
$string['displayeveryone'] = 'Exibir todos';
$string['displaynneighbours'] = 'Exibir {$a} vizinhos';
$string['displayoneneigbour'] = 'Exibir um vizinho';
$string['displayparticipantsidentity'] = 'Exibir a identidade dos participantes';
$string['displayrank'] = 'Mostrar classificação';
$string['displayrelativerank'] = 'Mostrar uma classificação relativa';
$string['documentation'] = 'Documentação';
$string['drops'] = 'Drops';
$string['drops_help'] = 'Em videogames, alguns personagens podem _deixar cair_ itens ou pontos de experiência no chão para o jogador coletar. Esses itens e pontos são comumente chamados de drops.

No Level Up XP, os drops são códigos curtos (por exemplo, `[xpdrop id=1 secret=abcdef]`) que um instrutor pode inserir em conteúdos regulares do Moodle. Quando encontrados por um usuário, esses drops serão _coletados_ e uma certa quantidade de pontos será concedida.

Atualmente, os drops são invisíveis para o usuário e concedem pontos passivamente na primeira vez em que são encontrados.

Os drops podem ser usados para premiar de maneira inteligente quando um tipo de conteúdo é consumido por um estudante. Algumas ideias:

- Inserir um drop no feedback de um questionário apenas visível para pontuação perfeita
- Inserir um drop em conteúdos profundos para recompensar sua exploração
- Inserir um drop em uma discussão interessante no fórum
- Inserir um drop em uma página difícil de acessar em um módulo de lição

[Mais informações](https://docs.levelup.plus/xp/docs/how-to/use-drops?ref=blockxp_help)';
$string['dropsintro'] = 'Drops são trechos de código colocados diretamente no conteúdo que concedem pontos quando encontrados por um usuário.';
$string['editcondition'] = 'Editar condição';
$string['editingdefaultsettingsinwholesitemodenotice'] = '**Atenção!** Você não está modificando as configurações ativas atualmente, mas sim editando os valores padrão. Como o Level Up XP é usado em todo o site, provavelmente sua intenção é alterar as configurações gerais. [Clique aqui]({$a->url}) para mudar essas configurações ou siga o link "Configurações" diretamente do bloco XP.';
$string['editinstructions'] = 'Editar informação';
$string['enablecheatguard'] = 'Ativar proteção contra fraude';
$string['enablecheatguard_help'] = 'A proteção contra fraude oferece um mecanismo simples e barato para evitar que os estudantes abusem do sistema usando técnicas óbvias, como atualizar a mesma página indefinidamente ou repetir a mesma ação repetidas vezes.

[Mais informação] (https://docs.levelup.plus/xp/docs/getting-started/cheat-guard?ref=blockxp_help)';
$string['enableinfos'] = 'Habilitar a página de informações';
$string['enableinfos_help'] = 'Quando setado para \'Não\', os estudantes não serão capazes de ver a página de informações.';
$string['enableladder'] = 'Habilitar ranking';
$string['enableladder_help'] = 'Quando definido como "Não", os estudantes não poderão visualizar o ranking.';
$string['enablelevelupnotif'] = 'Habilitar notificações de mudança de nível';
$string['enablelevelupnotif_help'] = 'Quando setado para \'Sim\', os estudantes verão um popup parabenizando-os pelo novo nível alcançado.';
$string['enablelogging'] = 'Habilitar registros de log';
$string['enablexpgain'] = 'Habilitar ganho de pontos XP';
$string['enablexpgain_help'] = 'Quando definido como "Não", ninguém ganhará pontos no curso. Isso é útil para congelar os pontos ganhos ou para habilitá-lo em determinado momento.

Observe que isso também pode ser controlado com mais granularidade usando a capacidade _block/xp:earnxp_.';
$string['entersearchterm'] = 'Digite um termo de pesquisa';
$string['envcheckaddonincompatibilitymessage'] = 'O plugin Level Up XP+ (local_xp) é incompatível com o Level Up XP (block_xp). Isso resultará na desativação do XP+. Para evitar, atualize ambos os plugins. Para mais informações, visite https://docs.levelup.plus/xp/docs/compatibility.';
$string['erroraddondeactivated'] = 'O Level Up XP+ foi desativado. Consulte a [documentação]({$a->docsurl}) para mais informações.';
$string['errorcontextcoursemismatchforwholesite'] = 'A URL desta página do <em>Level Up XP</em> não corresponde à configuração atual do plugin. Sua configuração atual declara o uso "em todo o site", porém esta página esperava o uso "por curso". Por favor, <a href="{$a->nexturl}">clique aqui</a> para navegar para a página correta. Procure a configuração administrativa "block_xp_context" se desejar mudar sua configuração.';
$string['errorcontextcoursemismatchpercourse'] = 'A URL desta página do <em>Level Up XP</em> não corresponde à configuração atual do plugin. Sua configuração atual declara o uso "por curso", mas esta página espera o uso "em todo o site". Provavelmente isso se origina de um <em>bloco</em> adicionado ao painel ou página inicial em uma configuração diferente. Você deve remover o bloco dessas páginas e usá-lo apenas dentro dos cursos individuais.';
$string['errorformvalues'] = 'Existem alguns erros nos valores do formulário, por favor, resolva-os.';
$string['errorlevelsincorrect'] = 'O número mínimo de níveis é 2';
$string['errornotalllevelsbadgesprovided'] = 'Nem todos os emblemas de níveis foram informados. Faltando: {$a}';
$string['errorunknownevent'] = 'Erro: evento desconhecido';
$string['errorunknownmodule'] = 'Erro: módulo desconhecido';
$string['errorxprequiredlowerthanpreviouslevel'] = 'Os pontos necessários são menores ou iguais ao nível anterior.';
$string['event_user_leveledup'] = 'Usuário subiu de nível';
$string['eventis'] = 'O evento é {$a}';
$string['eventname'] = 'Nome do evento';
$string['eventproperty'] = 'Propriedades do evento';
$string['eventsrules'] = 'Regras de eventos';
$string['eventsrules_help'] = 'Este plugin utiliza eventos para atribuir pontos a ações realizadas pelos estudantes.
Você pode usar o formulário abaixo para adicionar suas próprias regras e modificar as padrões.

É aconselhável verificar a página de _Log_ do plugin para identificar quais eventos são acionados à medida que os estudantes realizam ações no curso.

Recursos adicionais:

- [Como são calculados os pontos de experiência?](https://docs.levelup.plus/xp/docs/getting-started/points-calculation?ref=blockxp_help)
- [Solução de problemas de regras](https://docs.levelup.plus/xp/docs/troubleshooting/event-rule-not-working?ref=blockxp_help)';
$string['eventsrulesintro'] = 'Monitorar as ações e atribuir pontos aos estudantes à medida que eles as realizam.';
$string['eventtime'] = 'Data do evento';
$string['export'] = 'Exportar';
$string['exportdata'] = 'Exportar dados';
$string['filterbyuser'] = 'Filtrar por usuário';
$string['filterellipsis'] = 'Filtrar...';
$string['filtermodules'] = 'Módulos de filtro';
$string['filterparticipants'] = 'Filtrar participantes';
$string['for1day'] = 'Por um dia';
$string['for1month'] = 'Por um mês';
$string['for1week'] = 'Por uma semana';
$string['for3days'] = 'Por 3 dias';
$string['forever'] = 'Para sempre';
$string['forthewholesite'] = 'Para todo o site';
$string['give'] = 'dar';
$string['gotofullladder'] = 'Ir para o ranking completo';
$string['graderules'] = 'Regras de notas';
$string['graderules_help'] = 'Os estudantes ganharão tantos pontos quanto suas notas.
Uma nota de 5/10 e uma nota de 5/100 concederão ao estudante 5 pontos cada. Quando a nota de um estudante mudar várias vezes, ele ganhará pontos equivalentes à nota máxima recebida.
Os pontos nunca são retirados dos estudantes, e as notas negativas são ignoradas.

Exemplo: Alice envia uma tarefa e recebe a nota 40/100. No _Level Up XP_, Alice recebe 40 pontos como nota.
Alice tenta novamente sua tarefa, mas desta vez sua nota é reduzida para 25/100. Os pontos de Alice no _Level Up XP_ não mudam.
Para sua última tentativa, Alice pontua 60/100, ela ganha 20 pontos adicionais no _Level Up XP_, totalizando 60 pontos.

[Mais no _Level Up XP_ documentation](https://docs.levelup.plus/xp/docs/how-to/grade-based-rewards?ref=blockxp_help)';
$string['graderulesintro'] = 'As regras de notas permitem que os usuários recebam pontos equivalentes às notas que recebem.';
$string['grid'] = 'Grade';
$string['hasbadgeaward'] = 'Emblema para conceder definido';
$string['hasdescription'] = 'Descrição definida';
$string['hasname'] = 'Nome definido';
$string['hasnobadgeaward'] = 'Sem emblema para conceder';
$string['hasnodescription'] = 'Sem descrição';
$string['hasnoname'] = 'Sem nome';
$string['hasnopopupmessage'] = 'Sem mensagem de popup';
$string['haspopupmessage'] = 'Mensagem de popup definida';
$string['hideparticipantsidentity'] = 'Ocultar identidade dos participantes';
$string['hiderank'] = 'Ocultar classificação';
$string['importpoints'] = 'Importar pontos';
$string['importpoints_help'] = 'A importação pode ser usada para _aumentar_ os pontos dos estudantes ou para _substituí-los_ pelo valor fornecido.

Observe que a importação __não__ usa o mesmo formato do relatório exportado. O formato necessário é descrito na [documentação](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help), onde um [arquivo de exemplo](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help#sample-file) está disponível.';
$string['importpointsintro'] = 'Importar pontos de um arquivo CSV e, opcionalmente, enviar uma mensagem ao destinatário.';
$string['incourses'] = 'Em cursos';
$string['ineffective'] = 'Ineficaz';
$string['infos'] = 'Informação';
$string['infos_help'] = 'A página de informações oferece aos estudantes uma visão geral dos níveis e dos pontos necessários para alcançá-los. Também exibe o nome e a descrição de cada nível.';
$string['infosintro'] = 'A página de informações exibe a lista de níveis e alguns de seus detalhes.';
$string['installed'] = 'Instalado';
$string['instructions'] = 'Instruções';
$string['instructions_help'] = 'As instruções serão exibidas na página de informações. Você pode usá-las para compartilhar informações e orientações sobre os níveis, como ganhar pontos, etc.';
$string['invalidxp'] = 'Valores inválidos';
$string['join'] = 'Participar';
$string['joinleadeboardconfirmnote'] = 'Fantástico, estamos entusiasmados em tê-lo conosco!

Observe que, uma vez que você participe, haverá um período de espera antes de poder sair do ranking, caso mude de ideia.';
$string['joinleadeboardlockednote'] = 'Você não pode participar do ranking.';
$string['joinleaderboard'] = 'Participar do ranking';
$string['keeplogs'] = 'Manter logs';
$string['ladder'] = 'Ranking';
$string['ladder_help'] = 'O ranking classifica os estudantes com base em seus pontos. Quando usado em um curso com grupos, pode criar uma classificação para cada grupo de estudantes.

Várias opções estão disponíveis para personalizar o ranking e a experiência dos participantes.';
$string['ladderadditionalcols'] = 'Colunas adicionais';
$string['ladderadditionalcols_help'] = 'Essa configuração determina quais colunas adicionais são exibidas no ranking. Pressione a tecla CTRL ou CMD enquanto clica para selecionar mais de uma coluna ou para desmarcar uma coluna selecionada.';
$string['ladderempty'] = 'O ranking está vazio, volte mais tarde!';
$string['ladderintro'] = 'O ranking mostra uma classificação dos indivíduos com base no total de pontos.';
$string['ladderiso'] = 'Isolar participantes';
$string['ladderiso_help'] = 'Criar rankings separados para diferentes grupos de pessoas.

- Padrão (modo de grupos): Segue o modo de grupo do curso para criar rankings para cada grupo.
- Usando coortes: Apenas membros da mesma coorte aparecerão no ranking de uma pessoa.

[Mais informações](https://docs.levelup.plus/xp/docs/leaderboard-isolation)';
$string['ladderisocohorts'] = 'Usando coortes';
$string['ladderisodefault'] = 'Padrão (modo de grupos)';
$string['ladderparticipation'] = 'Participação';
$string['ladderparticipation_help'] = 'Define se os usuários devem participar do ranking ou se podem entrar e sair conforme sua preferência.

- Automático, sem opção de saída: Todos os usuários entram automaticamente no ranking e não podem sair.
- Automático, com opção de saída: Todos os usuários entram automaticamente no ranking, mas podem optar por sair.
- Opcional, por adesão: Os usuários precisam aderir explicitamente ao ranking  para participar.

Os usuários podem mudar de ideia e sair ou aderir ao ranking após optarem. No entanto, para evitar comportamentos indesejados, os usuários que aderirem ao ranking não poderão sair por 3 dias.

[Mais informações](https://docs.levelup.plus/xp/docs/leaderboard-opt-out)';
$string['ladderparticipationforced'] = 'Automático, sem opção de saída';
$string['ladderparticipationoptin'] = 'Opcional, por adesão';
$string['ladderparticipationoptout'] = 'Automático, com opção de saída';
$string['ladderparticipationreset'] = 'Remover o status de participação registrado de todos.';
$string['ladderparticipationreset_help'] = 'Quando marcado, o status de participação de todos os usuários será apagado, e todos precisarão optar novamente por entrar ou sair.';
$string['laddersettingsmovednotice'] = 'As configurações de ranqueamento foram movidas para a [página do ranking]({$a->url}).';
$string['learnmore'] = 'Saiba mais';
$string['leave'] = 'Sair';
$string['leaveleadeboardconfirmnote'] = 'Tem certeza de que deseja sair do ranking?

Ao sair, você perderá o acesso aos ranking, mas poderá voltar a participar depois se mudar de ideia.';
$string['leaveleadeboardlockednote'] = 'Você não pode sair do ranking.';
$string['leaveleadeboardlockeduntilnote'] = 'Você não pode sair do ranking até {$a}.';
$string['leaveleaderboard'] = 'Sair do ranking';
$string['level'] = 'Nível';
$string['levelbadge'] = 'Emblema de nível';
$string['levelbadges'] = 'Emblemas de nível';
$string['levelbadges_help'] = 'Faça o upload de imagens para substituir a aparência de níveis individuais.

Os arquivos devem ser nomeados [nível].[extensão do arquivo], por exemplo, 1.png, 2.jpg, etc.

Recomendamos imagens com tamanho de 100x100 pixels, em qualquer um dos seguintes tipos: GIF, JPEG, PNG e SVG.';
$string['levelbadgesformhelp'] = 'Nome dos arquivos [nivel].[extensão do arquivo], por exemplo: 1.png, 2.jpg, etc... O tamanho recomendado da imagem é 100x100.';
$string['levelcount'] = 'Quantidade de níveis';
$string['leveldesc'] = 'Descrição do nível';
$string['leveldesc_help'] = 'Uma descrição breve do nível, isto é exibido na pagina de informações junto com o próprio nível. Você pode utilizar isto para descrever uma recompensa para os estudantes que alcançam o nível, para incluir instruções de como atingir este nível, ou para descrever o nível de maneira divertida (por exemplo, _Diz-se que somente as almas mais destemidas conseguem atingir este nível_), etc.';
$string['leveldescriptiondesc'] = 'Uma breve descrição do nível, exibida para os estudantes na página de informações.';
$string['levelname'] = 'Nome do nível';
$string['levelname_help'] = 'Um nome de nível curto para exibição ao invés do padrão _Nível #1_, _Nível #2_, etc. que algumas vezes é exibido. Se você dar nome a alguns níveis, nós recomendamos que você dê nome a todos!';
$string['levelpointslength'] = 'Comprimento';
$string['levelpointsstart'] = 'Início';
$string['levels'] = 'Níveis';
$string['levelsappearance'] = 'Aparência dos níveis';
$string['levelssaved'] = 'Os níveis foram salvos.';
$string['levelswillbereset'] = 'Atenção! Ao salvar este formulário os níveis de todos serão recalculados!';
$string['levelup'] = 'Passou de nível!';
$string['levelupoptionsunavailableforlevelone'] = 'Opções relacionadas à obtenção do nível não estão disponíveis para o primeiro nível.';
$string['levelupplus'] = 'Level Up XP+';
$string['levelx'] = 'Nível #{$a}';
$string['likenotice'] = 'Está gostando do Level Up XP? Por favor, reserve um momento para <a href="{$a->moodleorg}" target="_blank">adicionar aos seus plugins favoritos</a> no Moodle.org.';
$string['limitparticipants'] = 'Limite de participantes';
$string['limitparticipants_help'] = 'Esta configuração controla quem é exibido no placar. Vizinhos são os participantes classificados acima e abaixo do usuário atual. Por exemplo, ao escolher \'Exibir 2 vizinhos\', somente os dois participantes classificados diretamente acima e abaixo do usuário atual serão exibidos.';
$string['list'] = 'Lista';
$string['logging'] = 'Logging';
$string['manually'] = 'Manualmente';
$string['maxactionspertime'] = 'Max. ações no intervalo de tempo';
$string['maxactionspertime_help'] = 'O número máximo de ações que contarão para ganho de pontos de experiência durante o intervalo de tempo fornecido. Qualquer ação subsequente será ignorada. Quando este valor está vazio ou é igual a zero, não é aplicado.';
$string['maxlevelexcl'] = 'nível máximo!';
$string['menu'] = 'Menu';
$string['messageprovider:adminnotice'] = 'Aviso administrativo';
$string['missing'] = 'Ausente';
$string['movecondition'] = 'Condição de movimento';
$string['moverule'] = 'Regra de movimento';
$string['name'] = 'Nome';
$string['namecontains'] = 'Contém "{$a}"';
$string['nameequalsto'] = 'É igual a "{$a}"';
$string['navbardisplay'] = 'Mostrar na barra de navegação';
$string['navbardisplay_desc'] = 'Quando ativado, o nível do usuário será exibido na barra de navegação superior. Se o plugin for usado "Por cursos", ele só aparecerá nos cursos. Observe que essa funcionalidade depende muito do tema e pode não funcionar bem, ou não funcionar de todo, com temas de terceiros. [Saiba mais](https://docs.levelup.plus/xp/docs/navbar-display)';
$string['navcompletionrules'] = 'Conclusão';
$string['navdrops'] = 'Drops';
$string['naveventrules'] = 'Regras de eventos';
$string['navgraderules'] = 'Regras de notas';
$string['navimport'] = 'Importar';
$string['navinfos'] = 'Informação';
$string['navladder'] = 'Ranking';
$string['navlevels'] = 'Níveis';
$string['navlevelssetup'] = 'Configuração';
$string['navlog'] = 'Log';
$string['navpoints'] = 'Pontos';
$string['navpromo'] = 'XP+';
$string['navreport'] = 'Relatório';
$string['navrules'] = 'Regras';
$string['navsettings'] = 'Configurações';
$string['navvisuals'] = 'Aparência';
$string['newversioninstallednotice'] = 'Uma nova versão foi instalada! Descubra as novidades nas [notas de lançamento]({$a->releasenotesurl}).';
$string['nextlevelin'] = 'próximo nível em';
$string['noconditionsyet'] = 'Ainda não há condições!';
$string['noconditionsyetintro'] = 'Comece adicionando uma condição.';
$string['nodescription'] = 'Sem descrição';
$string['noissuesidentified'] = 'Nenhum problema identificado';
$string['nologsrecordedyet'] = 'Os logs ainda não foram registrados.';
$string['noname'] = 'Sem nome';
$string['noneareavailable'] = 'Nenhuma está disponível.';
$string['notecompatibilityissues'] = 'Observe os problemas de compatibilidade identificados abaixo:';
$string['notesomesettingslocked'] = 'Observe que algumas configurações podem não ser editáveis se forem bloqueadas por um administrador.';
$string['nothingmatchesfilter'] = 'Nada corresponde ao filtro.';
$string['notparticipating'] = 'Não participando';
$string['notranked'] = 'Não ranqueado';
$string['numberoflevels'] = 'Número de níveis';
$string['occasionally'] = 'Ocasionalmente';
$string['onlyparticipantscanaccessranking'] = 'Apenas aqueles que participam do ranqueamento podem acessar os rankings.';
$string['outofsync'] = 'Incompatibilidade de plugins XP';
$string['outofsyncexcessive'] = 'Fora de sincronia excessiva';
$string['outofsyncexcessiveinfo'] = 'O XP+ está excessivamente desatualizado em relação ao XP, o que pode causar problemas inesperados. No futuro, o XP+ será desativado automaticamente.';
$string['outofsyncinfo'] = 'Os plugins XP são incompatíveis entre si, o que pode causar problemas inesperados. No futuro, o XP+ será desativado automaticamente. É esperada a versão {$a->localxpversion} do Level Up XP+ (local_xp).';
$string['pagecurrentnotvisibletoviewers'] = 'Esta página atualmente não está visível para estudantes.';
$string['pagecurrentvisibletoviewers'] = 'Esta página está atualmente visível para estudantes.';
$string['pagesettings'] = 'Configurações da página';
$string['participant'] = 'Participante';
$string['participants'] = 'Participantes';
$string['participatesinleaderboard'] = 'Participa do ranking.';
$string['participatesnotinleaderboard'] = 'Não participa do ranking.';
$string['participatetolevelup'] = 'Participe do curso para ganhar pontos de experiência e passar de nível!';
$string['participating'] = 'Participando';
$string['perpagecolon'] = 'Por página:';
$string['pickaconditiontype'] = 'Escolha um tipo de condição';
$string['pluginavailabilityxpdesc'] = 'Este plugin permite que os professores restrinjam o acesso às atividades com base nos níveis dos alunos.';
$string['pluginenrolxpdesc'] = 'Este plugin permite a inscrição automática em cursos a partir do nível do aluno em outro curso.';
$string['pluginname'] = 'Level Up XP';
$string['pluginshortcodesdesc'] = 'Este plugin permite que os instrutores personalizem seu material incluindo elementos relacionados aos XP (pontos, nível, ranking…) no conteúdo, além de ocultar ou exibir itens com base no nível do aluno.';
$string['pluginsoutofsync'] = '__Incompatibilidade de plugins XP!__

Existem problemas de compatibilidade entre o Level Up XP e o Level Up XP+. No futuro, o Level Up XP+ será desativado automaticamente se não for compatível. Para evitar isso, entre em contato com o administrador do seu site. [Leia mais]({$a->url})';
$string['pluginxmaybeincompatible'] = 'Esta versão de {$a->name} ({$a->component}) pode ser incompatível com o Moodle {$a->version}.';
$string['pointsintimelinker'] = 'por';
$string['pointsperlevel'] = 'Pontos por nível';
$string['pointsrequired'] = 'Pontos requeridos';
$string['pointstoaward'] = 'Pontos a atribuir';
$string['pointstoaward_help'] = 'O número de pontos a ser atribuído quando a condição for atendida.';
$string['popupnotificationmessage'] = 'Mensagem de notificação de popup';
$string['popupnotificationmessagedesc'] = 'Mensagem opcional a ser exibida dentro da notificação de popup que parabeniza o usuário por atingir o nível.';
$string['potentialmoodleincompatibility'] = 'Possível incompatibilidade com o Moodle';
$string['previewpopupnotification'] = 'Visualizar notificação';
$string['privacy:metadata:log'] = 'Armazena um log de eventos';
$string['privacy:metadata:log:eventname'] = 'O nome do evento';
$string['privacy:metadata:log:time'] = 'A data em que aconteceu';
$string['privacy:metadata:log:userid'] = 'O usuário que ganhou os pontos';
$string['privacy:metadata:log:xp'] = 'Os pontos atribuídos para o evento';
$string['privacy:metadata:prefintro'] = 'Registra se o usuário descartou a introdução do bloco';
$string['privacy:metadata:prefladderpagesize'] = 'O tamanho de página preferido do usuário ao visualizar o ranking';
$string['privacy:metadata:preflevelup'] = 'Registra se o usuário deve ver a notificação de aumento de nível';
$string['privacy:metadata:prefnotices'] = 'Registra se o usuário fechou o aviso de suporte';
$string['privacy:metadata:prefseenpromo'] = 'Registra quando o usuário visualizou a página promocional';
$string['privacy:metadata:xp'] = 'Armazena os pontos e o nível dos usuários';
$string['privacy:metadata:xp:lvl'] = 'O nível do usuário';
$string['privacy:metadata:xp:userid'] = 'O usuário';
$string['privacy:metadata:xp:xp'] = 'Os pontos do usuário';
$string['privacy:path:addon'] = 'Add-on';
$string['privacy:path:level'] = 'Nível';
$string['privacy:path:logs'] = 'Logs';
$string['progress'] = 'Progresso';
$string['progressbar'] = 'Barra de progresso';
$string['promocheatguard'] = 'A proteção contra fraude não foi projetada para cobrir longos períodos de tempo . Por favor, considere atualizar para a versão <em>Level Up XP+</em>, a fim de desbloquear prazos maiores e outros recursos. <a href="{$a->url} ">Leia mais</a>.';
$string['promocontactintro'] = 'Contacte-nos para mais informações. Nós não mordemos e nós respondemos rapidamente!';
$string['promocontactus'] = 'Entrar em contato';
$string['promoemailusat'] = 'Nos envie um e-mail em _levelup@branchup.tech_.';
$string['promoerrorsendingemail'] = 'Ai! Não foi possível enviar a mensagem ... envie um e-mail diretamente para: {$a}. Obrigado!';
$string['promogetnow'] = 'Obtenha o XP+ agora!';
$string['promoifpreferemailusat'] = 'Psiu! Se preferir, envie-nos um e-mail diretamente para  _{$a}_.';
$string['promointro'] = 'Torne-se o mestre do jogo! Desbloqueie recursos adicionais e leve a gamificação a um novo nível com o Level Up XP+!';
$string['promointroinstalled'] = 'O plugin adicional _Level Up XP+_ está instalado no sistema e todos os recursos foram habilitados.';
$string['promorulesdidyouknow'] = 'Você sabia que com o <em>Level Up XP+</em> os estudantes podem receber pontos para <em>concluir os cursos</em> e <em>as atividades</em> ou, até mesmo, receber pontos de acordo com as suas <em>notas</em>? <a href="{$a->url}">Leia mais</a>.';
$string['promoyourmessagewassent'] = 'Obrigado, sua mensagem foi enviada. Nós entraremos em contato com você em breve';
$string['property:action'] = 'Ação do evento';
$string['property:component'] = 'Componente do evento';
$string['property:crud'] = 'CRUD do evento';
$string['property:eventname'] = 'Nome do evento';
$string['property:target'] = 'Alvo do evento';
$string['provisionstates'] = 'Provisionamento automático de usuários';
$string['provisionstates_desc'] = 'Por padrão, os usuários só aparecem no ranking (e no relatório em modo sitewide) depois de serem detectados pelo XP. O provisionamento de usuários é um recurso avançado que cria automaticamente entradas para usuários ausentes identificados de forma aproximada por sua função. Isso é feito periodicamente via uma tarefa agendada que, por padrão, roda diariamente. [Saiba mais](https://docs.levelup.plus/xp/docs/automatic-user-provisioning)';
$string['questpromonotice'] = 'Leve a gamificação para o próximo nível, descubra o [Level Up Quest]({$a->questurl}).';
$string['questreleasenotice'] = 'Leve a gamificação para o próximo nível, descubra o **Level Up Quest** 🥳. Transforme seus cursos em **aventuras emocionantes**, cheias de **estratégias de reengajamento** e **celebrações** 🤯! Confira o [site do Quest]({$a->questurl}) e nosso [post de lançamento aqui]({$a->questblogurl}). 👈';
$string['quickeditpoints'] = 'Edição rápida de pontos';
$string['rank'] = 'Classificação';
$string['ranked'] = 'Ranqueado';
$string['ranking'] = 'Ranking';
$string['ranking_help'] = 'A classificação é a posição absoluta do usuário atual no ranking. A classificação relativa é a diferença dos pontos de experiência entre um usuário e seus vizinhos.';
$string['reallydeleteuserstate'] = 'Excluir um usuário é útil apenas para removê-lo do ranking. Para outros motivos, recomendamos definir seus pontos como 0. Observe que excluí-lo não afeta sua capacidade de ganhar pontos no futuro.

Importante: ao usar o _Level Up XP_ em todo o site, excluí-lo fará com que desapareça do relatório, caso em que você não poderá reatribuir pontos a ele. No entanto, se você estiver usando o _Level Up XP_ por curso, o estudante ainda poderá aparecer no relatório se estiver inscrito no curso.

Você realmente deseja excluir os pontos deste usuário?';
$string['reallydeleteuserstateandlogs'] = 'Excluir um usuário o remove do ranking e remove todos os seus registros associados.

Remover registros pode permitir que um usuário ganhe novamente pontos por ações anteriores. Se sua intenção é apenas zerar os pontos, recomendamos definir seus pontos como 0. Observe que excluir um usuário não afeta sua capacidade de ganhar pontos no futuro.

Importante: ao usar o _Level Up XP_ em todo o site, excluí-lo fará com que desapareça do relatório, caso em que você não poderá reatribuir pontos a ele. No entanto, se você estiver usando o _Level Up XP_ por curso, o estudante ainda poderá aparecer no relatório se estiver inscrito no curso.

Você realmente deseja excluir os pontos e registros deste usuário?';
$string['reallyresetallcourselevelstodefaults'] = 'Tem certeza de que deseja redefinir os níveis em TODOS os cursos para os níveis padrão? Esta ação não é reversível.';
$string['reallyresetallcoursestodefaults'] = 'Tem certeza de que deseja redefinir as regras em TODOS os cursos para as regras padrão? Esta ação não é reversível.';
$string['reallyresetallcoursevisualstodefaults'] = 'Tem certeza de que deseja redefinir a aparência dos níveis em TODOS os cursos para a aparência padrão? Esta ação não é reversível.';
$string['reallyresetcourselevelstodefaults'] = 'Tem certeza de que deseja redefinir os níveis para os níveis padrão? Esta ação não é reversível.';
$string['reallyresetcourserulestodefaults'] = 'Tem certeza de que deseja redefinir as regras para as regras padrão? Esta ação não é reversível.';
$string['reallyresetcoursevisualstodefaults'] = 'Tem certeza de que deseja redefinir a aparência dos níveis para a aparência padrão? Esta ação não é reversível.';
$string['reallyresetdata'] = 'Tem certeza de que deseja redefinir os níveis e pontos de todos neste curso? Esta ação não é reversível.';
$string['reallyresetgroupdata'] = 'Deseja realmente zerar os níveis e pontos  para todos neste grupo?';
$string['reallyreverttopluginsdefaults'] = 'Deseja realmente redefinir as regras padrão para os parâmetros sugeridos pelo plugin? Esta ação não pode ser desfeita.';
$string['recentrewards'] = 'Recompensas recentes';
$string['recommended'] = 'Recomendado';
$string['recommendedplugins'] = 'Plugins recomendados';
$string['releasenotes'] = 'Notas da versão';
$string['remaining'] = 'restante(s)';
$string['removefilter'] = 'Remover filtro';
$string['reportisempty'] = 'O relatório está vazio. Os esstudantes ainda irão ganhar pontos.';
$string['reportisemptyenrolstudents'] = 'O relatório está vazio. Há estudantes inscritos neste curso?';
$string['requires'] = 'Requer';
$string['resetallcoursestodefaults'] = 'Redefinir todos os cursos para o padrão';
$string['resetallcoursestodefaultsintro'] = 'Clique no botão abaixo para redefinir todos os cursos para o padrão acima';
$string['resetcoursedata'] = 'Resetar os dados do curso';
$string['resetcourserulestodefaults'] = 'Redefinir as regras do curso para o padrão';
$string['resetgroupdata'] = 'Redefinir as informações do grupo';
$string['resetladderparticiptionofeveryone'] = 'Redefinir o status de participação de todos';
$string['resetlevelstodefaults'] = 'Redefinir níveis para padrões';
$string['resettodefaults'] = 'Redefinir para os padrões';
$string['resetvisualstodefaults'] = 'Redefinir aparência para padrões';
$string['resultsfilteredforn'] = 'Resultados filtrados por {$a}.';
$string['reverttopluginsdefaults'] = 'Redefinir para os padrões do plugin';
$string['reverttopluginsdefaultsintro'] = 'Use o botão abaixo se desejar reverter os parâmetros acima para os padrões do plugin. Isto não afeta as regras dos cursos existentes';
$string['reward'] = 'Recompensa';
$string['rule'] = 'Regra';
$string['rule:contains'] = 'contêm';
$string['rule:eq'] = 'é igual a';
$string['rule:eqs'] = 'é estritamente igual a';
$string['rule:gt'] = 'é maior que';
$string['rule:gte'] = 'é maior ou igual a';
$string['rule:lt'] = 'é menor que';
$string['rule:lte'] = 'é menor ou igual a';
$string['rule:regex'] = 'corresponde ao regex';
$string['ruleadded'] = 'A condição foi adicionada.';
$string['rulecm'] = 'Atividade ou recurso';
$string['rulecm_help'] = 'Essa condição é atendida quando o evento ocorre na atividade ou recurso especificado.';
$string['rulecmdesc'] = 'A atividade ou recurso é \'{$a->contextname}\'.';
$string['rulecmdescwithcourse'] = 'A atividade ou recurso é: \'{$a->contextname}\' em \'{$a->coursename}\'.';
$string['rulecminfo'] = 'Essa condição exige que a ação ocorra em uma atividade específica.';
$string['ruleevent'] = 'Evento específico';
$string['ruleeventdesc'] = 'O evento é \'{$a->eventname}\'';
$string['ruleeventinfo'] = 'Escolha a ação que os usuários devem executar na lista de eventos selecionados.';
$string['rulefilterany'] = 'Qualquer';
$string['rulefilteranycm'] = 'Qualquer atividade';
$string['rulefilteranycmdesc'] = 'Esta condição corresponderá a qualquer atividade.';
$string['rulefilteranycourse'] = 'Qualquer curso';
$string['rulefilteranycoursedesc'] = 'Esta condição corresponderá a qualquer curso.';
$string['rulefilteranydesc'] = 'Esta condição corresponde a qualquer coisa.';
$string['rulefilteranysection'] = 'Qualquer seção';
$string['rulefilteranysectiondesc'] = 'Esta condição corresponderá a qualquer seção.';
$string['rulefiltercm'] = 'Atividade específica';
$string['rulefiltercmdesc'] = 'Direcionar para uma atividade ou recurso específico no curso.';
$string['rulefiltercmname'] = 'Nome da atividade';
$string['rulefiltercmnamedesc'] = 'Condição baseada no nome da atividade.';
$string['rulefilternone'] = 'Nada';
$string['rulefiltersection'] = 'Seção específica';
$string['rulefiltersectiondesc'] = 'Direcionar para uma seção específica no curso.';
$string['rulefilterthiscourse'] = 'Este curso';
$string['rulefilterthiscoursedesc'] = 'Direcionar para o curso atual.';
$string['ruleproperty'] = 'Propriedades do evento';
$string['rulepropertydesc'] = 'A propriedade \'{$a->property}\' {$a->compare} \'{$a->value}\'.';
$string['rulepropertyinfo'] = 'Esta condição é para usuários avançados, com conhecimento técnico sobre os eventos do Moodle e suas propriedades.';
$string['ruleset'] = 'Conjunto de condições';
$string['ruleset:all'] = 'TODAS as condições são verdadeiras';
$string['ruleset:any'] = 'Quaisquer das condições são verdadeiras';
$string['ruleset:none'] = 'Nenhuma das condições é verdadeira';
$string['rulesetinfo'] = 'Combinar várias condições em uma.';
$string['rulesformhelp'] = '<p>Este plugin é feito usando os eventos para atribuir pontos por ações executadas pelos estudantes. Você pode usar o formulário abaixo para adicionar suas próprias regras e visualizar as padrões.</p>
<p>É aconselhável verificar o <a href="{$a->log}">log</a> do plugin para identificar quais eventos são disparados conforme você executa ações no curso, e também ler mais sobre esses eventos: <a href="{$a->list}">lista de todos os eventos</a>, <a href="{$a->doc}">documentação para desenvolvedores</a>.</p>
<p>Finalmente, por favor, note que o plugin sempre ignora:
<ul>
    <li>Ações executadas por administradores, visitantes ou usuários não logados.</li>
    <li>Ações executadas por usuários que não tem a capacidade <em>block/xp:earnxp</em>.</li>
    <li>Ações repetidas em um curto espaço de tempo, para prevenir trapaças.</li>
    <li>E os eventos que o nível educacional não é igual a <em>Participar</em>.</li>
</ul>
</p>';
$string['rulesscope'] = 'Escopo';
$string['rulesscope_help'] = 'O escopo das regras determina quando elas se aplicam.

As regras podem ser criadas em dois escopos: para todo o site e específicas por curso. Sempre que possível, as regras específicas por curso são avaliadas primeiro, seguidas pelas regras para todo o site. Essa abordagem permite que educadores criem regras gerais aplicáveis em todo o site e, depois, ajustem-nas para cursos individuais.

- Site inteiro: Essas regras são eficazes em todo o site, exceto quando existem regras específicas por curso.
- Curso: Essas regras se aplicam apenas dentro de um curso específico. Elas têm prioridade sobre as regras para o site inteiro.';
$string['ruletypecmcompletion'] = 'Conclusão da atividade';
$string['ruletypecmcompletiondesc'] = 'Conceder pontos quando uma atividade for marcada como concluída.';
$string['ruletypecoursecompletion'] = 'Conclusão do curso';
$string['ruletypecoursecompletiondesc'] = 'Conceder pontos quando um curso for marcado como concluído.';
$string['ruletypesectioncompletion'] = 'Conclusão da seção';
$string['ruletypesectioncompletiondesc'] = 'Conceder pontos quando uma seção do curso for marcada como concluída.';
$string['searchandselectcourse'] = 'Pesquise e selecione um curso';
$string['searchandselectmodule'] = 'Pesquise e selecione uma atividade ou recurso';
$string['selectcourse'] = 'Selecionar curso';
$string['send'] = 'Enviar';
$string['setpoints'] = 'Definir pontos';
$string['settingsoutdatedxppnotice'] = 'Se você está vendo as configurações abaixo, significa que uma versão desatualizada do XP+ está instalada. Por favor, solicite ao administrador que resolva o problema instalando a versão mais recente.';
$string['shortcode:xpbadge'] = 'O emblema que corresponde ao nível do usuário atual';
$string['shortcode:xpiflevel'] = 'Exibe o conteúdo quando o nível atual do usuário corresponde.';
$string['shortcode:xpiflevel_help'] = 'Consulte os exemplos abaixo para formatar este shortcode. Quando um nível é estritamente especificado, o conteúdo será exibido independentemente das outras regras. As regras _maior que_ and _menor que_ devem corresponder ao conteúdo a ser exibido. Tenha cuidado pois isso pode, às vezes, resultar em conteúdo nunca exibido! Observe que os professores ou usuários com recursos de edição, sempre verão tudo.

```
[xpiflevel 1 3 5]
    Exibido se o nível do usuário for exatamente 1, 3 ou 5.
[/xpiflevel]

[xpiflevel >3]
    Exibido se o nível do usuário for maior que 3.
[/xpiflevel]

[xpiflevel >=3]
    Exibido se o nível do usuário for maior ou igual a 3.
[/xpiflevel]

[xpiflevel >=10 <20 30]
    Exibido se o nível do usuário for maior ou igual a 10 E é estritamente menor que 20  OU é exatamente igual a 30.
[/xpiflevel]

[xpiflevel <=10 >=20]
    Nunca exibido porque o nível do usuário nunca pode ser menor ou igual a 10 E mais ou igual a 20.
[/xpiflevel]
```

Note que estes códigos de acesso NÃO PODEM ser aninhados uns dentro dos outros.';
$string['shortcode:xpladder'] = 'Exibir uma parte da tabela de classificação.';
$string['shortcode:xpladder_help'] = 'Por padrão, uma parte do ranking em torno do usuário atual será exibida.

```
[xpladder]
```

Para exibir os 10 melhores estudantes em vez dos vizinhos do usuário atual, defina o parâmetro `top`. Você pode, opcionalmente, definir o número de usuários a exibir, como em `top=20`.

```
[xpladder top]
[xpladder top=15]
```

Um link para o ranking completo será exibido automaticamente abaixo da tabela. Se você não quiser exibir esse link, adicione o argumento `hidelink`.

```
[xpladder hidelink]
```

Por padrão, a tabela não inclui a coluna de progresso que exibe a barra de progresso. Se essa coluna foi selecionada nas colunas adicionais nas configurações do ranking, você pode usar o argumento `withprogress` para exibi-la.

```
[xpladder withprogress]
```

Observe que, quando um curso estiver usando grupos, o ranking tentará adivinhar qual grupo exibir.';
$string['shortcode:xplevelname'] = 'Mostrar o nome do nível';
$string['shortcode:xplevelname_help'] = 'Por padrão, é exibido o nome do nível atual do usuário.
Outra opção é usar o argumento \'level\' para exibir o nome de um nível específico.

`` ``
[xplevelname]
[xplevelname level = 5]
`` ``

Se o argumento \'level\' for indicado e o nível não existir, nada será exibido.';
$string['shortcode:xppoints'] = 'Exibe um número de pontos formatados como pontos de experiência.';
$string['shortcode:xppoints_help'] = 'Por padrão, isso mostra o número de pontos do usuário atual. Alternativamente, você pode especificar um número para substituir esse valor.

A formatação dos pontos dependerá se um valor arbitrário é exibido ou os pontos do usuário atual. O argumento `plain` pode ser usado para remover qualquer formatação.

```
[xppoints]
[xppoints 500]
[xppoints 123 plain]
```';
$string['shortcode:xpprogressbar'] = 'Barra de progresso do usuário atual para o próximo nível.';
$string['sitewide'] = 'Sitewide';
$string['somefeaturesrequireotherplugins'] = 'Alguns recursos requerem a instalação de plugins adicionais.';
$string['someoneelse'] = 'Outra pessoa';
$string['somethinghappened'] = 'Algo aconteceu';
$string['taskadminnotices'] = 'Avisos administrativos';
$string['taskcollectionloggerpurge'] = 'Limpar registros de log';
$string['taskstateprovisioner'] = 'Provedor de estado';
$string['taskusagereport'] = 'Relatório de uso';
$string['teamleaderboard'] = 'Ranking de equipes';
$string['teamleaderboard_help'] = 'O ranking de equipes mostra um ranqueamento das equipes com base no total de pontos acumulados por seus membros.

As equipes podem ser formadas a partir de grupos de cursos ou coortes. Existem também opções para acomodar diferentes tamanhos de equipes.

[Saiba mais](https://docs.levelup.plus/xp/docs/how-to/setup-team-leaderboard/team-leaderboard?ref=blockxp_help)';
$string['teamleaderboardintro'] = 'O ranking de equipes é um ranqueamento de equipes baseado nos pontos de seus membros.';
$string['teams'] = 'Equipes';
$string['thankyou'] = 'Obrigado!';
$string['timebetweensameactions'] = 'Tempo requerido entre ações idênticas';
$string['timebetweensameactions_help'] = 'O tempo mínimo necessário antes que uma ação que já ocorreu anteriormente seja aceita novamente. Uma ação é considerada idêntica se foi realizada no mesmo contexto e objeto; ler uma postagem no fórum será considerado idêntico se a mesma postagem for lida novamente. Quando esse valor está vazio ou igual a zero, ele não se aplica.';
$string['timeformaxactions'] = 'Intervalo de tempo para max. ações';
$string['timeformaxactions_help'] = 'O intervalo de tempo (em segundos) durante o qual o usuário não deve exceder um número máximo de ações.';
$string['tinytimedays'] = '{$a}d';
$string['tinytimehours'] = '{$a}h';
$string['tinytimeminutes'] = '{$a}m';
$string['tinytimenow'] = 'agora';
$string['tinytimeolderyearformat'] = '%b %Y';
$string['tinytimeseconds'] = '{$a}s';
$string['tinytimeweeks'] = '{$a}semanas';
$string['tinytimewithinayearformat'] = '%b %e';
$string['total'] = 'Total';
$string['tryme'] = 'Experimente';
$string['unavailable'] = 'Indisponível';
$string['unknownactivitya'] = 'Atividade desconhecida ({$a})';
$string['unknownbadgea'] = 'Distintivo desconhecido ({$a})';
$string['unknownconditiona'] = 'Condição desconhecida ({$a})';
$string['unknowneventa'] = 'Evento desconhecido ({$a})';
$string['unknownsectiona'] = 'Seção desconhecida ({$a})';
$string['unknowntypea'] = 'Tipo desconhecido ({$a})';
$string['unlockfeaturewithxpplus'] = 'Desbloqueie este recurso com XP+. <a href="{$a}">Saiba mais</a>';
$string['unstableversioninstalled'] = 'Versão instável instalada';
$string['unstableversioninstalledinfo'] = 'Esta versão do Level Up XP (block_xp) ainda está em desenvolvimento e é considerada instável. Por favor, utilize uma versão oficial.';
$string['updateandpreview'] = 'Atualizar e visualizar';
$string['upgradingplugins'] = 'Atualizando os plugins';
$string['urlaccessdeprecated'] = 'O acesso através desta URL está obsoleto; por favor, atualize seus links.';
$string['usagereport'] = 'Compartilhar relatório de uso';
$string['usagereport_desc'] = 'Compartilhe periodicamente informações de uso anônimas com os desenvolvedores do plugin. Essas informações ajudarão a entender melhor como o plugin está sendo usado e influenciarão seu desenvolvimento. As informações compartilhadas contêm dados básicos sobre o site Moodle (URL, versão) e informações de uso sobre o plugin (número de usuários que ganham pontos, visão geral das configurações, regras usadas...).';
$string['usealgo'] = 'Usar o algoritmo';
$string['usecustomlevelbadges'] = 'Usar emblemas de níveis personalizados';
$string['usecustomlevelbadges_help'] = 'Quando setado para sim, você deve fornecer uma imagem para cada nível.';
$string['userladderparticipation'] = 'Participação no ranking';
$string['userladderparticipation_help'] = 'Determina se o usuário está atualmente participando do ranqueamento. Isso não afeta o ranking de equipes.';
$string['userladderparticipationlocked'] = 'Travar participação até';
$string['userladderparticipationlocked_help'] = 'Data a partir da qual o usuário poderá alterar sua preferência de participação.';
$string['usingalgo'] = 'Usando algoritmo';
$string['value'] = 'Valor';
$string['valuessaved'] = 'Os valores foram salvos com sucesso.';
$string['viewas'] = 'Visualizar como';
$string['viewlogs'] = 'Ver logs';
$string['viewtheladder'] = 'Visualizar o ranking';
$string['visualsintro'] = 'Personalize a aparência dos níveis e o significado dos pontos.';
$string['wewillreplyat'] = 'Vamos responder em: _ {$a} _.';
$string['when'] = 'Quando';
$string['wherearexpused'] = 'Onde os pontos são usados?';
$string['wherearexpused_desc'] = 'Quando definido como "Nos cursos", os pontos ganhos contarão apenas para o curso em que o bloco foi adicionado. Quando definido como "Para todo o site", o usuário "subirá de nível" no site como um todo, utilizando todos os pontos ganhos em qualquer curso.';
$string['whoops'] = 'Ooops!';
$string['xp'] = 'Pontos de experiência';
$string['xp:addinstance'] = 'Adicionar um novo bloco';
$string['xp:earnxp'] = 'Ganhando pontos';
$string['xp:manage'] = 'Gerenciar todos os aspectos dos pontos de experiência';
$string['xp:myaddinstance'] = 'Adicionar o bloco ao meu painel';
$string['xp:view'] = 'Visualizar o bloco e páginas relacionadas';
$string['xp:viewlogs'] = 'Acessar os logs';
$string['xp:viewreport'] = 'Ver o relatório';
$string['xpgaindisabled'] = 'Ganho de pontos desabilitado';
$string['xpplusrequired'] = 'XP+ necessário';
$string['xprequired'] = 'Pontos necessários';
$string['xptogo'] = '[[{$a}]] para ir';
$string['youleveledupexcl'] = 'Você subiu de nível!';
$string['youreachedlevel'] = 'Você alcançou o nível:';
$string['youreachedlevela'] = 'Você alcançou o nível {$a}!';
$string['yourmessage'] = 'Sua mensagem';
$string['yourownrules'] = 'Suas prórpias regras';
