# Gestão de Campos Personalizados de Perfil de Usuário em WordPress

Este repositório contém um conjunto de funções e shortcodes para estender e personalizar os perfis de usuário no WordPress, permitindo a inclusão e exibição de informações adicionais relacionadas a exames e resultados. Essas informações podem ser úteis em cenários educacionais ou de avaliação.

## Funcionalidades Principais

- **Adição de Campos Personalizados:** A função `adicionar_campos_personalizados_usuario` é usada para adicionar campos personalizados ao perfil do usuário. Isso permite que os administradores capturem informações como CPF, inscrição, curso escolhido, turno, resultados de provas e outras informações relevantes.

- **Exibição e Edição dos Campos:** Os campos personalizados são exibidos na página de edição de perfil do usuário. Os usuários podem inserir ou atualizar suas informações nessas áreas adicionais.

- **Salvando Campos Personalizados:** A função `salvar_campos_personalizados_usuario` é responsável por salvar as informações inseridas nos campos personalizados. Isso garante que as informações sejam armazenadas corretamente no banco de dados do WordPress, associadas ao usuário correspondente.

- **Shortcodes para Exibição:** Foram criados diversos shortcodes como `shortcode_cpf`, `shortcode_inscricao`, `shortcode_curso_escolhido`, etc., para que os usuários possam exibir essas informações personalizadas em suas páginas ou postagens. Esses shortcodes simplificam a incorporação das informações onde desejarem.

## Benefícios

- **Personalização Flexível:** Esse código permite que administradores personalizem e capturem informações específicas de cada usuário, indo além dos campos padrão de perfil.

- **Acompanhamento de Resultados:** Os campos personalizados são particularmente úteis para cenários onde é necessário rastrear o desempenho dos usuários, como em exames ou avaliações.

- **Integração com Shortcodes:** Através dos shortcodes, os usuários podem exibir suas informações personalizadas facilmente em páginas ou postagens, enriquecendo a experiência do site.

## Instruções de Uso

1. Copie as funções `adicionar_campos_personalizados_usuario`, `salvar_campos_personalizados_usuario` e os diversos shortcodes para o arquivo `functions.php` do seu tema WordPress.

2. Após adicionar as funções, os campos personalizados serão exibidos no perfil do usuário no painel de administração.

3. Use os shortcodes correspondentes para exibir as informações personalizadas onde necessário, como em páginas ou postagens.

Lembre-se de que esse código é apenas uma demonstração e pode ser adaptado conforme as necessidades do seu projeto. Certifique-se de fazer testes e ajustes adequados antes de implantar em um ambiente de produção.
