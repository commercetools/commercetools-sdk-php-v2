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
     * <p>Value to set.</p>
     * <ul>
     * <li>If provided, Product Selections for which <code>active</code> is set to <code>true</code> are available in the Store.</li>
     * <li>If not provided or provided as empty array, the action removes all Product Selections from this Store, meaning all Products in the <a href="ctp:api:type:Project">Project</a> are available in this Store.</li>
     * </ul>
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
