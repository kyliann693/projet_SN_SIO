<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="#">
        <title>landing</title>
    </head>
    <body>      
        <h1>Assignez un bureau a une salle</h1>
        <form method="post" action="#">
            <table>
                <tr>
                    <th>Classe</th>
                    <th>Bureau</th>
                    <th>Professeur</th>
                </tr>
                <tr class="assignation">
                <td>
                        <select name="bureau" id="bureau-select">
                            <option value="">Choisirs une classe</option>
                            <option value="bureau1">classe 1</option>
                            <option value="bureau2">classe 2</option>
                            <option value="bureau3">classe 3</option>
                        </select>
                    </td>
                    <td>
                        <select name="bureau" id="bureau-select">
                            <option value="">Choisirs un bureau</option>
                            <option value="bureau1">bureau 1</option>
                            <option value="bureau2">bureau 2</option>
                            <option value="bureau3">bureau 3</option>
                        </select>
                    </td>
                    <td>
                    <select name="bureau" id="bureau-select">
                            <option value="">Choisirs un bureau</option>
                            <option value="bureau1">Prof</option>
                            <option value="bureau2">Prof</option>
                            <option value="bureau3">Prof</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div >
            </div>
            <input type="submit">
        </form>
    </body>
</html>