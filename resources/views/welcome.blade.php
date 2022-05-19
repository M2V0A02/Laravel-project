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
        <div class="battle_panel">
            <div class="control_battle">
                <input type="text" id="id_cell" value="p-1">
                <div class="container_control_battle">
                    <button class="control_battle_button_select_unit"> Выбрать юнита</button>
                    <button onclick="moveTop()" class="control_battle_button_top">Вверх </button>
                    <button onclick="moveLeft()" class="control_battle_button_left">Влево</button>
                    <button onclick="moveRight()" class="control_battle_button_right">Вправо </button>
                    <button onclick="moveDown()"class="control_battle_button_down">Вниз </button>
                </div>
            </div>
            <div class="info_battle_panel">
                <p> Название: <p>
                <p> Количество моделек: </p>
                <p> Здоровье: </p>
                <p> Броня: </p>
                <p> Урон: </p>
                <p> Защита: </p>
                <p> Атака: </p>
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
<script>
    function moveTop(){
        elements = document.querySelector('#' + id_cell.value).parentNode.childNodes;
        element = document.querySelector('#' + id_cell.value)
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].id == id_cell.value) {
                elements[i].id = ''
                positionElement = i;
                value = elements[i].innerText;
                elements[i].innerText = '';
                break;
            }
        }
        element.parentNode.previousSibling.previousSibling.childNodes[positionElement].id = id_cell.value;
        element.parentNode.previousSibling.previousSibling.childNodes[positionElement].innerText = value;
    }

    function moveDown(){
        elements = document.querySelector('#' + id_cell.value).parentNode.childNodes;
        element = document.querySelector('#' + id_cell.value)
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].id == id_cell.value) {
                elements[i].id = ''
                positionElement = i;
                value = elements[i].innerText;
                elements[i].innerText = '';
                break;
            }
        }
        element.parentNode.nextSibling.nextSibling.childNodes[positionElement].id = id_cell.value;
        element.parentNode.nextSibling.nextSibling.childNodes[positionElement].innerText = value;
    }

    function moveRight(){
        el = document.querySelector("#" + id_cell.value);
        el.nextSibling.nextSibling.innerHTML = el.innerHTML;
        el.innerHTML = "";
        el.nextSibling.nextSibling.id = el.id;
        el.id = "";
    }

    function moveLeft(){
        el = document.querySelector("#" + id_cell.value);
        el.previousSibling.previousSibling.innerHTML = el.innerHTML;
        el.innerHTML = "";
        el.previousSibling.previousSibling.id = el.id;
        el.id = "";
    }
    battle_field = document.querySelector('.battle_field');
    
</script>
</html>