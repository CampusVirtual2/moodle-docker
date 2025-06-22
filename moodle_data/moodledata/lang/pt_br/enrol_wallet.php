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
 * Strings for component 'enrol_wallet', language 'pt_br', version '4.1'.
 *
 * @package     enrol_wallet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['MWC'] = 'Moedas da Carteira';
$string['addbundle'] = 'Adicionar pacote';
$string['addbundle_help'] = 'Adicione um valor rápido de recarga associado a esta regra de desconto condicional.';
$string['agreepolicy_intro'] = 'Para realizar qualquer processo de recarga de carteira, significa que você <strong>leu e concordou</strong> com a política de reembolso manual.<br/>
Clique no link abaixo para ler a política.<br/>';
$string['agreepolicy_label'] = 'Eu concordo com a política de reembolso manual.';
$string['allowmultiple'] = 'Número de instâncias permitidas';
$string['allowmultiple_help'] = 'Selecione o número de instâncias permitidas em um único curso, 0 significa ilimitado.';
$string['allusers'] = 'Transações para todos os usuários selecionados';
$string['alreadyenroled'] = 'Você já está matriculado neste curso, pode ser que seu tempo tenha expirado ou que você tenha sido suspenso.<br> Entre em contato com seu TA ou TS para mais assistência.';
$string['amount'] = 'Valor';
$string['applycoupon'] = 'Aplicar cupom';
$string['applycoupon_help'] = 'Aplique o código do cupom para obter um desconto ou ter um valor fixo para cobrar na sua carteira. <br>
Se o cupom for de valor fixo e for maior que o valor do curso você se matriculará.';
$string['availability_form_desc'] = 'Observe que algumas das restrições de disponibilidade dependem dos módulos deste curso, como conclusão de atividades ou notas, mas agora podemos apenas incluir outros cursos aumentando o número de cursos necessários, selecionar todos os cursos que precisamos, salvar o formulário e retornar para que todos os parâmetros necessários desses cursos sejam incluídos.';
$string['availability_plugins'] = 'Plugins de disponibilidade';
$string['availability_plugins_desc'] = 'Escolha aqui o plugin de condição de disponibilidade que atenda à sua necessidade lógica para impedir que o criador do curso adicione restrições inadequadas.';
$string['availablebalance'] = 'Saldo disponível:';
$string['awardcreteria'] = 'Condição para ser premiado';
$string['awardcreteria_help'] = 'Premiações funcionam quando o estudante completa um curso. Qual é a porcentagem da nota total que o estudante deve atingir para ser premiado?';
$string['awardingdesc'] = 'O usuário foi premiado com {$a->amount} no curso {$a->courseshortname} por obter {$a->usergrade} de {$a->maxgrade}.';
$string['awards'] = 'Programa de premiações';
$string['awards_help'] = 'Habilitar ou desabilitar o programa de premiações neste curso';
$string['awardsalter'] = 'Alterar premiações';
$string['awardsalter_help'] = 'Alterar o status do programa de premiações';
$string['awardssite'] = 'Habilitar premiações';
$string['awardssite_help'] = 'Habilitar a possibilidade de o criador do curso definir premiações para o curso.';
$string['awardvalue'] = 'Valor da premiação';
$string['awardvalue_help'] = 'Quanto o estudante recebe para cada ponto acima da condição?';
$string['balance'] = 'Saldo';
$string['balance_after'] = 'Saldo após';
$string['balance_before'] = 'Saldo antes';
$string['borrow'] = 'Saldo emprestado';
$string['borrow_desc'] = 'Habilite e defina uma condição para permitir que usuários confiáveis possam se inscrever em cursos sem saldo suficiente. O saldo deles ficará negativo e eles terão que recarregar a carteira para pagar posteriormente.';
$string['borrow_enable'] = 'Habilitar empréstimo';
$string['borrow_enable_help'] = 'Se habilitado, os estudantes que cumprirem as condições poderão se inscrever nos cursos mesmo com saldo insuficiente.';
$string['borrow_period'] = 'Período de transações para empréstimo.';
$string['borrow_period_help'] = 'O período durante o qual o usuário realiza o número anterior de transações para se qualificar para o empréstimo.';
$string['borrow_trans'] = 'Transações para empréstimo';
$string['borrow_trans_help'] = 'Número de transações de crédito em um determinado período de tempo necessárias para que o usuário se qualifique para empréstimo de saldo.';
$string['bulk_instanceshead'] = 'Edição em Massa de Matrículas (para todos os cursos com instâncias)';
$string['bulk_instancesno'] = 'Nenhuma instância criada ou atualizada';
$string['bulk_instancestitle'] = 'Edição em Massa de Instâncias de Matrícula na Carteira';
$string['bulk_instancesyes'] = '{$a->updated} instâncias de matrícula foram atualizadas E {$a->created} foram criadas.';
$string['bulkeditor'] = 'Edição em massa de matrículas';
$string['bulkeditor_head'] = 'Edição em Massa de Matrículas (para todos os usuários nos cursos selecionados)';
$string['bulkfolder'] = 'Extras por matrículas via carteira';
$string['bundle_desc'] = 'Descrição do pacote';
$string['bundle_desc_help'] = 'Adicione uma descrição para este pacote. (ex.: suficiente para 11 cursos pelo preço de 9)';
$string['bundle_value'] = 'Valor de recarga rápida';
$string['bundle_value_error'] = 'O valor do pacote deve ser maior ou igual à condição';
$string['bundle_value_help'] = 'Este valor deve ser maior ou igual à condição. Certifique-se também de que este é o valor antes do desconto.';
$string['bundlevalidin'] = 'válido para uso em';
$string['cachedef_balance'] = 'Isso armazena os detalhes do saldo do usuário';
$string['cachedef_coupon'] = 'Armazenando os dados do cupom';
$string['cachedef_offers'] = 'Dados de cache de ofertas';
$string['cannotdeductbalance'] = 'Não é possível deduzir o saldo devido a um erro. Tente novamente e, se o problema persistir, entre em contato com o suporte do site.';
$string['canntenrol'] = 'A matrícula está desabilitada ou inativa';
$string['canntenrolearly'] = 'Você ainda não pode se inscrever; a inscrição começa em {$a}.';
$string['canntenrollate'] = 'Você não pode mais se inscrever, pois a inscrição terminou em {$a}.';
$string['cashback'] = 'Cashback';
$string['cashback_desc'] = 'Você receberá {$a}% de cashback cada vez que comprar um curso usando o método de matrícula via carteira.';
$string['cashbackdesc'] = 'adicionado por cashback devido à matrícula em {$a}';
$string['cashbackenable'] = 'Habilitar cashback';
$string['cashbackenable_desc'] = 'Quando habilitado, o estudante receberá um percentual de cashback cada vez que usar a carteira para comprar um curso.';
$string['cashbackpercent'] = 'Percentual de cashback';
$string['cashbackpercent_help'] = 'O percentual de cashback que será creditado na carteira a partir do valor pago com o saldo da carteira.';
$string['catbalance'] = 'Saldo por categoria';
$string['catbalance_desc'] = 'Se habilitado, o saldo poderá ser especificado para cada categoria separadamente e só poderá ser usado nessa categoria. Ainda haverá um saldo geral que poderá ser usado em qualquer lugar.';
$string['category_options'] = 'Opções de categoria';
$string['category_options_help'] = 'Semelhante aos cupons fixos, exceto que seu uso é restrito à categoria escolhida.';
$string['categorycoupon'] = 'Cupom por categoria';
$string['categorycoupondisabled'] = 'Cupons por categoria desabilitados.';
$string['ch_result_after'] = '<p>Saldo Após: <b>{$a}</b></p>';
$string['ch_result_before'] = '<p>Saldo Antes: <b>{$a}</b></p>';
$string['ch_result_error'] = '<p style="text-align: center;"><b>ERRO<br>{$a}<br>Por favor, volte e verifique novamente</b></p>';
$string['ch_result_info_balance'] = '<span style="text-align: center; width: 100%;"><h5>O usuário: {$a->userfull} tem um saldo de {$a->before}</h5></span>';
$string['ch_result_info_charge'] = '<span style="text-align: center; width: 100%;"><h5>O usuário: {$a->userfull} agora tem um saldo de {$a->after} após ser cobrado em {$a->after_before}...</h5></span>';
$string['ch_result_negative'] = '<p><b>ESSE USUÁRIO TEM SALDO NEGATIVO</b></p>';
$string['characters'] = 'Caracteres no código.';
$string['characters_help'] = 'Escolha o tipo de caracteres nos códigos gerados.';
$string['charge'] = 'Cobrar';
$string['charger_credit_desc'] = 'cobrado manualmente por {$a}';
$string['charger_debit_desc'] = '(deduzido manualmente por {$a})';
$string['charger_debit_err'] = 'O valor ({$a->value}) é maior que o saldo do usuário ({$a->before})';
$string['charger_invalid_operation'] = 'Operação inválida.';
$string['charger_nouser'] = 'Nenhum usuário selecionado';
$string['charger_novalue'] = 'Nenhum valor válido inserido.';
$string['charging_value'] = 'Valor da cobrança:';
$string['chargingoperation'] = 'Operação';
$string['chargingoptions'] = 'Cobrança da carteira do usuário';
$string['chargingvalue'] = 'Valor';
$string['checkout'] = '{$a->credit_cost} {$a->currency} serão deduzidos do seu saldo de {$a->user_balance} {$a->currency}.';
$string['checkout_borrow'] = '{$a->credit_cost} {$a->currency} necessários para inscrição, seu saldo de {$a->user_balance} {$a->currency} será deduzido e o empréstimo será de {$a->borrow}.';
$string['checkout_borrow_discounted'] = '<del>{$a->credit_cost} {$a->currency}</del> {$a->after_discount} {$a->currency} necessários para inscrição, seu saldo de {$a->user_balance} {$a->currency} será deduzido e o empréstimo será de {$a->borrow}.';
$string['checkout_discounted'] = '<del>{$a->credit_cost} {$a->currency}</del> {$a->after_discount} {$a->currency} serão deduzidos do seu saldo de {$a->user_balance} {$a->currency}.';
$string['cleanupwalletitemstask'] = 'Limpar itens de carteira órfãos e expirados';
$string['clear_filter'] = 'Limpar filtros';
$string['cohortnonmemberinfo'] = 'Somente membros do cohort \\\'{$a}\\\' podem se inscrever.';
$string['cohortonly'] = 'Apenas membros do cohort';
$string['cohortonly_help'] = 'A inscrição pode ser restrita apenas aos membros de um cohort específico. Observe que alterar essa configuração não afeta as inscrições existentes.';
$string['condition'] = 'Condição';
$string['conditionaldiscount'] = 'Desconto condicional';
$string['conditionaldiscount_apply'] = 'Aplicar descontos condicionais';
$string['conditionaldiscount_apply_help'] = 'Habilitar desconto condicional para todo o site';
$string['conditionaldiscount_condition'] = 'Condição para aplicar desconto';
$string['conditionaldiscount_condition_help'] = 'Descontos não serão aplicados a menos que a carteira do usuário seja carregada com um valor maior ou igual ao inserido aqui.';
$string['conditionaldiscount_desc'] = 'carregar a carteira devido a descontos condicionais por {$a->rest} ao carregar a carteira com mais de {$a->condition}';
$string['conditionaldiscount_link_desc'] = 'Adicionar, editar ou excluir regras de desconto condicional';
$string['conditionaldiscount_percent'] = 'Percentual de desconto';
$string['conditionaldiscount_percent_help'] = 'Os usuários são creditados por esta porcentagem. (Aplicado apenas para carregar a carteira)<br>
Nota importante: Se o usuário optar por recarregar a carteira em 400 e o percentual de desconto definido para 15%, o usuário pagará apenas 340 e então 60 serão adicionados automaticamente.';
$string['conditionaldiscount_percentage'] = 'Percentual';
$string['conditionaldiscount_timefrom'] = 'Disponível após';
$string['conditionaldiscount_timefrom_help'] = 'Disponível após a data definida, antes disso a condição não é aplicável.';
$string['conditionaldiscount_timeto'] = 'Disponível até';
$string['conditionaldiscount_timeto_help'] = 'Disponível até a data definida, após isso a condição não é mais aplicável.';
$string['confirm_additional_credit'] = '<strong>Com acréscimo de {$a} devido ao desconto condicional.</strong>';
$string['confirm_credit'] = 'Você está prestes a adicionar um valor de {$a->amount} à carteira do usuário {$a->name} na <strong>carteira da categoria {$a->category}</strong>, que já tem um saldo de {$a->balance} válido nela.';
$string['confirm_debit'] = 'Você está prestes a deduzir um valor de {$a->amount} do saldo do usuário {$a->name} na <strong>carteira da categoria {$a->category}</strong>, cujo saldo atual é {$a->balance}, válido para ser usado na categoria {$a->category}. O saldo após a transação será {$a->after}.';
$string['confirm_enrol_confirm'] = 'Você está prestes a se inscrever no curso <strong>{$a->course}</strong>. <br>Isso exigirá a dedução de <strong>{$a->cost} {$a->currency}</strong> do seu saldo. <br>Seu saldo atual é {$a->balance}<br><p>{$a->policy}</p><strong>Essa operação é irreversível.<br>Tem certeza?</strong>';
$string['confirm_enrol_error'] = 'Acesso inválido à página de inscrição.';
$string['confirm_negative'] = '<b>Aviso de saldo negativo:</b> o saldo do usuário ficará com valor negativo após esta transação.';
$string['confirmbulkdeleteenrolment'] = 'Você tem certeza de que deseja excluir essas matrículas de usuários?';
$string['confirmdeletecoupon'] = 'Você tem certeza de que deseja excluir os cupons com os IDs {$a}? Esta operação é irreversível.';
$string['confirmedit'] = 'Confirmar edição';
$string['confirmpayment'] = 'Confirmar pagamento de {$a->value} {$a->currency}. Note que: ao pressionar sim, você concorda com a política de reembolso.<br> {$a->policy}';
$string['confirmpayment_discounted'] = 'Confirmar pagamento de <del>{$a->before} {$a->currency}</del> {$a->value} {$a->currency}. Note que: ao pressionar sim, você concorda com a política de reembolso.<br> {$a->policy}';
$string['coupon_applydiscount'] = 'Você agora tem um desconto de {$a}%';
$string['coupon_applyerror'] = 'ERRO código de cupom inválido: <br> {$a}';
$string['coupon_applyfilter'] = 'Aplicar filtro';
$string['coupon_applyfixed'] = 'Código de cupom aplicado com sucesso, com valor de {$a->value} {$a->currency}.';
$string['coupon_applynocourse'] = 'Erro ao aplicar o cupom, curso não encontrado.';
$string['coupon_applynothere'] = 'Não é possível aplicar este tipo de cupom aqui.';
$string['coupon_applynothere_category'] = 'Não é possível aplicar cupom de categoria aqui, pois ele só pode ser utilizado na categoria específica.';
$string['coupon_applynothere_discount'] = 'Não é possível aplicar cupom de desconto aqui.';
$string['coupon_applynothere_enrol'] = 'Não é possível aplicar cupons de inscrição aqui. Por favor, use-o na página do curso.';
$string['coupon_cat_notsufficient'] = 'O valor deste cupom não é suficiente para ser utilizado neste curso.';
$string['coupon_categoryapplied'] = 'O cupom foi aplicado.';
$string['coupon_categoryfail'] = 'Desculpe, este cupom só pode ser aplicado nesta categoria: {$a}';
$string['coupon_code'] = 'Código do cupom';
$string['coupon_code_applied'] = 'Código do cupom {$a} aplicado.';
$string['coupon_code_error'] = 'Por favor, insira um código ou selecione o método aleatório.';
$string['coupon_code_help'] = 'Insira o código do cupom que você deseja.';
$string['coupon_edit_heading'] = 'Editar cupom';
$string['coupon_edit_title'] = 'Edição de cupom';
$string['coupon_enrolapplied'] = 'O cupom foi aplicado.';
$string['coupon_enrolerror'] = 'Desculpe, este cupom só pode ser aplicado nestes cursos:<br>{$a}';
$string['coupon_exceedusage'] = 'Este cupom excede o uso máximo permitido.';
$string['coupon_exist'] = 'Este código de cupom já existe.';
$string['coupon_expired'] = 'Este cupom está expirado.';
$string['coupon_generation'] = 'Criar cupons';
$string['coupon_generation_heading'] = 'Adicionar novos cupons';
$string['coupon_generation_method'] = 'Método de geração';
$string['coupon_generation_method_help'] = 'Escolha se deseja criar um único cupom com um código de sua escolha ou gerar um número de cupons aleatórios.';
$string['coupon_generation_title'] = 'Gerar cupons';
$string['coupon_generator_error'] = 'Erro ao tentar gerar cupons.';
$string['coupon_generator_nonumber'] = 'Nenhum número de cupons especificado.';
$string['coupon_generator_peruser_gt_max'] = 'O uso máximo permitido por usuário não deve exceder o uso máximo de um cupom.';
$string['coupon_invalidid'] = 'Não existe um registro de cupom com este ID ou ele não corresponde ao código.';
$string['coupon_invalidrecord'] = 'Registro de cupom inválido.';
$string['coupon_invalidreturntype'] = 'Tipo de cupom inválido retornado, há um erro no endpoint ou este não é um código de cupom válido.';
$string['coupon_invalidtype'] = 'Tipo de cupom inválido, apenas cupons de valor fixo, percentual, inscrição e categoria são permitidos.';
$string['coupon_nocode'] = 'Não há código.';
$string['coupon_notexist'] = 'Este cupom não existe.';
$string['coupon_notvalidyet'] = 'Este cupom não é válido até {$a}.';
$string['coupon_novalue'] = 'O cupom retornou sem valor, provavelmente o código do cupom não existe.';
$string['coupon_perpage'] = 'Cupons por página';
$string['coupon_resetusetime'] = 'Redefinir uso';
$string['coupon_resetusetime_help'] = 'Redefinir o uso do cupom para zero.';
$string['coupon_t_code'] = 'Código';
$string['coupon_t_lastuse'] = 'Último uso';
$string['coupon_t_timecreated'] = 'Data de criação';
$string['coupon_t_type'] = 'Tipo';
$string['coupon_t_usage'] = 'Uso';
$string['coupon_t_value'] = 'Valor';
$string['coupon_table'] = 'Ver cupons da carteira';
$string['coupon_type'] = 'Tipo de cupons';
$string['coupon_type_help'] = 'escolha o tipo de cupons a serem gerados.<br>
Cupons de valor fixo: utilizados em qualquer lugar e reabastecem a carteira do usuário pelo seu valor, e se utilizados na página de inscrição, inscreverão o usuário no curso se for suficiente.<br>
Cupons de desconto percentual: usados para obter um desconto percentual no custo do curso.
Cupons de categoria: iguais aos cupons fixos, exceto que não podem ser usados em qualquer lugar, apenas para inscrever o usuário na categoria selecionada.
Cupons de cursos: esses cupons não têm valor, servem para matricular os usuários em um dos cursos selecionados.';
$string['coupon_update_failed'] = 'Falha ao atualizar o cupom.';
$string['coupon_update_success'] = 'O cupom foi atualizado com sucesso.';
$string['coupon_usage'] = 'Histórico de uso dos cupons';
$string['coupon_usetimes'] = 'Número de vezes utilizado';
$string['coupon_value'] = 'Valor do cupom';
$string['coupon_value_help'] = 'Valor do cupom, fixo ou percentual de desconto.';
$string['coupons'] = 'Cupons';
$string['coupons_category_error'] = 'É necessário selecionar uma categoria.';
$string['coupons_courseserror'] = 'É necessário selecionar ao menos um curso.';
$string['coupons_delete_selected'] = 'Excluir cupons selecionados';
$string['coupons_discount_error'] = 'O valor de desconto não pode exceder 100%';
$string['coupons_generation_success'] = '{$a} códigos de cupons gerados com sucesso.';
$string['coupons_ids'] = 'ID(s) dos cupons, separados por vírgula (,)';
$string['coupons_length'] = 'Comprimento';
$string['coupons_length_help'] = 'Quantos caracteres em um único cupom.';
$string['coupons_maxperuser'] = 'Uso máximo por usuário';
$string['coupons_maxperuser_help'] = 'Quantas vezes um único usuário pode usar este cupom. (0 significa uso máximo permitido)';
$string['coupons_maxusage'] = 'Uso máximo';
$string['coupons_maxusage_help'] = 'Quantas vezes o cupom pode ser utilizado. (0 significa ilimitado)';
$string['coupons_number'] = 'Número de cupons';
$string['coupons_number_help'] = 'Por favor, não defina um número grande para não sobrecarregar o banco de dados.';
$string['coupons_uploadcreated'] = '{$a} cupons foram criados com sucesso.';
$string['coupons_uploaderrors'] = '{$a} cupons encontraram erros e não foram atualizados ou criados.';
$string['coupons_uploadtotal'] = '{$a} do total de cupons no arquivo.';
$string['coupons_uploadupdated'] = '{$a} cupons foram atualizados com sucesso.';
$string['coupons_valueerror'] = 'Valor requerido';
$string['couponsall'] = 'Permitir todos os tipos';
$string['couponsdeleted'] = '{$a} cupons foram excluídos com sucesso.';
$string['couponsdiscount'] = 'Apenas cupons de desconto';
$string['couponsfixed'] = 'Apenas cupons de valor fixo';
$string['couponstype'] = 'Permitir cupons';
$string['couponstype_help'] = 'Escolha entre desabilitar cupons, permitir certos tipos ou permitir todos.';
$string['courses_options'] = 'Cursos';
$string['courses_options_help'] = 'Escolha os cursos para inscrever diretamente o usuário usando esses cupons.';
$string['coursesrestriction'] = 'Restrição de outro curso';
$string['coursesrestriction_help'] = 'Apenas usuários matriculados em um número maior ou igual ao número necessário de cursos selecionados poderão comprar este curso.';
$string['coursesrestriction_num'] = 'Número de cursos necessários';
$string['coursesrestriction_num_help'] = 'Selecione o número mínimo de cursos em que o usuário deve estar matriculado para adquirir este curso usando esta instância.';
$string['courseswithdiscounts'] = 'Cursos disponíveis com descontos';
$string['createdfrom'] = 'Criado após';
$string['createdto'] = 'Criado antes';
$string['credit'] = 'Crédito';
$string['credit_cost'] = 'Custo';
$string['credit_cost_help'] = 'A taxa que será deduzida ao se inscrever.';
$string['credit_wallet_transformation_desc'] = 'Seu crédito foi transferido para sua carteira.';
$string['csvfile'] = 'Arquivo CSV';
$string['csvfile_help'] = 'Apenas arquivos com extensão *.csv são aceitos.';
$string['currency'] = 'Moeda';
$string['currency_help'] = 'Selecione a moeda para pagamento do curso.';
$string['customcurrency'] = 'Moeda personalizada';
$string['customcurrency_desc'] = 'Adicione um nome de moeda personalizada para o crédito da carteira.<br>Observe que isso não é válido ao usar um gateway de pagamento real.<br>Se deixado em branco, uma moeda "Wallet Coins" será adicionada à lista de moedas.';
$string['customcurrencycode'] = 'Código da moeda personalizada';
$string['customcurrencycode_desc'] = 'Adicione um código para a moeda personalizada, algo como USD, mas certifique-se de que esse código não exista como código de moeda disponível nos gateways de pagamento, pois ele não será substituído. No entanto, você pode substituir o "Moodle Wallet Coin" (MWC).';
$string['customwelcomemessage'] = 'Mensagem de boas-vindas personalizada';
$string['customwelcomemessage_help'] = 'Uma mensagem de boas-vindas personalizada pode ser adicionada em texto simples ou no formato Moodle-auto, incluindo tags HTML e tags multi-lang.

Os seguintes espaços reservados podem ser incluídos na mensagem:

* Nome do curso {$a->coursename}
* Link para a página de perfil do usuário {$a->profileurl}
* E-mail do usuário {$a->email}
* Nome completo do usuário {$a->nome completo}';
$string['datefrom'] = 'De';
$string['dateto'] = 'Até';
$string['debit'] = 'Débito';
$string['debitdesc_course'] = 'O usuário foi cobrado em {$a->amount} pela inscrição no curso {$a->coursename}';
$string['debitdesc_instance'] = 'O usuário foi cobrado em {$a->amount} pela inscrição no curso {$a->coursename} utilizando a instância {$a->instance}';
$string['debitdesc_user'] = 'O usuário foi cobrado em {$a->amount} pelo usuário {$a->charger}';
$string['debitnegative'] = 'Permitir valor negativo no débito';
$string['defaultrole'] = 'Atribuição de papel padrão';
$string['defaultrole_desc'] = 'Selecione o papel que deve ser atribuído aos usuários durante a inscrição';
$string['deleteselectedusers'] = 'Excluir inscrições de usuários selecionados';
$string['digits'] = 'Dígitos (números)';
$string['discount'] = 'Desconto';
$string['discount_behavior'] = 'Comportamento de desconto';
$string['discount_behavior_desc'] = 'Os usuários podem ser elegíveis para mais de um desconto ou regra de oferta. Escolha como esses descontos serão calculados (sequencial, soma, máximo).<br>
* recursivo: o desconto calculará o custo do curso após os descontos e depois será calculado novamente para o valor resultante com a outra regra de desconto.<br>
* soma: irá somar todos os descontos com um máximo (100%) e aplicá-lo.<br>
*máx: aplique apenas o desconto máximo elegível.';
$string['discount_behavior_max'] = 'Aplicar o maior desconto';
$string['discount_behavior_sequential'] = 'Aplicar os descontos sequencialmente';
$string['discount_behavior_sum'] = 'Aplicar a soma dos descontos';
$string['discountcoupondisabled'] = 'Cupons de desconto desativados neste site.';
$string['discounts'] = 'Descontos';
$string['discountscopouns'] = 'Descontos & Cupons';
$string['discountscopouns_desc'] = 'Escolha se deseja aplicar descontos percentuais aos usuários usando um campo de perfil personalizado. <br>
Além disso, aplicando cupons para este plugin.';
$string['editselectedusers'] = 'Editar inscrições de usuários selecionados';
$string['enablerefund'] = 'Habilitar reembolso';
$string['enablerefund_desc'] = 'Se não marcado, todos os créditos a partir de agora serão não reembolsáveis. Não se esqueça de deixar isso claro para os usuários na política de reembolso.';
$string['endpoint_error'] = 'Erro de retorno do endpoint';
$string['endpoint_incorrect'] = 'Resposta incorreta';
$string['enrol_type'] = 'Tipo de inscrição';
$string['enrol_wallet'] = 'Inscrever-se com saldo da carteira';
$string['enrolcoupon'] = 'Cupom de inscrição';
$string['enrolcoupondisabled'] = 'Cupons de inscrição estão desativados neste site.';
$string['enrolenddate'] = 'Data de término';
$string['enrolenddate_help'] = 'Se habilitado, os usuários podem se inscrever até essa data.';
$string['enrolenddaterror'] = 'A data de término da inscrição não pode ser anterior à data de início';
$string['enrollmentupdated'] = 'Inscrição(ões) atualizada(s)';
$string['enrolme'] = 'Inscreva-me';
$string['enrolpage_viewed_desc'] = 'O usuário com id {$a->userid} visualizou a página de inscrição do curso com id {$a->courseid}.';
$string['enrolpage_viewed_event'] = 'Opções de inscrição com carteira visualizadas.';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_desc'] = 'Duração padrão da validade da inscrição. Se definido como zero, a duração será ilimitada por padrão.';
$string['enrolperiod_help'] = 'Duração da validade da inscrição, a partir do momento em que o usuário se inscreve. Se desativado, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se habilitado, os usuários poderão se inscrever a partir dessa data.';
$string['entervalue'] = 'Por favor, insira um valor.';
$string['equalsto'] = 'Igual a';
$string['event_award'] = 'Prêmio de carteira recebido';
$string['event_award_desc'] = 'O usuário com id {$a->userid} foi premiado com {$a->amount} devido a uma nota de {$a->grade}% no curso com id {$a->courseid}';
$string['event_cashback'] = 'Cashback na carteira';
$string['event_cashback_desc'] = 'O usuário com id {$a->userid} recebeu um cashback no valor de {$a->amount} em sua carteira após pagar {$a->original} pela inscrição no curso com id {$a->courseid}';
$string['event_coupon'] = 'Cupom de carteira usado';
$string['event_coupon_desc'] = 'O cupom ( {$a->code} ) foi usado pelo usuário com id {$a->userid}';
$string['event_newuser_gifted'] = 'Novo usuário presenteado';
$string['event_newuser_gifted_desc'] = 'O novo usuário com id {$a->userid} foi presenteado com {$a->amount} como saldo da carteira.';
$string['event_transaction_credit_description'] = 'O saldo da carteira do usuário com id {$a->relateduserid} foi creditado em {$a->amount} {$a->refundable} pelo usuário com id {$a->userid} <br> mais informações: {$a->reason}';
$string['event_transaction_debit_description'] = 'O saldo da carteira do usuário com id {$a->relateduserid} foi debitado em {$a->amount} pelo usuário com id {$a->userid} <br> mais informações: {$a->reason}';
$string['event_transactions'] = 'Evento de transação da carteira';
$string['expiredaction'] = 'Ação após o término da inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser realizada quando a inscrição do usuário expirar. Observe que alguns dados e configurações do usuário são removidos do curso durante o cancelamento da inscrição.';
$string['expirymessageenrolledbody'] = 'Prezado {$a->usuário},
<br>
Esta é uma notificação de que sua inscrição no curso \'{$a->course}\' expirará em {$a->timeend}.
<br>
Se precisar de ajuda, entre em contato com {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificação de expiração da inscrição';
$string['expirymessageenrollerbody'] = 'A inscrição no curso \'{$a->course}\' expirará no próximo {$a->threshold} para os seguintes usuários:
<br>
{$a->usuários}
Para estender a inscrição, acesse {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificação de expiração da inscrição';
$string['filter_coupons'] = 'Filtrar Cupons';
$string['filter_transaction'] = 'Filtrar Transações';
$string['fixedcoupondisabled'] = 'Cupons de valor fixo estão desativados neste site.';
$string['fixedvaluecoupon'] = 'Cupom de valor fixo';
$string['freecourses'] = 'Cursos gratuitos neste site';
$string['frontpageoffers'] = 'Link da página de ofertas na navegação da página inicial';
$string['frontpageoffers_desc'] = 'Adiciona um link para a página de ofertas na navegação da página inicial';
$string['giftdesc'] = 'Novo usuário com id {$a->userid} às {$a->time} recebeu um presente no valor de {$a->amount} em sua carteira.';
$string['giftvalue'] = 'Valor do presente para novos usuários';
$string['giftvalue_help'] = 'O valor que será adicionado à carteira de novos usuários.';
$string['greaterthan'] = 'Maior que';
$string['greaterthanorequal'] = 'Maior ou igual a';
$string['insufficient_balance'] = 'Você não tem saldo suficiente na carteira para se inscrever. São necessários {$a->cost_before} {$a->currency}, seu saldo é de {$a->user_balance} {$a->currency}.';
$string['insufficient_balance_discount'] = 'Você não tem saldo suficiente na carteira para se inscrever. <del>{$a->cost_before} {$a->currency}</del> {$a->cost_after} {$a->currency} são necessários, seu saldo é de {$a->user_balance} {$a->currency}.';
$string['insufficientbalance'] = 'Desculpe, você não tem saldo suficiente para esta operação. Você precisa de {$a->amount} enquanto possui apenas {$a->balance}';
$string['invalidcoupon_operation'] = 'Operação de cupom inválida. Este tipo de cupom pode estar desativado neste site ou configurado incorretamente.';
$string['invalidpercentcoupon'] = 'Valor inválido para cupom percentual, não pode exceder 100%.';
$string['invalidvalue'] = 'Valor inválido, por favor insira um valor válido.';
$string['inyourwallet'] = 'na sua carteira.';
$string['longtimenosee'] = 'Desinscrever inativos após';
$string['longtimenosee_help'] = 'Se os usuários não acessarem um curso por um longo tempo, eles serão automaticamente desinscritos. Este parâmetro especifica o limite de tempo.';
$string['lowbalancenotice'] = 'Ativar aviso de saldo baixo';
$string['lowbalancenotification'] = 'Saldo baixo na carteira<br>Seu saldo é {$a}.';
$string['lowbalancenotify'] = 'Notificação de saldo baixo.';
$string['lowbalancenotify_desc'] = 'Se ativado e o saldo do usuário for menor ou igual à condição definida, uma notificação de aviso aparecerá em todas as páginas do site.';
$string['lowerletters'] = 'letras minúsculas';
$string['mainbalance'] = 'Saldo principal:';
$string['manualrefundboxlabel'] = 'Marque a caixa a seguir para exibir as opções de recarga.';
$string['maxenrolled'] = 'Máximo de usuários inscritos';
$string['maxenrolled_help'] = 'Especifica o número máximo de usuários que podem se inscrever. 0 significa sem limite.';
$string['maxenrolledreached'] = 'O número máximo de usuários permitidos para inscrição já foi atingido.';
$string['messagebody_credit'] = 'Sua carteira foi cobrada em {$a->amount}
<br>
Seu saldo anterior era {$a->before}
<br>
Seu saldo agora é: {$a->balance}
<br>
mais informações: {$a->desc}. às: {$a->hora}';
$string['messagebody_debit'] = 'Um valor de {$a->amount} deduzido da sua carteira
<br>
Seu saldo anterior era {$a->before}
<br>
Seu saldo agora é: {$a->balance}
<br>
mais informações: {$a->desc}. às: {$a->hora}';
$string['messageprovider:expiry_notification'] = 'Notificações de expiração de inscrição via carteira';
$string['messageprovider:wallet_transaction'] = 'Notificações de transações da carteira';
$string['messagesubject'] = 'Transações da carteira ({$a})';
$string['migrate_enrollments_task'] = 'Migrar inscrições e créditos de usuários de enrol_credit para enrol_wallet';
$string['mintransfer'] = 'O valor mínimo de transferência é {$a}';
$string['mintransfer_config'] = 'Transferência mínima permitida';
$string['mintransfer_config_desc'] = 'Valor mínimo permitido para transferência, os usuários não podem transferir saldo entre si inferior a este valor.';
$string['mustselectchar'] = 'É necessário selecionar pelo menos um tipo de caractere.';
$string['mywallet'] = 'Minha Carteira';
$string['negativebalance'] = 'O saldo não pode ser negativo. Tentando deduzir {$a->amount} de um saldo de {$a->before}';
$string['newenrols'] = 'Permitir novas inscrições';
$string['newenrols_desc'] = 'Permitir que os usuários se inscrevam em novos cursos por padrão.';
$string['newenrols_help'] = 'Esta configuração determina se um usuário pode se inscrever neste curso.';
$string['newusergift'] = 'Presentes para novos usuários';
$string['newusergift_desc'] = 'Aplicar presente na carteira para novos usuários no site Moodle';
$string['newusergift_enable'] = 'Ativar presentes para novos usuários';
$string['newusergift_enable_help'] = 'Se ativado, novos usuários terão o presente que você definiu em suas carteiras.';
$string['noaccount'] = 'Sem conta';
$string['nochange'] = 'Sem alterações';
$string['nocost'] = 'este curso tem um custo inválido';
$string['nocoupons'] = 'Desativar cupons';
$string['nodiscountstoshow'] = 'Nenhum desconto disponível para mostrar.';
$string['nonrefundable'] = 'Não reembolsável';
$string['nonrefundable_transform_desc'] = 'Transformar a transação em não reembolsável devido à expiração do período de reembolso.';
$string['noreferraldata'] = 'Sem referências anteriores.';
$string['not_set'] = 'Não definido';
$string['notequal'] = 'Diferente de';
$string['noticecondition'] = 'Saldo mínimo para notificação';
$string['noticecondition_desc'] = 'Se o saldo for menor ou igual a esta condição, uma notificação aparecerá para o usuário.';
$string['notrefund'] = 'Não reembolsável (extra):';
$string['offers'] = 'Ofertas';
$string['offers_ce_desc'] = '{$a->discount}% DE DESCONTO se você estiver matriculado em {$a->condition} destes cursos:<br> {$a->courses}';
$string['offers_course_enrol_based'] = 'Outra oferta baseada em matrícula de curso';
$string['offers_desc'] = 'Ofertas e cursos gratuitos';
$string['offers_error_ce'] = 'Por favor, selecione pelo menos um curso';
$string['offers_error_discountvalue'] = 'Valor de desconto inválido.';
$string['offers_error_ncnumber'] = 'Por favor, escolha o número de cursos.';
$string['offers_error_otherccoursesexceed'] = 'Esse número excede o número real de cursos nesta categoria';
$string['offers_error_othercnocourses'] = 'Por favor, selecione o número de cursos.';
$string['offers_error_othercnotexist'] = 'Categoria não existe.';
$string['offers_error_pfnovalue'] = 'Por favor, insira um valor.';
$string['offers_error_pfselect'] = 'Por favor, selecione um campo de perfil';
$string['offers_error_timefrom'] = 'O tempo não pode exceder o "tempo até".';
$string['offers_error_timeto'] = 'Não é possível selecionar um tempo no passado.';
$string['offers_location_based'] = 'Oferta baseada em localização geográfica';
$string['offers_nc_desc'] = '{$a->discount}% DE DESCONTO se você já estiver matriculado em pelo menos {$a->number} cursos na categoria {$a->catname}';
$string['offers_number_courses_base'] = 'Oferta baseada no número de cursos';
$string['offers_other_category_courses_based'] = 'número de cursos em outra categoria';
$string['offers_pf_desc'] = '{$a->discount}% DE DESCONTO se seu campo de perfil {$a->field} {$a->op} "{$a->value}"';
$string['offers_pfop_contains'] = 'Contém';
$string['offers_pfop_doesnotcontain'] = 'Não contém';
$string['offers_pfop_endswith'] = 'Termina com';
$string['offers_pfop_isempty'] = 'Está vazio';
$string['offers_pfop_isequalto'] = 'É igual a';
$string['offers_pfop_isnotempty'] = 'Não está vazio';
$string['offers_pfop_startswith'] = 'Começa com';
$string['offers_please_select'] = 'Por favor, selecione um tipo de ofertas para adicionar';
$string['offers_profile_field'] = 'Campo de Perfil';
$string['offers_profile_field_based'] = 'Oferta baseada em campo de perfil';
$string['offers_time_based'] = 'Desconto em um determinado período de tempo';
$string['offers_time_desc'] = '{$a->discount}% DE DESCONTO se você comprar este curso no período de {$a->from} a {$a->to}';
$string['offersnav'] = 'Adicionar ofertas na navegação principal';
$string['offersnav_desc'] = 'ou você pode clicar aqui para adicionar ofertas à navegação principal';
$string['othercourserestriction'] = 'Não é possível se matricular neste curso a menos que você esteja matriculado em pelo menos {$a->number} destes cursos {$a->courses}';
$string['paymentaccount'] = 'Conta de pagamento';
$string['paymentaccount_help'] = 'Escolha a conta de pagamento na qual você aceitará pagamentos';
$string['paymentrequired'] = 'Você pode pagar por este curso diretamente usando os métodos de pagamento disponíveis';
$string['paymenttopup_desc'] = 'Pagamento para recarregar a carteira';
$string['percent_error'] = 'O valor percentual deve estar entre 0-100';
$string['percentcoupondisabled'] = 'Cupons de desconto desativados neste site.';
$string['percentdiscountcoupon'] = 'Cupom de desconto percentual';
$string['pluginconfig'] = 'Configuração de matrícula da carteira';
$string['pluginname'] = 'Matrícula na carteira';
$string['privacy:metadata'] = 'O plugin de matrícula na carteira não armazena nenhum dado pessoal.';
$string['privacy:metadata:enrol_wallet_awards'] = 'Armazena informações sobre os prêmios que o usuário recebe.';
$string['privacy:metadata:enrol_wallet_awards:amount'] = 'O valor do prêmio.';
$string['privacy:metadata:enrol_wallet_awards:courseid'] = 'O id do curso concluído.';
$string['privacy:metadata:enrol_wallet_awards:grade'] = 'A nota total que o usuário obteve no curso.';
$string['privacy:metadata:enrol_wallet_awards:userid'] = 'O id do usuário.';
$string['privacy:metadata:enrol_wallet_balance'] = 'Armazena detalhes sobre o saldo do usuário';
$string['privacy:metadata:enrol_wallet_balance:catbalance'] = 'Todas as informações sobre os saldos de categoria';
$string['privacy:metadata:enrol_wallet_balance:freegift'] = 'Quanto do saldo do site foi obtido por presentes';
$string['privacy:metadata:enrol_wallet_balance:nonrefundable'] = 'O valor não reembolsável no saldo do site';
$string['privacy:metadata:enrol_wallet_balance:refundable'] = 'O valor reembolsável no saldo do site';
$string['privacy:metadata:enrol_wallet_balance:userid'] = 'O id do usuário';
$string['privacy:metadata:enrol_wallet_cond_discount'] = 'Regras de descontos condicionais, isso não contém informações pessoais';
$string['privacy:metadata:enrol_wallet_cond_discount:usermodified'] = 'O id do usuário que modificou a regra de desconto';
$string['privacy:metadata:enrol_wallet_coupons_usage'] = 'Armazena informações sobre os cupons usados por cada usuário.';
$string['privacy:metadata:enrol_wallet_coupons_usage:instanceid'] = 'O id da instância em que o cupom foi usado.';
$string['privacy:metadata:enrol_wallet_coupons_usage:userid'] = 'O id do usuário.';
$string['privacy:metadata:enrol_wallet_hold_gift'] = 'Armazena informações sobre presentes de referência em espera.';
$string['privacy:metadata:enrol_wallet_hold_gift:amount'] = 'O valor do presente de referência.';
$string['privacy:metadata:enrol_wallet_hold_gift:courseid'] = 'O id do curso em que o usuário referido se matriculou e recebeu o presente.';
$string['privacy:metadata:enrol_wallet_hold_gift:referred'] = 'O nome de usuário do usuário referido.';
$string['privacy:metadata:enrol_wallet_hold_gift:referrer'] = 'O id do usuário que fez a referência.';
$string['privacy:metadata:enrol_wallet_items'] = 'Armazena algumas informações não críticas antes de cada pagamento, incluindo o valor e a moeda e o que o usuário está pagando.';
$string['privacy:metadata:enrol_wallet_items:cost'] = 'O custo do item, seja um item fictício de recarga ou uma instância de matrícula.';
$string['privacy:metadata:enrol_wallet_items:currency'] = 'A moeda do item.';
$string['privacy:metadata:enrol_wallet_items:instanceid'] = 'O id da instância de matrícula, se existir.';
$string['privacy:metadata:enrol_wallet_items:userid'] = 'O id do usuário.';
$string['privacy:metadata:enrol_wallet_referral'] = 'Armazena informações sobre o programa de referência.';
$string['privacy:metadata:enrol_wallet_referral:code'] = 'Um código de referência único.';
$string['privacy:metadata:enrol_wallet_referral:userid'] = 'O id do usuário.';
$string['privacy:metadata:enrol_wallet_referral:users'] = 'Nomes de usuários dos usuários referidos por este usuário.';
$string['privacy:metadata:enrol_wallet_referral:usetimes'] = 'O número de vezes que o usuário usou o código.';
$string['privacy:metadata:enrol_wallet_transactions'] = 'Armazena informações sobre cada transação da carteira.';
$string['privacy:metadata:enrol_wallet_transactions:amount'] = 'O valor da transação.';
$string['privacy:metadata:enrol_wallet_transactions:balance'] = 'O saldo após a transação.';
$string['privacy:metadata:enrol_wallet_transactions:balbefore'] = 'O saldo antes da transação.';
$string['privacy:metadata:enrol_wallet_transactions:description'] = 'A descrição da transação que contém detalhes sobre o curso ou o método pelo qual o usuário recarregou sua carteira.';
$string['privacy:metadata:enrol_wallet_transactions:norefund'] = 'Se este valor de transação é reembolsável ou não.';
$string['privacy:metadata:enrol_wallet_transactions:type'] = 'O tipo da transação (débito ou crédito).';
$string['privacy:metadata:enrol_wallet_transactions:userid'] = 'O id do usuário.';
$string['privacy:metadata:wordpress'] = 'Armazena informações críticas sobre o usuário que são enviadas para o site wordpress vinculado para criar automaticamente uma conta de usuário lá';
$string['privacy:metadata:wordpress:email'] = 'O endereço de e-mail.';
$string['privacy:metadata:wordpress:password'] = 'A senha em texto bruto após a criação do usuário ou alguma string aleatória se o usuário já existir.';
$string['privacy:metadata:wordpress:userid'] = 'O id do usuário.';
$string['privacy:metadata:wordpress:username'] = 'O nome de usuário.';
$string['profile_field_map'] = 'Mapeamento de campo de perfil';
$string['profile_field_map_help'] = 'Selecione o campo de perfil que armazena informações sobre descontos nos perfis de usuário.';
$string['purchase'] = 'Compra';
$string['purchasedescription'] = 'Matrícula no curso {$a}';
$string['randomcoupons'] = 'Cupons Aleatórios';
$string['receiver'] = 'Receptor';
$string['referral'] = 'Indicação';
$string['referral_amount'] = 'Valor da Indicação.';
$string['referral_amount_desc'] = 'O valor do presente que tanto o usuário que indica quanto o indicado receberão em suas carteiras.';
$string['referral_amount_help'] = 'O valor do presente que você e o novo usuário receberão na carteira.';
$string['referral_code'] = 'Código de Indicação';
$string['referral_code_help'] = 'Em vez da URL de indicação, você pode enviar este código de indicação, e o novo usuário deve inseri-lo na página de inscrição.';
$string['referral_code_signup_help'] = 'Se isso estiver vazio, insira um código de indicação para receber o presente da indicação.';
$string['referral_copied'] = 'Copiado!';
$string['referral_copy_to_clipboard'] = 'Copiar para a área de transferência';
$string['referral_data'] = 'Dados de Indicação';
$string['referral_done'] = 'Presente concedido';
$string['referral_enabled'] = 'Ativar Programa de Indicação';
$string['referral_exceeded'] = 'O código de indicação: {$a} excede seu uso máximo.';
$string['referral_gift'] = 'Devido ao código de indicação do usuário: {$a}';
$string['referral_header'] = 'Compartilhe o link e ganhe créditos na Carteira!';
$string['referral_hold'] = 'Presente em espera';
$string['referral_holdgift'] = 'Você tem um presente retido ({$a->amount}) devido ao uso do código de indicação de {$a->name}, compre um curso para receber seu presente.';
$string['referral_max'] = 'Máximo de Indicações';
$string['referral_max_desc'] = 'O número máximo de vezes que um usuário pode receber presentes de indicação (0 significa ilimitado).';
$string['referral_noparents'] = 'Pais não têm permissão para acessar o programa de indicação';
$string['referral_not_enabled'] = 'Indicações não ativadas';
$string['referral_notexist'] = 'O código: \\\'{$a}\\\' não existe no banco de dados.';
$string['referral_notyet'] = 'Ainda não recebido!';
$string['referral_past'] = 'Indicações Passadas';
$string['referral_plugins'] = 'Plugins de Inscrição';
$string['referral_plugins_desc'] = 'Os usuários não recebem o presente de indicação até que o usuário indicado se inscreva em um curso para garantir que este seja um usuário ativo.<br/>Escolha os métodos de inscrição permitidos para que os usuários recebam esse presente';
$string['referral_program'] = 'Programa de Indicações';
$string['referral_program_desc'] = 'Usuários existentes podem indicar novos usuários para se juntarem a este site e ambos receberão um presente de indicação.';
$string['referral_remain'] = 'Indicações Restantes.';
$string['referral_remain_help'] = 'Número de vezes disponíveis para receber o presente de indicação.';
$string['referral_share_body'] = 'Saudações;

Você foi convidado a participar de {$a->site} e receberá um {$a->amount} grátis como presente de adesão em sua carteira.

Por favor, use o link a seguir para se inscrever.

{$a->url}';
$string['referral_share_subject'] = 'Junte-se ao {$a->site} e ganhe um crédito grátis na sua carteira.';
$string['referral_site_desc'] = 'Este site possui um programa de indicação, onde você pode enviar o código de indicação para seu amigo e, ao se inscrever em pelo menos um de nossos cursos, ambos receberão um presente em suas carteiras. Para mais informações';
$string['referral_subheader'] = 'Compartilhe um link simples e, quando alguém se registrar e comprar um curso, você receberá {$a} na sua Carteira.';
$string['referral_timecreated'] = 'Data de inscrição';
$string['referral_timereleased'] = 'Presente concedido em:';
$string['referral_topup'] = 'Devido à indicação do usuário: {$a}.';
$string['referral_url'] = 'URL de Indicação';
$string['referral_url_help'] = 'Envie esta URL para seu amigo se inscrever neste site e receber um presente de indicação com o seguinte valor na sua carteira.';
$string['referral_user'] = 'Indicações';
$string['refundperiod'] = 'Período de carência para reembolso';
$string['refundperiod_desc'] = 'O tempo após o qual os usuários não podem ser reembolsados pelo que pagaram para carregar suas carteiras. 0 significa reembolso a qualquer momento.';
$string['refundpolicy'] = 'Política de Reembolso Manual';
$string['refundpolicy_default'] = '<h5>Política de Reembolso</h5>
observe que:<br>
O pagamento para recarregar sua carteira não pode ser reembolsado nos seguintes casos:<br>
1- Se esse valor for devido a presente de novo usuário, recompensa ou cashback.<br>
2- Se o período de carência de reembolso expirou (14 dias).<br>
3- Qualquer valor já utilizado na inscrição não será reembolsável.<br>
Ao cobrar sua carteira por qualquer método significa que você concordou com esta política.';
$string['refundpolicy_help'] = 'Defina uma política de reembolso personalizada para que os usuários estejam cientes das condições de como poderão recuperar seu dinheiro ou não antes de carregar suas carteiras. Esta política será exibida aos usuários em qualquer forma de recarga de suas carteiras ou exibição de saldo.';
$string['refunduponunenrol_desc'] = 'Reembolsado pelo valor de {$a->credit} após a dedução da taxa de cancelamento de {$a->fee} no curso: {$a->coursename}.';
$string['repurchase'] = 'Recompra';
$string['repurchase_desc'] = 'Configurações para recompra dos cursos. Se ativado, os usuários poderão recomprar as aulas novamente após o término da data de inscrição.';
$string['repurchase_firstdis'] = 'Desconto na primeira recompra';
$string['repurchase_firstdis_desc'] = 'Se especificado, os usuários receberão desconto por este percentual (0 - 100) na segunda vez que comprarem o curso.';
$string['repurchase_seconddis'] = 'Desconto na segunda recompra';
$string['repurchase_seconddis_desc'] = 'Na terceira vez que os usuários comprarem (segunda recompra) o curso, eles receberão desconto por este valor. (deve estar entre 0 - 100)';
$string['restrictionenabled'] = 'Ativar restrição.';
$string['restrictionenabled_desc'] = 'Se desativado, nenhuma restrição será verificada.';
$string['restrictions'] = 'Restrições de Inscrição';
$string['restrictions_desc'] = 'Assim como seções e módulos de curso, agora o Wallet Enrollments oferece uma opção para adicionar restrições à inscrição. Nem todos os plugins de disponibilidade foram testados adequadamente, então você pode escolher a partir daqui o que funciona bem e, por favor, relate qualquer erro para que possamos melhorar essa funcionalidade.';
$string['role'] = 'Papel atribuída por padrão';
$string['selectuser'] = 'Por favor, selecione um usuário.';
$string['sendcoursewelcomemessage'] = 'Enviar mensagem de boas-vindas ao curso';
$string['sendcoursewelcomemessage_help'] = 'Quando um usuário se inscreve no curso, pode ser enviado um e-mail de mensagem de boas-vindas. Se enviado pelo contato do curso (por padrão, o professor) e mais de um usuário tiver esse papel, o e-mail é enviado do primeiro usuário a receber o papel.';
$string['sender'] = 'Remetente';
$string['sendexpirynotificationstask'] = 'Tarefa de envio de notificações de expiração da carteira de inscrição';
$string['sendpaymentbutton'] = 'Pagamento direto';
$string['share_referral'] = 'Compartilhar com amigos';
$string['showbalance'] = 'Mostrar saldo';
$string['showprice'] = 'Mostrar preço no ícone de inscrição';
$string['showprice_desc'] = 'Se selecionado, o preço do curso será exibido sobre o ícone de inscrição no cartão do curso.';
$string['singlecoupon'] = 'Cupom único';
$string['smallerthan'] = 'Menor que';
$string['smallerthanorequal'] = 'Menor que ou igual';
$string['sourcemoodle'] = 'Carteira interna do Moodle';
$string['sourcewordpress'] = 'Carteira externa Tera-wallet (WooWallet)';
$string['status'] = 'Permitir inscrições existentes';
$string['status_desc'] = 'Ativar método de inscrição na carteira em novos cursos.';
$string['status_help'] = 'Se habilitado junto com "Permitir novas inscrições" desabilitado, apenas os usuários que se inscreveram anteriormente podem acessar o curso. Se desativado, esse método de inscrição está efetivamente desabilitado, já que todas as inscrições existentes são suspensas e novos usuários não podem se inscrever.';
$string['submit_coupongenerator'] = 'Criar';
$string['syncenrolmentstask'] = 'Tarefa de sincronização de inscrições da carteira';
$string['tellermen'] = 'Operadores a serem exibidos';
$string['tellermen_desc'] = 'Usuários selecionados aqui serão exibidos publicamente nas opções de recarga para que os usuários saibam a quem pedir para carregar suas carteiras. (Selecionar nenhum não exibirá nada)';
$string['tellermen_display_guide'] = 'Precisa de ajuda para carregar sua carteira? Pergunte a um dos nossos administradores de carteira para carregar sua carteira manualmente ou para ajudá-lo com o procedimento.';
$string['tellermen_heading'] = 'Operadores';
$string['tellermen_heading_desc'] = 'Todos os usuários com capacidades de creditar ou debitar carteiras de usuários, isso determina quem será exibido no formulário de recarga para que os usuários saibam a quem pedir para carregar suas carteiras.';
$string['topup'] = 'Recarregar';
$string['topupafterdiscount'] = 'Pagamento real';
$string['topupafterdiscount_help'] = 'O valor após o desconto.';
$string['topupbundle'] = 'Recarregue sua carteira e pague apenas:';
$string['topupbycoupon'] = 'Usando cupons';
$string['topupbypayment'] = 'Usando pagamento';
$string['topupbytellerman'] = 'Manual da nossa parte';
$string['topupbyvc'] = 'Usando transferência para carteira móvel ou instapay';
$string['topupcoupon_desc'] = 'pelo código do cupom {$a}';
$string['topupoffers'] = 'Ofertas de recarga da carteira';
$string['topupoffers_desc'] = 'Ao recarregar sua carteira com um valor igual ou maior que os valores fornecidos, você receberá um desconto pelo valor especificado e pagará menos que esse valor por essa porcentagem.';
$string['topuppayment_desc'] = 'Recarregando a carteira pelo pagamento de {$a} usando a gateway de pagamento.';
$string['topupvalue'] = 'Valor da recarga';
$string['topupvalue_help'] = 'Valor para recarregar sua carteira usando métodos de pagamento';
$string['transaction_perpage'] = 'Transações por página';
$string['transaction_type'] = 'Tipo de transação';
$string['transactions'] = 'Transações da carteira';
$string['transactions_details'] = 'Mais detalhes da transação';
$string['transfer'] = 'Transferir saldo para outro usuário';
$string['transfer_desc'] = 'Ativar ou desativar a capacidade dos usuários de transferir saldo para outros usuários e determinar a taxa de transferência por operação.';
$string['transfer_enabled'] = 'Transferir para outro usuário';
$string['transfer_enabled_desc'] = 'Ativar ou desativar a capacidade dos usuários de transferir saldo para outros usuários por e-mail.';
$string['transfer_notenabled'] = 'A transferência de usuário para usuário não está ativada neste site.';
$string['transferfee_desc'] = 'Observe que haverá uma taxa de {$a->fee}% deduzida do {$a->from}.';
$string['transferfee_from'] = 'Deduzir taxas de:';
$string['transferfee_from_desc'] = 'Selecione como as taxas serão deduzidas.<br>
Do remetente: significa que o valor foi totalmente transferido e o crédito extra deduzido do remetente.<br>
Do destinatário: significa que o valor transferido ao destinatário é menor que o valor enviado pelas taxas.';
$string['transferop_desc'] = 'Transferindo um valor líquido de {$a->amount} com taxas de transferência de {$a->fee} para {$a->receiver}';
$string['transferpage'] = 'Transferir saldo';
$string['transferpercent'] = 'Taxas de transferência %';
$string['transferpercent_desc'] = 'Para transferir um valor para outro usuário, uma taxa percentual será deduzida do remetente por padrão. Defina como 0 para que não haja taxa deduzida.';
$string['transformation_credit_desc'] = 'Usando enrol_credit? Se desejar, você pode transformar todos os créditos dos usuários em suas carteiras e também migrar todas as inscrições e instâncias para enrol_wallet. Existem {$a->credit} instâncias de crédito para inscrição e {$a->enrol} inscrições a serem migradas.';
$string['transformation_credit_done'] = 'A transformação e migração foram enfileiradas com sucesso e serão executadas em breve, verifique após um tempo para créditos e inscrições.';
$string['transformation_credit_title'] = 'Transformação de crédito para carteira';
$string['turn_not_refundable_task'] = 'Transformar saldo em não reembolsável.';
$string['unenrol'] = 'Desinscrever usuário';
$string['unenrollimitafter'] = 'Não pode se desinscrever após:';
$string['unenrollimitafter_desc'] = 'Usuários não podem se inscrever após este período a partir da data de início da inscrição. 0 significa ilimitado.';
$string['unenrollimitbefor'] = 'Não pode se desinscrever antes:';
$string['unenrollimitbefor_desc'] = 'Usuários não podem se desinscrever antes deste período a partir da data de término da inscrição. 0 significa sem limite.';
$string['unenrolrefund'] = 'Reembolso ao desinscrever?';
$string['unenrolrefund_desc'] = 'Se ativado, os usuários serão reembolsados se se desinscreverem do curso.';
$string['unenrolrefund_head'] = 'Reembolsar usuários ao desinscrever.';
$string['unenrolrefund_head_desc'] = 'Devolver a taxa paga de um curso após a desinscrição do curso.';
$string['unenrolrefundfee'] = 'Percentual de reembolso';
$string['unenrolrefundfee_desc'] = 'Escolha um valor percentual que não será reembolsado após a desinscrição como taxa.';
$string['unenrolrefundperiod'] = 'Período de carência para reembolso ao desinscrever';
$string['unenrolrefundperiod_desc'] = 'Se o usuário se desinscrever dentro deste período a partir da data de início da inscrição, ele será reembolsado.';
$string['unenrolrefundpolicy'] = 'Política de reembolso ao desinscrever';
$string['unenrolrefundpolicy_default'] = '<p dir="ltr" style="text-align: left;"><strong>Condições para reembolso após cancelamento da inscrição:</strong></p>
<p dir="ltr" style="text-align: left;">
Se você cancelar a inscrição no curso dentro de {period} dias a partir da data de início, você será reembolsado no valor pago após deduzir {fee}% do valor pago.
Esse valor retornará para sua carteira e você poderá utilizá-lo para inscrição em outros cursos, mas não poderá ser reembolsado manualmente.<br>
Ao clicar em comprar significa que você concordou com estas condições.
</p>';
$string['unenrolrefundpolicy_help'] = 'Se o reembolso após cancelamento da inscrição estiver ativado, esta política ficará visível para os usuários antes de se inscreverem nos cursos usando a inscrição na carteira.<br>
colocar {fee} na apólice será substituído pela taxa percentual.<br>
a colocação de {período} será substituída pelo período de carência em dias.';
$string['unenrolself_notallowed'] = 'Você não pode se desinscrever deste curso.';
$string['unenrolselfconfirm'] = 'Você realmente deseja se desinscrever do curso "{$a}"?';
$string['unenrolselfenabled'] = 'Ativar auto-desinscrição';
$string['unenrolselfenabled_desc'] = 'Se ativado, os usuários poderão se desinscrever do curso.';
$string['unenroluser'] = 'Você realmente deseja desinscrever "{$a->user}" do curso "{$a->course}"?';
$string['unenrolusers'] = 'Desinscrever usuários';
$string['upload_coupons'] = 'Carregar cupons';
$string['upload_coupons_help'] = 'Faça upload de cupons em um arquivo csv para adicionar ou editar cupons de carteira em massa. O arquivo csv deve conter duas colunas principais:<br>
\'code\': O código do cupom a ser adicionado ou atualizado.<br>
\'valor\': O valor do cupom e pode ficar em 0 somente se o tipo for (matrícula).<br>
e colunas opcionais:<br>
\'tipo\': o tipo do cupom e apenas quatro valores permitidos (fixo, percentual, categoria ou inscrição).<br>
\'cursos\': só tem efeito quando o tipo for (matrícula) e se deverá conter os nomes abreviados dos cursos obrigatórios separados por / .<br>
\'categoria\': o id da categoria em que o cupom está disponível para uso.<br>
\'maxusage\': O uso máximo do código do cupom.<br>
\'validfrom\': Carimbo de hora da data a partir da qual o cupom está disponível para uso.<br>
\'validto\': carimbo de data e hora da data após a qual o cupom não estará disponível.<br>
\'maxperuser\': tempo máximo para um único usuário usar um cupom.<br>
\'id\': O id do cupom em caso de atualização.';
$string['upload_result'] = 'Resultado';
$string['uploadcsvfilerequired'] = 'Por favor, carregue o arquivo csv.';
$string['upperletters'] = 'MAIÚSCULAS';
$string['usedfrom'] = 'Usado de';
$string['usedto'] = 'Usado até';
$string['usernotexist'] = 'Usuário não existe';
$string['usernotfound'] = 'Nenhum usuário encontrado com este e-mail {$a}.';
$string['validfrom'] = 'Válido a partir de';
$string['validto'] = 'Válido até';
$string['value'] = 'Valor por transação';
$string['wallet:bulkedit'] = 'Edição em massa das inscrições em todos os cursos';
$string['wallet:config'] = 'Configurar instâncias de inscrição na carteira';
$string['wallet:createcoupon'] = 'Criar cupons da carteira';
$string['wallet:creditdebit'] = 'Creditar e debitar outros usuários';
$string['wallet:deletecoupon'] = 'Excluir cupom da carteira';
$string['wallet:downloadcoupon'] = 'Baixar cupons da carteira';
$string['wallet:editcoupon'] = 'Editar cupons';
$string['wallet:enrolself'] = 'Comprar um curso através da instância de inscrição na carteira';
$string['wallet:manage'] = 'Gerenciar usuários inscritos';
$string['wallet:transaction'] = 'Ver a tabela de transações';
$string['wallet:transfer'] = 'Transferir saldo da carteira para outro usuário';
$string['wallet:unenrol'] = 'Desinscrever usuários do curso';
$string['wallet:unenrolself'] = 'Desinscrever-se do curso';
$string['wallet:viewcoupon'] = 'Ver tabela de cupons da carteira';
$string['wallet:viewotherbalance'] = 'Ver o saldo da carteira de outros';
$string['walletbulk'] = 'Edição em massa das instâncias de inscrição na carteira';
$string['walletcashback'] = 'Cashback por usar a carteira';
$string['walletcashback_desc'] = 'Ativa o programa de cashback em todo o site';
$string['walletcredit'] = 'Crédito da Carteira';
$string['walletsource'] = 'Fonte da Carteira';
$string['walletsource_help'] = 'Escolha conectar a carteira com a carteira externa WooCommerce Tera ou apenas usar a carteira interna do Moodle';
$string['welcometocourse'] = 'Bem-vindo ao {$a}';
$string['welcometocoursetext'] = 'Bem-vindo ao {$a->coursename}!

Se ainda não o fez, edite sua página de perfil para que possamos saber mais sobre você:

{$a->profileurl}';
$string['wordpress_secretkey'] = 'Chave Secreta';
$string['wordpress_secretkey_help'] = 'O administrador deve adicionar qualquer valor aqui e o mesmo valor na configuração do moo-wallet no site WordPress.';
$string['wordpressloggins'] = 'Login/logout de usuários no WordPress';
$string['wordpressloggins_desc'] = 'Se ativado, os usuários são conectados e desconectados do site WordPress quando fazem login ou logout do Moodle. (observe que é apenas em um sentido)';
$string['wordpressurl'] = 'URL do WordPress';
$string['wordpressurl_desc'] = 'URL do WordPress com o plugin Woo-wallet (Tera Wallet)';
$string['wrongemailformat'] = 'Formato de e-mail incorreto.';
$string['youhavebalance'] = 'Você tem saldo:';
