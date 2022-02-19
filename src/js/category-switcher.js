function changeVisibility(choiceToActivate, firstChoiceToDeactivate, secondChoiceToDeactivate, productContainerToActivate, firstProductContainer, secondProductContainer) {
  choiceToActivate.classList.add("active-button")
  firstChoiceToDeactivate.classList.remove("active-button");
  secondChoiceToDeactivate.classList.remove("active-button");
  productContainerToActivate.style.display = "block";
  firstProductContainer.style.display = "none";
  secondProductContainer.style.display = "none";
}

const firstButton = document.querySelector("#category-pick__choices__first-choice");
const secondButton = document.querySelector("#category-pick__choices__second-choice");
const thirdButton = document.querySelector("#category-pick__choices__third-choice");

const firstProductsRow = document.querySelector("#category-pick__products__first-choice");
const secondProductsRow = document.querySelector("#category-pick__products__second-choice");
const thirdProductsRow = document.querySelector("#category-pick__products__third-choice");

if (firstButton) {
  firstButton.addEventListener("click", () => {
    changeVisibility(firstButton, secondButton, thirdButton, firstProductsRow, secondProductsRow, thirdProductsRow);
  })
}

if (secondButton) {
  secondButton.addEventListener("click", () => {
    changeVisibility(secondButton, firstButton, thirdButton, secondProductsRow, firstProductsRow, thirdProductsRow);
  })
}

if (thirdButton) {
  thirdButton.addEventListener("click", () => {
    changeVisibility(thirdButton, firstButton, secondButton, thirdProductsRow, firstProductsRow, secondProductsRow);
  })
}