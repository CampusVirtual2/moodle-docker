
1. INFORMAÇÕES GERAIS
================================================
O projeto tem por objetivo a criação de um ambiente EAD, utilizando a plataforma LMS Moodle, que deverá abrigar os cursos de capacitação do CampusVirtual2.
 - Ambiente de homologação: homol.moodle.agu.redes.unb.br 
 - Versão do Moodle atual: 4.0 
 - Obs: Há outro projeto no repositório GIT, chamado "Daniel Alves / AGU". Favor desconsiderar, pois nunca foi utilizado.


2. INFORMAÇÕES DE INSTALAÇÃO 
================================================

2.1. PRÉ-REQUISITOS 
================================================ 
 - Servidor WEB: Apache ou Nginx 
 - Versão do PHP: 7.4.3 ou superior (recomendado habilitar o (OPCache) 
 - Banco de Dados: Postgres 13.6

2.2. ARQUIVO DE CONFIGURAÇÃO DO BANCO DE DADOS 
================================================ 
O Moodle utiliza o arquivo "config.php" existente no diretório principal da instalação para configuração. 
Neste arquivo encontram-se as 2 informações importantes, relativas aos dados que deverão ser migrados para o ambiente de produção: 
 1) Dados de conexão com o banco de dados; 
 2) Diretório do "moodledata", ou seja, onde se encontram os dados moodle "$CFG->dataroot";
