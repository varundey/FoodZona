#!/usr/bin/python
import cgi, cgitb 
import MySQLdb 
#DB_connect
cgitb.enable
db=MySQLdb.connect("localhost","root","123","food")
cursor=db.cursor()



sql = "SELECT * FROM `delicious`"
cursor.execute(sql)
results = cursor.fetchall()
for row in results:
	print row[0]
	print row[1]
cursor.close()
db.close()
