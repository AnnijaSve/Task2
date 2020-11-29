
<head>
    <link rel="stylesheet" href="app\Views\style.css" type='text/css'>
</head>

<form action="/addCV">
    <button type="submit">Pievienot jaunu CV</button>
</form>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Personas vārds</th>
        <th scope="col">Personas uzvārds</th>
        <th scope="col">Apskatīt CV</th>
        <th scope="col">Labot CV</th>
        <th scope="col">Izdzēst CV</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($cvs as $cv) : ?>
        <tr>
            <td><?php echo $cv->getPersonName(); ?> </td>
            <td><?php echo $cv->getSurname(); ?></td>
            <td>
                <form action="/CV/<?php echo $cv->getId() ?>">
                    <button type="submit">Apskatīt CV</button>
                </form>
            </td>
            <td>
                <form action="/CV/<?php echo $cv->getId() ?>/edit">
                    <button type="submit"> Labot CV</button>
                </form>
            </td>
            <td>
                <form method="post" action="/<?php echo $cv->getId() ?>">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Tiešām vēlaties dzēst ?')"> Idzēst CV
                    </button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
