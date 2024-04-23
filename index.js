const server = require('./src/app');

const PORT = process.env.PORT || 3011;

server.listen(`${PORT}`, () => {
  console.log(`listening at ${PORT}`);
});