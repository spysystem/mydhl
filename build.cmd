del /s /q docs lib test

docker pull spysystem/openapi-generator
docker run --rm -v %cd%:/local spysystem/openapi-generator:th-spy-master generate -i /local/mydhl.yaml -l php -o /local -c /local/config.json

git add docs/*
git add lib/*
git add test/*
