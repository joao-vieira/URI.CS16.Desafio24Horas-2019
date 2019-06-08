# Documentos Normativos

> Seja bem-vindo ao caos! Ops, ao case! =)

## Esclarecimentos

### Configurações Gerais

* Todas as configurações de *aplicação* foram colocadas em seus respectivos arquivos, tais como
  * Conexão padrão da base de dados / nome do banco / *host* / porta: **/config/database.php**
  * Configurações gerais do sistema da aplicação: **/config/app.php**
* Já as configurações que *dependem do local em que estão* (ex: senha do banco de dados), estão armazenadas em: **.env**

> Obs: entendeu-se fazer isso como uma boa prática do framework. Para acessar discussões sobre o tema, acesse: [Discussão 1](https://laracasts.com/discuss/channels/laravel/env-vs-config-files) e [Discussão 2](https://laravel.io/forum/env-vs-config-files).

### Padrões

* Por favor, ao criar uma tela, siga esse padrão de *classe* para a **cor dos botões**
  * Ação de **remoção** (botão *Excluir/Remover*):  `btn-danger`
  * Ação de **retrocesso** (botão *Voltar*):  `btn-secondary`
  * Ação de **criação** (botão *Criar/Novo*):  `btn-success`
  * Ação de **alteração** (botão *Alterar/Atualizar*):  `btn-info`
  * Ação de **cancelamento** (botão *Cancelar*):  `btn-warning`
  * Qualquer outro **botão**:  `btn-primary`