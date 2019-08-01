<?php

require_once 'vendor/autoload.php';

$load = new \Twig\Loader\FilesystemLoader('views');

$twig = new \Twig\Environment($load);

echo $twig->render('index.html', [
    'title' => 'Niagahoster',

    'info'  => array(
        array('text' => '0274-5305505'),
        array('text' => 'Live Chat'),
        array('text' => 'Member Area')
    ),

    'banner' => array(
        'Solusi PHP untuk performa query yang lebih cepat.',
        'Konsumsi memori yang lebih rendah.',
        'Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7.',
        'Fitur enkripsi IonCube dan Zend Guard Loaders.'
    ),

    'powerful_left' => array(
        'max execution time 300s',
        'max execution time 300s',
        'max input vars 2500'
    ),

    'powerful_right' => array(
        'post max size 128 MB',
        'upload max filesize 128 MB',
        'max input vars 2500'
    ),

    'paket' => array(
        array(
            'src' => 'assets/svg/icon PHP Hosting_PHP Semua Versi.svg',
            'alt' => 'PHP Semua Versi',
            'title' => 'PHP Semua Versi',
            'desc' => 'Pilih Mulai dari varsi PHP 5.3 s/d PHP 7.
            Ubah sesuka Anda!'
        ),
        array(
            'src' => 'assets/svg/icon PHP Hosting_My SQL.svg',
            'alt' => 'MySQL Versi 5.6',
            'title' => 'MySQL Versi 5.6',
            'desc' => 'Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.'
        ),
        array(
            'src' => 'assets/svg/icon PHP Hosting_CPanel.svg',
            'alt' => 'Panel Hosting cPanel',
            'title' => 'Panel Hosting cPanel',
            'desc' => 'Kelola website dengan panel canggih yang familiar di hati Anda.'
        ),
        array(
            'src' => 'assets/svg/icon PHP Hosting_garansi uptime.svg',
            'alt' => 'Garansi Uptime 99.9%',
            'title' => 'Garansi Uptime 99.9%',
            'desc' => 'Data center yang mendukung kelangsungan website Anda 24/7.'
        ),
        array(
            'src' => 'assets/svg/icon PHP Hosting_InnoDB.svg',
            'alt' => 'Database InnoDB Unlimited',
            'title' => 'Database InnoDB Unlimited',
            'desc' => 'Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.'
        ),
        array(
            'src' => 'assets/svg/icon PHP Hosting_My SQL remote.svg',
            'alt' => 'Wildcard Remote MySQL',
            'title' => 'Wildcard Remote MySQL',
            'desc' => 'Mendukung s/d 25 max_user_connections dan 100 max_connections.'
        ),
    ),

    'module' => array(
        'IcePHP',
        'http',
        'nd_pdo_mysql',
        'stats',
        'apc',
        'huffman',
        'oauth',
        'stem',
        'apcu',
        'idn',
        'igbinary',
        'oci8',
        'stomp',
        'ares',
        'imagick',
        'opcache',
        'sybase_ct',
        'bcmath',
        'imap',
        'pdf',
        'sysvmsg',
        'bcompiler',
        'inclued',
        'pdo',
        'sysvsem',
        'big_int',
        'inotify',
        'pdo_dblib',
        'sysvshm',
        'bitset',
        'interbase',
        'pdo_firebird',
        'tidy',
        'bloomy',
        'intl',
        'pdo_mysql',
        'timezonedb',
        'bz2_filter',
        'ioncube_loader',
        'pdo_odbc',
        'trader',
        'clamav',
        'ioncube_loader_4',
        'pdo_pgsql',
        'translit',
        'coin_acceptor',
        'jsmin',
        'pdo_sqlite',
        'uploadprogress',
        'crack',
        'json',
        'pgsql',
        'uri_template',
        'dba',
        'Idap',
        'uuid'
    ),

    'layanan' => array(
        'Domain',
        'Shared Hosting',
        'Cloud VPS Hosting',
        'Transfer Hosting',
        'Web Builder',
        'Keamanan SSL / HTTPS',
        'Jasa Pembuatan Website',
        'Program Afiliasi'
    ),  
    
    'hosting' => array(
        'Hosting Murah',
        'Hosting Indonesia',
        'Hosting Singapura',
        'Hosting PHP',
        'Hosting Wordpress',
        'Hosting Laravel'
    ),

    'tutorial' => array(
        'Knowledgebase',
        'Blog',
        'Cara Pembayaran'
    ),

    'about' => array(
        'Tim Niagahoster',
        'Karir',
        'Event',
        'Penawaran & Promo Spesial',
        'Kontak Kami'
    ),

    'why' => array(
        'Support Terbaik',
        'Garansi Harga Termurah',
        'Domain Gratis Selamanya',
        'Datacenter Hosting Terbaik',
        'Review Pelanggan'
    ),

    'pay' => array(
        array('src' => 'assets/svg/payment/bca.svg', 'alt' => 'bca'),
        array('src' => 'assets/svg/payment/mandiri.svg', 'alt' => 'mandiri'),
        array('src' => 'assets/svg/payment/bni.svg', 'alt' => 'bni'),
        array('src' => 'assets/svg/payment/visa.svg', 'alt' => 'visa'),
        array('src' => 'assets/svg/payment/atmbersama.svg', 'alt' => 'atmbersama'),
        array('src' => 'assets/svg/payment/permata.svg', 'alt' => 'permata'),
        array('src' => 'assets/svg/payment/prima.svg', 'alt' => 'prima'),
        array('src' => 'assets/svg/payment/alto.svg', 'alt' => 'alto'),
    ),
    
    'footer' => array(
        array( 'text' => 'Hubungi Kami', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'info' ),
        array( 'text' => 'Layanan', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'layanan' ),
        array( 'text' => 'Service Hosting', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'service' ),
        array( 'text' => 'Tutorial', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'tutorial' ),
        array( 'text' => 'Tentang Kami', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'tentang' ),
        array( 'text' => 'Kenapa Milih Niagahoster', 'class' => 'col-12 col-sm-4 col-lg-3 col-xl-3', 'nama' => 'why' ),
        array( 'text' => 'Newsletter', 'class' => 'col-12 col-sm-6 order-sm-2 col-lg-6 order-lg-1 col-xl-3 order-xl-1', 'nama' => 'newsletter' ),
        array( 'text' => 'Sosmed', 'class' => 'col-12 col-sm-12 order-sm-3 col-lg-6 order-lg-3 col-xl-3 order-xl-2', 'nama' => 'sosmed' ),
        array( 'text' => 'Pembayaran', 'class' => 'col-12 col-sm-6 order-sm-1 col-lg-6 order-lg-2 col-xl-12 order-xl-3', 'nama' => 'pembayaran' ),
    ),

]);

?>