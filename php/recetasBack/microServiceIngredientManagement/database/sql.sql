/*tables create with phpMyadmin*/
CREATE TABLE laravel.ingredients (
	Id varchar(32) NOT NULL PRIMARY KEY,
	IngredientName varchar(255) NOT NULL,
	QuantityAvailable decimal(10,2) NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE laravel.buyIngredients (
    id varchar(32) NOT NULL PRIMARY KEY,
    ingredient_id varchar(32),
    quantity DECIMAL(10,2) NOT NULL,
    buy_date DATE NOT NULL,
    FOREIGN KEY (ingredient_id) REFERENCES laravel.ingredients(id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;