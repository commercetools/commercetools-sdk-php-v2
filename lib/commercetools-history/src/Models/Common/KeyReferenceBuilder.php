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
 * @implements Builder<KeyReference>
 */
final class KeyReferenceBuilder implements Builder
{
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


    public function build(): KeyReference
    {
        return new KeyReferenceModel(
            $this->key,
            $this->typeId
        );
    }

    public static function of(): KeyReferenceBuilder
    {
        return new self();
    }
}
