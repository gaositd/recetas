const { Router } = require('express');
const { route } = require('../app');
const getRecipeRouter = require('./get/getRecipe');
const { ERRORPAGE } = require('../../constants/constants');

const router = Router();

router.use('/getRecipe', getRecipeRouter);//get ramdom recipe

router.use('/', (req, res) => {
    res.send(ERRORPAGE)
  });
  module.exports = router;