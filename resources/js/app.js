// Pesan sukses: muncul pelan, lalu memudar dan menyusut dengan halus
const pesan = document.getElementById('pesan-sukses');

if (pesan) {
    // Keadaan awal: transparan dan sedikit di atas
    pesan.style.opacity = '0';
    pesan.style.transform = 'translateY(-8px)';
    pesan.style.transition =
        'opacity 600ms ease-out, transform 600ms ease-out, ' +
        'max-height 500ms ease-in-out, margin 500ms ease-in-out, padding 500ms ease-in-out';
    pesan.style.overflow = 'hidden';

    // Fade-in: tunggu satu frame agar transisi benar-benar berjalan
    requestAnimationFrame(() => requestAnimationFrame(() => {
        pesan.style.opacity = '1';
        pesan.style.transform = 'translateY(0)';
    }));

    // Setelah 3 detik: memudar
    setTimeout(() => {
        pesan.style.opacity = '0';
        pesan.style.transform = 'translateY(-8px)';

        // Lalu menyusut, agar konten di bawahnya bergeser halus
        setTimeout(() => {
            pesan.style.maxHeight = pesan.offsetHeight + 'px';
            void pesan.offsetHeight; // paksa browser membaca nilai awal
            pesan.style.maxHeight = '0px';
            pesan.style.marginBottom = '0px';
            pesan.style.paddingTop = '0px';
            pesan.style.paddingBottom = '0px';

            setTimeout(() => pesan.remove(), 500);
        }, 600);
    }, 3000);
}
