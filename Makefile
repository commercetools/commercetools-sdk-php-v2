VRAP_VERSION := "1.0.0-20200716101307"
SHELL := /bin/bash
.PHONY: analyse test_unit check_pending

build: codegen_install generate

generate: generate_base generate_api_sdk prettify analyse test_unit

generate_api_sdk: generate_api composer_install test_unit generate_api_test
generate_import_sdk: generate_import composer_install test_unit generate_import_test
generate_ml_sdk: generate_ml composer_install test_unit generate_ml_test

codegen_install:
	export VRAP_VERSION=$(VRAP_VERSION) && curl -o- -s https://raw.githubusercontent.com/vrapio/rmf-codegen/master/scripts/install.sh | bash

composer_install:
	composer install --no-ansi --no-interaction --no-progress --no-suggest

generate_base:
	cd lib ; make RAML_FILE=../$(API_RAML) generate_base

generate_api:
	cd lib ; make LIB_NAME=api RAML_FILE=../$(API_RAML) generate_sdk

generate_api_test:
	cd lib ; make LIB_NAME=api RAML_FILE=../$(API_RAML) generate_sdk_test

generate_import:
	cd lib; make LIB_NAME=import RAML_FILE=../$(IMPORT_RAML) generate_sdk

generate_import_test:
	cd lib ; make LIB_NAME=import RAML_FILE=../$(IMPORT_RAML) generate_sdk_test

generate_ml:
	cd lib ; make LIB_NAME=ml RAML_FILE=../$(ML_RAML) generate_sdk

generate_ml_test:
	cd lib ; make LIB_NAME=ml RAML_FILE=../$(ML_RAML) generate_sdk_test

prettify:
	php -dmemory_limit=-1 vendor/bin/ecs check --output-format=summaryOnly --fix

analyse:
	vendor/bin/psalm --threads=2

test_unit:
	vendor/bin/phpunit --testsuite=unit

check_pending:
	git status --porcelain -- ':(exclude)*gen.properties'
	CHANGES_PENDING=`git status --porcelain -- ':(exclude)*gen.properties' | grep -c ^ || true`
	echo "::set-env name=CHANGES_PENDING::$CHANGES_PENDING"

