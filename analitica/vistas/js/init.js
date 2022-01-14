/* Shapes */
var svgContainer = document.getElementById('logoanimationsuccess');
var animItem = bodymovin.loadAnimation({
    wrapper: svgContainer,
    animType: 'svg',
    loop: true,
    path: 'vistas/js/successful.json'
});

var svgContainer = document.getElementById('logoanimationcancel');
var animItem = bodymovin.loadAnimation({
    wrapper: svgContainer,
    animType: 'svg',
    loop: true,
    path: 'vistas/js/cancel.json'
});