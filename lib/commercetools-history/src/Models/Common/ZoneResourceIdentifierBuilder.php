<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ZoneResourceIdentifier>
 */
final class ZoneResourceIdentifierBuilder implements Builder
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

     * @var ?string
     */
    private $typeId;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:Zone">Zone</a>. Required if <code>key</code> is absent.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>User-defined unique identifier of the referenced <a href="ctp:api:type:Zone">Zone</a>. Required if <code>id</code> is absent.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Type of resource the value should reference. Supported resource type identifiers are:</p>
     *

     * @return null|string
     */
    public function getTypeId()
    {
        return $this->typeId;
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

    /**
     * @param ?string $typeId
     * @return $this
     */
    public function withTypeId(?string $typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }


    public function build(): ZoneResourceIdentifier
    {
        return new ZoneResourceIdentifierModel(
            $this->id,
            $this->key,
            $this->typeId
        );
    }

    public static function of(): ZoneResourceIdentifierBuilder
    {
        return new self();
    }
}
