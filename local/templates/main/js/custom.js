
    function addWorks(count){
        var button = document.getElementById('show-more-btn');
        var hiddenItems = Array.from(document.getElementsByClassName('hidden_card')); // or use: document.querySelectorAll('.hidden_card');
    
        button.addEventListener('click', function() {
            var itemsToShow = hiddenItems.slice(0, count); // take first 10 hidden items
    
            // remove hidden_card class and add review-card reviews__card class to every item
            itemsToShow.forEach(function(item) {
                item.classList.remove('hidden_card');
                item.classList.add('work-card');
            });
    
            // remove revealed items from hiddenItems array
            hiddenItems = hiddenItems.slice(count);
    
            // if no more hidden items, hide the button
            if (hiddenItems.length === 0) {
                button.style.display = 'none';
            }
        });
    
        window.onload = function() {
            // if no item has class hidden_card, hide the button on page load
            if (hiddenItems.length === 0) {
                button.style.display = 'none';
            }
        }
    }

    // document.addEventListener("DOMContentLoaded", (event) => {
    //     let inputEdition=document.querySelector("#input-edition");
    //     let select = document.querySelectorAll('.select__option'),
    //     index, option;

    //     for (index = 0; index < select.length; index++) {
    //      option = select[index];
    //     option.addEventListener('click', function (event) {
       
    //     function sayHi() {
    //         let selectdeValue=document.querySelector(".select__content");
    //         inputEdition.value=selectdeValue.innerHTML;
    //         console.log(selectdeValue);
    //       }
          
    //       setTimeout(sayHi, 100);
    //     });
    //     }
    //   });




     document.addEventListener("DOMContentLoaded", () => {
  const inputEdition = document.querySelector("#input-edition");
  const inputMakePrint = document.querySelector("#input-product");
  const parentContainer1 = document.querySelector('[data-id="1"]');
  const parentContainer2 = document.querySelector('[data-id="2"]');
  
  const handleSelectOption = (select, inputElement) => {
    for (let index = 0; index < select.length; index++) {
      select[index].addEventListener('click', () => {
        setTimeout(() => {
            
          inputElement.value = select[index].textContent;
        }, 100);
      });
    }
  };

  handleSelectOption(parentContainer1.querySelectorAll('.select__option'), inputEdition);
  handleSelectOption(parentContainer2.querySelectorAll('.select__option'), inputMakePrint);
});

    


 
   
