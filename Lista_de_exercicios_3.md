## Lista de exercícios sobre estruturas condicionais IF/ELSE
---

#### Exercício 1: Verificação de Maioridade
Solicite que o usuário informe uma idade. Verifique se a idade é maior ou igual a 18. Se for, exiba "Maior de idade".Senão, exiba "Menor de idade".

---

#### Exercício 2: Par ou Ímpar?
Solicite que o usuário informe um número a ser verificado. Use o operador de módulo (%) para verificar se o número é par ou ímpar e exiba o resultado.

---

#### Exercício 3: Positivo, Negativo ou Zero
Solicite que o usuário informe um valor. Verifique se o número é "Positivo", "Negativo" ou "Igual a zero", informando ao usuário.

---

#### Exercício 4: Permissão para Votar
Baseado na idade de uma pessoa, informe se ela pode votar. A regra é: abaixo de 16 anos não vota; entre 16 e 17 anos ou acima de 70 anos, o voto é opcional; entre 18 e 70 anos, o voto é obrigatório.

---

#### Exercício 5: Qual é o Maior?
Crie duas variáveis, \$numA e $numB. Escreva uma estrutura condicional que compare os dois números e exiba qual deles é o maior, ou se eles são "iguais".

---

#### Exercício 6: Saudação por Turno do Dia
Crie uma variável \$turno que possa conter os valores 'manha', 'tarde' ou 'noite'. Usando uma estrutura condicional exiba "Bom dia!", "Boa tarde!" ou "Boa noite!" de acordo com o valor da variável. 

---

#### Exercício 7: Validação de Senha
Descrição: Crie duas variáveis: \$senhaCorreta (com um valor fixo) e \$senhaDigitada. Compare as duas e exiba "Acesso permitido" se forem iguais, ou "Acesso negado" se forem diferentes.

---

#### Exercício 8: Aluno Aprovado (com Frequência)
Para um aluno ser aprovado, ele precisa de duas coisas: nota final maior ou igual a 7 E frequência maior ou equal a 80 (%). Crie variáveis \$nota e \$frequencia e use uma estrutura if com o operador && para verificar se o aluno está "Aprovado" ou "Reprovado".

---

#### Exercício 9: Login de Usuário (composto)
Verifique as credenciais de um login. O acesso só será concedido se o \$usuario for "admin" E a \$senha for "senha123". Caso contrário, exiba "Usuário ou senha inválidos".

---

#### Exercício 10: Categoria do Nadador por Idade
Descrição: Com base na idade, classifique um nadador em uma das seguintes categorias:
- Infantil A: 5 a 7 anos
- Infantil B: 8 a 10 anos
- Juvenil A: 11 a 13 anos
- Juvenil B: 14 a 17 anos
- Adulto: 18 anos ou mais

Use uma sequência de if/elseif/else com condições compostas.

---

#### Exercício 11: Verificação de Ano Bissexto
Crie um programa que verifique se um determinado ano é bissexto. Um ano é bissexto se for divisível por 4, mas não por 100, a não ser que também seja divisível por 400.

---

#### Exercício 12: Tipos de Triângulo
Crie três variáveis com os lados de um triângulo (\$ladoA, \$ladoB, \$ladoC). Primeiro, verifique se os valores informados podem de fato formar um triângulo (a soma de dois lados quaisquer deve ser sempre maior que o terceiro lado). Se puderem, determine se o triângulo é:

- Equilátero: todos os lados iguais.

- Isósceles: dois lados iguais.

- Escaleno: todos os lados diferentes.
## Lista de exercícios sobre Funções

---

#### Exercício 1: Função calcularSoma()

Crie uma função chamada calcularSoma que receba um array de números como parâmetro. Dentro da função, utilize o laço que você já criou para calcular a soma dos elementos. A função deve retornar o valor total da soma.

---

#### Exercício 2: Função verificarParOuImpar()
Crie uma função chamada verificarParOuImpar que receba um número inteiro como parâmetro. A função deve retornar a string "Par" se o número for par, e a string "Ímpar" se for ímpar.

---

#### Exercício 3: Função checarMaioridade()
Crie uma função chamada checarMaioridade que receba uma $idade como parâmetro. A função deve retornar um valor booleano: true se a pessoa for maior de idade (18 anos ou mais) e false caso contrário.

---

#### Exercício 4: Função saudacaoPersonalizada()
Descrição: Crie uma função chamada saudacaoPersonalizada que receba um nome (string) como parâmetro e retorne a string de saudação formatada (ex: "Olá, João! Seja bem-vindo(a)!"). Depois, crie um array de nomes e use um foreach para chamar essa função e exibir a saudação para cada nome.

---

#### Exercício 5: Função validarAdmin()
Crie uma função validarLogin que receba dois parâmetros: \$usuario e \$senha. A função deve retornar true apenas se o usuário for "admin" e a senha for "senha123". Caso contrário, deve retornar false.

---

#### Exercício 6: Função obterDiagnosticoDeTriangulo()
Crie uma função obterDiagnosticoDeTriangulo que receba os três lados de um triângulo. A função deve primeiro validar se os lados formam um triângulo válido. Se não formarem, deve retornar a string "Não é um triângulo". Se for válido, deve retornar a classificação: "Equilátero", "Isósceles" ou "Escaleno".