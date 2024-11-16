# Sistema de Cadastro e Controle de Acesso de Funcionários com RFID

## Introdução
Este projeto de conclusão de módulo tem como objetivo desenvolver um sistema para cadastro de funcionários e controle de acesso utilizando tecnologia RFID. A solução está dividida em três módulos principais: Cadastro (PHP), Leitura do RFID (Python) e Controle de Ponto (Python).

## Objetivos do Projeto
- **Desenvolver uma interface intuitiva para cadastro de funcionários.**
- **Implementar a leitura de cartões RFID para identificação.**
- **Registrar e monitorar o ponto dos funcionários de forma eficiente.**

## Tecnologias Utilizadas
- **PHP**: Responsável pelo módulo de cadastro de funcionários.
- **Python**: Utilizado tanto para a leitura dos cartões RFID quanto para o controle de ponto.
- **MySQL**: Banco de dados para armazenar informações dos funcionários e registros de acesso.
- **RFID**: Tecnologia utilizada para identificação e controle de acesso dos funcionários.

## Estrutura do Projeto

### 1. Cadastro de Funcionários (PHP)
O módulo de cadastro é desenvolvido em PHP e proporciona uma interface web onde os administradores podem adicionar novos funcionários. As informações armazenadas incluem nome, cargo e número do cartão RFID.

### 2. Leitura do RFID (Python)
Este módulo é responsável por ler os cartões RFID dos funcionários. Utilizando um leitor RFID, o sistema em Python captura os dados do cartão e identifica o funcionário.

### 3. Controle de Ponto (Python)
Após a leitura do cartão RFID, o módulo de controle de ponto registra as entradas e saídas dos funcionários. Cada vez que um cartão é lido, um registro de ponto é criado com a data e hora correspondentes. 

## Funcionamento do Sistema

1. **Cadastro de Funcionários**: 
   - Os administradores acessam a interface web e cadastram os funcionários, inserindo dados como nome, cargo e número do cartão RFID.
   - As informações são armazenadas no banco de dados MySQL.

2. **Leitura do RFID**:
   - Funcionários aproximam seus cartões RFID do leitor.
   - O sistema em Python lê os dados do cartão e identifica o funcionário correspondente.

3. **Controle de Ponto**:
   - Após a leitura do RFID, o sistema registra a entrada ou saída do funcionário.
   - O registro de ponto é salvo no banco de dados, incluindo o horário exato da ação.

## Conclusão
Este sistema de cadastro e controle de acesso de funcionários com RFID proporciona uma solução integrada e eficiente para a gestão de funcionários. A combinação das tecnologias PHP e Python permite uma abordagem flexível e robusta, garantindo um ambiente seguro e organizado para o controle de acesso e registro de ponto.
