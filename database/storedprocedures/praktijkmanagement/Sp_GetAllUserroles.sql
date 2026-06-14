USE breezedemo;

DROP PROCEDURE IF EXISTS SP_GetAllUserroles;

DELIMITER $$

CREATE PROCEDURE SP_GetAllUserroles()
BEGIN
    SELECT 'assistent' AS rolename
    UNION ALL
    SELECT 'mondhygienist'
    UNION ALL
    SELECT 'patient'
    UNION ALL
    SELECT 'praktijkmanagement'
    UNION ALL
    SELECT 'tandarts';
END$$

DELIMITER ;
