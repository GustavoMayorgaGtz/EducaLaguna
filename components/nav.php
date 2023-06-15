<?php
class Nav {
    private bool $have_logout;
    private bool $have_dropdown;
    private bool $have_login;
    private string $title;
    public string $host = 'http://localhost:8000';
    public function __construct() {
        $this->have_logout = false;
        $this->have_dropdown = false;
        $this->have_login = false;
        $this->title = '';
    }
   
    public function setHaveLogout( bool $value ): void {
        $this->have_logout = $value;
    }
   
    public function setHaveLogin( bool $value ): void {
        $this->have_login = $value;
    }
   
    public function setHaveDropdown( bool $value ): void {
        $this->have_dropdown = $value;
    }


  
    public function setTitle( string $value ): void {
        $this->title = $value;
    }
    public function render() {
        ?>
        <div class="transparent-header dark-header">
            <header id="sticker" class="sticky-navigation">
                <div class="sticky-menu relative">
                    <div class="navbar navbar-default navbar-bg-light" role="navigation">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="col-md-12">
                                            <img class="icon-nav" onclick="seed()" src="<?php echo $this->host;?>/rs-plugin/images/SEED.svg" alt="logo" width="70px">
                                        </a>
                                    </div>
                                    <div class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="mega-menu">
                                                <a href="<?php echo $this->host; ?>/index.php" style="font-weight: bold;">Principal</a>
                                            </li>
                                            <li class="mega-menu">
                                                <a href="<?php echo $this->host; ?>/Tabs/objetivos.php">Acerca de</a>
                                            </li>
                                            
                                            <li class="mega-menu-deslizable">
                                                <a href="<?php echo $this->host; ?>/Tabs/SubMediaDUR/M_Principal.php">MediaDUR</a>
                                                <?php if( $this->have_dropdown ) { ?>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="<?php echo $this->host; ?>/Tabs/SubMediaDUR/M_AbSxInf.php">Abuso Sexual Infantil</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $this->host; ?>/Tabs/SubMediaDUR/M_AcEs.php">Acoso Escolar</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $this->host; ?>/Tabs/SubMediaDUR/M_MaIn.php">Maltrato Infantil</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $this->host; ?>/Tabs/SubMediaDUR/M_MoSe.php">Mochila Segura</a>
                                                    </li>
                                                </ul>
                                                <?php } ?>
                                            </li>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                if( $this->have_logout ) { ?>
                <form action="<?php echo $this->host; ?>/Tabs/SubMediaDUR/M_Principal.php" method="post">
                    <input type="hidden" value="false" name="login">
                    <!-- <input type="submit" value="Salir" class="btn btn-secondary btn-sm btn-block" style="text-align: right;"> -->
                </form>
                <?php
                } 
                if( strlen($this->title) > 0 ) {
                    if(strlen($this->title)==strlen('Protocolos De Actuación'))
                    {
                    ?>
                    
                    <div class="page-header">
                        <div class="container">
                            <div class="col-md-12">
                                <h1 class="nav-title"><?php echo $this->title; ?> <img src="../../rs-plugin/images/MediaDUR.png" alt="" style="width: 200px; height:100px; " ></h1> 
                            </div>
                            
                         
                        
                        </div>
                    </div>
                    <?php
                }
                else
                {
                   ?>
                     <div class="page-header">
                        <div class="container">
                            <div class="col-md-12">
                                <h1 class="nav-title"><?php echo $this->title; ?> </h1> 
                            </div>
                            
                         
                        
                        </div>
                    </div>
                    <?php
                }
            }
                ?>
            </header>
        </div>
        <script>
          function seed (){
            window.location.href = "https://educacion.durango.gob.mx/index.php";
          }
        </script>
        <?php
    }
}
?>
