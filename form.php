<form  action="thanks.php"  method="post">
    
<div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>

    <div>
      <label  for="firstname">firstname :</label>
      <input  type="text"  id="firstname"  name="user_firstname">
    </div>

    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>

    <div>
      <label  for="phonenumber">phonenumber :</label>
      <input  type="text"  id="phonenumber"  name="user_number">
    </div>

    <?php $options = ['Jeremy', 'Falilou', 'John', 'Paul']; ?>

<label for="option">Choose an option:</label>

<select id="option" name="option">


    <?php foreach ($options as $option){ ?>

        <option value="<?= strtolower($option); ?>">

        <?= $option; ?>

    </option>
    
<?php } ?>


    </select>

    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>


    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
  <?php
  
?>
