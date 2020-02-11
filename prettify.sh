#!/usr/bin/env bash
set -e

php -dmemory_limit=-1 vendor/bin/ecs check --fix
