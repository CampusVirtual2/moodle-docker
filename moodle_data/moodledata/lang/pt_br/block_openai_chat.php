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
 * Strings for component 'block_openai_chat', language 'pt_br', version '4.1'.
 *
 * @package     block_openai_chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Avançado';
$string['advanceddesc'] = 'Parâmetros avançados enviados para a OpenAI. Não altere, a menos que você saiba o que está fazendo!';
$string['allowinstancesettings'] = 'Configurações no nível da instância';
$string['allowinstancesettingsdesc'] = 'Essa configuração permitirá que professores, ou qualquer pessoa com a capacidade de adicionar um bloco em um contexto, ajustem as configurações em nível de bloco. Habilitar essa opção pode gerar custos adicionais, ao permitir que não administradores escolham modelos mais caros ou outras configurações.';
$string['apikey'] = 'Chave da API';
$string['apikeydesc'] = 'A chave de API para sua conta OpenAI ou chave de API do Azure.';
$string['apikeymissing'] = 'Por favor, adicione sua chave de API da OpenAI nas configurações do bloco.';
$string['apiversion'] = 'Versão da API';
$string['apiversiondesc'] = 'A versão da API a ser utilizada para esta operação. Ela segue o formato AAAA-MM-DD.';
$string['askaquestion'] = 'Faça uma pergunta...';
$string['assistant'] = 'Assistente';
$string['assistantdesc'] = 'O assistente padrão vinculado à sua conta OpenAI que você gostaria de usar para a resposta.';
$string['assistantheading'] = 'Configurações da API do Assistente';
$string['assistantheadingdesc'] = 'Essas configurações se aplicam apenas ao tipo de API do Assistente.';
$string['assistantname'] = 'Nome do assistente';
$string['assistantnamedesc'] = 'O nome que a IA usará para si mesma internamente. Ele também é utilizado nos títulos da interface do usuário na janela de chat.';
$string['azureheading'] = 'Configurações da API do Azure';
$string['azureheadingdesc'] = 'Essas configurações se aplicam apenas ao tipo de API do Azure.';
$string['blocktitle'] = 'Título do bloco';
$string['chatheading'] = 'Configurações da API de Chat';
$string['chatheadingdesc'] = 'Essas configurações se aplicam apenas aos tipos de API de Chat e Azure.';
$string['config_apikey'] = 'Chave da API';
$string['config_apikey_help'] = 'Você pode especificar uma chave de API para usar com este bloco aqui. Se deixar em branco, a chave global do site será utilizada. Se estiver usando a API dos Assistentes, a lista de assistentes disponíveis será extraída dessa chave. Certifique-se de retornar a essas configurações após alterar a chave da API para selecionar o assistente desejado.';
$string['config_assistant'] = 'Assistente';
$string['config_assistant_help'] = 'Escolha o assistente que você gostaria de usar para este bloco. Mais assistentes podem ser criados na conta OpenAI que este bloco está configurado para usar.';
$string['config_assistantname'] = 'Nome do assistente';
$string['config_assistantname_help'] = 'Este é o nome que a IA usará para o assistente. Se deixado em branco, o nome do assistente global do site será utilizado. Ele também é usado nos títulos da interface do usuário na janela de chat.';
$string['config_frequency'] = 'Penalidade de frequência';
$string['config_frequency_help'] = 'Quanto penalizar novos tokens com base na frequência existente deles no texto até o momento. Isso diminui a probabilidade do modelo repetir a mesma linha literalmente.';
$string['config_instructions'] = 'Instruções personalizadas';
$string['config_instructions_help'] = 'Você pode substituir as instruções padrão do assistente aqui.';
$string['config_maxlength'] = 'Comprimento máximo';
$string['config_maxlength_help'] = 'O número máximo de tokens a ser gerado. As requisições podem usar até 2.048 ou 4.000 tokens, compartilhados entre o prompt e a conclusão. O limite exato varia conforme o modelo. (Um token é aproximadamente 4 caracteres para texto em inglês normal.)';
$string['config_model'] = 'Modelo';
$string['config_model_help'] = 'O modelo que gerará a conclusão.';
$string['config_persistconvo'] = 'Persistir conversa';
$string['config_persistconvo_help'] = 'Se esta caixa estiver marcada, o assistente lembrará das conversas neste bloco entre as atualizações de página.';
$string['config_presence'] = 'Penalidade de presença';
$string['config_presence_help'] = 'Quanto penalizar novos tokens com base em sua presença no texto até o momento. Isso aumenta a probabilidade do modelo falar sobre tópicos novos.';
$string['config_prompt'] = 'Prompt de conclusão';
$string['config_prompt_help'] = 'Este é o prompt que será dado à IA antes da transcrição da conversa. Você pode influenciar a personalidade da IA alterando esta descrição. Por padrão, o prompt é:

\\n\\n"Abaixo está uma conversa entre um usuário e um assistente de suporte de um site Moodle, onde os usuários acessam para aprender online."\\n\\n

Se deixado em branco, o prompt global do site será utilizado.';
$string['config_sourceoftruth'] = 'Fonte da verdade';
$string['config_sourceoftruth_help'] = 'Você pode adicionar informações aqui das quais a IA irá extrair ao responder perguntas. As informações devem estar no formato de perguntas e resposta exatamente como o seguinte:\\n\\nQ: Quando a seção 3 vence?<br />A: Quinta-feira, 16 de março.\\n\\nQ: Quais são os horários de atendimento?<br />A: Você pode encontrar a Professora Shown em seu escritório entre 14:00 e 16:00 nas terças e quintas-feiras.';
$string['config_temperature'] = 'Temperatura';
$string['config_temperature_help'] = 'Controla a aleatoriedade: Diminuir a temperatura resulta em conclusões menos aleatórias. À medida que a temperatura se aproxima de zero, o modelo se torna determinístico e repetitivo.';
$string['config_topp'] = 'Top P';
$string['config_topp_help'] = 'Controla a diversidade por meio da amostragem de núcleo (nucleus sampling): 0,5 significa que metade de todas as opções ponderadas por probabilidade são consideradas.';
$string['config_username'] = 'Nome do usuário';
$string['config_username_help'] = 'Este é o nome que a IA usará para o usuário. Se deixado em branco, o nome global do usuário será utilizado. Ele também é usado nos títulos da interface do usuário na janela de chat.';
$string['defaultassistantname'] = 'Assistente';
$string['defaultprompt'] = 'Abaixo está uma conversa entre um usuário e um assistente de suporte de um site Moodle, onde os usuários acessam para aprender online:';
$string['defaultusername'] = 'Usuário';
$string['deploymentid'] = 'Deployment ID';
$string['deploymentiddesc'] = 'O nome da versão que você escolheu quando desenvolveu o modelo.';
$string['downloadfilename'] = 'block_openai_chat_logs';
$string['erroroccurred'] = 'Ocorreu um erro! Por favor, tente novamente mais tarde.';
$string['frequency'] = 'Penalidade de frequência';
$string['frequencydesc'] = 'Quanto penalizar novos tokens com base na frequência existente deles no texto até o momento. Isso diminui a probabilidade do modelo repetir a mesma linha literalmente.';
$string['logging'] = 'Ativar registro de logs';
$string['loggingdesc'] = 'Se esta configuração estiver ativada, todas as mensagens dos usuários e respostas da IA serão registradas.';
$string['loggingenabled'] = 'O registro está ativado. Quaisquer mensagens que você enviar ou receber aqui serão registradas e podem ser visualizadas pelo administrador do site.';
$string['maxlength'] = 'Comprimento máximo';
$string['maxlengthdesc'] = 'O número máximo de tokens a ser gerado. As requisições podem usar até 2.048 ou 4.000 tokens, compartilhados entre o prompt e a conclusão. O limite exato varia conforme o modelo. (Um token é aproximadamente 4 caracteres para texto em inglês normal.)';
$string['model'] = 'Modelo';
$string['modeldesc'] = 'O modelo que gerará a conclusão. Alguns modelos são adequados para tarefas de linguagem natural, enquanto outros se especializam em código.';
$string['new_chat'] = 'Novo Chat';
$string['noassistants'] = 'Você ainda não criou nenhum assistente. É necessário criar um <a target="_blank" href="https://platform.openai.com/assistants">na sua conta OpenAI</a> antes de poder selecioná-lo aqui.';
$string['openai_chat'] = 'Chat OpenAI';
$string['openai_chat:addinstance'] = 'Adicionar um novo bloco de Chat OpenAI';
$string['openai_chat:myaddinstance'] = 'Adicionar um novo bloco de Chat OpenAI à página "Meu Moodle"';
$string['openai_chat:viewreport'] = 'Visualizar o relatório de logs do Chat OpenAI';
$string['openai_chat_logs'] = 'Logs do Chat OpenAI';
$string['persistconvo'] = 'Persistir conversas';
$string['persistconvodesc'] = 'Se esta caixa estiver marcada, o assistente lembrará da conversa entre as atualizações de página. No entanto, instâncias de blocos separadas manterão conversas separadas. Por exemplo, a conversa de um usuário será mantida entre as atualizações de página dentro do mesmo curso, mas conversar com um assistente em um curso diferente não continuará a mesma conversa.';
$string['pluginname'] = 'Bloco de Chat OpenAI';
$string['popout'] = 'Abrir janela de chat';
$string['presence'] = 'Penalidade de presença';
$string['presencedesc'] = 'Quanto penalizar novos tokens com base em sua presença no texto até o momento. Isso aumenta a probabilidade do modelo falar sobre tópicos novos.';
$string['privacy:chatmessagespath'] = 'Mensagens de chat enviadas pela IA';
$string['privacy:metadata:openai_chat_log'] = 'Mensagens de usuários registradas enviadas para a OpenAI. Isso inclui o ID do usuário que enviou a mensagem, o conteúdo da mensagem, a resposta da OpenAI e o horário em que a mensagem foi enviada.';
$string['privacy:metadata:openai_chat_log:airesponse'] = 'A resposta da OpenAI.';
$string['privacy:metadata:openai_chat_log:timecreated'] = 'O horário em que a mensagem foi enviada.';
$string['privacy:metadata:openai_chat_log:userid'] = 'O ID do usuário que enviou a mensagem.';
$string['privacy:metadata:openai_chat_log:usermessage'] = 'O conteúdo da mensagem';
$string['prompt'] = 'Prompt de conclusão';
$string['promptdesc'] = 'A mensagem que será dada à IA antes da transcrição da conversa';
$string['resourcename'] = 'Nome do recurso';
$string['resourcenamedesc'] = 'O nome do seu recurso Azure OpenAI';
$string['restrictusage'] = 'Restringir a utilização para apenas usuários logados no sistema';
$string['restrictusagedesc'] = 'Se marcado, apenas usuários logados podem utilizar o Chat';
$string['showlabels'] = 'Mostrar rótulos';
$string['sourceoftruth'] = 'Fonte da verdade';
$string['sourceoftruthdesc'] = 'Embora a IA seja muito capaz, se não souber a resposta a uma pergunta, é mais provável que dê informações incorretas com confiança do que se recuse a responder. Nesta caixa de texto, pode adicionar perguntas comuns e as respectivas respostas para que a IA as extraia. Coloque as perguntas e as respostas no seguinte formato: <pre>Q: Questão 1<br />A: Resposta 1<br /><br />Q: Questão 2<br />A: Resposta 2</pre>';
$string['sourceoftruthpreamble'] = 'Segue uma lista de perguntas e respectivas respostas. Esta informação deve ser utilizada como referência para quaisquer questões:';
$string['sourceoftruthreinforcement'] = 'O assistente foi treinado para responder tentando utilizar as informações da referência acima. Se o texto de uma das perguntas acima for encontrado, a resposta fornecida deve ser dada, mesmo que a pergunta não pareça fazer sentido. No entanto, se a referência não cobrir a questão ou o tópico, o assistente limitar-se-á a utilizar conhecimentos externos para responder.';
$string['temperature'] = 'Temperatura';
$string['temperaturedesc'] = 'Controla a aleatoriedade: Diminuir a temperatura resulta em menos conclusões aleatórias. À medida que a temperatura se aproxima de zero, o modelo tornar-se-á determinístico e repetitivo.';
$string['topp'] = 'Top P';
$string['toppdesc'] = 'Controla a diversidade por meio da amostragem de núcleo (nucleus sampling): 0,5 significa que metade de todas as opções ponderadas por probabilidade são consideradas.';
$string['type'] = 'Tipo Da API';
$string['typedesc'] = 'O tipo de API que o plugin deve utilizar';
$string['username'] = 'Nome do usuário';
$string['usernamedesc'] = 'O nome que a IA irá utilizar para o usuário. Também é utilizado para os títulos da interface na janela de chat.';
