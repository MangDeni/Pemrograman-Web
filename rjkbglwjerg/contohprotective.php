<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 150px;
        }

        body {
            background-color: wheat;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: monospace;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php
    class Hewan
    {
        protected $jenis;

        protected function tampilkanjenis()
        {
            return "Jenis hewan : " . $this->jenis;
        }
    }
    class Kucing extends Hewan
    {
        public function setJenis($jenis)
        {
            $this->jenis = $jenis;
        }

        public function info()
        {
            echo $this->tampilkanjenis();
        }
    }

    $kucing = new Kucing();
    $kucing->setjenis("Kucing Persia");
    $kucing->info(); //Output : Jenis Hewan : Kucing Persia

    ?>

</body>

</html>