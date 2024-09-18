import Echo from 'laravel-echo';
window.Pusher = require('pusher-js');

window.Echo.channel('orders')
    .listen('OrderShipped', (e) => {
        console.log('Order shipped:', e.order);
    });

