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
 * @implements Builder<ResourceIdentifier>
 */
final class ResourceIdentifierBuilder implements Builder
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

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**

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


    public function build(): ResourceIdentifier
    {
        return new ResourceIdentifierModel(
            $this->id,
            $this->key,
            $this->typeId
        );
    }

    public static function of(): ResourceIdentifierBuilder
    {
        return new self();
    }
}
