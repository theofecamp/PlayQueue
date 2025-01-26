let stars = document.querySelectorAll(".ratings span");
let products = document.querySelectorAll(".ratings");
let ratings = [];
 
for(let star of stars){
   star.addEventListener("click", function(){
      
      let children = star.parentElement.children;
      for(let child of children){
         if(child.getAttribute("data-clicked")){
            return false;	
         }
      }
      
      this.setAttribute("data-clicked","true");
      let rating = this.dataset.rating;
      let productId = this.parentElement.dataset.productid;
      let data = {
         "rating": rating,
         "product-id": productId,
      }
      ratings.push(data);
      localStorage.setItem("rating", JSON.stringify(ratings));
   });
}
 
document.getElementById("reset-btn").addEventListener("click", (event) => {
    event.preventDefault(); // Impede o comportamento padrão do link
    localStorage.removeItem("rating"); // Remove o item do localStorage
    // Aqui você pode adicionar lógica para atualizar a interface manualmente
    alert("Ratings resetados!");
});