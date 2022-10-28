<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<IronMqDestination>
 */
final class IronMqDestinationBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $uri;

    /**

     * @return null|string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param ?string $uri
     * @return $this
     */
    public function withUri(?string $uri)
    {
        $this->uri = $uri;

        return $this;
    }


    public function build(): IronMqDestination
    {
        return new IronMqDestinationModel(
            $this->uri
        );
    }

    public static function of(): IronMqDestinationBuilder
    {
        return new self();
    }
}
