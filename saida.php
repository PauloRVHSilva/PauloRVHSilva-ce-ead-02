<!DOCTYPE html>

<html>
	<head>
		<meta charset= 'utf-8'>
    <title>Declaração </title>
    
    <?php 
      $nomeAluno = $_POST['nomAluno'];
      $nomeDisciplina = $_POST['nomDisciplina'];
      $nomeCurso = $_POST['nomCurso'];
      $nomeProfessor = $_POST['nomProf'];
      $nomeCoord = $_POST['nomCoord'];
      $linkLogo = $_POST['linkLogo'];
      $notaVA1 = $_POST['notaVA1'];
      $notaVA2 = $_POST['notaVA2'];
      $notaVA3 = $_POST['notaVA3'];
      $notaTrab = $_POST['notaTrab'];
      
      $notaTotal = $notaVA1 + $notaVA2 + $notaVA3 + $notaTrab;
      $aprovacao = "";
      if ($notaTotal < 60)
      {
        $conceito = "Péssimo";
        $aprovacao = "NÃO";
        
      } else if ($notaTotal < 70)
        {
          $conceito = "Ruim";
        } else if ($notaTotal < 80)
          {
            $conceito = "Bom";
          } Else if($notaTotal < 90)
            {
              $conceito = "Ótimo";
            } else  
              {
                $conceito = "Excelente";
              }
             
    ?>
    
    
    
    <style type='text/css'>
     
     .Alinhar{
      
      text-align: center;
      
     }
     
     .reprovar{
      color: red;
      
     }
     body{
       
       text-align: justify;
       margin-left: auto;
			 margin-right: auto;
       display: block;
       
       width: 700px;
     }
     
     
     hr{
       
       width: 400px;
     }
	  
	   img{
			display: block;
			width: 200px;
			height: 100px;
			margin-left: auto;
			margin-right: auto;
	  }
	  table{
			
			
			margin-left: auto;
			margin-right: auto;
      text-align: center;
	  }
      
    </style>
	</head>
  
	<body>
    <img src="faculdades-promove.jpg" alt="Faculdade Promove Tecnologia" title="Faculdade Promove Tecnologia" >
    
    <h1 class="Alinhar">DECLARAÇÃO</h1>
    
    <p> 
      Declaramos, para os devidos fins, que <?php echo $nomeAluno ;?> <span class='reprovar'><?php echo $aprovacao; ?></span> concluiu satisfatoriamente 
      as atividades da disciplina de <?php echo $nomeDisciplina;?> do curso de <?php echo $nomeCurso;?>.
      
     <br>
     <br>
     Segue o desempenho de <?php echo $nomeAluno ;?>:
    </p>
    
    <table border='1'>
      
      <tr>
        <th>Critério</th>
        <th>Valor Total</th>
        <th>Nota do aluno</th>
        <th>Desempenho(%)</th>
      </tr>
      
      <tr>
        <td>Prova 1</td>
        <td>15</td>
        <td> <?php echo $notaVA1; ?> </td>
        <td> <?php echo round(($notaVA1/15)*100,2); ?> %</td>
      </tr>
      
      <tr>
        <td>Prova 2</td>
        <td>25</td>
        <td> <?php echo $notaVA2; ?> </td>
        <td> <?php echo round(($notaVA2/25)*100,2); ?> %</td>
      </tr>
      
      <tr>
        <td>Prova 3</td>
        <td>35</td>
        <td> <?php echo $notaVA3; ?> </td>
        <td> <?php echo round(($notaVA3/35)*100,2); ?> %</td>
      </tr>
      
      <tr>
        <td>Trabalhos</td>
        <td>25</td>
        <td> <?php echo $notaTrab?> </td>
        <td> <?php echo round(($notaTrab/25)*100,2); ?> %</td>
      </tr>
      
    </table>
    
    <p>
      Com esse resultado, o conceito de <?php echo $nomeAluno ?> foi <?php echo $conceito?>,
      já que sua nota total foi de <?php echo $notaTotal ?> pontos.
      
    </p>
    
    
    <p class="Alinhar">
      Belo Horizonte, <?php  echo date("d/m/Y"); ?>
    </p>
    <br>
    
    <hr>
    <p class="Alinhar">      
     <?php echo $nomeProfessor; ?> - Professor(a)
    </p>
    <br>
    
    <hr>    
    <p class="Alinhar">
      <?php echo $nomeCoord; ?> - Coordenador(a)
    </p>
    
  </body>
</html>