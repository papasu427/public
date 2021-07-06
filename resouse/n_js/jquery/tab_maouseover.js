var parent = document.querySelectorAll("li.has-child");

var node = Array.prototype.slice.call(parent, 0);
  
console.log(node);
  
// console.log(document.body.clientHeight)
// console.log($('li.has-child ul').offset());
//   var test = $('li.has-child ul').offset(function(index, coords) {
//     return {
//       top: coords.top + 100,

//     };
//   });

  node.forEach(function (element) {
    element.addEventListener(
      "mouseover",
      function () {
        element.classList.add("active");
        console.log(element);
        element.querySelector(".category-item-child").classList.add("active");
        
      },
      false
    );
    element.addEventListener(
      "mouseout",
      function () {
        element.classList.remove("active");
        element.querySelector(".category-item-child").classList.remove("active");
      },
      false
    );
  });