const p1 = document.querySelector('p:nth-child(1)');
const p2 = document.querySelector('p:nth-child(2)');
const p3 = document.querySelector('p:nth-child(3)');
const p4 = document.querySelector('p:nth-child(4)');

window.onload = (event) => {
    setTimeout(() => {
        p1.classList.add('p1');
            setTimeout(() => {
                p2.classList.add('p2');
                    setTimeout(() => {
                        p3.classList.add('p3');
                            setTimeout(() => {
                                p4.classList.add('p4');
                            }, 400);
                    }, 400);
            }, 400);
    }, 400);
};

const menu_button = document.querySelector('menu');
const menu_list = document.querySelector('.menu-list');

menu_button.addEventListener('click', (event) => {
    menu_list.classList.remove('passive-menu');
    menu_list.classList.add('active-menu');

    setTimeout(()=>{
        menu_button.addEventListener('click', (event) => {
            menu_list.classList.remove('active-menu');
            menu_list.classList.add('passive-menu');
        }, 100);
    })
});