const menu = document.getElementById("menu-header");
const btn = document.getElementById("menu__toggle");
var isChecked = false;

btn.addEventListener("click", () => {
	toggleMenu(isChecked);
});
const checkMenuBtn = (element) => {
	isChecked = element.checked;
};
const handleMenuOpening = () => {
	menu.classList.remove("close_menu");
	menu.classList.add("open_menu");
};
const handleMenuClosing = () => {
	menu.classList.remove("open_menu");
	menu.classList.add("close_menu");
};
const toggleMenu = (isChecked) => {
	isChecked ? handleMenuClosing() : handleMenuOpening();
};
