#
# https://github.com/docker-library/php/blob/master/8.1/alpine3.15/cli/Dockerfile

FROM php:8.1-cli-alpine

# Update repo and install some utilites
RUN set -xe \
    && apk update \
    && apk upgrade \
    && apk --no-cache add htop mc cmake gdb


RUN set -xe \
    && apk add --no-cache \
		autoconf \
		dpkg-dev dpkg \
		file \
		g++ \
		gcc \
		libc-dev \
		make \
		pkgconf \
		re2c
