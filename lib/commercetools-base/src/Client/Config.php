<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Client;

interface Config
{
    const OPT_BASE_URI = 'base_uri';
    const OPT_CLIENT_OPTIONS = 'options';

    public function getApiUri(): string;

    public function getOptions(): array;
}
