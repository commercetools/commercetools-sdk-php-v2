<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\Common\ResourceIdentifier;
use Commercetools\Api\Models\Common\ResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurringOrderResourceIdentifier>
 */
final class RecurringOrderResourceIdentifierBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:RecurringOrder">RecurringOrder</a>. Required if <code>key</code> is absent.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>User-defined unique identifier of the referenced <a href="ctp:api:type:RecurringOrder">RecurringOrder</a>. Required if <code>id</code> is absent.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
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

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): RecurringOrderResourceIdentifier
    {
        return new RecurringOrderResourceIdentifierModel(
            $this->id,
            $this->key
        );
    }

    public static function of(): RecurringOrderResourceIdentifierBuilder
    {
        return new self();
    }
}
