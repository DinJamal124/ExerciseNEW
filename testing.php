<?php
    echo "Hello My Depressing Thoughts, Please Help Me! <br>";
?>

<?php
    function myTest(){
        static $x = 0;
        echo $x;
        $x++;
    }

    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
    myTest();
?>

<style>
table, th, td{
    border: 2px solid black;
    border-collapse: collapse;
    padding: 10px;
    background-color: red;
};
</style>

<table>

    <tr>
        <td>Hello</td>
        <td>world</td>
        <td>test124</td>
    </tr>

    <tr>
        <td>hut</td>
        <td>jastes</td>
        <td>test124</td>
    </tr>

    <tr>
        <td>huys</td>
        <td>haiiss</td>
        <td>test124</td>
    </tr>

</table>