<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nerdamer | Demo</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/site.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/demo.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./img/favicon.png">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="./plugins/highlightjs/styles/vs.css"> 
    <script src="./plugins/highlightjs/highlight.pack.js"></script> 
    <link rel="stylesheet" href="plugins/guppy/build/guppy.min.css">
    <link rel="stylesheet" href="plugins/guppy/build/guppy-default.min.css">
    <link rel="stylesheet" href="plugins/guppy/build/guppy-default-osk.min.css">
    <link rel="stylesheet" href="./plugins/font-awesome/css/font-awesome.min.css">
    <!--codemirror -->
    <link rel="stylesheet" href="./plugins/codemirror/codemirror.css">
    
    <script src="./plugins/codemirror/codemirror.js"></script> 
<!--    <script src="./plugins/codemirror/javascript/javascript.js"></script> -->
    <script src="./plugins/codemirror/addon/closebrackets.js"></script> 
    <script src="./plugins/codemirror/addon/matchbrackets.js"></script> 
    <script src="./plugins/codemirror/addon/active-line.js"></script> 
    <link rel="stylesheet" href="./plugins/codemirror/theme/neat.css">
    <!-- katex -->
    <script src="./plugins/katex/katex.min.js"></script> 
    <link rel="stylesheet" href="./plugins/katex/katex.min.css">
    <!-- c3 -->
    <!--<link rel="stylesheet" href="./plugins/c3/c3.min.css">-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-58729441-1', 'auto');
        ga('send', 'pageview');
    </script>
    <link href="css/katex-overflow-fix.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./"><img src="./img/logo.png" alt="Nerdamer"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="./">Home</a>
                    </li>
                    <li>
                        <a href="./documentation.html">Documentation</a>
                    </li>
                    <li class="active">
                        <a  href="./demo.html">Demo</a>
                    </li>
                    <li>
                        <a href="./quickstart.html">Quick Start</a>
                    </li>
                    <li class="visible-sm visible-xs"><a href="./extending_core.html">Extending the core</a></li>
                    <li class="visible-sm visible-xs"><a href="./digging_deeper.html">Digging deeper</a></li>
                    <li class="visible-sm visible-xs"><a href="./examples.html">Examples</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-9">
                <h1>Demo (dev mode)</h1>
                <h5 class="text-muted">Using nerdamer version: <strong><span id="version"></span></strong></h5>
                <h5 style="color: #FF0000">Uses libraries from the dev branch of repository on Github</h5>
                <div class="alert alert-danger demo-alert">
                    <!--<button type="button" class="close" data-dismiss="alert">&times;</button>-->
<!--                    Make sure to enter multiplication explicitly. e.g. <strong>use 3*x not 3x or 2*(x+1) not 2(x+1);</strong>-->
                    <p>
                        <a class="collapse-a" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                          Click show/hide instructions and supported functions
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-block">
                            <h5>Supported functions</h5>
                            <div id="supported-functions"></div>
                            <h5>Instructions</h5>
                            <p>
                                To enter an expression just type it in the box below with the format: expression;variable=value e.g. cos(x)+1,x=PI<br/>
                                To define a function type in f(parameters):=function_body, e.g. f(x):=tan(x)/x^2. <br/>
                                To define a variable type in variable:value, e.g. x:5 <br/>
                                To reload a function to the editor click the reload button next to the calculated expression.<br/>
                                To plot the a function click the plot button next to the calculated expression. 
                            </p>
                        </div>
                    </div>
                </div>
<!--                <div class="text-right">
                    <a href="javascript:void(0)" id="input-switch"><small>Use visual editor</small></a>
                </div>-->
                
                <div id="nerdamer-demo">
                    <div id="demo-input" class="demo-input" style="display: none;"></div>
                    <!--<input id="text-input" class="demo-input" type="text" placeholder="Text editor. Enter expression here"/>-->
                    <textarea id="codemirror"></textarea>
                </div>
                <button class="btn btn-primary" id="process-btn">ENTER</button>
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
                
                <!-- Modal -->
                <div class="modal fade" id="alertModal" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body"></div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <footer>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p>Copyright &copy; Nerdamer.com <span class="date"></span></p>
                        </div>
                    </div>
                    <!-- /.row -->
                </footer>
            </div>
            <div class="col-sm-3 ">
                <ul class="side-bar hidden-sm hidden-xs">
                    <li><a href="./extending_core.html">Extending the core</a></li>
                    <li><a href="./digging_deeper.html">Digging deeper</a></li>
                    <li><a href="./examples.html">Examples</a></li>
                </ul>     
                <h3>Demo Credits</h3>
                <ul class="credits">
                    <!--<li><a href="http://daniel3735928559.github.io/guppy/" id="guppy-link">Visual editing by Guppy.js</a></li>-->
                    <li><a href="http://mauriciopoppe.github.io/function-plot/">Plotting with Function-plot.js</a></li>
                    <li><a href="http://codemirror.net/">Text input with CodeMirror</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('.date').html(new Date().getFullYear());
    </script>
    <script src="https://rawgit.com/jiggzson/nerdamer/dev/nerdamer.core.js"></script>
    <script src="https://rawgit.com/jiggzson/nerdamer/dev/Algebra.js"></script>
    <script src="https://rawgit.com/jiggzson/nerdamer/dev/Calculus.js"></script>
    <script src="https://rawgit.com/jiggzson/nerdamer/dev/Extra.js"></script>
    <script src="https://rawgit.com/jiggzson/nerdamer/dev/Solve.js"></script>
<!--    <script src="./js/nerdamer.all.min.js"></script>-->
    <script src="plugins/guppy/build/guppy.min.js"></script>
    <script src="plugins/guppy/build/guppy_osk.js"></script>
    <script src="./plugins/d3/d3.min.js"></script>
    <!--<script src="./plugins/c3/c3.min.js"></script>-->
    <script src="./plugins/function-plot/function-plot.min.js"></script>
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
    <script src="./js/demo.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script>
        //display the version of nerdamer being used
        $('#version').html(nerdamer.version());
        //load the list of supported functions
        var supported = nerdamer.supported().sort(),
            l = supported.length,
            supportlist = $('#supported-functions');
        var excluded = ['IF', 'setEquation'];
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
