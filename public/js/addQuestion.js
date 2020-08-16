var minCount = 1;
var maxCount = 5;

$(function(){
    $('#demo-plus').on('click', function(){
        var inputCount = $('#add-form .unit').length;
        if (inputCount < maxCount){
            var element = $('#add-form .unit:last-child').clone(true);
            var inputList = element[0].querySelectorAll('input[type="text"]');
            for (var i = 0; i < inputList.length; i++) {
                inputList[i].value = "";
            }
            $('#add-form .unit').parent().append(element);
        }
    });
    $('.demo-minus').on('click', function(){
        var inputCount = $('#add-form .unit').length;
        if (inputCount > minCount){
            $(this).parents('.unit').remove();
        }
    });
});
