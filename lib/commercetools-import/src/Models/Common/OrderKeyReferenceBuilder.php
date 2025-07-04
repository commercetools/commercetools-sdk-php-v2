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
 * @implements Builder<OrderKeyReference>
 */
final class OrderKeyReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>User-defined unique identifier of the referenced resource.
     * If the referenced resource does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced resource is created.</p>
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


    public function build(): OrderKeyReference
    {
        return new OrderKeyReferenceModel(
            $this->key
        );
    }

    public static function of(): OrderKeyReferenceBuilder
    {
        return new self();
    }
}
