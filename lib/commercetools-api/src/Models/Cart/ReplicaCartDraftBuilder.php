<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<ReplicaCartDraft>
 */
final class ReplicaCartDraftBuilder implements Builder
{
    /**
     * @var ?JsonObject
     */
    private $reference;

    public function __construct()
    {
    }

    /**
     * @return null|JsonObject
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return $this
     */
    public function withReference(?JsonObject $reference)
    {
        $this->reference = $reference;

        return $this;
    }

    public function build(): ReplicaCartDraft
    {
        return new ReplicaCartDraftModel(
            $this->reference
        );
    }

    public static function of(): ReplicaCartDraftBuilder
    {
        return new self();
    }
}
