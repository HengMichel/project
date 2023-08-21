<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    
<h1>Project PHP</h1>

<form id="monForm" action="./action.php" method="POST">
    <fieldset>
     
      <div class="ligne">
        <label for=" firstName"></label>
        <input type="text" id="firstName" placeholder="Your first name" name="firstname" />
      </div>
      <div class="ligne">
        <label for=" lastName"></label>
        <input type="text" id="lastName" placeholder="Your last name" name="lastname"/>
      </div>
      <div class="ligne">
        <label for=" email"></label>
        <input type="email" id="email" placeholder="Your email" name="email"/>
      </div>
      <button id="submit">Submit</button>    
      
      <div class="genre">
        <select  name="civility" id="civilite">  
          <option value="void"></option>
          <option value="Femme">Femme</option>
          <option value="Homme">Homme</option>
          <option value="Autre">Autre</option> 
        </select>
      </div>
      
      <div class="pays">
      <input type="radio" id="option1" name="country" value="option1">
      <label for="option1">England </label>
      <br>
      <input type="radio" id="option2" name="country" value="option2">
      <label for="option2">Germany </label>
      <br>
      <input type="radio" id="option3" name="country" value="option3">
      <label for="option3">France </label>
      <br>
      <input type="radio" id="option4" name="country" value="option4">
      <label for="option4">Iran </label>
      <br>
      </div>

      <div class="number">
        <label for=""></label>
        <input type="number" name="phone" id="number" placeholder="number">
      </div>

      <textarea name="message" id="" cols="100" rows="30"></textarea>
  

      <label for="">Valider</label>
      <input type="checkbox" id="" name="condition" value="">
    </fieldset>
</form>
</body>
</html>