<?php

namespace App\Templates;

use App\Models\Setting;

abstract class Template
{
    protected $title;
    protected $setting;

    public function __construct()
    {
        $settingModel = new Setting();
        $this->setting = $settingModel->getFirstData();
    }
    public function getHead()
    {
?>

        <head>
            <meta charset="UTF-8">
            <meta name="description" content="<?= $this->setting->getDescription() ?>">
            <meta name="keyword" content="<?= $this->setting->getKeywords() ?>">
            <meta name="author" content="<?= $this->setting->getAuthor() ?>">

            <title><?= $this->title ?></title>
            <link rel="stylesheet" href="<?= asset("css/style.css") ?>">
        </head>
    <?php
    }
    public function getHeader()
    {
    ?>
        <header>
            <h1><?= $this->setting->getTitle() ?></h1>
            <div id="logo">
                <img src="./images/logo.png" alt="gitmag">
            </div>
        </header>
    <?php
    }
    public function getFooter()
    {
    ?>
        <footer>
            <p><?= $this->setting->getFooter() ?></p>
        </footer>
<?php
    }
    abstract protected function renderPage();
}
