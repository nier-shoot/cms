$(function(){
    //改变左侧链接点击样式
    $('.left_menu dd a').click(function(){
        $('.left_menu dd a').removeClass('action');
        $(this).addClass('action');
    })
})