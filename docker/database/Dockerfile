FROM mysql:latest
COPY ./sql/ /docker-entrypoint-initdb.d/
#@todo
#https://medium.com/better-programming/customize-your-mysql-database-in-docker-723ffd59d8fb
# xnt klasörünün yetkisi mysql
CMD ["mysqld"]
EXPOSE 3306
