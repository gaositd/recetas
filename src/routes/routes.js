const { Router } = require('express');
const router = Router();

router.use('/', (req, res) => {
    res.send("<h1>Hola Mundo mundial</h1>")
  });

  module.exports = router;