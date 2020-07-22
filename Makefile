SHELL := /bin/bash
.PHONY: codegen_install composer_install analyse test_unit check_pending

build: codegen_install generate

debug_info:
	pwd
	ls -la
	ls -la ..

generate: generate_base generate_sdk composer_install test_unit generate_sdk_test prettify analyse test_unit

codegen_install:
	export VRAP_VERSION=1.0.0-20200716101307 && curl -o- -s https://raw.githubusercontent.com/vrapio/rmf-codegen/master/scripts/install.sh | bash

composer_install:
	composer install --no-ansi --no-interaction --no-progress --no-suggest

generate_base:
	rmf-codegen generate -o lib/commercetools-base -t PHP_BASE -b "commercetools" ${RAML_FILE}

generate_sdk:
	rmf-codegen generate -o lib/commercetools-${LIB_NAME} -t PHP_CLIENT -s "commercetools" -b "commercetools/${LIB_NAME}" ${RAML_FILE}

generate_sdk_test:
	rmf-codegen generate -o lib/commercetools-${LIB_NAME}-tests -t PHP_TEST -s "commercetools" -b "commercetools/${LIB_NAME}" ${RAML_FILE}

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

