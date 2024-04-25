const fs = require('fs');
const path = require('path');
const { ERRORAPPEND } = require('../../../constants/constants');

const ingredientsPath = path.join(__dirname, '../../../json/ingredients.json');
const ingredients =  JSON.parse(fs.readFileSync(ingredientsPath, 'utf-8'));

const discountIngredients = (Allngredients) => {
  let ingredientFlag = false
  Allngredients.forEach(ingredient => {
    const alterIngredients = ingredients.map(alterIngredient => {
      if(ingredient === alterIngredient.name){
        alterIngredient.quantity -= 1;
        ingredientFlag = true;
      }
    });
  });
  fs.appendFileSync(ingredientsPath, alterIngredients, (errr) =>{
    errr ? console.log(`${ERRORAPPEND} => ${errr}`) : null;
  });
  return ingredientFlag;
};

module.exports = discountIngredients;