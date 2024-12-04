<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<UnresolvedReferences>
 */
final class UnresolvedReferencesBuilder implements Builder
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
     * <p>The <code>key</code> of the resource.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The type of resource.</p>
     *

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


    public function build(): UnresolvedReferences
    {
        return new UnresolvedReferencesModel(
            $this->key,
            $this->typeId
        );
    }

    public static function of(): UnresolvedReferencesBuilder
    {
        return new self();
    }
}
