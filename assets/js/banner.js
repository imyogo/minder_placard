$(function(){
        
    $("#sortable").sortable({
        
        opacity: 0.6,    //拖曳時透明
        cursor: 'pointer',  //游標設定
        update: function () {
            
            $.blockUI({ message: '<div> 排序變更儲存中，請稍候...</div>' });
            
            var i = 1;
            $("input[type='hidden']").each(function() {
                $(this).val(i);
                i++;
            });
            
            
            setTimeout(function() {
                
                $.unblockUI();
                
                /*
                $.post("banner_sort.php", $("#form1").serialize(),
                   function(data){
                     $.unblockUI();
                });
                */

            }, 500);
            
        }
    
    
    });
    
    //彈出圖片
    $(".group1").colorbox({
        rel:'group1',
        maxWidth: '500px',
        maxHeight: '500px'
    });
    
});