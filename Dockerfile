FROM centos:latest
 
MAINTAINER Romulo <romulosantos100@gmail.com>
 
# RUN apt-get update
# RUN apt-get -y upgrade
 
# Install apache, PHP, and supplimentary programs. curl and lynx-cur are for debugging the container.
# RUN DEBIAN_FRONTEND=noninteractive apt-get -y install apache2 libapache2-mod-php5 php5-mysql php5-gd php-pear php-apc php5-curl curl lynx-cur

RUN sudo yum install httpd