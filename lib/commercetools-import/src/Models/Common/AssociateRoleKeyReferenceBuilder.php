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
 * @implements Builder<AssociateRoleKeyReference>
 */
final class AssociateRoleKeyReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>User-defined unique identifier of the referenced Type.</p>
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


    public function build(): AssociateRoleKeyReference
    {
        return new AssociateRoleKeyReferenceModel(
            $this->key
        );
    }

    public static function of(): AssociateRoleKeyReferenceBuilder
    {
        return new self();
    }
}
