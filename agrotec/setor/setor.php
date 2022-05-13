<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Processamento de formularios com  PHP</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>
    <?php  
    $st=$_GET['st'];
    if($st== 'adm'){
        
    print('<p> Setor Administrativo <br/>
    O Setor Administrativo responde ao planejamento <br/>
     estratégico da empresa, o que inclui a atribuição de tarefas e,<br/>
      também, a análise estratégica de dados. Com isso, torna-se uma <br/>
      área fundamental para a tomada de decisão focada no crescimento <br/>  sustentável e coletivo da organização.
    Não à toa, é o setor que mais se assemelha <br/> às funções do coração: ele bombeia todas as tarefas de maneira coordenada para que os objetivos sejam atingidos continuamente.</p>');
      ?> <a href="http://localhost/agrotec/">
      <button>Inicio</button>
      </a> <?php
    }
    if($st== 'rh'){
        print('Setor de Recursos Humanos
        O setor de Recursos Humanos é um dos setores chave da empresa. Afinal de contas, o departamento tem adquirido mais e mais relevância na tomada de decisões-chave e estratégicas. Em parte, porque o valor da gestão de pessoas tem mostrado o quanto isso influencia, diretamente, na melhora coletiva da organização e de uma série de índices, como:
        •	produtividade;
        •	motivação;
        •	engajamento;
        •	absenteísmo;
        •	turnover.
        Entre outros dados que contribuem para a identificação de atividades que podem resolver conflitos e prevenir eventuais problemas sem falar, é claro, nas responsabilidades tradicionais do departamento, como a admissão e demissão de funcionários, a seleção e o recrutamento e a atenção às exigências e leis trabalhistas.
        Vale destacar também que o RH está cada vez mais alinhado a questões extra corporativas visando o bem-estar dos profissionais. !');
        ?> <a href="http://localhost/distribuidorafx/">
      <button>Inicio</button>
      </a> <?php
    }
    if($st== 'fin'){
        print('Setor Financeiro
        O financeiro é uma das principais áreas de uma empresa — e, talvez, uma que tem as maiores cobranças, literalmente. Geralmente, é um setor complementar ou acoplado ao administrativo, já que todas as decisões estão profundamente alinhadas à necessidade de capital para o investimento.
        Além disso, o financeiro cuida da gestão do fluxo de caixa e da saúde financeira da empresa. Entre outras atividades, como:
        •	gestão de recursos e contas;
        •	controle da tesouraria;
        •	investimentos e riscos;
        •	gestão de contas e impostos;
        •	pagamentos;
        •	planejamento financeiro.
        Vale destacar ainda que a apresentação dos resultados está por conta desse setor. O que apenas reforça a importância em contar com uma equipe altamente qualificada para que o seu empreendimento não conviva com imprevistos na área — o que pode impactar, diretamente, todas as outras áreas de uma empresa.
         !');

         ?> <a href="http://localhost/distribuidorafx/">
         <button>Inicio</button>
         </a> <?php

    }
    if($st== 'opr'){
        print('Setor Operacional
        Para muitas organizações — em especial, no setor industrial —, o setor operacional é uma das principais áreas de uma empresa. Afinal, é o departamento que cria forma e volume para organizações que comercializam produtos para os clientes.
        Isso engloba também as gestões de estoque, logística e maquinário. São, portanto, muitas vertentes que demandam profissionais qualificados para que o fluxo de trabalho transcorra sem imprevistos.
        !');
        ?> <a href="http://localhost/distribuidorafx/">
        <button>Inicio</button>
        </a> <?php
    }
    if($st== 'com'){
        print('Setor Comercial
        É uma das principais áreas da nossa empresa porque, além de cuidar a relação com o cliente e do processo de vendas, o marketing costuma fazer parte do departamento — ainda que indiretamente. O enfoque do setor é a realização dos clientes e dos prospectos. Trata-se de um departamento com ação de destaque, já que planeja ações externas, mas preocupa-se com o que ocorre internamente também. O que permite ações em conjunto com o próprio RH.
        Além disso, há a comunicação da empresa. Embora não faça parte do setor comercial, atua de maneira similar ao que citamos do marketing — segue anexada indiretamente, já que as suas ações são focadas na resposta do consumidor, para as ações externas e dos colaboradores para as campanhas internas.
         !');
         ?> <a href="http://localhost/distribuidorafx/">
         <button>Inicio</button>
         </a> <?php
    }
    
    ?>

</body>
<footer>
</footer>
</html>