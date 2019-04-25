## workflow

0?. docker search image

1. docker pull `image`
2. docker images
3. docker run `container`
4. docker ps -a
5. docker stop `container`
6. docker rm `dockerID`

## Docker Common Commands

### remove all running containers

>docker rm $(docker ps -a -q -f status=exited)

OR
>docker container prune

### Remove unused data

docker system prune

### show port map

>docker port containerName/alias

## Docker run

* -d detech mode, which can `leave the terminal alone`
* -P --publish-all map all useing port 所有已用端口随机映射
* -p manual port map exp: `docker run -p 8888:80 CONTAINER`
* -name `alias` a new name for origin container name

## Dockerfile

>It's a simple way to automate the image creation process.

* detailed sample Link [juejin.im | CN](https://juejin.im/post/5a1bd8a36fb9a0450f21a966)

### Create steps

* spcific a base image with `FROM`
* spcific running port with `EXPOSE`
* runing the application, usually with `CMD`(unique)

### Sample

```shell
FROM python:3-onbuild
EXPOSE 5000
CMD ["python", "./index.py"]
```

### Build

set current folder as building image
* docker build -t USERNAME/imgName `.`

`USERNAME` is the name you register in `DockerHub`

## Deploy(push)

docker push USERNAME/imgName

* PS: docker login -u USERNAME at 1st time.

## .dockerignore

very similar with gitignore.
When using git, add `.git` && `.gitignore`