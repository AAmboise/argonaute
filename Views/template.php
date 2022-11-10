<!-- Header section -->
<header class="bg-orange-50">
  <h1 class="flex items-center justify-center">
    <img  class="mr-8" src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
    Les Argonautes
  </h1>
</header>

<!-- Main section -->
<main>
  
  <!-- New member form -->
  <h2 class="text-2xl font-bold mt-3">Ajouter un(e) Argonaute</h2>
  <form class="new-member-form" method="post">
    <label  for="name">Nom de l&apos;Argonaute</label>
    <input class="border border-black text-center" id="name" name="name" type="text" placeholder="Nouvel équipage" required/>
    <button class="border border-black px-2 bg-orange-50" type="submit">Ajouter</button>
  </form>
  
  <!-- Member list -->
  <h2 class="text-2xl font-bold mb-2">Membres de l'équipage</h2>
  <hr class="h-px w-full border-2 border-black"></hr>
  <section class="member-list flex flex-wrap pt-4">

    <?php afficher_argonautes()?>
  </section>
</main>

<footer class="h-16 flex items-center justify-center">
  <p class="">Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>