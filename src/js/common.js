/**
 *
 *  Take clients width and height
 *
 */
window.$ = window.jquery = $;

let w = window.innerWidth
    || document.documentElement.clientWidth
    || document.body.clientWidth;

let h = window.innerHeight
    || document.documentElement.clientHeight
    || document.body.clientHeight;

let x = document.getElementById('demo');

const psevdoLi = () => {
    let mark, container, ordersList;
    container = document.querySelector('.orders>li:last-of-type');
    if(container){
        mark = `<li class='no-id' style='width: 1px; background-color: transparent; -webkit-box-shadow: none;-moz-box-shadow: none;box-shadow: none ; margin-right: 0; padding: 0;'></li>`;
        container.insertAdjacentHTML('afterend', mark);
    }

};
psevdoLi();

function buttonMonthNav(dateTitle){
    let namearrmonth;

    namearrmonth = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
        'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
    let returnIndex = () => {
        return namearrmonth.findIndex((element, index) => {
            if (element === dateTitle) {
                return index;
            } else {
                return false;
            }
        });
    };
    return {
        prev: namearrmonth[returnIndex() - 1],
        next: namearrmonth[returnIndex() + 1]
    };
};

$(document).ready(function () {
    let titleMonth;
    /*const calculator = ()=>{*/
    let $datepicker = $("#datepicker");
    //получаем до инклуда в ДОМ сам каллендарь
    let widget = $datepicker.datepicker("widget");

    function settings() { //работает отлично
        //общие настройки
        $datepicker.datepicker({
            showOn: "button",
            buttonImageOnly: false,
            buttonText: "сегодня&nbsp;<svg aria-hidden=\"true\" data-prefix=\"fas\"\n" +
            "                     data-icon=\"chevron-down\"\n" +
            "                     class=\"svg-inline--fa fa-chevron-down fa-w-14\" role=\"img\"\n" +
            "                     xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path\n" +
            "                            fill=\"currentColor\"\n" +
            "                            d=\"M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z\"></path></svg>",
            showOtherMonths: true,
            selectOtherMonths: true,
            navigationAsDateFormat: true
        });
        //русификация
        $datepicker.datepicker($.datepicker.regional["ru"]);
        $datepicker.datepicker("setDate", new Date());

        //перенос
        if (widget.length > 0) {
            let calendar = $('#ui-datepicker-div');
            if (calendar.length > 0) {
                calendar.appendTo($('.with_callendar'));
            } else {
                console.log('-1');
            }
        }
    }

    settings();

    titleMonth = $('.ui-datepicker-month').text();

    function refreshCal(newMonth) {
        let navmonth = buttonMonthNav(newMonth);
        console.log(navmonth);
        $datepicker.datepicker("option", {
            nextText: navmonth.next,
            prevText: navmonth.prev
        });
        // $datepicker.datepicker("refresh");
    }
    function refreshCal2(newMonth) {
        let navmonth = buttonMonthNav(newMonth);
        console.log(navmonth);
        $('.ui-datepicker-next span').text(navmonth.next);
        $('.ui-datepicker-prev span').text(navmonth.prev);
    }
    console.log(titleMonth);
    refreshCal(titleMonth);

    // console.log(widget);
    $(widget).on('click',function (ev) {
        ev.preventDefault();
        let element = ev.target.innerText;

        if(ev.target.classList[0] === 'ui-icon'){
            if(ev.target.innerText.length>0){
                console.log(element);
                refreshCal2(element);
            }
        }
    });

    //check status of the check box
    // todo сделать изменение класса статуса нот дота при клике чекбокса
  // function checkboxChangeNoteDot() {
  //       let conteiner;
  //       conteiner = document.querySelector('.checkboxes-container');
  //       conteiner.addEventListener('click', e => {
  //          if(e.target == ''
  //       });
  //     if(document.querySelector('.notification-group')){
  //
  //     }
  // }

    function toogleInfoBlock(itemToClick, itemToClickAddClass='', itemToToggle, itemToToggleAddClass = '') {
        $(itemToClick).on('click', function () {
            let item = $(this);
            let itemInfo;
            item.toggleClass(itemToClickAddClass);
            itemInfo = item.children(itemToToggle);
                // itemInfo.toggleClass(itemToToggleAddClass);
               if(itemInfo.hasClass(itemToToggleAddClass)){
                   itemInfo.hide().removeClass(itemToToggleAddClass);
               } else {
                   itemInfo.slideDown(200).css({'display':'flex'}).addClass(itemToToggleAddClass);
               }
        })
    };
    toogleInfoBlock('.main-table .item', '-info-block', '.sub-item.-info', 'active');

});

// todo    сделать проверку на меся 1й и последний, сделать дату справа что бы показывалась
