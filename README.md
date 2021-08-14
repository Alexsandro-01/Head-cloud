# Head-cloud
Projeto em PHP

Criei o projeto para praticar conhecimentos de PHP obtidos no curso de desenvolvimento web.
A idéia do projeto é um curso com algumas linguagens de programação como conteudo do curso, o objetivo
então foi desenvolver a plataforma de gestão das notas dos alunos do curso.

Os unicos botões na barra de navegação que funcionam são o da Home, usuário e login.
Na tela de login são pedidos o numero de matrícula e nome da pessoa, assim o banco de dados 
é consultado e existem três categorias de id_adm 1 = gestor, 2 = professor, 3 = aluno.
Cada categoria/privilégio é direcionado para uma página diferente.

Na página de aluno o usuário pode apenas ter acesso a seus dados e suas notas nas disciplinas, caso 
alguma nota esteja faltando significa que o professor ainda não lançou aquela nota no sistema

Na página de  Professor o usuário pode ver a lista de todos os seus alunos e as notas que já foram lançadas de todos eles,
mas apenas para a sua disciplina. então um professor de Javascript não pode ver a nota dos alunos na disciplina de PHP.
Nessa página o professor pode lançar a nota dos seus alunos, mas não pode apagá-las, se ele errar a nota de algum aluno, precisará pedir para alguém da gestão 
deletar ou modificar a nota do aluno em questão.

Já na página de Gestor o usuario tem o poder de ver todos os alunos e as notas de todas as disciplinas além de poder modificalas e deletá-las e adicioná-las.
O gestor também tem a ferramenta de filtar os alunos por turma.

Quando um usuário está logado no sistema, o botão de usuario na barra de navegação muda para o primeiro nome dele quando navegar por outras telas como a home
por exemplo.

Esse é um projeto simples mas de grande importância para meu aprendizado. Usei bastante comunicação com banco de dados, variável de sessão além de autenticação.
No começo não achei que fosse conseguir conclui-lo mas no fim consegui. Claro que ainda tenho muito a melhorar  e o proximo passo é criar algum projeto com padrão MVC.
