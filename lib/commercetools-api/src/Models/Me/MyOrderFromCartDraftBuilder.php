<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyOrderFromCartDraft>
 */
final class MyOrderFromCartDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?int
     */
    private $version;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Cart">Cart</a> from which the Order is created.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Current <code>version</code> of the <a href="ctp:api:type:Cart">Cart</a> from which the Order is created.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
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
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }


    public function build(): MyOrderFromCartDraft
    {
        return new MyOrderFromCartDraftModel(
            $this->id,
            $this->version
        );
    }

    public static function of(): MyOrderFromCartDraftBuilder
    {
        return new self();
    }
}
