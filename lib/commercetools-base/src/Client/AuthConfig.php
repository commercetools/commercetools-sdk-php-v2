<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Client;

interface AuthConfig
{
    const OPT_BASE_URI = 'base_uri';

    public function getGrantType(): string;

    public function getAuthUri(): string;

    public function getClientOptions(): array;

    public function getOptions(): array;
}
