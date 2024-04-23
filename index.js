// const express = require('express');
// require('dotenv').config;
// const app = express();


// port = process.env.PORT || 3011;
// app.get('/', (req, res) => {
//   res.send("<h1>Hola Mundo mundial</h1>")
// });

// app.listen(port, () =>{
//   console.log(`Hola mundo mundial corriendo en el puerto ${port}`);
// });

const server = require('./src/app');

const PORT = process.env.PORT || 3011;

conn.sync({ force: true }).then(() => {
  server.listen(`${PORT}`, () => {
    console.log(`listening at ${PORT}`); // eslint-disable-line no-console
  });
});