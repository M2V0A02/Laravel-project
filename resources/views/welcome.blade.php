<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/battle-simulation/public/css/app.css">
</head>
<body>
    <header style="height:300px; weight: 300px;">
    </header>
    <section class="battle_section">
        <div class="control_battle">
            <input type="text">
            <div class="container_control_battle">
                <button class="control_battle_button_top">Вверх </button>
                <button class="control_battle_button_left">Влево</button>
                <button class="control_battle_button_right">Вправо </button>
                <button class="control_battle_button_down">Вниз </button>
            </div>
        </div>
        <div>
            <table class="battle_field">
                <tbody>
                    <tr class="battle_field_line">
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                    </tr>
                    <tr class="battle_field_line">
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                    </tr>
                    <tr class="battle_field_line">
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                    </tr>
                    <tr class="battle_field_line">
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                    </tr>
                    <tr class="battle_field_line">
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                    </tr>
                    <tr class="battle_field_line">
                        <td id="p-1" class="battle_field_cell">P</td>
                        <td id="p-2" class="battle_field_cell">P</td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>