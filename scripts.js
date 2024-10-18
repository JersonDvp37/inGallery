const dropdowns = document.querySelectorAll('.categoria_Tecnologia');

dropdowns.forEach(categoria_Tecnologia =>{

   const select = categoria_Tecnologia.querySelector('.select');
   const caret = categoria_Tecnologia.querySelector('.caret');
   const menu = categoria_Tecnologia.querySelector('.menu');
   const options = categoria_Tecnologia.querySelector('.menu li');
   const selected = categoria_Tecnologia.querySelector('.catDscDesigntc');
   
   select.addEventListener('click',() =>{

    select.classList.toggle('select-clicked');
    select.classList.toggle('caret-rotate');
    select.classList.toggle('menu-open');
});

    options.forEach(option =>{

        select.addEventListener('click',() =>{

         selected.innerText = option.innerText;
         select.classList.remove('select-clicked');
         caret.classList.remove('caret-rotate');
         menu.classList.remove('menu-open');

         options.forEach(option =>{
            option.classList.remove('active');
         });

         option.classList.add('active');

        });
    });
});