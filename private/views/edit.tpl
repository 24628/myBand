
<form method="post" action="index.php">
    <table>
        <tr>
            <th>Title</th>
            <th>Text</th>
            <th>Image</th>
        </tr>
        <table>
            <tr>
            <input type="hidden" name="id" value="{$id}">
                <th>
                    <label><input type="text" name="voornaam" value="{$voornaam}"</label><br>
                </th>
                <th>
                    <label><input type="textarea" name="tussenvoegsel" value="{$tussenvoegsel}"</label><br>
                </th>
                <th>
                    <label><input type="text" name="achternaam" value="{$achternaam}"</label><br>
                </th>
            </tr>
        </table>
    </table>
    <label><input type="submit" name="submit_edit" value="Go!"</label>
</form>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, td, th {
        border: 1px solid black;
        padding: 5px;
    }

    td, th{
        width: 100px;
    }

    input{
        width: 100%;
        height: 8em;
    }

</style>