<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerPasswordTokenReference>
 */
final class CustomerPasswordTokenReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:CustomerToken">CustomerToken</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }


    public function build(): CustomerPasswordTokenReference
    {
        return new CustomerPasswordTokenReferenceModel(
            $this->id
        );
    }

    public static function of(): CustomerPasswordTokenReferenceBuilder
    {
        return new self();
    }
}
