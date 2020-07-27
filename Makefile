VRAP_VERSION := "1.0.0-20200716101307"
SHELL := /bin/bash
CHANGES_PENDING := `git status --porcelain -- ':(exclude)*gen.properties' | grep -c ^ || true`
API_RAML ?= $(RAML_FILE)
IMPORT_RAML ?= $(RAML_FILE)
ML_RAML ?= $(RAML_FILE)
CPUS := `./tools/numcpu.sh`

.PHONY: build build_api_sdk build_import_sdk build_import_sdk build_ml_sdk gen_api_sdk gen_import_sdk gen_ml_sdk

build: codegen_install generate_base gen_api_sdk gen_import_sdk gen_ml_sdk prettify analyse test_unit
build_api_sdk: codegen_install generate_base gen_api_sdk prettify analyse test_api
build_import_sdk: codegen_install generate_base gen_import_sdk prettify analyse test_import
build_ml_sdk: codegen_install generate_base gen_ml_sdk prettify analyse test_ml

gen_api_sdk: generate_api composer_install test_bc generate_api_test
gen_import_sdk: generate_import composer_install test_bc generate_import_test
gen_ml_sdk: generate_ml composer_install test_bc generate_ml_test

codegen_install:
	export VRAP_VERSION=$(VRAP_VERSION) && curl -o- -s https://raw.githubusercontent.com/vrapio/rmf-codegen/master/scripts/install.sh | bash

composer_install:
	composer install --no-ansi --no-interaction --no-progress --no-suggest

generate_base:
	cd lib ; make GEN_RAML_FILE=../$(RAML_FILE) generate_base

generate_api:
	cd lib ; make LIB_NAME=api GEN_RAML_FILE=../$(API_RAML) generate_sdk

generate_api_test:
	cd lib ; make LIB_NAME=api GEN_RAML_FILE=../$(API_RAML) generate_sdk_test

generate_import:
	cd lib; make LIB_NAME=import GEN_RAML_FILE=../$(IMPORT_RAML) generate_sdk

generate_import_test:
	cd lib ; make LIB_NAME=import GEN_RAML_FILE=../$(IMPORT_RAML) generate_sdk_test

generate_ml:
	cd lib ; make LIB_NAME=ml GEN_RAML_FILE=../$(ML_RAML) generate_sdk

generate_ml_test:
	cd lib ; make LIB_NAME=ml GEN_RAML_FILE=../$(ML_RAML) generate_sdk_test

prettify:
	php -dmemory_limit=-1 vendor/bin/ecs check --output-format=summaryOnly --fix

analyse:
	vendor/bin/psalm --threads=$(CPUS)

test_bc:
	vendor/bin/phpunit --testsuite=unit

test_unit:
	vendor/bin/phpunit --testsuite=unit

test_api:
	vendor/bin/phpunit --testsuite=api

test_ml:
	vendor/bin/phpunit --testsuite=ml

test_import:
	vendor/bin/phpunit --testsuite=import

test_integration:
	vendor/bin/phpunit --testsuite=integration

check_pending:
	git status --porcelain -- ':(exclude)*gen.properties'
	@echo "::set-env name=CHANGES_PENDING::$(CHANGES_PENDING)"


