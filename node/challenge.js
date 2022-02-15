const readline = require('readline').createInterface({
    input: process.stdin,
    output: process.stdout
  });
  const fs = require('fs');
  
  readline.question('what is the file name:', name => {
    readline.question('what is the file containt:', content  => {
        fs.writeFile(`${name}.txt`,`${content} `, function(err) {
            if(err) {
                return console.log(err);
            }
            console.log('File was created')
            readline.close()
        })
    })
});
    