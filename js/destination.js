(function () {
  console.log("destination.js");
  const domaine = window.location.href;
  const accordionContainer = document.querySelector(".destination__accordion");

  let currentOpenAccordion = null;

  const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
  categorie__ul__li.forEach((li) => {
    li.addEventListener("click", function () {
      const categoryId = li.getAttribute("data-category-id");
      const categoryName = li.textContent.trim();

      // Mettre à jour l'état des boutons
      categorie__ul__li.forEach((btn) => btn.classList.remove("active"));
      li.classList.add("active");

      // Fermer l'accordéon précédent
      if (currentOpenAccordion) {
        currentOpenAccordion.classList.remove("active");
      }

      // Vérifier si c'est la même catégorie
      const existingCategory = document.querySelector(
        `.accordion-item[data-category-id="${categoryId}"]`
      );

      if (existingCategory && existingCategory === currentOpenAccordion) {
        currentOpenAccordion = null;
        return;
      }

      if (existingCategory) {
        existingCategory.classList.add("active");
        currentOpenAccordion = existingCategory;
      } else {
        const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        mon_fetch(apiUrl, categoryId, categoryName);
      }
    });
  });

  function mon_fetch(apiUrl, categoryId, categoryName) {
    fetch(apiUrl)
      .then((response) => response.json())
      .then((data) => {
        accordionContainer.innerHTML = "";

        const accordionItem = document.createElement("div");
        accordionItem.className = "accordion-item active";
        accordionItem.setAttribute("data-category-id", categoryId);

        const accordionHeader = document.createElement("div");
        accordionHeader.className = "accordion-header";
        accordionHeader.innerHTML = `<h3>${categoryName}</h3>`; // Icône supprimé

        const accordionContent = document.createElement("div");
        accordionContent.className = "accordion-content";

        if (data.length === 0) {
          accordionContent.innerHTML = `<p>Aucun article disponible dans cette catégorie.</p>`;
        } else {
          data.forEach((article) => {
            const articleElement = document.createElement("div");
            articleElement.className = "accordion-article";
            articleElement.innerHTML = `
              <h4>${article.title.rendered}</h4>
              <div class="card__description">${article.excerpt.rendered}</div>
              <a href="${article.link}">Lire plus</a>
            `;
            accordionContent.appendChild(articleElement);
          });
        }

        accordionItem.appendChild(accordionHeader);
        accordionItem.appendChild(accordionContent);
        accordionContainer.appendChild(accordionItem);

        currentOpenAccordion = accordionItem;
      })
      .catch((error) => {
        console.error("Erreur lors de la récupération des articles:", error);
      });
  }
})();
