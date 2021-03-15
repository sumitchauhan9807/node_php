var cp = require("child_process");

cp.exec("php /home/sumit/Desktop/student/api/app.php", {cwd: '../api'}, function(error,stdout,stderr){

  console.log(JSON.parse(stdout))
});