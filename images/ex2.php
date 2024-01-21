<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <style type="text/css">
            body, html, h1 {padding:0; margin:0; font:12px arial;}
            body {padding:0px 30px;}
            h1 {font:12pt Arial; color:#A1A1A1; margin:0px 0 10px 0;}
            input {border:1px solid #666; font:12px arial; width:50px;}
            div {padding-bottom:0px; font:11px tahoma;}
        </style>
        <link rel="stylesheet" type="text/css" href="trackbar.css" />
        <script type="text/javascript" src="trackbar.js"></script>
    </head>
    <body>
        <table>
            <tr>
                <td style="border: 0px solid #DDDDDD;" width=30>
                </td>
                <td style="border: 0px solid #DDDDDD;padding-right:45px;">
                    <script>
                        function show(a){
                            obj1=document.getElementById('for_Money_RU'); 
                            obj2=document.getElementById('for_Money_USD');
                            obj3=document.getElementById('for_Money_EUR');
                            
                            obj4=document.getElementById('for_Adding_RU'); 
                            obj5=document.getElementById('for_Adding_USD');
                            obj6=document.getElementById('for_Adding_EUR');
                            
                            obj7=document.getElementById('for_Time_RU'); 
                            obj8=document.getElementById('for_Time_USD');
                            obj9=document.getElementById('for_Time_EUR');
					
                            obj10=document.getElementById('input_RU');
                            obj11=document.getElementById('input_USD');
                            obj12=document.getElementById('input_EUR');
					
                            obj13=document.getElementById('input_RU1');
                            obj14=document.getElementById('input_USD1');
                            obj15=document.getElementById('input_EUR1');
					
                            obj16=document.getElementById('input_RU2');
                            obj17=document.getElementById('input_USD2');
                            obj18=document.getElementById('input_EUR2');
					
                            if (a==0){
                                obj1.style.display="block";
                                obj2.style.display="none";
                                obj3.style.display="none";
						
                                obj4.style.display="block";
                                obj5.style.display="none";
                                obj6.style.display="none";
						
                                obj7.style.display="block";
                                obj8.style.display="none";
                                obj9.style.display="none";
						
                                obj10.style.display="block";
                                obj11.style.display="none";
                                obj12.style.display="none";
						
                                obj13.style.display="block";
                                obj14.style.display="none";
                                obj15.style.display="none";
						
                                obj16.style.display="block";
                                obj17.style.display="none";
                                obj18.style.display="none";
						
						
                                document.getElementById('basket3').style.height = ((document.getElementById('inputAdding_RU').value/10000)+1)+'px';
                                document.getElementById('basket2').style.height = document.getElementById('inputTime_RU').value/3+'px';
                                document.getElementById('basket1').style.height = document.getElementById('inputMoney_RU').value/300000+'px';
                                document.getElementById('basket').style.height = 32 +'px';
						
                            }else if (a==1){
                                obj1.style.display="none";
                                obj2.style.display="block";
                                obj3.style.display="none";
						
                                obj4.style.display="none";
                                obj5.style.display="block";
                                obj6.style.display="none";
						
                                obj7.style.display="none";
                                obj8.style.display="block";
                                obj9.style.display="none";
						
                                obj10.style.display="none";
                                obj11.style.display="block";
                                obj12.style.display="none";
						
                                obj13.style.display="none";
                                obj14.style.display="block";
                                obj15.style.display="none";
						
                                obj16.style.display="none";
                                obj17.style.display="block";
                                obj18.style.display="none";
						
                                document.getElementById('basket3').style.height = ((document.getElementById('inputAdding_USD').value/100)+1)+'px';
                                document.getElementById('basket2').style.height = document.getElementById('inputTime_USD').value/3+'px';
                                document.getElementById('basket1').style.height = document.getElementById('inputMoney_USD').value/3000+'px';
                                document.getElementById('basket').style.height = 32 +'px';
                            }else{
                                obj1.style.display="none";
                                obj2.style.display="none";
                                obj3.style.display="block";
						
                                obj4.style.display="none";
                                obj5.style.display="none";
                                obj6.style.display="block";
						
                                obj7.style.display="none";
                                obj8.style.display="none";
                                obj9.style.display="block";
						
                                obj10.style.display="none";
                                obj11.style.display="none";
                                obj12.style.display="block";
						
                                obj13.style.display="none";
                                obj14.style.display="none";
                                obj15.style.display="block";
						
                                obj16.style.display="none";
                                obj17.style.display="none";
                                obj18.style.display="block";
                                document.getElementById('basket3').style.height = ((document.getElementById('inputAdding_EUR').value/100)+1)+'px';
                                document.getElementById('basket2').style.height = document.getElementById('inputTime_EUR').value/3+'px';
                                document.getElementById('basket1').style.height = document.getElementById('inputMoney_EUR').value/3000+'px';
                                document.getElementById('basket').style.height = 32 +'px';
                            }
					
                        }
			
			
                        /////////-------Money Start--------
                        function isrightMoney_RU(obj){
                            if (obj.value>10000000) obj.value=10000000;
                            if (obj.value<30000) obj.value=30000;
                        }
			
                        function isrightMoney_USD(obj){
                            if (obj.value>300000) obj.value=300000;
                            if (obj.value<1000) obj.value=1000;
                        }
			
                        function isrightMoney_EUR(obj){
                            if (obj.value>300000) obj.value=300000;
                            if (obj.value<1000) obj.value=1000;
                        }
                        ///////////-----Money END---------
			
                        //////////-------Time Start-------
                        function isrightTime(obj){
                            if (obj.value>36) obj.value=36;
                            if (obj.value<3) obj.value=3;
                        }
                        ///////----------Time End----------
			
                        ///////---------Adding Start
                        function isrightAdding_RU(obj){
                            if (obj.value>100000) obj.value=100000;
                            if (obj.value<0) obj.value=0;
                        }
			
                        function isrightAdding_USD(obj){
                            if (obj.value>3000) obj.value=3000;
                            if (obj.value<0) obj.value=0;
                        }
                        function isrightAdding_EUR(obj){
                            if (obj.value>3000) obj.value=3000;
                            if (obj.value<0) obj.value=0;
                        }
                        ///////-------Adding End-------------
                    </script>
                    <h1 style="border-bottom: 0px solid #DDDDDD; display: inline;">Я хочу приумножить</h1>
                    <!-- Check Money USD RU EUR!-->
                    <input type="radio" id="ru" name="currency" value="RU" checked="checked" onClick="show(0);">
                    <label for="ru"><span></span>RU</label> 
                    <input type="radio" id="usd" name="currency" value="USD" onClick="show(1);">
                    <label for="usd"><span></span>US</label>
                    <input type="radio" id="eur" name="currency" value="EUR" onClick="show(2);">
                    <label for="eur"><span></span>EU</label>
                    <P></P>

                    <div id="for_Money_RU" style="display: block; position: relative; z-index: 1;"></div>
                    <div id="for_Money_USD" style="display: none; position: relative; z-index: 2;"></div>
                    <div id="for_Money_EUR" style="display: none; position: relative; z-index: 3;"></div>
                    <br/>
                    <script type="text/javascript">
                        trackbar.getObject('Money_USD').init({
                            onMove : function() {
                                document.getElementById("basket1").style.height = this.leftValue/3000+"px";
                                trackbar.getObject('Money_USD').updateLeftValue(this.leftValue);	
                                document.getElementById("inputMoney_USD").value = this.rightValue;
                            },
                            dual : false, // two intervals
                            width : 400, // px
                            leftLimit : 1000, // unit of value
                            leftValue : 30000, // unit of value
                            rightLimit : 300000, // unit of value
                            rightValue : 0, // unit of value
                            roundUp : 1000, //Шаг изменения денежных вложений
                            hehe : ":-)"
                        },"for_Money_USD");
                        trackbar.getObject('Money_EUR').init({
                            onMove : function() {
                                document.getElementById("basket1").style.height = this.leftValue/3000+"px";
                                trackbar.getObject('Money_EUR').updateLeftValue(this.leftValue);	
                                document.getElementById("inputMoney_EUR").value = this.rightValue;
                            },
                            dual : false, // two intervals
                            width : 400, // px
                            leftLimit : 1000, // unit of value
                            leftValue : 30000, // unit of value
                            rightLimit : 300000, // unit of value
                            rightValue : 0, // unit of value
                            roundUp : 1000, //Шаг изменения денежных вложений
                            hehe : ":-)"
                        },"for_Money_EUR");
                        trackbar.getObject('Money_RU').init({
                            onMove : function() {
                                document.getElementById("basket1").style.height = this.leftValue/300000+"px";
                                trackbar.getObject('Money_RU').updateLeftValue(this.leftValue);	
                                document.getElementById("inputMoney_RU").value = this.rightValue;
                            },
                            dual : false, // two intervals
                            width : 400, // px
                            leftLimit : 30000, // unit of value
                            leftValue : 300000, // unit of value
                            rightLimit : 10000000, // unit of value
                            rightValue : 0, // unit of value
                            roundUp : 10000, //Шаг изменения денежных вложений
                            hehe : ":-)"
                        },"for_Money_RU");
                    </script>
                    <h1 style="border-bottom: 0px solid #DDDDDD;">за время</h1>
                    <div id="for_Time_RU" style="display: block; position: relative; z-index: 1;"></div>
                    <div id="for_Time_USD" style="display: none; position: relative; z-index: 2;"></div>
                    <div id="for_Time_EUR" style="display: none; position: relative; z-index: 3;"></div>
                    <br/>
                    <script>
                        trackbar.getObject('Time_RU').init({
                            onMove : function() {
                                document.getElementById("basket2").style.height = this.leftValue/3+"px";
								document.getElementById("basket5").style.height = this.leftValue/3+"px";
                                trackbar.getObject('Time_RU').updateLeftValue(this.leftValue);
                                document.getElementById("inputTime_RU").value = this.rightValue;
                            },
                            dual : false, // two intervals
                            width : 400, // px
                            leftLimit : 3, // unit of value
                            leftValue : 24, // unit of value
                            rightLimit : 36, // unit of value
                            rightValue : 0, // unit of value
                            roundUp : 1, //Шаг изменения денежных вложений
                            hehe : ":-)"
                        },"for_Time_RU");
			
                        trackbar.getObject('Time_USD').init({
                            onMove : function() {
                                document.getElementById("basket2").style.height = this.leftValue/3+"px";
                                trackbar.getObject('Time_USD').updateLeftValue(this.leftValue);
                                document.getElementById("inputTime_USD").value = this.rightValue;
                            },
                            dual : false, // two intervals
                            width : 400, // px
                            leftLimit : 3, // unit of value
                            leftValue : 24, // unit of value
                            rightLimit : 36, // unit of value
                            rightValue : 0, // unit of value
                            roundUp : 1, //Шаг изменения денежных вложений
                            hehe : ":-)"
                        },"for_Time_USD");
                        trackbar.getObject('Time_EUR').init({
                            onMove : function() {
                                document.getElementById("basket2").style.height = this.leftValue/3+"px";
                                trackbar.getObject('Time_EUR').updateLeftValue(this.leftValue);
                                document.getElementById("inputTime_EUR").value = this.rightValue;
                            },
                            dual : false, // two intervals
                            width : 400, // px
                            leftLimit : 3, // unit of value
                            leftValue : 24, // unit of value
                            rightLimit : 36, // unit of value
                            rightValue : 0, // unit of value
                            roundUp : 1, //Шаг изменения денежных вложений
                            hehe : ":-)"
                        },"for_Time_EUR");
                    </script>
                    <h1 style="border-bottom: 0px solid #DDDDDD;">с ежемесячным пополнением вклада на</h1>

                    <div id="for_Adding_RU" style="display: block; position: relative; z-index: 1;"></div>
                    <div id="for_Adding_USD" style="display: none; position: relative; z-index: 2;"></div>
                    <div id="for_Adding_EUR" style="display: none; position: relative; z-index: 3;"></div>
                    <br/>
                    <script>
                        trackbar.getObject('Adding_USD').init({
                            onMove : function() {
                                document.getElementById("basket3").style.height = ((this.leftValue/100)+1)+"px";
                                trackbar.getObject('Adding_USD').updateLeftValue(this.leftValue);
                                document.getElementById("inputAdding_USD").value = this.rightValue;
                            },
                            dual : false, // two intervals
                            width : 400, // px
                            leftLimit : 0, // unit of value
                            leftValue : 2000, // unit of value
                            rightLimit : 3000, // unit of value
                            rightValue : 0, // unit of value
                            roundUp : 100, //
                            hehe : ":-)"
                        },"for_Adding_USD");
                        trackbar.getObject('Adding_EUR').init({
                            onMove : function() {
                                document.getElementById("basket3").style.height = ((this.leftValue/100)+1)+"px";
                                trackbar.getObject('Adding_EUR').updateLeftValue(this.leftValue);
                                document.getElementById("inputAdding_EUR").value = this.rightValue;
                            },
                            dual : false, // two intervals
                            width : 400, // px
                            leftLimit : 0, // unit of value
                            leftValue : 2000, // unit of value
                            rightLimit : 3000, // unit of value
                            rightValue : 0, // unit of value
                            roundUp : 100, //
                            hehe : ":-)"
                        },"for_Adding_EUR");
			
                        trackbar.getObject('Adding_RU').init({
                            onMove : function() {
                                document.getElementById("basket3").style.height = ((this.leftValue/10000)+1)+"px";
                                trackbar.getObject('Adding_RU').updateLeftValue(this.leftValue);
                                document.getElementById("inputAdding_RU").value = this.rightValue;
                            },
                            dual : false, // two intervals
                            width : 400, // px
                            leftLimit : 0, // unit of value
                            leftValue : 50000, // unit of value
                            rightLimit : 100000, // unit of value
                            rightValue : 0, // unit of value
                            roundUp : 1000, 
                            hehe : ":-)"
                        },"for_Adding_RU");
                    </script>
                </td>
                <td valign="bottom" style="border: 0px solid #DDDDDD; border-right: 1px solid #DDDDDD;">
                    <div id="input_RU" style="height:64px; margin-right:3px; z-index:1; display:block;">
                        <input
                            style="width:70px; height:20px;"
                            id="inputMoney_RU"
                            type="number"
                            onChange="
                                this.value = this.value.replace(/\D+/, '');
                                isrightMoney_RU(this);
                                trackbar.getObject('Money_RU').updateRightValue(this.value);
                                document.getElementById('basket3').style.height = ((document.getElementById('inputAdding_RU').value/10000)+1)+'px';
                                document.getElementById('basket2').style.height = document.getElementById('inputTime_RU').value/3+'px';
                                document.getElementById('basket1').style.height = document.getElementById('inputMoney_RU').value/300000+'px';
                                document.getElementById('basket').style.height = 32 +'px';"
                            value="300000"
                            maxlength="8">
                    </div> 

                    <div id="input_USD" style="height:64px; margin-right:3px; z-index:2;display:none">
                        <input
                            style="width:70px; height:20px;"
                            id="inputMoney_USD"
                            type="number"
                            onChange="this.value = this.value.replace(/\D+/, '');
                                isrightMoney_USD(this);	
                                trackbar.getObject('Money_USD').updateRightValue(this.value);
                                document.getElementById('basket3').style.height = ((document.getElementById('inputAdding_USD').value/100)+1)+'px';
                                document.getElementById('basket2').style.height = document.getElementById('inputTime_USD').value/3+'px';
                                document.getElementById('basket1').style.height = document.getElementById('inputMoney_USD').value/3000+'px';
                                document.getElementById('basket').style.height = 32 +'px';"\

                            value="30000" maxlength="6"/>
                    </div>

                    <div id="input_EUR" style="height:64px; margin-right:3px; z-index:3; display:none"><input style="width:70px; height:20px;" id="inputMoney_EUR" type="number"  onChange="	this.value = this.value.replace(/\D+/, '');
                        isrightMoney_EUR(this);	
												
                        trackbar.getObject('Money_EUR').updateRightValue(this.value);
	
                        document.getElementById('basket3').style.height = ((document.getElementById('inputAdding_EUR').value/100)+1)+'px';
                        document.getElementById('basket2').style.height = document.getElementById('inputTime_EUR').value/3+'px';
                        document.getElementById('basket1').style.height = document.getElementById('inputMoney_EUR').value/3000+'px';
                        document.getElementById('basket').style.height = 32 +'px';"\

                                                                                                              value="30000" maxlength="6"/>
                    </div>
                    <!-- input Money start-->

                    <!-- input Time start-->
                    <div id="input_RU2" style="height:65px; margin-right:3px; z-index:1; display: block;"><input style="width:70px; height:20px;" id="inputTime_RU" type="number"  onChange="	this.value = this.value.replace(/\D+/, '');	
                        isrightTime(this);
                        trackbar.getObject('Time_RU').updateRightValue(this.value);
																						
                        document.getElementById('basket3').style.height = ((document.getElementById('inputAdding_RU').value/10000)+1)+'px';
                        document.getElementById('basket2').style.height = document.getElementById('inputTime_RU').value/3+'px';
                        document.getElementById('basket1').style.height = document.getElementById('inputMoney_RU').value/300000+'px';
                        document.getElementById('basket').style.height = 32 +'px';"\
                                                                                                                 value="24" maxlength="2"/>
                    </div> 
                    <div id="input_USD2" style="height:65px; margin-right:3px; z-index:2; display: none;"><input style="width:70px; height:20px;" id="inputTime_USD" type="number"  onChange="	this.value = this.value.replace(/\D+/, '');	
                        isrightTime(this);
                        trackbar.getObject('Time_USD').updateRightValue(this.value);
																						
                        document.getElementById('basket3').style.height = ((document.getElementById('inputAdding_USD').value/100)+1)+'px';
                        document.getElementById('basket2').style.height = document.getElementById('inputTime_USD').value/3+'px';
                        document.getElementById('basket1').style.height = document.getElementById('inputMoney_USD').value/3000+'px';
                        document.getElementById('basket').style.height = 32 +'px';"\
                                                                                                                 value="24" maxlength="2"/>
                    </div> 
                    <div id="input_EUR2" style="height:65px; margin-right:3px; z-index:3; display: none;"><input style="width:70px; height:20px;" id="inputTime_EUR" type="number"  onChange="	this.value = this.value.replace(/\D+/, '');	
                        isrightTime(this);
                        trackbar.getObject('Time_EUR').updateRightValue(this.value);
			document.getElementById('basket3').style.height = ((document.getElementById('inputAdding_EUR').value/100)+1)+'px';
                        document.getElementById('basket2').style.height = document.getElementById('inputTime_EUR').value/3+'px';
                        document.getElementById('basket1').style.height = document.getElementById('inputMoney_EUR').value/3000+'px';
                        document.getElementById('basket').style.height = 32 +'px';" value="24" maxlength="2"/>
                    </div>
                    <div id="input_RU1" style="height:39px; margin-right:3px; z-index:1; display:block"><input style="width:70px; height:20px;" id="inputAdding_RU" type="number"  onChange="	this.value = this.value.replace(/\D+/, '');
                        isrightAdding_RU(this); 
                        trackbar.getObject('Adding_RU').updateRightValue(this.value);
                        document.getElementById('basket3').style.height = ((document.getElementById('inputAdding_RU').value/10000)+1)+'px';
                        document.getElementById('basket2').style.height = document.getElementById('inputTime_RU').value/3+'px';
                        document.getElementById('basket1').style.height = document.getElementById('inputMoney_RU').value/300000+'px';
                        document.getElementById('basket').style.height = 32 +'px';"
                                                                                                               value="50000" maxlength="6"/>
                    </div>
                    <div id="input_USD1" style="height:39px; margin-right:3px; z-index:2; display:none"><input style="width:70px; height:20px;" id="inputAdding_USD" type="number"  onChange="	this.value = this.value.replace(/\D+/, '');
                        isrightAdding_USD(this);
                        trackbar.getObject('Adding_USD').updateRightValue(this.value);
                        document.getElementById('basket3').style.height = ((document.getElementById('inputAdding_USD').value/100)+1)+'px';
                        document.getElementById('basket2').style.height = document.getElementById('inputTime_USD').value/3+'px';
                        document.getElementById('basket1').style.height = document.getElementById('inputMoney_USD').value/3000+'px';
                        document.getElementById('basket').style.height = 32 +'px';"
                                                                                                               value="1000" maxlength="4"/>
                    </div>			

                    <div id="input_EUR1" style="height:39px; margin-right:3px; z-index:3; display:none"><input style="width:70px; height:20px;" id="inputAdding_EUR" type="number"  onChange="	this.value = this.value.replace(/\D+/, '');
                        isrightAdding_EUR(this);
                        trackbar.getObject('Adding_EUR').updateRightValue(this.value);
                        document.getElementById('basket3').style.height = ((document.getElementById('inputAdding_EUR').value/100)+1)+'px';
                        document.getElementById('basket2').style.height = document.getElementById('inputTime_EUR').value/3+'px';
                        document.getElementById('basket1').style.height = document.getElementById('inputMoney_EUR').value/3000+'px';
                        document.getElementById('basket').style.height = 32 +'px';" value="1000" maxlength="4"/>
                    </div>
                </td>


                <td style="vertical-align: bottom; right: 0px; top:0px; padding-bottom:30px; padding-left:30px;border: 0px solid #DDDDDD;">
                    <div id="basket" class="sizelessTubes"></div>
                    <div id="basket1" class="sizebleTubes" title="Money"></div>
                    <div id="basket2" class="sizebleTubes" title="Time"></div>
                    <div id="basket3" class="sizebleTubes" title="Get time"></div>
                    <div class="Base"></div>
                    <h1 align=center style="border: 0px solid #DDDDDD;"><h1>
                            </td>

                            <td style="vertical-align: bottom; right: 0px; top:0px; padding-bottom:30px; border: 0px solid #DDDDDD; ">
                                <div class="sizelessTubes"></div>
                                <div id="basket4" class="sizebleTubes" title="Money"></div>
                                <div id="basket5" class="sizebleTubes" title="Time"></div>
                                <div id="basket6" class="sizebleTubes" title="Get time"></div>
                                <div class="Base"></div>
                                <h1 align=center style="border: 0px solid #DDDDDD;"><h1>
                                        </td>
                                        </tr>
                                        </table>
                                        </body>
                                        </html>