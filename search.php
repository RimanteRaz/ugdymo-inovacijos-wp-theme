<?php
  get_header();
?>

<div class="content section container">
    <div class="search-card">
        <h2 class="section-title">PAIEŠKA</h2>
        <form action="">
        <label for="search">Įveskite paieškos terminą:</label>
        <input type="text" name="search" id="search">
        <div class="btn-div">
            <button type="submit" class="btn-primary">Ieškoti</button>
        </div>
        </form>
        <p>Arba pasirinkite vieną iš žemiau pateiktų kategorijų ar kompetencijų.</p>
        <div class="select-cat-or-tag">
        <div class="categories">
            <h6>Kategorijos:</h6>
            <div>
            <a href="" class="category">Lietuvių k.</a>
            <a href="" class="category">Matematika</a>
            <a href="" class="category">IT</a>
            <a href="" class="category">Biologija</a>
            <a href="" class="category">Chemija</a>
            <a href="" class="category">Fizika</a>
            <a href="" class="category">Istorija</a>
            <a href="" class="category">Pilietiškumas</a>
            <a href="" class="category">Geografija</a>
            </div>
        </div>
        <div class="tags">
            <h6>Ugdomos kompetencijos:</h6>
            <div>
            <a href="" class="tag">Kritinis mąstymas</a>
            <a href="" class="tag">Kūrybingumas</a>
            <a href="" class="tag">Problemų sprendimas</a>
            <a href="" class="tag">Sprendimų priėmimas</a>
            <a href="" class="tag">Asmeninė atsakomybė</a>
            <a href="" class="tag">Tyrinėjimas</a>
            <a href="" class="tag">Tyrinėjimas</a>
            <a href="" class="tag">Tarpkultrinė kompetencija</a>
            <a href="" class="tag">Socialiniai gebėjimai</a>
            <a href="" class="tag">Bendradarbiavimas</a>
            <a href="" class="tag">Lyderystė</a>
            </div>
        </div>
        </div>

    </div>
</div>

<?php
  get_footer();
?>