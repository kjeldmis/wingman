CREATE TABLE Permissions 
(
Users_ID INT NOT NULL ,
addLocationType TINYINT(1) ,
assignRights TINYINT(1) ,
createAdmin TINYINT(1) ,
createBlade TINYINT(1) ,
createLocation TINYINT(1) ,
createPlantOrder TINYINT(1) ,
createOrderMove TINYINT(1) ,
createUser TINYINT(1) ,
searchBlade TINYINT(1) ,
deleteBlade TINYINT(1) ,
deactivateUserLogin TINYINT(1) ,
activeUser TINYINT(1) 
);