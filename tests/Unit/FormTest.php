<?php

it('adds a number input', function () {
    $this->assertInertiaForm('InputDigits', 'number');
});