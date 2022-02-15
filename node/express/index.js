const express = require('express')
const process = require('process')

const app = express()
process.on('SIGINT',() => {
 console.log(" This app has been interrupted")
 process.exit(0)
})

process.on('SIGTERM',() => {
    console.log(" This app has been stopped")
    process.exit(0)
   })
app.get('/', function (req, res) {
  res.send('Hello World this is node.js server Running from node!!!!!!!!!!!!!!')
//   res.send('Hello World this is node.js server AmmaR is here from node')
})

app.listen(3000)