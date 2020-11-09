FROM mysql:latest
COPY ./sql/ /docker-entrypoint-initdb.d/
CMD ["mysqld"]
EXPOSE 3306
