FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD=123
ENV TZ=America/Manaus
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone