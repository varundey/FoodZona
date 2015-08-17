#!/usr/bin/python
import cgi, cgitb 
import MySQLdb
import json
#DB_connect
cgitb.enable()
final=[]
print "Content-Type: text/html\n"
fs=cgi.FieldStorage()
p=fs.getvalue('a')
db=MySQLdb.connect("localhost","username","password","food")
cursor=db.cursor()
if int(p)==2:
	sql = "SELECT * FROM `delicious`"
	cursor.execute(sql)
	results = cursor.fetchall()
elif int(p)==1:
	sql = "SELECT * FROM `punjabi dhaba`"
	cursor.execute(sql)
	results = cursor.fetchall()
for row in results:
	dic={}
	dic["item"]=row[0]
	dic["price"]=row[1]
	final.append(dic)
f=[{"ans":final}]
final=json.dumps(f)
print final
cursor.close()
db.close()
