<!-- Insert header script here -->

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <a class="navbar-brand" href="<?=BASE_URL;?>"><img src="<?=$this->asset('/images/logo.png')?>" alt="logo"></a>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    

                </div>

                <div class="collapse navbar-collapse">
                    <?php
                        echo $this->menu()->getFrontMenu(WEB_LANG, 'class="nav navbar-nav"', 'class="dropdown"', 'class="dropdown-menu"');
                    ?>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->
