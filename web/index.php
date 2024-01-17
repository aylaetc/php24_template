<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">

        <!-- TITRE + META -->
        <title>Titre</title>
        <meta name="description" content="Description de la page">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="assets/css/global.css">
        <!-- favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="/{{ base_path ~ directory }}/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/{{ base_path ~ directory }}/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/{{ base_path ~ directory }}/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/{{ base_path ~ directory }}/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114"
              href="/{{ base_path ~ directory }}/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120"
              href="/{{ base_path ~ directory }}/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144"
              href="/{{ base_path ~ directory }}/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152"
              href="/{{ base_path ~ directory }}/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180"
              href="/{{ base_path ~ directory }}/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"
              href="/{{ base_path ~ directory }}/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/{{ base_path ~ directory }}/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/{{ base_path ~ directory }}/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/{{ base_path ~ directory }}/favicons/favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#b1a26e">
        <meta name="msapplication-TileImage" content="/{{ base_path ~ directory }}/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>

    <body>
    <!-- ADD MENU MOBILE-->
    <?php include '../web/regions/mobile.php'; ?>

        <div class="wrapper">
            <!-- ADD HEADER -->   
            <?php include '../web/regions/header.php'; ?>

                <main class="region-main">
                    <div class="region-content responsive-wrap-content">
                        <h2 class="h2">Content</h2>
                        <!-- ADD CONTENT -->  
                        <?php include '../web/sections/section-about.php'; ?>

                        <?php include '../web/sections/section-contact.php'; ?>

                    </div>
                </main>

            <!-- ADD FOOTER -->  
            <?php include '../web/regions/footer.php'; ?>

        </div>

    </body>
</html>