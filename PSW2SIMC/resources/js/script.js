// Toggle class active
const navbarNav = document.querySelector('.navbar-nav');
// ketika humberger menu di klik 
document.querySelector('humberger-menu').onclick = function() { 
    alert('bla bla'); 
}
// document.querySelector('#humberger-menu').onclick = () => {
//     navbarNav.classList.toggle('active');
//     console.log('aaaaaaaaaaaa')
// }

// klik di luar side bar untuk menghilangkan nav
const humberger = document.querySelector('#shopping-cart');

document.addEventListener('click', function(e) {
    if(!shopping-cart.contains(e.target)) {
        navbarNav.classList.remove(active);
    }
});