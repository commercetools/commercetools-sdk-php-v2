SHELL := /bin/bash

generate_base:
	rmf-codegen generate -o commercetools-base -t PHP_BASE -b "commercetools" $(GEN_RAML_FILE)

generate_sdk:
	rmf-codegen generate -o commercetools-$(LIB_NAME) -t PHP_CLIENT -s "commercetools" -b "commercetools/$(LIB_NAME)" $(GEN_RAML_FILE)

generate_sdk_test:
	rmf-codegen generate -o commercetools-$(LIB_NAME)-tests -t PHP_TEST -s "commercetools" -b "commercetools/$(LIB_NAME)" $(GEN_RAML_FILE)

