    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-switch.js"></script>
    <script type="text/javascript" >
    setInterval(function(){bacaStatus();},1000);
    function bacaStatus(){
        var xmlhttp;
        
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function(){
            if(xmlhttp.readyState===4 && xmlhttp.status===200){
                //alert(xmlhttp.responseText);
                if(xmlhttp.responseText==='ERROR'){
                    var str_alert='';
                    str_alert += '<div class="alert alert-danger">';
                    str_alert += 'Whoopsss, lampu Anda nampaknya ada masalah!';
                    str_alert += '</div>';
                    document.getElementById("alert_1").innerHTML = str_alert;
                    document.getElementById("bohlam_1").innerHTML = '<img height="150" width="150" src="<?php echo base_url();?>assets/img/warning.png">';
                    //document.getElementById("l1").innerHTML = xmlhttp.responseText;
                }else
                if(xmlhttp.responseText==='OFF'){
                    var str_alert='';
                    str_alert += '<div class="alert alert-info">';
                    str_alert += 'Saat ini lampu dalam keadaan OFF!';
                    str_alert += '</div>';
                    document.getElementById("alert_1").innerHTML = str_alert;
                    document.getElementById("bohlam_1").innerHTML = '<img height="150" width="150" src="<?php echo base_url();?>assets/img/light_off.png">';
                    //document.getElementById("l1").innerHTML = xmlhttp.responseText;
                }else
                if(xmlhttp.responseText==='ON'){
                    var str_alert='';
                    str_alert += '<div class="alert alert-info">';
                    str_alert += 'Saat ini lampu dalam keadaan ON!';
                    str_alert += '</div>';
                    document.getElementById("alert_1").innerHTML = str_alert;
                    document.getElementById("bohlam_1").innerHTML = '<img height="150" width="150" src="<?php echo base_url();?>assets/img/light_on.png">';
                    //document.getElementById("l1").innerHTML = xmlhttp.responseText;
                }
            }
        };
        
        xmlhttp.open("GET","http://asmarina-project.3gen-itdev.com/index.php/user/voltase",true);
        xmlhttp.send();
        
    }
        
    var state_lampu = <?php echo json_encode($state_lampu);?>;
    for(var i=0;i<state_lampu.length;i++){
        var lamp = i+1;
        var str_alert = '';
        var bohlam = '';
        $('#lampu_'+lamp).bootstrapSwitch('size', 'large');
        if(state_lampu[i].state==="false"){
            $('#lampu_'+lamp).bootstrapSwitch('state', false);
            str_alert += '<div class="alert alert-info">';
            str_alert += 'Saat ini lampu dalam keadaan OFF';
            str_alert += '</div>';
            document.getElementById("alert_"+lamp).innerHTML = str_alert;
            document.getElementById("bohlam_"+lamp).innerHTML = '<img height="150" width="150" src="<?php echo base_url();?>assets/img/light_off.png">';
        }else
        if(state_lampu[i].state==="true"){
            $('#lampu_'+lamp).bootstrapSwitch('state', true);
            str_alert += '<div class="alert alert-info">';
            str_alert += 'Saat ini lampu dalam keadaan ON';
            str_alert += '</div>';
            document.getElementById("alert_"+lamp).innerHTML = str_alert;
            document.getElementById("bohlam_"+lamp).innerHTML = '<img height="150" width="150" src="<?php echo base_url();?>assets/img/light_on.png">';
        }
    }
    
    $('#lampu_1').on('switchChange', function (e, data) {
        value = data.value;
        window.location = '<?php echo site_url();?>/user/change/1/'+value;
    });
    
    $('#lampu_2').on('switchChange', function (e, data) {
        value = data.value;
        window.location = '<?php echo site_url();?>/user/change/2/'+value;
    });
    
    $('#lampu_3').on('switchChange', function (e, data) {
        value = data.value;
        window.location = '<?php echo site_url();?>/user/change/3/'+value;
    });
    
    $('#lampu_4').on('switchChange', function (e, data) {
        value = data.value;
        window.location = '<?php echo site_url();?>/user/change/4/'+value;
    });
    
    $('#lampu_5').on('switchChange', function (e, data) {
        value = data.value;
        window.location = '<?php echo site_url();?>/user/change/5/'+value;
    });
    
    $('#lampu_6').on('switchChange', function (e, data) {
        value = data.value;
        window.location = '<?php echo site_url();?>/user/change/6/'+value;
    });
    
    
    </script>
    </body>
</html>