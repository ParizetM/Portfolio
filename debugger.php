<style>
    #debugger {
        display: inline-block;
        position: sticky;
        top: 0;
        left: 0;
        background-color: white;
        border-radius: 10px;
        z-index: 200;
        padding: 10px;
    }
</style>
<div id="debugger">
    <?php
    echo"DEBUGGER : <br/>";
        foreach ($_SESSION as $key => $value) {
            echo $key . " :" . $value."<br/>";
        }
        echo "Method GET : <br/>";
        foreach ($_GET as $key => $value) {
            echo $key . " :" . $value."<br/>";
        }
        echo "Method POST : <br/>";
        foreach ($_POST as $key => $value) {
            echo $key . " :" . $value."<br/>";
        }
    ?>
</div>
