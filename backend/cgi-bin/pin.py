#!/usr/bin/python
import cgi, cgitb 
import MySQLdb 
#DB_connect
cgitb.enable()
print "Content-Type: text/html\n"
fs=cgi.FieldStorage()
p=fs.getvalue("p")
try:
	db=MySQLdb.connect("localhost","username","password","food")
	cursor=db.cursor()
	sql="SELECT `area` from row where input='%s';"%(str(p))
	cursor.execute(sql)
	ans=cursor.fetchone()
	print ans[0]
except:
	print "no"
