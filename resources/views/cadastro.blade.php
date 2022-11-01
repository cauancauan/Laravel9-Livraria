<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="/css/styleCadastro.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
  
    <div class="content">
      <form method ="post" action="{{route('bdlivros')}}" enctype="multipart/form-data" >
        @csrf
        <div class="user-details">
          <div class="input-box" >
          <span class="details" for ="image">Imagem do livro</span>
          <input id="real-file" name ="image" type="file" placeholder="Enter your name" required hidden="hidden">
          <button type="button" id="custom-button">Escolher Imagem</button>
          <span id="custom-text">Nenhuma imagem escolhida.</span>
          </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome do Livro</span>
            <input name ="nome" type="text" placeholder="Digite o nome do livro" required>
          </div>
          <div class="input-box">
            <span class="details">Autor</span>
            <input name ="autor" type="text" placeholder="Digite o nome do autor" required>
          </div>
          <div class="input-box">
            <span class="details">Quantidade de Páginas</span>
            <input name ="paginas" type="text" placeholder="Digite a quantidade de páginas" required>
          </div>
          <div class="input-box">
            <span class="details">Edição</span>
            <input name ="edicao" type="text" placeholder="Digite a edição" required>
          </div>
          <div class="input-box">
            <span class="details">Valor</span>
            <input id="valor" name ="valor" type="text" placeholder="R$ 0,00" required>
          </div>
          <div class="input-box">
            <span class="details">Editora</span>
            <input name ="editora" type="text" placeholder="Digite a editora" required>
          </div>
          <div class="input-box">
            <span class="details">Categoria</span>
                <div class="select">    
                    <select name="categoria" id="cidade">
                    <option selected disabled placeholder="Digite a forma de envio">Seleciona a Categoria</option>
                    <option value="Biografias">Biografias</option>
          
                    <option value="Ação e Aventura">Ação e Aventura</option>
                    <option value="Contos">Contos</option>
                    <option value="Ficção Científica">Ficção Científica</option>
                    <option value="Romance">Romance</option>
                    <option value="Fantasia">Fantasia</option>
         
                    </select>
                </div>
            </div>
        </div>
      
        <div class="button">
          <input type="submit" value="Registrar" style="padding:10px;">
        </div>
        
      </form>
    </div>
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="https://plentz.github.io/jquery-maskmoney/javascripts/jquery.maskMoney.min.js" type="text/javascript"></script>

<script>
 const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});

</script>

  <script>
jQuery(function() {
    
    jQuery("#valor").maskMoney({
	prefix:'R$ ', 
	thousands:'.', 
	decimal:','
})

});
</script>

</body>
</html>
