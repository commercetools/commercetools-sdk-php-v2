<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Importitems\ImportItemCollection;

/**
 * @implements Builder<ImportRequestState>
 */
final class ImportRequestStateBuilder implements Builder
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

    public function build(): ImportRequestState
    {
        return new ImportRequestStateModel(
            $this->items
        );
    }

    public static function of(): ImportRequestStateBuilder
    {
        return new self();
    }
}
