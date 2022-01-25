<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreSetProductSelectionsAction>
 */
final class StoreSetProductSelectionsActionBuilder implements Builder
{
    /**
     * @var ?ProductSelectionSettingDraftCollection
     */
    private $productSelections;

    /**
     * <p>The total of Product Selections to be set for this Store.</p>
     *
     * @return null|ProductSelectionSettingDraftCollection
     */
    public function getProductSelections()
    {
        return $this->productSelections;
    }

    /**
     * @param ?ProductSelectionSettingDraftCollection $productSelections
     * @return $this
     */
    public function withProductSelections(?ProductSelectionSettingDraftCollection $productSelections)
    {
        $this->productSelections = $productSelections;

        return $this;
    }


    public function build(): StoreSetProductSelectionsAction
    {
        return new StoreSetProductSelectionsActionModel(
            $this->productSelections
        );
    }

    public static function of(): StoreSetProductSelectionsActionBuilder
    {
        return new self();
    }
}
