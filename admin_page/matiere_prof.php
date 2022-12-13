<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="#">
        <title>landing</title>
    </head>
    <body>      
        <h1>Assignez une matière a un prof</h1>
        <form method="post" action="#">
            <table>
                <tr>
                    <th>Matières</th>
                    <th>Professeurs</th>
                </tr>
                <tr class="assignation">
                <td>
                        <select name="bureau" id="bureau-select">
                            <option value="">Choisirs une matière</option>
                            <option value="bureau1">Math</option>
                            <option value="bureau2">Français</option>
                            <option value="bureau3">je sais pas</option>
                        </select>
                    </td>
                    <td>
                        <select name="bureau" id="bureau-select">
                            <option value="">Choisirs un professeur</option>
                            <option value="bureau1">Prof</option>
                            <option value="bureau2">Prof</option>
                            <option value="bureau3">Prof</option>
                        </select>
                    </td>
                    <td>
                </tr>
            </table>
            <div>
            </div>
            <input type="submit">
        </form>
    </body>
</html>