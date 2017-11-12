README
Project Name: ByteBook
Allows you to save recipes from the Spoonacular Database in an online cookbook. 
-> Main function a search that uses common words to search the database for any certain recipe. Once you recieve the the results you can click on them to recieve more information on the recipe. This includes a small summary, ingredients, and recipe, and nutrition information if they are available. 
---> For the ingredients, clicking on any certian ingredient will bring up substitutes. 
---> The user can then click the star button to save a recipe, with a simple comment. Using a FireBase API to check if the user has logged in, and if they are saves the recipe to their account. Otherwise, the user is prompted to login. This will not save the recipe to their account if they already have it saved.

-> See saved recipes. Clicking the My Recipe's tab in the Navigation Bar will send the user to their saved recipes if logged in. They can view their saved recipes and change the comments or delete recipes.
---> A search function for your recipes