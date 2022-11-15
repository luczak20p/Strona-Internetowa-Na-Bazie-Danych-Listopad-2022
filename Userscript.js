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
