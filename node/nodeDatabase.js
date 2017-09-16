var mysql = require('mysql');

var con = mysql.createConnection({
  host: "qshare-mysql.cbdnvr3ldjvu.ca-central-1.rds.amazonaws.com",
  user: "team_a",
  password: "qtma_qshare",
  database : 'qshare_database',
  port     : '3306',
  debug    : true
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});