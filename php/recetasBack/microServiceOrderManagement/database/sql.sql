/*tables create with phpMyadmin*/
CREATE TABLE laravel.ingredients (
	id varchar(32) NOT NULL PRIMARY KEY,
	ingredientName varchar(255) NOT NULL,
	quantityAvailable varchar(100) NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE laravel.buyIngredients (
    id varchar(32) NOT NULL PRIMARY KEY,
    ingredient_id varchar(32),
    cantidad DECIMAL(10,2) NOT NULL,
    fecha_compra DATE NOT NULL,
    FOREIGN KEY (ingredient_id) REFERENCES laravel.ingredients(id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;