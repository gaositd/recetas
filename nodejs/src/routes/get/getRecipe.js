// const { error } = require('console');
const { Router } = require('express');
const fs = require('fs');
const path = require('path');

const { map } = require('../../app');
const getIngredients = require('../post/discountIngredients');
const {
  NOINGREDIENTS,
  ERRORAPPEND,
  NORECIPES,
  SENDINGREDIENTS,
  PREPARINRECIPE,
} = require('../../../constants/constants');

const router = Router();

const recipePath = path.join(__dirname, '../../../json/recipes.json');
const recipes = JSON.parse(fs.readFileSync(recipePath, 'utf-8'));

const wherehouse = (randomRecipe) => {

  randomRecipe.ingredients.forEach(ingredient => {
    setTimeout(() => {
      console.log(`getting ingredient => ${ingredient}`);
    }, 2000);
  });

  randomRecipe[0].totalRecipes -= 1;
  alterRecipies = recipes.map(recipe => {
    if(recipe.id === randomRecipe[0].id){
      recipe = randomRecipe[0];
    }
  });

  //get All ingredients
  if(!getIngredients.discountIngredients(randomRecipe.ingredients)){
    console.log();
    res.send({
      status: 404,
      msg : NOINGREDIENTS,
    })
  };

  fs.appendFileSync(recipePath, alterRecipies, (errr) =>{
    errr ? console.log(`${ERRORAPPEND} => ${errr}`) : null;
  });
};


router.get('/getRecipe', async (req, res, next) => {
  const totalRecipes = recipes.length;
  if (totalRecipes === 0) {
    return res.status(404).json({ status: 404, msg: NORECIPES});
  }

  const randomIndex = Math.floor(Math.random() * totalRecipes);
  let randomRecipe = recipes[randomIndex];

  if(Object.keys(recipes).length === 0 || recipes.totalRecipes === 0){
    res.send({
      status:404,
      msg:`${NORECIPES} (${randomRecipe.name})`,
    })
  }

  wherehouse(randomRecipe);
  console.log(SENDINGREDIENTS);

  setTimeout(() =>{
    console.log(PREPARINRECIPE);
  }, 4000);

  res.status({
    status:200,
    recipes: randomRecipe,
  });
});


module.exports = router;