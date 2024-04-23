const { Router } = require('express');
const { route } = require('../app');
const getRecipeRouter = require('./get/getRecipe');

const router = Router();

router.use('/getRecipe', getRecipeRouter);//get ramdom recipe

router.use('/', (req, res) => {
    res.send("<h1>Page Error, check your path</h1>")
  });
  module.exports = router;