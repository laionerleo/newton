<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    	 <!-- Bootstrap Core CSS -->
	
			<!-- Custom CSS -->
			<link href="<?php echo base_url(); ?>application/assets/nerdamer/css/site.css" rel="stylesheet">
			<link href="<?php echo base_url(); ?>application/assets/nerdamer/css/style.css" rel="stylesheet">
			<link href="<?php echo base_url(); ?>application/assets/nerdamer/css/demo.css" rel="stylesheet">
			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
					<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
			<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/nerdamer/plugins/highlightjs/styles/vs.css"> 
			<script src="<?php echo base_url(); ?>application/assets/nerdamer/plugins/highlightjs/highlight.pack.js"></script> 
			<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/nerdamer/plugins/guppy/build/guppy.min.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/nerdamer/plugins/guppy/build/guppy-default.min.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/nerdamer/plugins/guppy/build/guppy-default-osk.min.css">

			
		
			
			<!--codemirror -->
			<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/nerdamer/plugins/codemirror/codemirror.css">

			<script src="<?php echo base_url(); ?>application/assets/nerdamer/plugins/codemirror/codemirror.js"></script> 
			<!--    <script src="./<?php echo base_url(); ?>application/assets/nerdamer/plugins/codemirror/javascript/javascript.js"></script> -->
			<script src="<?php echo base_url(); ?>application/assets/nerdamer/plugins/codemirror/addon/closebrackets.js"></script> 
			<script src="<?php echo base_url(); ?>application/assets/nerdamer/plugins/codemirror/addon/matchbrackets.js"></script> 
			<script src="<?php echo base_url(); ?>application/assets/nerdamer/plugins/codemirror/addon/active-line.js"></script> 
			<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/nerdamer/plugins/codemirror/theme/neat.css">
			<!-- katex -->
			<script src="<?php echo base_url(); ?>application/assets/nerdamer/plugins/katex/katex.min.js"></script> 
</head>
<body>
<div  id="cabeza">
        <div id="nerdamer-demo">
                    
                    <div id="demo-input" class="demo-input" style="display: none;"></div>
                    <!--<input id="text-input" class="demo-input" type="text" placeholder="Text editor. Enter expression here"/>-->
                    <textarea id="codemirror">    </textarea>
                </div>
                <button class="btn btn-primary" id="process-btn" onclick="Metodo()" >ENTER</button>
                <div class="pull-right">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" id="expression-evaluate">
                          <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                          <span class="checkbox-label">EVALUATE</span>
                        </label>
                    </div>
                </div>
                <div class="pull-right">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" id="to-decimal">
                          <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                          <span class="checkbox-label">DECIMAL</span>
                        </label>
                    </div>
                </div>
                <div class="pull-right">
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" id="expression-expand">
                          <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                          <span class="checkbox-label">EXPAND</span>
                        </label>
                    </div>
                </div>
                
                <div id="demo-panel">
								</div>
											

			</div>

            
 </div>
            <script src="<?php echo base_url(); ?>application/assets/nerdamer/js/jquery.js"></script>
<script>
		$('.date').html(new Date().getFullYear());
</script>

<script src="<?php echo base_url(); ?>application/assets/nerdamer/plugins/guppy/build/guppy.min.js"></script>
<script src="<?php echo base_url(); ?>application/assets/nerdamer/plugins/guppy/build/guppy_osk.js"></script>
<script src="<?php echo base_url(); ?>application/assets/nerdamer/plugins/d3/d3.min.js"></script>
<!--<script src="./plugins/c3/c3.min.js"></script>-->
<script src="<?php echo base_url(); ?>application/assets/nerdamer/plugins/function-plot/function-plot.min.js"></script>
<script>
		var USE_GUPPY = false;

		$(function() {
				var textInput = $('#text-input'),
						guppyInput = $('#demo-input'),
						editorType = '',
						toggleSwitch = $('#input-switch');
				
				var useVisualInput = function() {
						textInput.hide();
						guppyInput.show();
						editorType = 'visual';
				};
				
				var setSwitchText = function(useText) {
						toggleSwitch.text('Use '+(useText || editorType)+' editor');
				};
				
				var useTextInput = function() {
						textInput.show();
						guppyInput.hide();
						editorType = 'text';
				};

				var chooseEditor =function(){
						if(!USE_GUPPY)
								useTextInput();
						else
								useVisualInput();
				};
				
				var initEditor = function() {
						setSwitchText(!USE_GUPPY ? 'visual' : 'text');
						chooseEditor();
				};
				
				var toggleEditor = function() {
						setSwitchText();
						chooseEditor();
				};
				//link the enter button    
				textInput.keypress(function(e) { 
						if(e.keyCode === 13) {
								$('#process-btn').click();
						}
				});
				
				//start the editor
				initEditor();
				
				toggleSwitch.click(function() {
						USE_GUPPY = !USE_GUPPY; //hit the switch
						toggleEditor();
				});
		});
</script>
<script src="<?php echo base_url(); ?>application/assets/nerdamer/js/demo.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script>
		//display the version of nerdamer being used
		$('#version').html(nerdamer.version());
		//load the list of supported functions
		var supported = nerdamer.supported().sort(),
				l = supported.length,
				supportlist = $('#supported-functions');
		var excluded = ['sort', 'setEquation', 'IF'];
		for(var i=0; i<supported.length; i++) {
				var name = supported[i];
				if(excluded.indexOf(name) === -1)
						supportlist.append($('<a href="./functions/'+name+'.html">'+name+'</a>'));
		}
</script>
<script type="text/javascript">
		var editor = CodeMirror.fromTextArea(document.getElementById("codemirror"), {
				matchBrackets: true,
				autoCloseBrackets: true,
				theme: 'neat'
			});
			
			editor.setSize(undefined, 75);

$('.CodeMirror').addClass('demo-input').attr('id', 'text-input');
</script>


    
</body>
</html>