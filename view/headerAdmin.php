<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(window).scroll(function(){
            if($(this).scrollTop() > 150){
                $("#topo").css({"opacity":"1"})
            }
            else {
                $("#topo").css({"opacity":"80%"})
            }
        })
    })
</script>

<header id="topo"> 
	
    <div id="logo">
        <a href ="index.php"><img src="imagens/logo.png" alt="Logo"><h3>Agrotec</h3></a>
    </div>
    
    

    <nav class="menu">
        <ul>
            <li> <a href="admin.php">Administradores</a></li>
            <li> <a href="users.php">Usuarios</a></li>
            </ul>	
    </nav>

    
</header>
