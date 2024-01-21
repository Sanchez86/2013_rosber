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

        <link rel="stylesheet" href="css/ui-lightness/ui.css" />
        <link rel="stylesheet" href="css/main.css" />
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.js"></script>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <script>
            function recount(){
                var start = parseInt($( "#start_input" ).val());
                var time = parseInt($( "#time_input" ).val());
                var adding = parseInt($( "#adding_input" ).val());
                var res = start + time*adding;
				
				var start_amount = start/100000;
				var start_added = time*adding/100000;
				
				var res_amount = res/100000;
				var res_percent = res*0.015/100000;
				var res_added = res*0.1/100000;
				
				
				
				var start_h = 27 + start_amount + start_added + 2 + 20;
				var res_h = 27 + res_amount + res_percent + res_added + 2 + 2 + 20;
				
				var pad = res_h - start_h;
				$("#start_bar").css('margin-top', pad + 'px');
				
                $("#start_bar #bar_amount").css('height', start_amount + 'px');
                $("#start_bar #bar_added").css('height', start_added + 'px');
                var summary = res + res*0.015 + res*0.1;
                $("#res_bar #bar_amount").css('height', res_amount + 'px');
                $("#res_bar #bar_percent").css('height', res_percent + 'px');
                $("#res_bar #bar_added").css('height', res_added + 'px');
                $('.result #val').html(summary + ' р');
            }
                
            $(document).ready(function(){
                $( "#start" ).slider({ value:10000, min:10000, max:10000000, step:10000,change:recount, range:"min",slide: function( event, ui ) { $( "#start_input" ).val(ui.value ); }});
                $( "#start_input" ).val($( "#start" ).slider( "value" ) );
                $( "#time" ).slider({value:3, min:1, max:36, step:1,change:recount, range:"min", slide: function( event, ui ) { $( "#time_input" ).val(ui.value ); }});
                $( "#time_input" ).val($( "#time" ).slider( "value" ) );
                $( "#adding" ).slider({value:10000,min: 0,max: 100000,step: 1000,change:recount, range:"min",slide: function( event, ui ) {$( "#adding_input" ).val(ui.value );}});
                $( "#adding_input" ).val($( "#adding" ).slider( "value" ) );
				recount();
            })
        </script>
    </head>
    <body>
		<div style="height:500px">
			<form id="count_vklad">
				<div id="checkbox">
					<span id="gray">ПРИУМНОЖИТЬ</span>
				</div>
				<div class="slidecont">
					<div id="start"></div>
					<input type="text" id="start_input">
				</div>
				<div class="slidecont">
				<p>ЗА ВРЕМЯ</p>
					<div id="time"></div>
					<input type="text" id="time_input">
				</div>
				<div class="slidecont">
				<p>ЕЖЕМЕСЯЧНОЕ ПОПОЛНЕНИЕ ВКЛАДА НА</p>
					<div id="adding"></div>
					<input type="text" id="adding_input">
				</div>
			</form>
			<div class="result">
				<div id="bars">
					<div id="start_bar">
						<p>&nbsp ВЛОЖИЛ</p>
						<div id="top_sep"></div>
						<div id="bar_added"></div>
						<div id="mid_sep"></div>
						<div id="bar_amount"></div>
						<div id="bot_sep"></div>
					</div>
					<div id="res_bar">
						<div id="text"><p>ВЫ ПОЛУЧИТЕ:</p> </div>
						<div id="top_sep"></div>
						<div id="bar_added"></div>
						<div id="mid_sep"></div>
						<div id="bar_percent"></div>
						<div id="mid_sep"></div>
						<div id="bar_amount"></div>
						<div id="bot_sep"></div>
					</div>
				</div>
				<div id="res_money">
							<div id='val'></div>
						</div>
			</div>
		</div>	
    </body>
</html>

    
