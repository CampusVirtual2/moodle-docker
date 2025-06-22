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
 * Strings for component 'local_geniai', language 'pt_br', version '4.1'.
 *
 * @package     local_geniai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Chave da API do OpenAI';
$string['apikey_desc'] = 'A chave de API da sua conta OpenAI';
$string['case'] = 'Casos de Uso';
$string['caseuse_balanced'] = 'Respostas Balanceadas => Temperatura 0.5 - 0.7, Top_p 0.7';
$string['caseuse_chatbot'] = 'Chatbot => Temperatura 0.2 - 0.6, Top_p 0.8';
$string['caseuse_creative'] = 'Geração Criativa => Temperatura 0.7 - 1.0, Top_p 0.8';
$string['caseuse_exploration'] = 'Explorar Opções => Temperatura 0.8 - 1.0, Top_p 0.9';
$string['caseuse_formal'] = 'Tom Formal => Temperatura 0.3 - 0.5, Top_p 0.6';
$string['caseuse_informal'] = 'Tom Informal => Temperatura 0.7 - 0.9, Top_p 0.8';
$string['caseuse_precise'] = 'Respostas Precisas => Temperatura 0.0 - 0.3, Top_p 1.0';
$string['clear_history_title'] = 'Limpar todo o histórico';
$string['close_title'] = 'Fechar chat';
$string['course_home'] = 'O estudante não está no curso e seu nome é "{$a->userfullname}".';
$string['course_user'] = 'O estudante está no curso "{$a->course}" e seu nome é "{$a->userfullname}"';
$string['frequency_penalty'] = 'Penalidade de Frequência';
$string['frequency_penalty_desc'] = 'Este parâmetro é usado para desencorajar o modelo de repetir as mesmas palavras ou frases com muita frequência no texto gerado. É um valor adicionado à probabilidade logarítmica de um token toda vez que ele ocorre no texto gerado. Uma penalidade de frequência maior fará com que o modelo seja mais conservador ao usar tokens repetidos.';
$string['geniai:manage'] = 'Gerenciar GeniAI';
$string['geniai:view'] = 'Ver GeniAI';
$string['geniainame'] = 'Nome do Assistente';
$string['geniainame_desc'] = 'Defina o nome do seu assistente';
$string['h5p-accordion-desc'] = 'Crie um Glossário permitindo que estudantes acessem rapidamente respostas sem serem sobrecarregados por texto excessivo.';
$string['h5p-accordion-title'] = 'Glossário';
$string['h5p-advancedtext-desc'] = 'Crie um livro digital a partir do seu conteúdo, organizando-o em capítulos de forma lógica e envolvente para garantir uma divisão coesa e cativante do material.';
$string['h5p-advancedtext-title'] = 'Livro Digital';
$string['h5p-block-title'] = 'Título do Bloco';
$string['h5p-create'] = 'Criar H5P com GeniAI';
$string['h5p-create-new'] = 'Criar novo H5P com GeniAI';
$string['h5p-create-this'] = 'Criar com este recurso';
$string['h5p-create-title'] = 'Título do H5P';
$string['h5p-create-title-desc'] = 'Defina o título principal para o conteúdo H5P a ser exibido aos usuários na interface.';
$string['h5p-createpage-title'] = 'Criar novo {$a}';
$string['h5p-crossword-desc'] = 'Crie um jogo de palavras cruzadas interativo para envolver os estudantes, usando palavras-chave do seu conteúdo para promover um aprendizado divertido e dinâmico.';
$string['h5p-crossword-title'] = 'Palavras Cruzadas';
$string['h5p-delete-success'] = 'H5P excluído com sucesso!';
$string['h5p-dialogcards-desc'] = 'Crie cartões de memória que funcionam como exercícios interativos para ajudar os estudantes a memorizar palavras, frases ou conceitos-chave de textos. Na frente de cada cartão, há uma dica ou pista, e ao virá-lo, o estudante revela a informação correspondente. Esses cartões podem ser usados no aprendizado de idiomas, resolução de problemas de matemática ou para ajudar os estudantes a memorizar fatos importantes como eventos históricos, fórmulas ou nomes.';
$string['h5p-dialogcards-title'] = 'Cartões de Memória';
$string['h5p-dragtext-desc'] = 'Crie um jogo \'Arraste as Palavras\', onde o estudante deve arrastar a parte faltante do texto para o seu lugar correto, formando uma expressão completa. Este jogo pode ser usado para avaliar se o estudante lembra o conteúdo que leu ou entende o que foi abordado. Além disso, ajuda o estudante a refletir mais profundamente sobre o texto, promovendo uma melhor assimilação do conteúdo.';
$string['h5p-dragtext-title'] = 'Jogo Arraste as Palavras';
$string['h5p-example'] = 'Ver exemplo';
$string['h5p-findthewords-desc'] = 'Crie um jogo de caça-palavras onde os estudantes devem encontrar e selecionar palavras em uma grade com base em uma lista fornecida.';
$string['h5p-findthewords-title'] = 'Jogo de Caça-palavras';
$string['h5p-interactivebook-desc'] = 'Crie um Livro Interativo que combine vários conteúdos interativos, como vídeos interativos, glossários, quizzes, atividades de arrastar e soltar, palavras cruzadas, caça-palavras e mais, organizados em várias páginas. Adicione um resumo ao final, mostrando a pontuação total que o estudante obteve ao longo do livro.';
$string['h5p-interactivebook-title'] = 'Livro Interativo';
$string['h5p-interactivevideo-desc'] = 'Crie um vídeo interativo com capítulos e um glossário destacando os pontos-chave do conteúdo. Ao final, adicione um resumo interativo para reforçar o aprendizado e revisar os tópicos abordados.';
$string['h5p-interactivevideo-title'] = 'Vídeo Interativo';
$string['h5p-manager'] = 'Gerenciar H5P com GeniAI';
$string['h5p-manager-scorm'] = 'Gerenciar SCORM com GeniAI';
$string['h5p-next-step'] = 'Próximo passo';
$string['h5p-no-apikey'] = '<p>Configurar a chave de API do ChatGPT é necessário para que o sistema de criação de contas funcione corretamente. Isso permitirá que o sistema se comunique com o ChatGPT para realizar as operações necessárias durante o processo de criação de contas.<p><p><a href="{$a}">Clique aqui para configurar a chave de API do ChatGPT.</a></p>';
$string['h5p-page-title'] = 'Criar um H5P com GeniAI';
$string['h5p-questionset-desc'] = 'Crie um Conjunto de Perguntas que permita aos estudantes resolver uma sequência de perguntas diversificadas, incluindo tipos como múltipla escolha e verdadeiro/falso, oferecendo uma experiência interativa e desafiadora.';
$string['h5p-questionset-title'] = 'Questionários';
$string['h5p-readmore'] = '...mais';
$string['h5p-return'] = 'Voltar ao Banco de Conteúdo';
$string['h5p-title'] = 'Gerenciar Banco de Conteúdo GeniAI';
$string['max_tokens'] = 'Máximo de palavras na resposta';
$string['max_tokens_desc'] = 'Máximo de número de palavras que podem ser geradas em cada solicitação.';
$string['message_01'] = 'Olá, {$a}! 🌟';
$string['message_02_course'] = 'Bem-vindo ao curso {$a->coursename} no Moodle {$a->moodlename}!
Eu sou {$a->geniainame}, e estou aqui para tornar sua jornada de aprendizagem a mais incrível possível.
Como posso ajudar você hoje? 🌟📚';
$string['message_02_geniai'] = 'Olá! Eu sou {$a}, e estou aqui para ajudar você. Se preferir, pode me enviar uma mensagem de áudio, e eu responderei em áudio também. Se preferir escrever, responderei em texto. Fique à vontade para escolher o que preferir!';
$string['message_02_home'] = 'Eu sou {$a}, e estou aqui para tornar sua jornada de aprendizagem a mais incrível possível.
Como posso ajudar você hoje? 🌟📚';
$string['mode'] = 'Modo de Uso';
$string['mode_desc'] = 'Defina o modo de uso para o balão que você deseja';
$string['mode_name_assistant'] = 'Assistente Moodle';
$string['mode_name_geniai'] = 'Tutor GeniAI';
$string['mode_name_none'] = 'Sem balão de chat';
$string['model'] = 'O Modelo da API';
$string['model_desc'] = 'O modelo da API a ser executado no OpenAI. Os valores disponíveis estão no <a href="https://platform.openai.com/docs/models/overview" target="_blank">site do OpenAI</a><br>
* <strong>gpt-4</strong>: Muito mais poderoso, um pouco mais caro, demora um pouco mais para responder e requer um <a href="https://help.openai.com/en/articles/7102672-how-can-i-access-gpt-4" target="_blank">pré-pagamento de $1</a> para testar.<br>
* <strong>gpt-4o-mini</strong>:  Menos poderoso que o gpt-4, mas é mais rápido e mais barato. Não é necessário pré-pagamento.';
$string['modulename'] = 'GeniAI';
$string['modules'] = 'Módulos para ocultar de {$a}';
$string['modules_desc'] = 'Esta lista contém os módulos que não devem ser disponibilizados para os estudantes, garantindo que não sejam usados em exercícios.';
$string['online'] = 'Online';
$string['pluginname'] = 'GeniAI';
$string['presence_penalty'] = 'Penalidade de Presença';
$string['presence_penalty_desc'] = 'Este parâmetro é usado para incentivar o modelo a incluir uma variedade de tokens no texto gerado. É um valor subtraído da probabilidade logarítmica de um token sempre que ele é gerado. Um valor maior de penalidade de presença tornará o modelo mais propenso a gerar tokens ainda não incluídos no texto gerado.';
$string['privacy:metadata'] = 'O plugin GeniAI armazena o histórico de conversas e transmite apenas o nome completo, nome do curso e URL para a OpenAI, sem compartilhar outros dados pessoais.';
$string['report_completion_tokens'] = 'Número de Tokens recebidos';
$string['report_datecreated'] = 'Dia';
$string['report_filename'] = 'Relatório de Uso do GPT Assistence';
$string['report_info'] = '<p>No relatório apresentado, apenas as primeiras 100 linhas estão disponíveis. Para acessar todos os registros, por favor, baixe o documento completo.</p><p>Quanto aos tokens, uma regra geral é que um token corresponde aproximadamente a 4 caracteres de texto comum em inglês. Isso equivale a cerca de ¾ de uma palavra (portanto, 100 tokens ~= 75 palavras). Saiba mais na página de <a href="https://platform.openai.com/tokenizer" target="_blank">Tokenização de Modelos de Linguagem</a>.</p>';
$string['report_model'] = 'Modelo ChatGPT';
$string['report_prompt_tokens'] = 'Número de Tokens Enviados';
$string['report_title'] = 'Relatório';
$string['send_message'] = 'Enviar Mensagem';
$string['settings'] = 'Configurar GeniAI';
$string['settings_casedesc'] = 'Os parâmetros de temperatura e Top_p definidos para cada cenário, como geração de texto e código, redação criativa, chatbot, geração de comentários textuais, análise de dados e escrita exploratória. Cada configuração impacta a criatividade e coerência do modelo na geração de conteúdo.<br><br>Veja a tabela abaixo para orientações sobre o uso de Temperatura e Top_p:<br>';
$string['settings_casedesc_balancedresp'] = 'Respostas Balanceadas';
$string['settings_casedesc_balancedresp_desc'] = 'Respostas equilibradas entre precisão e criatividade. Ideal para conversas naturais e amigáveis.';
$string['settings_casedesc_caseuse'] = 'Caso de Uso';
$string['settings_casedesc_chatbot'] = 'Chatbot';
$string['settings_casedesc_chatbot_desc'] = 'Respostas rápidas, consistentes e contextuais para interação em tempo real com os usuários.';
$string['settings_casedesc_creativegen'] = 'Geração Criativa';
$string['settings_casedesc_creativegen_desc'] = 'Produz respostas mais criativas, originais ou exploratórias. Útil para brainstorming ou contação de histórias.';
$string['settings_casedesc_description'] = 'Descrição';
$string['settings_casedesc_formaltones'] = 'Tons Formais';
$string['settings_casedesc_formaltones_desc'] = 'Cria textos mais formais ou técnicos com menos variação criativa.';
$string['settings_casedesc_optionexplore'] = 'Explorar Opções';
$string['settings_casedesc_optionexplore_desc'] = 'Gera várias respostas alternativas para considerar diferentes abordagens para uma questão.';
$string['settings_casedesc_preciseresp'] = 'Respostas Precisas';
$string['settings_casedesc_preciseresp_desc'] = 'Máxima precisão e previsibilidade. Recomendado para tarefas técnicas ou informativas.';
$string['settings_casedesc_relaxedtones'] = 'Tons Relaxados';
$string['settings_casedesc_relaxedtones_desc'] = 'Gera textos mais leves e informais com uma abordagem criativa e amigável.';
$string['settings_casedesc_temperature'] = 'Temperatura';
$string['settings_casedesc_top_p'] = 'Top_p';
$string['talk_geniai'] = 'Fale com {$a} aqui';
$string['url_moodle'] = 'A URL do Moodle é "{$a->wwwroot}" e o nome do Moodle é "{$a->fullname}"';
$string['voice'] = 'Voz usada na resposta de áudio';
$string['write_message'] = 'Escreva uma mensagem...';
