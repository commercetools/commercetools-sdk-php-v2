<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Importitems\ImportItemCollection;

/**
 * @implements Builder<ImportResponse>
 */
final class ImportResponseBuilder implements Builder
{
    /**
     * @var ?ImportItemCollection
     */
    private $items;

    public function __construct()
    {
    }

    /**
     * @return null|ImportItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return $this
     */
    public function withItems(?ImportItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    public function build(): ImportResponse
    {
        return new ImportResponseModel(
            $this->items
        );
    }

    public static function of(): ImportResponseBuilder
    {
        return new self();
    }
}
