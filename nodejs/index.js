const server = require('./src/app');
const LISTEN = require('./constants/constants')

const PORT = process.env.PORT || 3011;

server.listen(`${PORT}`, () => {
  console.log(`${LISTEN}${PORT}`);
});