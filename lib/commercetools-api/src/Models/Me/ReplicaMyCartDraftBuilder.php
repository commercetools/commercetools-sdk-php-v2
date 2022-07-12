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
 * @implements Builder<ReplicaMyCartDraft>
 */
final class ReplicaMyCartDraftBuilder implements Builder
{
    /**

     * @var ?JsonObject
     */
    private $reference;

    /**

     * @return null|JsonObject
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param ?JsonObject $reference
     * @return $this
     */
    public function withReference(?JsonObject $reference)
    {
        $this->reference = $reference;

        return $this;
    }


    public function build(): ReplicaMyCartDraft
    {
        return new ReplicaMyCartDraftModel(
            $this->reference
        );
    }

    public static function of(): ReplicaMyCartDraftBuilder
    {
        return new self();
    }
}
