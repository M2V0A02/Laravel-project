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
                <input type="text" id="id_cell" value="peasant-1">
                <div class="container_control_battle">
                    <button onclick="showDate()" class="control_battle_button_select_unit"> Выбрать юнита</button>
                    <button onclick="moveTop()" class="control_battle_button_top">Вверх </button>
                    <button onclick="moveLeft()" class="control_battle_button_left">Влево</button>
                    <button onclick="moveRight()" class="control_battle_button_right">Вправо </button>
                    <button onclick="moveDown()"class="control_battle_button_down">Вниз </button>
                </div>
            </div>
            <div class="info_battle_panel">
                <p class="info_battle_panel_name"> Название: <p>
                <p class="info_battle_panel_amount"> Количество моделек: </p>
                <p class="info_battle_panel_health"> Здоровье: </p>
                <p class="info_battle_panel_armor"> Броня: </p>
                <p class="info_battle_panel_damage"> Урон: </p>
                <p class="info_battle_panel_defense"> Защита: </p>
                <p class="info_battle_panel_attack"> Атака: </p>
            </div>
        </div>
        <div>
            <table class="battle_field">
                <tbody>
                    <tr class="battle_field_line">
                        <td  class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                    </tr>
                    <tr class="battle_field_line">
                        <td class="battle_field_cell"></td>
                        <td class="battle_field_cell"></td>
                        <td id="robber-1" class="battle_field_cell">R</td>
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
                        <td id="peasant-1" class="battle_field_cell">P</td>
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
    class Unit {
        constructor(name, armor, health, amountOfUnits,
                    attack, defense, damage){
            this.name = name;
            this.armor = armor;
            this.health = health;
            this.amountOfUnits = amountOfUnits;
            this.attack = attack;
            this.defense = defense;
            this.damage = damage;
        }

    }

    function showDate(){
        let peasant = JSON.parse(localStorage.getItem('peasant-1'));
        document.querySelector(".info_battle_panel_name").innerText = "Название: " + peasant.name;
        document.querySelector(".info_battle_panel_armor").innerText = "Броня: " + peasant.armor;
        document.querySelector(".info_battle_panel_health").innerText = "Здоровье: " + peasant.health;
        document.querySelector(".info_battle_panel_amount").innerText = "Количество солдат: " + peasant.amountOfUnits;
        document.querySelector(".info_battle_panel_attack").innerText = "Атака: " + peasant.attack;
        document.querySelector(".info_battle_panel_defense").innerText = "Защита: " + peasant.defense;
        document.querySelector(".info_battle_panel_damage").innerText = "Урон: " + peasant.damage;
    }

    function moveTop(){
        elements = document.querySelector('#' + id_cell.value).parentNode.childNodes;
        element = document.querySelector('#' + id_cell.value);
        // Проверка есть ли что-нибудь на пути
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].id == id_cell.value) {
                positionElement = i;
                if (element.parentNode.previousSibling.previousSibling.childNodes[positionElement].id != '') {
                    battle(id_cell.value, element.parentNode.previousSibling.previousSibling.childNodes[positionElement].id);
                    return 0;
                }
                break;
            }
        }
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
                positionElement = i;
                if (element.parentNode.nextSibling.nextSibling.childNodes[positionElement].id != '') {
                    battle(id_cell.value, element.parentNode.nextSibling.nextSibling.childNodes[positionElement].id);
                    return 0;
                }
                break;
            }
        }

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
        if (el.nextSibling.nextSibling.id != '') {
            battle(id_cell.value, el.nextSibling.nextSibling.id);
            return 0;
        }
        el.nextSibling.nextSibling.innerHTML = el.innerHTML;
        el.innerHTML = "";
        el.nextSibling.nextSibling.id = el.id;
        el.id = "";
    }

    function moveLeft(){
        el = document.querySelector("#" + id_cell.value);
        if (el.previousSibling.previousSibling.id != '') {
            battle(id_cell.value, el.previousSibling.previousSibling.id);
            return 0;
        }
        el.previousSibling.previousSibling.innerHTML = el.innerHTML;
        el.innerHTML = "";
        el.previousSibling.previousSibling.id = el.id;
        el.id = "";
    }

    function hitChance(attack, defense){
        return 30 - defense + attack;
    }

    function battle(idUnit1, idUnit2){
        unit1 = JSON.parse(localStorage.getItem(idUnit1));
        unit2 = JSON.parse(localStorage.getItem(idUnit2));
        while ((unit1.amountOfUnits > 0) && (unit2.amountOfUnits > 0)) {
            damageUnit1 = unit1.amountOfUnits / 100 * Math.random(1, 100)  *
                          hitChance(unit1.attack, unit2.defense) * unit1.damage;
            console.log(damageUnit1)
            damageUnit2 = unit2.amountOfUnits / 100 * Math.random(1, 100)  *
                          hitChance(unit2.attack, unit1.defense) * unit2.damage;
            console.log(damageUnit2)
            unit1.amountOfUnits -= Math.round(damageUnit2 / unit1.health);
            unit2.amountOfUnits -= Math.round(damageUnit1 / unit2.health);
        }
        console.log(unit1.amountOfUnits)
        console.log(unit2.amountOfUnits)
        if (unit1.amountOfUnits <= 0)
            destroyUnit(idUnit1)
        if (unit2.amountOfUnits <= 0)
            destroyUnit(idUnit2) 
    }

    function destroyUnit(idUnit){
        localStorage.removeItem(idUnit);
        document.getElementById(idUnit).innerText = '';
        document.getElementById(idUnit).id = '';
    }

    localStorage.setItem('peasant-1', JSON.stringify(new Unit("Крестьянин", 10, 50, 90, 12, 20, 20)));
    localStorage.setItem('robber-1', JSON.stringify(new Unit("Грабитель", 20, 60, 90, 30, 26, 20)));
    var battle_field = document.querySelector('.battle_field');


</script>
</html>