a = document.querySelectorAll('.motive');
b = document.querySelector('#kolor');
let href = 'styleUser.css';

a[0].addEventListener('click', function () {
  href = 'styleUser.css';
  document.querySelector('#stylowanie').href = href;
  b.value = href;
});
a[1].addEventListener('click', function () {
  href = 'styleUser1.css';
  document.querySelector('#stylowanie').href = href;
  b.value = href;
});
a[2].addEventListener('click', function () {
  href = 'styleUser2.css';
  document.querySelector('#stylowanie').href = href;
  b.value = href;
});
a[3].addEventListener('click', function () {
  href = 'styleUser3.css';
  document.querySelector('#stylowanie').href = href;
  b.value = href;
});

a[0].style.backgroundColor="#38a3a5"
a[1].style.backgroundColor="#fff"
a[2].style.backgroundColor="#b42727"
a[3].style.backgroundColor="#f3ec84"
