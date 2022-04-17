# Informações do Projeto
`Iquest`  

O Iquest é um projeto de um site voltado a um guia de carreira para as áreas relacionadas à tecnologia e ao sistema de informações, onde o através desse mecanismo o usuário fará um quiz que traçara o perfil comportamental e como retorno lhe será indicado áreas de trabalho compatíveis com suas respostas e trazendo também um cronograma de iniciação e estudo da área. 

`SISTEMAS DE INFORMAÇÃO` 

## Participantes

> Os membros do grupo são: 
> - Kaiky Leles 
> - Thiago Lacerda
> - Ícaro Starling
> - Jeziel Suzana
> - Gustavo Antônio


# Estrutura do Documento

- [Informações do Projeto](#informações-do-projeto)
  - [Participantes](#participantes)
- [Estrutura do Documento](#estrutura-do-documento)
- [Introdução](#introdução)
  - [Problema](#problema)
  - [Objetivos](#objetivos)
  - [Justificativa](#justificativa)
  - [Público-Alvo](#público-alvo)
- [Especificações do Projeto](#especificações-do-projeto)
  - [Personas e Mapas de Empatia](#personas-e-mapas-de-empatia)
  - [Histórias de Usuários](#histórias-de-usuários)
  - [Requisitos](#requisitos)
    - [Requisitos Funcionais](#requisitos-funcionais)
    - [Requisitos não Funcionais](#requisitos-não-funcionais)
  - [Restrições](#restrições)
- [Projeto de Interface](#projeto-de-interface)
  - [User Flow](#user-flow)
  - [Wireframes](#wireframes)
- [Metodologia](#metodologia)
  - [Divisão de Papéis](#divisão-de-papéis)
  - [Ferramentas](#ferramentas)
  - [Controle de Versão](#controle-de-versão)
- [**############## SPRINT 1 ACABA AQUI #############**](#-sprint-1-acaba-aqui-)
- [Projeto da Solução](#projeto-da-solução)
  - [Tecnologias Utilizadas](#tecnologias-utilizadas)
  - [Arquitetura da solução](#arquitetura-da-solução)
- [Avaliação da Aplicação](#avaliação-da-aplicação)
  - [Plano de Testes](#plano-de-testes)
  - [Ferramentas de Testes (Opcional)](#ferramentas-de-testes-opcional)
  - [Registros de Testes](#registros-de-testes)
- [Referências](#referências)


# Introdução

## Problema

A tecnologia da informação possui uma gama de possibilidades muito alta, gerando assim, duvidas em quais áreas ingressar. Pensando nisso o Iquest veio ao mercado para sanar essas dúvidas e ajudar na iniciação da área traçada através do perfil comportamental. 

## Objetivos

- Ajudar na escolha de uma das diversas áreas da tecnologia da informação.
- Traçar um perfil através de escolhas.
- Ajudar na iniciação de estudos.
- Fornecer especialização para o usuário. 

## Justificativa

Vendo as duvidas dos usuarios quanto a questao era saber por onde começar, vemos uma importancia de sanar essa duvida. E por isso surgiu o Iquest que tem como maior justificativa sanar duvida de novos estudantes que sonham em ingressar na área de TI. Além disso, a partir das entrevistas apresentadas no documento de Design Thinking foi possível comprovar que o Iquest seria uma solução ideal para os problemas relatados pelos estudantes.

## Público-Alvo

Pessoas que estão ingressando na área de TI e possuem dúvida por onde começar.
 
# Especificações do Projeto

Neste documento serão apresentados os aspectos relevantes para o desenvolvimento do Iquest, como a Persona, as funcionalidades do site responsável por resolver o problema, juntamento com o Wireframe de telas demonstrando como o site será visualmente.

## Personas e Mapas de Empatia

A Persona criada para o projeto foi criada em conjunto com o mapa de empatia para permitir que nosso projeto consiga enxergar os estudantes mais a fundo, compreendendo o que eles sentem, quais suas necessidades, desejos e problemas mais íntimos. Através de um esquema gráfico composto por quadrantes, os insights que respondem a esses questionamentos são escritos e detalhados na imagem abaixo, além de ajudar a aprofundar e otimizar a persona. Portanto, a persona criada para nossa solução foi alguém com que o público-alvo se identifica, pois, ele também deseja conhecer sua área e também é estudante.

### Persona
![Persona](images/Persona_Iquest.png)

### Características Persona
![Caracteristicas Persona](images/Persona_Carac.jpeg)

### Mapa de empatia
![Mapa de Empatia](images/mapa_empatia.jpeg)

## Histórias de Usuários

Com base na análise das personas forma identificadas as seguintes histórias de usuários:

|EU COMO | QUERO/PRECISO | PARA |
|--------------------|------------------------------------|----------------------------------------|
| Estudante recém formado | Sanar minhas duvidas relacionadas a área de TI | Escolher qual área seguir |
| Administrador | Manter as informações do site atualizadas e funcionais| que possam estar condizentes com o cenário atual |

## Requisitos

As tabelas que se seguem apresentam os requisitos funcionais e não funcionais que detalham o escopo do projeto.

### Requisitos Funcionais

|ID    | Descrição do Requisito  | Prioridade |
|------|-----------------------------------------|----|
|RF-001| O usuário acessa o site com um login e senha | MÉDIA | 
|RF-002| O site deve ter uma análise de comportamento para indicar o curso | ALTA |
|RF-003| O site retorna a área compatível com as respostas do usuário | ALTA |
|RF-004| O site deve ter uma análise de comportamento para indicar o curso | ALTA |
|RF-005| O site retorna um fluxo de estudo de acordo com os cursos compatíveis com a área | MÉDIA |


### Requisitos não Funcionais

|ID     | Descrição do Requisito  |Prioridade |
|-------|-------------------------|----|
|RNF-001| Organização das respostas tornando mais interativo. | MÉDIA | 
|RNF-002| Sequencia logica das perguntas |  MÉDIA | 
|RNF-003| Validação imediata das respostas |  ALTA | 
|RNF-004| O site deve organizar o fluxo de estudo para facilitar a interpretação |  MÉDIA | 


## Restrições

O projeto está restrito pelos itens apresentados na tabela a seguir.

|ID| Restrição                                             |
|--|-------------------------------------------------------|
|01| O projeto deverá ser entregue até o final do semestre |
|02| O projeto deve estar pronto em 3 meses |
|03| O Projeto deve atentar a lei geral de proteção de dados |
|04| O Projeto tem que dar créditos aos professores dos cursos |


# Projeto de Interface

Visto que, usualmente, os usuários julgam um sistema por sua interface, para a realização de tal projeto decidimos utilizar uma interface projetada de acordo com a expectativa do nosso usuário, ou seja, um sistema que cause familiaridade para aqueles que vão utiliza-lo, fácil de ser manipulado, objetivo e que cause surpresa mínima no manipulador, consistente, no sentido de que, sempre que possível, operações semelhantes sejam ativadas da mesma maneira. 

- Corpo do Site  

Após a tela de login o usuário e levado para home. A tela inicial visa ser o mais objetiva possível, onde por meio de botões, escolhe-se, entre realizar o teste de aptidão ou conhecer mais sobre as áreas de TI, no qual ele é redirecionado para alguns cursos indicados. 

- Teste de aptidão 

O teste segue o mesmo design do site. Por meio de perguntas e respostas objetivas, é afunilada características essenciais, afim de guiar o usuário para uma área com mais afinidade, de acordo com suas respostas. 

- Porque um site mais objetivo e dinâmico? 

De acordo com a nossa análise de usuário, identificamos que nosso site é redirecionado para aqueles que já tem uma certa afinidade básica com a área de TI, ou seja, o nosso sistema irá servir de base ou inspiração para o rumo futuro que será tomado pelo cliente. Nesse caso o cliente necessita e quer que as informações sejam repassadas de forma mais rápida possível, tanto na indicação dos cursos, quanto no resultado do teste de aptidão.

## Wireframes e User Flow

### Home

![Exemplo de Wireframe](images/home.jpg)

### Tela Inicial

![Exemplo de Wireframe](images/Tela_Inicial.jpg)

### Teste Aptidão

![Exemplo de Wireframe](images/Teste_Aptidao.jpg)

### Front-End

![Exemplo de Wireframe](images/front.jpg)

### Back-End

![Exemplo de Wireframe](images/back.jpg)

### Full-Stack

![Exemplo de Wireframe](images/full.jpg)

### DevOps

![Exemplo de Wireframe](images/devops.jpg)

### Redes

![Exemplo de Wireframe](images/redes.jpg)

### Segurança

![Exemplo de Wireframe](images/segurança.jpg)


# Metodologia

Para o projeto foi utilizado o brainstorming (chuva de ideias) para definir o processo de execução do projeto. Logo após utilizamos o design thinking para fazer os fluxos de usuarios, o mapa de empatia, o mapa de stakeholders e definição da persona. Foi feito também a definição das áreas de atuação de cada participante e adicionado no backlog do projeto criado a partir do trello utilizando um modelo de organização Kanban, portanto, a separação das tarefas ficaram como: backlog --> todo --> doing --> done. Além disso, a matriz CSD e a separações de cada parte para iniciar o projeto foram criadas utilizando o draw.io. E por fim a confecção tanto do front-end com HTML, CSS e Bootstrap e o back-end com PHP foram organizadas no Github separadas pelas tarefas de cada um e utilizando 3 branchs (master --> desenvolvimento --> testes) e com a aprovação de qualquer modificação (PR) sendo feita pelo aluno colocado como responsável Full-Stack.

## Divisão de Papéis

Os papéis foram dividos a partir do trello e focados em 2 partes, os membros focados na parte do front-end do site e a outra parte no back-end do site.

| Membro  | Papel              |
|-----------|-------------------------|
|Samuel Lamera| Teste/Full-Stack | 
|Jeziel Suzana| Teste/Front-End | 
|Kaiky Leles| Teste/Front-End |  
|Ícaro Starling| Teste/Back-End |
|Thiago Lacerda| Teste/Back-End | 
|Gustavo Antonio | Teste/Back-End | 



## Ferramentas

As ferramentas empregadas no projeto são:

| Ambiente  | Plataforma              |Link de Acesso |
|-----------|-------------------------|---------------|
|Processo de Design Thinkgin  | Draw.io |  https://app.diagrams.net/ | 
|Repositório de código | GitHub | https://github.com/ | 
|Hospedagem do site | Hostinger |  https://www.hostinger.com.br/ | 
|Protótipo Interativo | NinjaMock| https://ninjamock.com/ | 
|Desenvolvimento| VsCode| https://code.visualstudio.com/ | 
|Organização do backlog| Trello | https://trello.com/pt-BR | 


- O draw.io foi escolhido pela sua simplicidade em construir fluxos.
- Github por ser uma plataforma de hospedagem de código-fonte e arquivos com controle de versão usando o Git mais conhecida por todos os participantes.
- Hostinger para hospedagem do site por ser o mais barato e simples de utilizar.
- NijaMock para Protótipo Interativo, pois, um dos participantes ja utilizou uma vez e tinha familiariedade.
- VsCode para desenvolvimento por ser o que todos mais utilizam.
- Trello foi utilizado para divisão de tarefas por ser simples e facíl de utilizar depois que foi criado um quadro Kanban


## Controle de Versão

Inicialmente somente um aluno criou o repositório a partir do template fornecido pelo professor. Para organização das partes de desenvolvimento, já que as tarefas foram divididas como demonstrado anteriormente, somente três branchs foram utilizadas:

- Master
- Desenvolvimento
- Testes

O fluxo segue da branch de testes --> desenvolvimento --> master. Sendo assim, nenhuma modificação é aprovada para a branch master sem aprovação do PR (Pull Request) antes, para evitar conflitos na parte do código já existente e funcional. O PR deve ser aprovado pelo aluno colocado com a função de Full-Stack. Não foi utilizado git-flow por questões de complexidade e tempo e experiência dos participantes do grupo.

# **############## SPRINT 1 ACABA AQUI #############**


# Projeto da Solução

......  COLOQUE AQUI O SEU TEXTO ......

## Tecnologias Utilizadas

......  COLOQUE AQUI O SEU TEXTO ......

> Descreva aqui qual(is) tecnologias você vai usar para resolver o seu
> problema, ou seja, implementar a sua solução. Liste todas as
> tecnologias envolvidas, linguagens a serem utilizadas, serviços web,
> frameworks, bibliotecas, IDEs de desenvolvimento, e ferramentas.
> Apresente também uma figura explicando como as tecnologias estão
> relacionadas ou como uma interação do usuário com o sistema vai ser
> conduzida, por onde ela passa até retornar uma resposta ao usuário.
> 
> Inclua os diagramas de User Flow, esboços criados pelo grupo
> (stoyboards), além dos protótipos de telas (wireframes). Descreva cada
> item textualmente comentando e complementando o que está apresentado
> nas imagens.

## Arquitetura da solução

......  COLOQUE AQUI O SEU TEXTO E O DIAGRAMA DE ARQUITETURA .......

> Inclua um diagrama da solução e descreva os módulos e as tecnologias
> que fazem parte da solução. Discorra sobre o diagrama.
> 
> **Exemplo do diagrama de Arquitetura**:
> 
> ![Exemplo de Arquitetura](images/arquitetura-exemplo.png)


# Avaliação da Aplicação

......  COLOQUE AQUI O SEU TEXTO ......

> Apresente os cenários de testes utilizados na realização dos testes da
> sua aplicação. Escolha cenários de testes que demonstrem os requisitos
> sendo satisfeitos.

## Plano de Testes

......  COLOQUE AQUI O SEU TEXTO ......

> Enumere quais cenários de testes foram selecionados para teste. Neste
> tópico o grupo deve detalhar quais funcionalidades avaliadas, o grupo
> de usuários que foi escolhido para participar do teste e as
> ferramentas utilizadas.
> 
> **Links Úteis**:
> - [IBM - Criação e Geração de Planos de Teste](https://www.ibm.com/developerworks/br/local/rational/criacao_geracao_planos_testes_software/index.html)
> - [Práticas e Técnicas de Testes Ágeis](http://assiste.serpro.gov.br/serproagil/Apresenta/slides.pdf)
> -  [Teste de Software: Conceitos e tipos de testes](https://blog.onedaytesting.com.br/teste-de-software/)

## Ferramentas de Testes (Opcional)

......  COLOQUE AQUI O SEU TEXTO ......

> Comente sobre as ferramentas de testes utilizadas.
> 
> **Links Úteis**:
> - [Ferramentas de Test para Java Script](https://geekflare.com/javascript-unit-testing/)
> - [UX Tools](https://uxdesign.cc/ux-user-research-and-user-testing-tools-2d339d379dc7)

## Registros de Testes

......  COLOQUE AQUI O SEU TEXTO ......

> Discorra sobre os resultados do teste. Ressaltando pontos fortes e
> fracos identificados na solução. Comente como o grupo pretende atacar
> esses pontos nas próximas iterações. Apresente as falhas detectadas e
> as melhorias geradas a partir dos resultados obtidos nos testes.


# Referências

......  COLOQUE AQUI O SEU TEXTO ......

> Inclua todas as referências (livros, artigos, sites, etc) utilizados
> no desenvolvimento do trabalho.
> 
> **Links Úteis**:
> - [Formato ABNT](https://www.normastecnicas.com/abnt/trabalhos-academicos/referencias/)
> - [Referências Bibliográficas da ABNT](https://comunidade.rockcontent.com/referencia-bibliografica-abnt/)
