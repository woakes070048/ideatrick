//variable
var express = require('express');
var app = express();

var path = require('path');
var favicon = require('serve-favicon');
//var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require("body-parser");
var http = require('http').Server(app);
var partial = require('express-partial');

// var fileStreamRotator = require('file-stream-rotator');
// var fs = require('fs');
// var logDirectory = __dirname + '/log'
//app.set

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');
app.use(favicon(__dirname + '/public/favicon.ico'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded());
app.use(cookieParser());
app.use(partial());
app.use(express.static(path.join(__dirname, 'public')));

// fs.existsSync(logDirectory) || fs.mkdirSync(logDirectory)
// create a rotating write stream
// var accessLogStream = fileStreamRotator.getStream({
//  filename: logDirectory + '/access-%DATE%.log',
//  frequency: 'daily',
//  verbose: false
// });

// setup the logger
//app.use(logger('combined', {stream: accessLogStream}))
/*route declaration*/

app.get('/',function(req,res){
	res.render('home')
});

app.get('/login',function(req,res){
	res.render('login')
});


app.get('/404', function(req, res, next){
	next();
});

app.get('/403', function(req, res, next){
  var err = new Error('not allowed!');
  err.status = 403;
  next(err);
});

app.get('/500', function(req, res, next){
  next(new Error('keyboard cat!'));
});

app.use(function(req, res, next){
  res.status(404);
  if (req.accepts('html')) {
    res.render('404', { url: req.url });
    return;
  }
  
  if (req.accepts('json')) {
    res.send({ error: 'Not found' });
    return;
  }
  res.type('txt').send('Not found');
});

app.use(function(err, req, res, next){
  res.status(err.status || 500);
  res.render('500', { error: err });
});

http.listen(3333, function(){
  console.log('listening on *:3333');
});
