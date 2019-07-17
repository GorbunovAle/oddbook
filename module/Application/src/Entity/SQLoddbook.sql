/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  alexander
 * Created: 20.03.2019
 */
CREATE TABLE `nameapp` (     
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `appName` text NOT NULL,    
  `appDescription` text NOT NULL      
);

CREATE TABLE `catalogue` (     
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `appCatalogue` text NOT NULL,
  `appCatalogueDescription` text NOT NULL
);

CREATE TABLE `content` (     
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `appContent` text NOT NULL,
  `appContentDescription` text NOT NULL
);

CREATE TABLE `basket` (     
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `appBasket` text NOT NULL,
  `appBasketDescription` text NOT NULL
);

INSERT INTO nameapp(`appName`, `appDescription`) VALUES(
    'Лишняя книга', 'Здесь будут продаваться книги');

INSERT INTO catalogue(`appCatalogue`,
  `appCatalogueDescription`) VALUES(
    'Каталог', 'Здесь будет расположен каталог книг');

INSERT INTO content(`appContent`, `appContentDescription`) VALUES(
    'Содержимое', 'Здесь будет расположено содержимое выбранного отдела каталога');

INSERT INTO basket(`appBasket`, `appBasketDescription`) VALUES(
    'Корзина', 'Здесь будут расположены заказанные книги');

