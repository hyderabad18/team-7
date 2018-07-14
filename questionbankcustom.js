var request = require('request');

request({url: 'https://opentdb.com/api.php?amount=10&category=21&difficulty=easy&type=multiple', json: true}, function(err,res, json1) {
  if (err) {
    throw err;
  }
 console.log(json1);
  var c=JSON.stringify(json1);
  console.log(c);
const message;

var c2=c.slice(29);
console.log(c2);
const fields = ['category', 'type', 'difficulty','question','correct_answer','incorrect_answers'];

const Json2csvParser = require('json2csv').Parser;

const json2csvParser = new Json2csvParser({fields});

const csv = json2csvParser.parse(c2);
 
console.log(csv);

for (category in c2){
	console.log(category);
}

});