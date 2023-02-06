<style>
    #inp{
        height:3.5rem;
        width:30rem;
        background: var(--transparent-white);
        backdrop-filter: blur(.1rem);
        box-shadow: var(--box-shadow);
        border-radius: .5rem;
        text-align: center;
    }
</style>
<?php

$conn = mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['btn'])){

   $date = $_POST['date'];
   $ville = $_POST['ville'];
   $event = $_POST['event'];
   

   $insert = "INSERT INTO `reserver`(`date`, `ville`, `event`) VALUES ('$date','$ville','$event')";

   mysqli_query($conn, $insert);

   header('location:contact.php');

   if ($conn->query($insert) === TRUE) {
    echo "Nouvel enregistrement créé avec succès";
} else {
    echo "Erreur lors de la création de l'enregistrement : " . $conn->error;
}

}
$conn->close();
?>


<div class='form-container'>
            <form action="">
               <div class="input-box">
                  <input type="date" id="inp" name='date' placeholder='donner votre journée'>
</div> <br> <br>
               <div class="input-box">
                  <input type="text" id="inp" name='ville' placeholder='Enter votre ville...'>
               </div><br> <br>
               <div class='input-box'>
                  <select name="event" id="inp" >
                    <option value="" >Choisir votre évenements </option>
                     <option value="mariage.php" href='mariage.php'>Mariage</option>
                     <option value="anniversaire">Anniversaire</option>
                     <option value="douche bébé">Douche bébé</option>
                     <option value="féte de revelation">Féte de revelation</option>
                     <option value="remise de diplome">Remise de diplome</option>
                     <option value="fiancelle">Fiançaille</option>
                  </select>
                  <input type="submit" class='btn' id="btn" name='btn'>
</div>
            </form>
</div>
<!-- <script src="js/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
  $('#btn').click(function(){
    if ($('#m').val() == 'mariage') {
      window.location.href = 'mariage.php';
    } else if ($('#inp').val() == 'anniversaire') {
      window.location.href = 'homeanniv.php';
    }else if ($('#inp').val() == 'douche bébé') {
      window.location.href = 'baby-shower.php';
    }else if ($(this).val() == 'anniversaire') {
      window.location.href = 'homeanniv.php';
    }else if ($(this).val() == 'anniversaire') {
      window.location.href = 'homeanniv.php';
    }else if ($(this).val() == 'anniversaire') {
      window.location.href = 'homeanniv.php';
    }
  });
});
</script> -->
<script>
// document.addEventListener('DOMContentLoaded', function() {
//   document.getElementById('btn').addEventListener('click', function() {
//     var eventSelect = document.getElementById('inp');
//     if (eventSelect.value == 'anniversaire') {
//       window.location.href = 'anniversaire.php';
//     } else if (eventSelect.value == 'mariage') {
//       window.location.href = 'mariage.php';
//     }
//   });
// });

document.getElementById("btn").addEventListener("click", function() {
  var linkSelect = document.getElementById("inp");
  var selectedValue = linkSelect.options[linkSelect.selectedIndex].value;
  if (selectedValue) {
    window.location = selectedValue;
  }
});
</script>