SHELL := /bin/bash
CHANGES_PENDING := `git status --porcelain -- ':(exclude)*gen.properties' | grep -c ^ || true`
API_RAML ?= $(RAML_FILE)
IMPORT_RAML ?= $(RAML_FILE)
ML_RAML ?= $(RAML_FILE)
HISTORY_RAML ?= $(RAML_FILE)
CPUS := `./tools/numcpu.sh`

.PHONY: build_api_sdk build_import_sdk build_import_sdk build_ml_sdk gen_api_sdk gen_import_sdk gen_ml_sdk gen_history_sdk

install_deps: codegen_install composer_install

build: install_deps parallel_gen_sdks parallel_test_sdks_bc parallel_gen_sdk_tests parallel_prettify_sdks parallel_analyze_sdks parallel_test_sdks

parallel_gen_sdks: install_deps generate_base generate_api generate_import generate_ml generate_history

parallel_test_sdks_bc: install_deps parallel_gen_sdks
	vendor/bin/phpunit --testsuite=unit

parallel_gen_sdk_tests: install_deps parallel_test_sdks_bc parallel_generate_api_test parallel_generate_import_test parallel_generate_ml_test parallel_generate_history_test

parallel_generate_api_test: install_deps parallel_test_sdks_bc
	$(MAKE) -C lib LIB_NAME=api GEN_RAML_FILE=../$(API_RAML) generate_sdk_test

parallel_generate_import_test: install_deps parallel_test_sdks_bc
	$(MAKE) -C lib LIB_NAME=import GEN_RAML_FILE=../$(IMPORT_RAML) generate_sdk_test

parallel_generate_ml_test: install_deps parallel_test_sdks_bc
	$(MAKE) -C lib LIB_NAME=ml GEN_RAML_FILE=../$(ML_RAML) generate_sdk_test

parallel_generate_history_test: install_deps parallel_test_sdks_bc
	$(MAKE) -C lib LIB_NAME=history GEN_RAML_FILE=../$(HISTORY_RAML) generate_sdk_test

parallel_prettify_sdks: install_deps parallel_gen_sdk_tests
	php -dmemory_limit=-1 vendor/bin/ecs check --output-format=summaryOnly --fix

parallel_analyze_sdks: install_deps parallel_prettify_sdks
	vendor/bin/psalm --threads=$(CPUS)

parallel_test_sdks: install_deps parallel_analyze_sdks
	vendor/bin/phpunit --testsuite=unit

build_api_sdk: codegen_install generate_base gen_api_sdk prettify analyse test_api
build_import_sdk: codegen_install generate_base gen_import_sdk prettify analyse test_import
build_ml_sdk: codegen_install generate_base gen_ml_sdk prettify analyse test_ml
build_history_sdk: codegen_install generate_base gen_history_sdk prettify analyse test_history

gen_api_sdk: generate_api composer_install test_bc generate_api_test
gen_import_sdk: generate_import composer_install test_bc generate_import_test
gen_ml_sdk: generate_ml composer_install test_bc generate_ml_test
gen_history_sdk: generate_history composer_install test_bc generate_history_test

codegen_install:
	curl -o- -s https://raw.githubusercontent.com/commercetools/rmf-codegen/main/scripts/install.sh | bash

composer_install:
	composer install --no-ansi --no-interaction --no-progress --no-suggest

generate_base: install_deps
	$(MAKE) -C lib GEN_RAML_FILE=../$(RAML_FILE) generate_base

generate_api: install_deps
	$(MAKE) -C lib LIB_NAME=api GEN_RAML_FILE=../$(API_RAML) generate_sdk

generate_api_test: install_deps
	$(MAKE) -C lib LIB_NAME=api GEN_RAML_FILE=../$(API_RAML) generate_sdk_test

generate_import: install_deps
	$(MAKE) -C lib LIB_NAME=import GEN_RAML_FILE=../$(IMPORT_RAML) generate_sdk

generate_import_test: install_deps
	$(MAKE) -C lib LIB_NAME=import GEN_RAML_FILE=../$(IMPORT_RAML) generate_sdk_test

generate_ml: install_deps
	$(MAKE) -C lib LIB_NAME=ml GEN_RAML_FILE=../$(ML_RAML) generate_sdk

generate_ml_test: install_deps
	$(MAKE) -C lib LIB_NAME=ml GEN_RAML_FILE=../$(ML_RAML) generate_sdk_test

generate_history: install_deps
	$(MAKE) -C lib LIB_NAME=history GEN_RAML_FILE=../$(HISTORY_RAML) generate_sdk

generate_history_test: install_deps
	$(MAKE) -C lib LIB_NAME=history GEN_RAML_FILE=../$(HISTORY_RAML) generate_sdk_test

prettify: install_deps
	php -dmemory_limit=-1 vendor/bin/ecs check --output-format=summaryOnly --fix

analyse: install_deps prettify
	vendor/bin/psalm --threads=$(CPUS)

test_bc: install_deps
	vendor/bin/phpunit --testsuite=unit

test_unit: install_deps
	vendor/bin/phpunit --testsuite=unit

test_api: install_deps
	vendor/bin/phpunit --testsuite=api

test_ml: install_deps
	vendor/bin/phpunit --testsuite=ml

test_history: install_deps
	vendor/bin/phpunit --testsuite=history

test_import: install_deps
	vendor/bin/phpunit --testsuite=import

test_integration: install_deps
	vendor/bin/phpunit --testsuite=integration


