FUNCTION admin_auth (p_username IN VARCHAR2, p_password IN VARCHAR2)
RETURN BOOLEAN
AS
my_user NUMBER := 0;
BEGIN
SELECT 1 INTO my_user FROM admin
WHERE UPPER(email) = UPPER(p_username)
AND PASSWORD = p_password
;
RETURN TRUE;
EXCEPTION
WHEN NO_DATA_FOUND THEN
RETURN FALSE;
END admin_auth;