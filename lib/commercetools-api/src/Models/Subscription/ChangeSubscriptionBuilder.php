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
 * @implements Builder<ChangeSubscription>
 */
final class ChangeSubscriptionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $resourceTypeId;

    /**
     * <p>Unique identifier for the type of resource, for example, <code>cart</code>.</p>
     *

     * @return null|string
     */
    public function getResourceTypeId()
    {
        return $this->resourceTypeId;
    }

    /**
     * @param ?string $resourceTypeId
     * @return $this
     */
    public function withResourceTypeId(?string $resourceTypeId)
    {
        $this->resourceTypeId = $resourceTypeId;

        return $this;
    }


    public function build(): ChangeSubscription
    {
        return new ChangeSubscriptionModel(
            $this->resourceTypeId
        );
    }

    public static function of(): ChangeSubscriptionBuilder
    {
        return new self();
    }
}
