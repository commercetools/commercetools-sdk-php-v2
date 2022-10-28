<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\OrderPatches\OrderPatchImportCollection;
use stdClass;

/**
 * @implements Builder<OrderPatchImportRequest>
 */
final class OrderPatchImportRequestBuilder implements Builder
{
    /**

     * @var ?OrderPatchImportCollection
     */
    private $patches;

    /**
     * <p>The order patches of this request</p>
     *

     * @return null|OrderPatchImportCollection
     */
    public function getPatches()
    {
        return $this->patches;
    }

    /**
     * @param ?OrderPatchImportCollection $patches
     * @return $this
     */
    public function withPatches(?OrderPatchImportCollection $patches)
    {
        $this->patches = $patches;

        return $this;
    }


    public function build(): OrderPatchImportRequest
    {
        return new OrderPatchImportRequestModel(
            $this->patches
        );
    }

    public static function of(): OrderPatchImportRequestBuilder
    {
        return new self();
    }
}
