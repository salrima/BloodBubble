import pymysql

# database connection
connection = pymysql.connect(host="localhost", port=8889, user="root", passwd="root", database="bloodbank")cursor = connection.cursor()
# some other statements  with the help of cursor
connection.close()