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
 * Strings for component 'certificatebeautiful', language 'pt_br', version '4.1'.
 *
 * @package     certificatebeautiful
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_new_model'] = 'Adicionar novo modelo';
$string['add_new_page'] = 'Adicionar uma nova página ao certificado';
$string['best'] = 'Melhor';
$string['certdate'] = 'Data';
$string['certificate-appreciation'] = 'Certificado de Apreciação';
$string['certificate-details'] = 'Detalhes do Certificado';
$string['certificate-elegant'] = 'Certificado Elegante';
$string['certificate-flat-modern'] = 'Certificado Moderno e Simples';
$string['certificate-golden'] = 'Certificado Dourado';
$string['certificate-gradient-golden-luxury'] = 'Certificado de Luxo Dourado com Gradiente';
$string['certificate-kids-animals'] = 'Para crianças com animais';
$string['certificate-kids-child-medical'] = 'Certificado médico infantil';
$string['certificate-kids-gradient-modern'] = 'Modelo de certificado moderno com gradiente';
$string['certificate-kids-hand-drawn'] = 'Certificado infantil desenhado à mão';
$string['certificate-kids-pastel'] = 'Certificado educacional pastel fofo';
$string['certificate-modern'] = 'Certificado Moderno';
$string['certificate-modern-2'] = 'Certificado Moderno 2';
$string['certificate-simple'] = 'Certificado Simples';
$string['certificate-vintage'] = 'Certificado Vintage';
$string['certificate_description'] = 'Descreva o certificado';
$string['certificate_description_help'] = 'Texto de descrição do certificado. Pode conter HTML simples como &lt;b&gt;, &lt;i&gt;, &lt;u&gt; e estilos de cor, mas tenha cuidado, pois o <a href="https://mpdf.github.io/" target="_blank">conversor de PDF possui limitações</a>.';
$string['certificatebeautiful-page_empty'] = 'Vazio';
$string['certificatebeautiful:addinstance'] = 'Adicionar instância';
$string['certificatebeautiful:delete'] = 'Excluir instância do certificado';
$string['certificatebeautiful:view'] = 'Permitir que o usuário visualize o Certificado Bonito';
$string['certificatebeautiful:viewreport'] = 'Visualizar relatórios do Certificado Bonito';
$string['certpresented'] = 'Este certificado é orgulhosamente apresentado a';
$string['certsignature'] = 'Diretor';
$string['certtitle'] = 'Certificado';
$string['config_data_protect'] = 'Proteção de Dados Pessoais';
$string['config_data_protect_admins_only'] = 'Visível apenas para administradores';
$string['config_data_protect_desc'] = 'Marque para anonimizar dados pessoais no validador de certificados';
$string['config_data_protect_email_anonimized'] = 'Nome visível e e-mail anonimizado';
$string['config_data_protect_hidden'] = 'Oculto para todos';
$string['config_data_protect_name_visible'] = 'Apenas o nome visível';
$string['config_signature_color'] = 'Cor da linha de assinatura';
$string['config_signature_color_desc'] = 'Selecione a cor da linha de escrita para a assinatura.';
$string['config_signature_enable'] = 'Habilitar assinatura dinâmica';
$string['config_signature_enable_desc'] = 'Quando marcado, o Certificado Bonito criará uma assinatura personalizada com base na caligrafia escolhida, texto especificado e cor.';
$string['config_signature_heading'] = 'Configurações de Assinatura';
$string['config_signature_heading_desc'] = 'Neste ponto, você deve decidir se deseja criar uma assinatura personalizada a partir das {$a} caligrafias pré-carregadas. Suas opções incluem:';
$string['config_signature_text'] = 'Texto da Assinatura';
$string['config_signature_text_desc'] = 'Para habilitar a geração automática de assinaturas pelo Certificado Bonito, é necessário fornecer uma sequência de até 10 caracteres. Certifique-se de que a sequência não contenha espaços, números ou acentos. Vale notar que uma sequência composta por 5 a 7 caracteres resultará em uma assinatura visualmente agradável.';
$string['config_signature_typography'] = 'Estilo de Texto da Assinatura';
$string['config_signature_typography_desc'] = 'Por padrão, o Certificado Bonito gerará uma assinatura usando o seguinte texto e empregará esta caligrafia para personalizar o conteúdo.';
$string['course'] = 'Curso';
$string['course_certificates'] = 'Certificados de cursos';
$string['create_after_model'] = 'Salve primeiro o modelo antes de adicionar páginas ao certificado';
$string['create_at_certificate'] = 'Certificado para {$a}';
$string['create_model'] = 'Criar modelo';
$string['default-description'] = 'Este certificado certifica que o estudante <b>{$USER->fullname}</b> concluiu com sucesso o <b>{$course->fullname}</b> com distinção, consolidando um conjunto abrangente de conhecimentos e habilidades essenciais para se destacar em ambientes dinâmicos.';
$string['delete-page'] = 'Excluir Página';
$string['download_my_certificate'] = 'Baixar meu certificado';
$string['edit_page'] = 'Editar página do certificado';
$string['edit_page_instruction'] = '<p>O certificado é criado usando o <a target="_blank" href="https://github.com/GrapesJS/grapesjs">GrapesJS</a> como editor. O editor está configurado em <a target="_blank" href="https://github.com/GrapesJS/grapesjs/issues/1936">dragMode:"absolute"</a>, permitindo que você arraste e solte componentes dentro do editor. Após a edição, clique em "<strong>Testar PDF</strong>" para visualizar o resultado, e quando terminar, use o botão "<strong>Salvar Página do Certificado</strong>" para salvar o certificado gerado.</p><p>Devido às limitações do <a target="_blank" href="https://mpdf.github.io/">mPDF</a>, apenas elementos na raiz do certificado suportam posicionamento absoluto. Portanto, outros componentes dentro do DIV raiz estão restritos ao movimento para evitar inconsistências no PDF final. O mPDF suporta posicionamento absoluto apenas para elementos <code>&lt;div&gt;</code>, então ao usar Código Personalizado para inserir novos componentes, sempre comece com <code>&lt;div&gt;</code>.</p><p>Após o editor, você encontrará chaves que podem ser adicionadas ao certificado para personalização. Sobre o QRCode, note que a imagem <code>qr-code.svg</code> é substituída pelo QRCode gerado pelo plugin. Portanto, se você editar a imagem, a funcionalidade pode ser comprometida. Quanto à assinatura gerada pelo sistema, ela substituirá a imagem <code>signature.png</code> no projeto. Se você escolher uma imagem personalizada para o certificado, o plugin não fará a modificação automaticamente.</p>';
$string['edit_signature_certificate'] = 'Personalize sua assinatura do certificado aqui';
$string['edit_this_page'] = 'Editar esta página do certificado';
$string['from_certificates'] = 'Certificados do estudante {$a}';
$string['help_base_title'] = 'Chaves disponíveis para substituição no certificado:';
$string['list_model'] = 'Lista de modelos';
$string['manage_models'] = 'Gerenciar modelos de certificados';
$string['model_name'] = 'Nome do modelo';
$string['model_name_missing'] = 'O nome do modelo é obrigatório';
$string['model_orientation'] = 'Orientação';
$string['model_orientation_l'] = 'Paisagem';
$string['model_orientation_p'] = 'Retrato';
$string['model_page_name'] = 'Página: {$a}';
$string['modulename'] = 'Certificado bonito';
$string['modulenameplural'] = 'Certificados bonitos';
$string['my_certificates'] = 'Meus certificados';
$string['new_model'] = 'Novo modelo';
$string['only_format'] = 'Trazendo apenas o formato {$a}';
$string['pages_certificate'] = 'Páginas do certificado';
$string['pluginadministration'] = 'Administração de certificados do curso';
$string['pluginname'] = 'Certificado bonito';
$string['preview_certificate'] = 'Visualização do certificado';
$string['privacy:metadata:certificatebeautiful_issue'] = 'Informações sobre os certificados emitidos para os usuários.';
$string['privacy:metadata:certificatebeautiful_issue:userid'] = 'Armazena o ID do estudante que recebeu o certificado.';
$string['report'] = 'Visualizar certificados gerados';
$string['report_code'] = 'Código do certificado';
$string['report_confirm_delete_certificate'] = 'Tem certeza de que deseja excluir este certificado?';
$string['report_create_certificate'] = 'Criar certificado';
$string['report_delete_certificate'] = 'Excluir';
$string['report_deleted_certificate'] = 'Certificado excluído com sucesso!';
$string['report_filename'] = 'Certificados gerados pelos estudantes';
$string['report_timecreated'] = 'Criado em';
$string['report_title'] = 'Relatório';
$string['report_useremail'] = 'E-mail do estudante';
$string['report_usernome'] = 'Nome do estudante';
$string['report_view_certificate'] = 'Visualizar';
$string['save_model'] = 'Salvar modelo';
$string['select_a_model'] = 'Selecionar um modelo';
$string['select_background_image'] = 'Selecionar a nova imagem de fundo para o certificado';
$string['select_background_image_info2'] = '<div class="alert alert-warning">
<p>Por favor, envie uma nova imagem para substituir o fundo do certificado.</p>
<p>O certificado está no formato <strong>{$a->orientation}</strong>, e a imagem deve ter dimensões de <strong>{$a->size} pixels</strong>, correspondendo a <strong>{$a->sizecm} cm</strong>. Certifique-se de manter essas proporções para evitar distorção ou pixelização.</p>
</div>';
$string['select_background_preview'] = 'Alterar a imagem de fundo do certificado';
$string['select_model'] = 'Ver este modelo';
$string['select_model_preview'] = 'Selecione um modelo pré-existente para atualizar o design desta página';
$string['select_the_model'] = 'Selecione o modelo';
$string['subplugintype_certificatebeautifuldatainfo_plural'] = 'Subplugin de dados do Certificate Beautiful';
$string['subtititle'] = 'De conclusão';
$string['sumary'] = 'Resumo';
$string['sumary-secound-page'] = 'Resumo do Certificado';
$string['sumary-secound-page2'] = 'Lista de seções e módulos do curso';
$string['using_this_page'] = 'Usar este modelo';
$string['validate_certificate_code'] = 'Código de autenticidade';
$string['validate_certificate_course'] = 'Curso do certificado';
$string['validate_certificate_date'] = 'Emitido na data de';
$string['validate_certificate_name'] = 'Nome do certificado';
$string['validate_certificate_notfound'] = 'Código de autenticidade não encontrado!';
$string['validate_certificate_submit'] = 'Validar código';
$string['validate_certificate_title'] = 'Verificar autenticidade do certificado';
$string['validate_certificate_user'] = 'Emitido para';
$string['validate_certificate_validate'] = 'Validar';
$string['view_my_certificate'] = 'Visualizar meu certificado em uma nova aba';
