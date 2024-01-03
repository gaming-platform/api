FROM ubuntu:22.04

WORKDIR /project

RUN apt-get update && \
    apt-get upgrade --yes && \
    apt-get install --yes curl unzip && \
    curl -LO https://github.com/protocolbuffers/protobuf/releases/download/v25.1/protoc-25.1-linux-x86_64.zip && \
    unzip protoc-25.1-linux-x86_64.zip -d /usr/local bin/protoc && \
    unzip protoc-25.1-linux-x86_64.zip -d /usr/local include/* && \
    rm protoc-25.1-linux-x86_64.zip

CMD protoc \
    --proto_path=schema/ \
    --php_out=php/ \
    $(find schema -name '*.proto')
