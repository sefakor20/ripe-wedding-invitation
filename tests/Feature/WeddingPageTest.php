<?php

test('wedding page loads successfully', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('Richard', false);
    $response->assertSee('Peace', false);
    $response->assertSee('Tanyigbe-Etoe, Ho');
});

test('wedding page contains all sections', function () {
    $response = $this->get('/');

    $response->assertSee('Our Special Day');
    $response->assertSee('Dress Code');
    $response->assertSee('Gifts', false);
    $response->assertSee('Registry & Gifts', false);
    $response->assertSee('Q & A', false);
    $response->assertSee('Location');
});

test('wedding page displays FAQ accordion', function () {
    $response = $this->get('/');

    $response->assertSeeLivewire('faq-accordion');
});

test('wedding page shows contact information', function () {
    $response = $this->get('/');

    $response->assertSee('Emmanuella Avornyo');
    $response->assertSee('Austin Kpatsa');
    $response->assertSee('Raphael Sefakor Adinkrah');
});
