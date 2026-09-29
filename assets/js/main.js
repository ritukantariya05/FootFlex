document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.getElementById('menuToggle');
    var nav = document.getElementById('mainNav');
    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            nav.classList.toggle('open');
        });
    }

    var slides = document.querySelectorAll('.hero-slide');
    if (slides.length > 1) {
        var index = 0;
        setInterval(function () {
            slides[index].classList.remove('active');
            index = (index + 1) % slides.length;
            slides[index].classList.add('active');
        }, 4000);
    }

    document.querySelectorAll('.thumb').forEach(function (thumb) {
        thumb.addEventListener('click', function () {
            var main = document.getElementById('mainProductImage');
            if (main) {
                main.src = thumb.getAttribute('data-src');
            }
            document.querySelectorAll('.thumb').forEach(function (item) {
                item.classList.remove('active');
            });
            thumb.classList.add('active');
        });
    });

    var colorRow = document.getElementById('colorRow');
    if (colorRow) {
        colorRow.addEventListener('click', function (event) {
            var button = event.target.closest('.swatch');
            if (!button) {
                return;
            }
            colorRow.querySelectorAll('.swatch').forEach(function (item) {
                item.classList.remove('active');
            });
            button.classList.add('active');
            var label = document.getElementById('selectedColor');
            if (label) {
                label.textContent = button.getAttribute('data-color');
            }
        });
    }

    var sizeRow = document.getElementById('sizeRow');
    if (sizeRow) {
        sizeRow.addEventListener('click', function (event) {
            var button = event.target.closest('.size-btn');
            if (!button) {
                return;
            }
            sizeRow.querySelectorAll('.size-btn').forEach(function (item) {
                item.classList.remove('active');
            });
            button.classList.add('active');
            var label = document.getElementById('selectedSize');
            if (label) {
                label.textContent = button.getAttribute('data-size');
            }
        });
    }

    var qtyInput = document.getElementById('qtyInput');
    var minus = document.getElementById('qtyMinus');
    var plus = document.getElementById('qtyPlus');
    if (qtyInput && minus && plus) {
        minus.addEventListener('click', function () {
            var value = parseInt(qtyInput.value, 10) || 1;
            if (value > 1) {
                qtyInput.value = value - 1;
            }
        });
        plus.addEventListener('click', function () {
            var value = parseInt(qtyInput.value, 10) || 1;
            qtyInput.value = value + 1;
        });
    }
});
