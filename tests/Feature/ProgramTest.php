<?php

it('displays the program page successfully', function () {
    $response = $this->get(route('program.show'));

    $response->assertSuccessful();
    $response->assertSee('Wedding Program');
    $response->assertSee('Richard');
    $response->assertSee('Peace');
    $response->assertSee('Download Program PDF');
});

it('has the program PDF file in storage', function () {
    expect(Storage::disk('public')->exists('RIPE-INVITATION.pdf'))->toBeTrue();
});

it('allows downloading the program PDF', function () {
    $response = $this->get(route('program.download'));

    $response->assertSuccessful();
    $response->assertDownload('RIPE-Wedding-Program.pdf');
});

it('shows 404 when PDF file does not exist', function () {
    // Temporarily rename the PDF
    Storage::disk('public')->move('RIPE-INVITATION.pdf', 'RIPE-INVITATION-backup.pdf');

    $response = $this->get(route('program.download'));

    $response->assertNotFound();

    // Restore the PDF
    Storage::disk('public')->move('RIPE-INVITATION-backup.pdf', 'RIPE-INVITATION.pdf');
});

it('includes a back link to the main wedding page', function () {
    $response = $this->get(route('program.show'));

    $response->assertSuccessful();
    $response->assertSee('Back to Invitation');
    $response->assertSee(url('/'));
});

it('embeds the PDF in an iframe', function () {
    $response = $this->get(route('program.show'));

    $response->assertSuccessful();
    $response->assertSee('iframe', false);
    $response->assertSee(asset('storage/RIPE-INVITATION.pdf'));
});
