<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AzureFunctionsAuthentication>
 */
final class AzureFunctionsAuthenticationBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>Partially hidden on retrieval for security reasons.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): AzureFunctionsAuthentication
    {
        return new AzureFunctionsAuthenticationModel(
            $this->key
        );
    }

    public static function of(): AzureFunctionsAuthenticationBuilder
    {
        return new self();
    }
}
