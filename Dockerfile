FROM ubuntu:22.04

WORKDIR /project

ENV PATH="/usr/local/go/bin:${PATH}" \
    GOPATH="/usr/local/go"

RUN apt-get update && \
    apt-get upgrade --yes && \
    apt-get install --yes curl unzip && \
    curl -LO https://github.com/protocolbuffers/protobuf/releases/download/v25.1/protoc-25.1-linux-x86_64.zip && \
    unzip protoc-25.1-linux-x86_64.zip -d /usr/local bin/protoc && \
    unzip protoc-25.1-linux-x86_64.zip -d /usr/local include/* && \
    rm protoc-25.1-linux-x86_64.zip && \
    curl -LO https://go.dev/dl/go1.25.4.linux-amd64.tar.gz && \
    tar -C /usr/local -xzf go1.25.4.linux-amd64.tar.gz && \
    rm -rf go1.25.4.linux-amd64.tar.gz && \
    go install google.golang.org/protobuf/cmd/protoc-gen-go@v1.36.10

CMD protoc \
    --proto_path=schema/ \
    --php_out=php/ \
    --go_out=go/ \
    $(find schema -name '*.proto')
