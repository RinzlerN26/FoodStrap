CREATE DATABASE IF NOT EXISTS Food_Db; 
USE Food_Db;


CREATE TABLE IF NOT EXISTS Food_Items (
  RName varchar(191) NOT NULL,
  PName varchar(191) NOT NULL,
  Price double(10,2) unsigned NOT NULL,
  Code varchar(40) NOT NULL,
  Food_Type varchar(40) NOT NULL,
  Image_Url varchar(191) NOT NULL,
  PRIMARY KEY (Code)
);

INSERT INTO Food_Items(RName,PName,Price,Code,Food_Type,Image_Url) VALUES
	  ("Tea Point","Desi Chai",119.00,"TPB01","B","Images/TPB01.jfif"),
    ("Tea Point","Gur Wali Chai",139.00,"TPB02","B","Images/TPB02.jfif"),
    ("Tea Point","Lemon Grass Chai",129.00,"TPB03","B","Images/TPB03.jfif"),
    ("Tea Point","Kulhad Chai",129.00,"TPB04","B","Images/TPB04.jfif"),
    ("Tea Point","Vegan Chai",189.00,"TPB05","B","Images/TPB05.jfif"),
    ("Tea Point","Honey Ginger Lemon",299.00,"TPB06","B","Images/TPB06.jfif"),
    ("Tea Point","Methi Matthi",106.25 ,"TPS01","S","Images/TPS01.jfif"),
    ("Tea Point","Gur Para",113.33 ,"TPS02","S","Images/TPS02.jfif"),
    ("Tea Point","Banana Walnut Cake",159.00,"TPS03","S","Images/TPS03.jfif"),
    ("Tea Point","Moist Chocolate Cake",139.00 ,"TPS04","S","Images/TPS04.jfif"),
    ("Tea Point","Veggies Delight ",209.00 ,"TPS05","S","Images/TPS05.jfif"),
    ("Tea Point","Bhelpuri",115.00,"TPS06","S","Images/TPS06.jfif"),
	  ("Tea Point","Matar Kulcha",209.00 ,"TPMP01","MP","Images/TPMP01.jfif"),
    ("Tea Point","Pav Bhaji",219.00 ,"TPMP02","MP","Images/TPMP02.jfif"),
    ("Tea Point","Paneer Loaded Open Paratha",275.00 ,"TPMP03","MP","Images/TPMP03.jfif"),
    ("Tea Point","Homestyle Aloo Sandwich",149.00 ,"TPMP04","MP","Images/TPMP04.jfif"),
    ("Tea Point","Poha",129.00 ,"TPMP05","MP","Images/TPMP05.jfif"),
    ("Tea Point","Homestyle Upma",149.00 ,"TPMP06","MP","Images/TPMP06.jfif"),
    ("Tea Point","Chilli Cheese Toast",179.00 ,"TPSO01","SO","Images/TPSO01.jfif"),
    
    
    ("Aggarwal","Pepsi",57.00,"AGB01","B","Images/AGB01.jfif"),
    ("Aggarwal","Aam Panna",94.29,"AGB02","B","Images/AGB02.jfif"),
    ("Aggarwal","Masala Shikanji",95.00,"AGB03","B","Images/AGB03.jfif"),
    ("Aggarwal","Nutty Butterscotch Shake",199.00,"AGB04","B","Images/AGB04.jfif"),
    ("Aggarwal","Iced Tea",109.00,"AGB05","B","Images/AGB05.jfif"),
    ("Aggarwal","Cold Coffee Frappe",189.00 ,"AGB06","B","Images/AGB06.jfif"),
    ("Aggarwal","Gulab Jamun", 170.00,"AGS01","S","Images/AGS01.jfif"),
    ("Aggarwal","Kaju Khoya",122.00,"AGS02","S","Images/AGS02.jfif"),
    ("Aggarwal","Jalebi Rabri ",120.00,"AGS03","S","Images/AGS03.jfif"),
    ("Aggarwal","Kalakand",112.00,"AGS04","S","Images/AGS04.jfif"),
    ("Aggarwal","Khoya Roll",115.00,"AGS05","S","Images/AGS05.jfif"),
    ("Aggarwal","Aloo Chaat",102.00,"AGS06","S","Images/AGS06.jfif"),
    ("Aggarwal","Masala Dosa ",179.00,"AGMP01","MP","Images/AGMP01.jfif"),
    ("Aggarwal","Chowmein",133.00,"AGMP02","MP","Images/AGMP02.jfif"),
    ("Aggarwal","Shahi Paneer Rice Bowl",122.00,"AGMP03","MP","Images/AGMP03.jfif"),
    ("Aggarwal","Home Quarantine Thali ",112.00  ,"AGMP04","MP","Images/AGMP04.jfif"),
    ("Aggarwal","Idli Sambhar",160.00,"AGMP05","MP","Images/AGMP05.jfif"),
    ("Aggarwal","Plain Dosa ",168.00,"AGMP06","MP","Images/AGMP06.jfif"),
    ("Aggarwal","Butterscotch Cake",233.00,"AGSS01","SO","Images/AGSO01.jfif"),

    ("Chawla","Desi Chai",120.00,"CHB01","B","Images/TPB01.jfif"),
    ("Chawla","Gur Wali Chai",139.00,"CHB02","B","Images/TPB02.jfif"),
    ("Chawla","Lemon Grass Chai",128.00,"CHB03","B","Images/TPB03.jfif"),
    ("Chawla","Kulhad Chai",127.00,"CHB04","B","Images/TPB04.jfif"),
    ("Chawla","Vegan Chai",189.00,"CHB05","B","Images/TPB05.jfif"),
    ("Chawla","Honey Ginger Lemon",145.00,"CHB06","B","Images/TPB06.jfif"),
    ("Chawla","Methi Matthi",112.00,"CHS01","S","Images/TPS01.jfif"),
    ("Chawla","Gur Para",129.00,"CHS02","S","Images/TPS02.jfif"),
    ("Chawla","Banana Walnut Cake",146.00,"CHS03","S","Images/TPS03.jfif"),
    ("Chawla","Moist Chocolate Cake",121.00,"CHS04","S","Images/TPS04.jfif"),
    ("Chawla","Veggies Delight",111.00,"CHS05","S","Images/TPS05.jfif"),
    ("Chawla","Bhelpuri",109.00,"CHS06","S","Images/TPS06.jfif"),
    ("Chawla","Matar Kulcha",100.00,"CHMP01","MP","Images/TPMP01.jfif"),
    ("Chawla","Pav Bhaji",134.00,"CHMP02","MP","Images/TPMP02.jfif"),
    ("Chawla","Paneer Loaded Open Paratha",118.00,"CHMP03","MP","Images/TPMP03.jfif"),
    ("Chawla","Homestyle Aloo Sandwich",121.00,"CHMP04","MP","Images/TPMP04.jfif"),
    ("Chawla","Poha",123.00,"CHMP05","MP","Images/TPMP05.jfif"),
    ("Chawla","Homestyle Upma",132.00,"CHMP06","MP","Images/TPMP06.jfif"),
    ("Chawla","Chilli Cheese Toast",109.00,"CHSO06","SO","Images/TPSO01.jfif"),

  
    ("Bikaner","Pepsi",59.00,"BIB01","B","Images/AGB01.jfif"),
    ("Bikaner","Aam Panna",109.00,"BIB02","B","Images/AGB02.jfif"),
    ("Bikaner","Masala Shikanji",62.00,"BIB03","B","Images/AGB03.jfif"),
    ("Bikaner","Nutty Butterscotch Shake",118.00,"BIB04","B","Images/AGB04.jfif"),
    ("Bikaner","Iced Tea",170.00,"BIB05","B","Images/AGB05.jfif"),
    ("Bikaner","Cold Coffee Frappe",143.00,"BIB06","B","Images/AGB06.jfif"),
    ("Bikaner","Gulab Jamun",121.00,"BIS01","S","Images/AGS01.jfif"),
    ("Bikaner","Kaju Khoya",117.00,"BIS02","S","Images/AGS02.jfif"),
    ("Bikaner","Jalebi Rabri",108.00,"BIS03","S","Images/AGS03.jfif"),
    ("Bikaner","Kalakand",110.00,"BIS04","S","Images/AGS04.jfif"),
    ("Bikaner","Khoya Roll",130.00,"BIS05","S","Images/AGS05.jfif"),
    ("Bikaner","Aloo Chaat",174.00,"BIS06","S","Images/AGS06.jfif"),
    ("Bikaner","Masala Dosa",131.00,"BIMP01","MP","Images/AGMP01.jfif"),
    ("Bikaner","Chowmein",121.00,"BIMP02","MP","Images/AGMP02.jfif"),
    ("Bikaner","Shahi Paneer Rice Bowl",122.00,"BIMP03","MP","Images/AGMP03.jfif"),
    ("Bikaner","Home Quarantine Thali",151.00,"BIMP04","MP","Images/AGMP04.jfif"),
    ("Bikaner","Idli Sambhar",133.00,"BIMP05","MP","Images/AGMP05.jfif"),
    ("Bikaner","Plain Dosa",104.00,"BIMP06","MP","Images/AGMP06.jfif"),
    ("Bikaner","Butterscotch Cake",134.00,"BISO01","SO","Images/AGSO01.jfif"),



    ("Chanda Food","Desi Chai",119.00,"CFB01","B","Images/TPB01.jfif"),
    ("Chanda Food","Gur Wali Chai",139.00,"CFB02","B","Images/TPB02.jfif"),
    ("Chanda Food","Kulhad Chai",127.00,"CFB03","B","Images/TPB03.jfif"),
    ("Chanda Food","Lemon Grass Chai",128.00,"CFB04","B","Images/TPB04.jfif"),
    ("Chanda Food","Vegan Chai",189.00,"CFB05","B","Images/TPB05.jfif"),
    ("Chanda Food","Honey Ginger Lemon",145.00,"CFB06","B","Images/TPB06.jfif"),
    ("Chanda Food","Methi Matthi",112.00,"CFS01","S","Images/TPS01.jfif"),
    ("Chanda Food","Banana Walnut Cake",146.00,"CFS02","S","Images/TPS02.jfif"),
    ("Chanda Food","Moist Chocolate Cake",121.00,"CFS03","S","Images/TPS03.jfif"),
    ("Chanda Food","Veggies Delight",111.00,"CFS04","S","Images/TPS04.jfif"),
    ("Chanda Food","Bhelpuri",109.00,"CFS05","S","Images/TPS05.jfif"),
    ("Chanda Food","Matar Kulcha",100.00,"CFS06","S","Images/TPS06.jfif"),
    ("Chanda Food","Pav Bhaji",134.00,"CFMP01","MP","Images/TPMP01.jfif"),
    ("Chanda Food","Paneer Loaded Open Paratha",118.00,"CFMP02","MP","Images/TPMP02.jfif"),
    ("Chanda Food","Homestyle Aloo Sandwich",121.00,"CFMP03","MP","Images/TPMP03.jfif"),
    ("Chanda Food","Mom Poha",123.00,"CFMP04","MP","Images/TPMP04.jfif"),
    ("Chanda Food","Homestyle Upma",132.00,"CFMP05","MP","Images/TPMP05.jfif"),
    ("Chanda Food","Homestyle Aloo Sandwich",121.00,"CFMP06","MP","Images/TPMP06.jfif"),
    ("Chanda Food","Chilli Cheese Toast",109.00,"CFSO01","SO","Images/TPSO01.jfif"),
    
    

    ("Goli Vada Pav","Pepsi",61.00,"GVB01","B","Images/AGB01.jfif"),
    ("Goli Vada Pav","Aam Panna",109.00,"GVB02","B","Images/AGB02.jfif"),
    ("Goli Vada Pav","Masala Shikanji",62.00,"GVB03","B","Images/AGB03.jfif"),
    ("Goli Vada Pav","Nutty Butterscotch Shake",118.00,"GVB04","B","Images/AGB04.jfif"),
    ("Goli Vada Pav","Iced Tea",170.00,"GVB05","B","Images/AGB05.jfif"),
    ("Goli Vada Pav","Cold Coffee Frappe",143.00,"GVB06","B","Images/AGB06.jfif"),
    ("Goli Vada Pav","Gulab Jamun",121.00,"GVS01","S","Images/AGS01.jfif"),
    ("Goli Vada Pav","Kaju Khoya",117.00,"GVS02","S","Images/AGS02.jfif"),
    ("Goli Vada Pav","Jalebi Rabri",108.00,"GVS03","S","Images/AGS03.jfif"),
    ("Goli Vada Pav","Kalakand",110.00,"GVS04","S","Images/AGS04.jfif"),
    ("Goli Vada Pav","Khoya Roll",130.00,"GVS05","S","Images/AGS05.jfif"),
    ("Goli Vada Pav","Aloo Chaat",174.00,"GVS06","S","Images/AGS06.jfif"),
    ("Goli Vada Pav","Masala Dosa",131.00,"GVMP01","MP","Images/AGMP01.jfif"),
    ("Goli Vada Pav","Chowmein",121.00,"GVMP02","MP","Images/AGMP02.jfif"),  
    ("Goli Vada Pav","Shahi Paneer Rice Bowl",122.00,"GVMP03","MP","Images/AGMP03.jfif"),  
    ("Goli Vada Pav","Home Quarantine Thali",151.00,"GVMP04","MP","Images/AGMP04.jfif"),  
    ("Goli Vada Pav","Idli Sambhar",133.00,"GVMP05","MP","Images/AGMP05.jfif"),  
    ("Goli Vada Pav","Plain Dosa",104.00,"GVMP06","MP","Images/AGMP06.jfif"),
    ("Goli Vada Pav","Butterscotch Cake",134.00,"GVSO01","MP","Images/AGSO01.jfif");

CREATE TABLE IF NOT EXISTS Food_Desc (
  Id varchar(191) NOT NULL,
  Descrip_Food varchar(500) NOT NULL,
  PRIMARY KEY (Id)
);  
INSERT INTO Food_Desc(Id,Descrip_Food) VALUES ("TP","Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
,("AG","Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
,("CH","Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
,("BI","Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
,("CF","Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")
,("GV","Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");

CREATE TABLE IF NOT EXISTS Food_Users (
  email varchar(191) NOT NULL,
  pass varchar(191) NOT NULL,
  PRIMARY KEY (email)
);  
 